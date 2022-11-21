<?php
#BEGIN_LICENSE
#-------------------------------------------------------------------------
# Module: CGUFeedback (c) 2009 by Robert Campbell
#         (calguy1000@cmsmadesimple.org)
#  An addon module for CMS Made Simple to provide the ability to rate
#  and comment on specific pages or specific items in a module.
#  Includes numerous seo friendly, and designer friendly capabilities.
#
#-------------------------------------------------------------------------
# CMS - CMS Made Simple is (c) 2005 by Ted Kulp (wishy@cmsmadesimple.org)
# This projects homepage is: http://www.cmsmadesimple.org
#
#-------------------------------------------------------------------------
#
# This program is free software; you can redistribute it and/or modify
# it under the terms of the GNU General Public License as published by
# the Free Software Foundation; either version 2 of the License, or
# (at your option) any later version.
#
# However, as a special exception to the GPL, this software is distributed
# as an addon module to CMS Made Simple.  You may not use this software
# in any Non GPL version of CMS Made simple, or in any version of CMS
# Made simple that does not indicate clearly and obviously in its admin
# section that the site was built with CMS Made simple.
#
# This program is distributed in the hope that it will be useful,
# but WITHOUT ANY WARRANTY; without even the implied warranty of
# MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
# GNU General Public License for more details.
# You should have received a copy of the GNU General Public License
# along with this program; if not, write to the Free Software
# Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA 02111-1307 USA
# Or read it online: http://www.gnu.org/licenses/licenses.html#GPL
#
#-------------------------------------------------------------------------
#END_LICENSE
if( !defined('CMS_VERSION') ) exit;

use \ReviewManager\utils;
use \ReviewManager\comment;
use \ReviewManager\comment_ops;
use \ReviewManager\comment_notifier;
use \ReviewManager\param_cleaner;

###################################
# Display the create comment form #
###################################

//
// Initialization
//
$error = $message = null;
$permalink = cge_url::current_url(); // todo - ability to change this?
$inline = $voteonce = true;
$voteinterval = -1;
$titlerequired = (int) $this->GetPreference('titlerequired',1);
$commentrequired = (int) $this->GetPreference('commentrequired',1);
$emailrequired = (int) $this->GetPreference('emailrequired',1);
$namerequired = (int) $this->GetPreference('namerequired',1);
$rating_options_str = "1,2,3,4,5";
$feu = \cms_utils::get_module('FrontEndUsers');
$feu_uid = null;
if( $feu ) $feu_uid = $feu->LoggedInId();

//
// setup
//
$comment = new comment();
$comment->title = "Test";
$comment->rating = 5;
$comment->key1 = '__page__';
$comment->key2 = $returnid;
$comment->key3 = null;
$comment->origurl = cge_url::current_url();
if( \cge_param::exists($params,'key1') ) {
    $comment->key1 = cge_param::get_string($params,'key1');
    $comment->key2 = cge_param::get_string($params,'key2');
    $comment->key3 = cge_param::get_string($params,'key3');
}

    $comment->author_email = "magal@pixelsolutions.biz";
    $comment->author_name = "magal";


//
// Setup
//
if( $this->GetPreference('use_cookies',0) == 1 && isset($_COOKIE[REVIEWMANAGER_COOKIE]) ) {
    // get data from the cookie
    $cookie = unserialize($_COOKIE[REVIEWMANAGER_COOKIE]);
    if( is_array($cookie) ) {
        if( isset($cookie['author_name']) ) $comment->author_name = $cookie['author_name'];
        if( isset($cookie['author_email']) ) $comment->author_email = $cookie['author_email'];
        if( isset($cookie['author_notify']) ) $comment->author_notify = $cookie['author_notify'];
    }
}

//
// Process parameters
//
$origparms = \cge_param::get_string($params,'rm_origparms');
if( $origparms ) {
    // we have some origparams... prolly means we're submitting the form
    // they're encoded, so lets get them back to normal.
    $tmp = [ '_d'=>$origparms ];
    $params = array_merge($params,\cge_utils::decrypt_params($tmp));
    unset($params['rm_origparms']);
}



$rating_options_str = cge_param::get_string($params,'ratingoptions',$rating_options_str);
$rating_options = comment_ops::text_to_options($rating_options_str);
$inline = cge_param::get_bool($params,'inline',$inline);
$voteonce = cge_param::get_bool($params,'voteonce',$voteonce);
$voteinterval = cge_param::get_int($params,'voteinterval',$voteinterval);
$titlerequired = cge_param::get_bool($params,'titlerequired',$titlerequired);
$commentrequired = cge_param::get_bool($params,'commentrequired',$commentrequired);
$emailrequired = cge_param::get_bool($params,'emailrequired',$emailrequired);
$namerequired = cge_param::get_bool($params,'namerequired',$namerequired);

// try to get some info from the session...
$tmp = $this->session_get('rm_comment');
if( $tmp ) $comment = unserialize($tmp);

//
// Get custom field definitions
//
$tfields = comment_ops::get_fielddefs();
if( is_array($tfields) && count($tfields) ) {
    foreach( $tfields as $fid => &$tfield ) {
        $tfield['attrib'] = $tfield['attribs'];
    }
}
//
// Process form data
//
if( isset($params['rm_submit']) ) {

    $error = null;
	$message = null;

    try {

        // Get data from the form
        $disable_html = ($this->GetPreference('allow_comment_html',0) == 0);
        $cleaner = new param_cleaner();
        $cleaner->set_int( ['rating']);
        $cleaner->set_string( ['key1','key2','key3','title','data','author_name'] );
        if( $disable_html ) $cleaner->set_html( ['data'] );
        $cleaner->set_string( ['author_email'] );
        $cleaner->set_bool( ['author_notify'] );
        $cleaned = $cleaner->go( $params );

        $comment->from_array($cleaned);
        $comment->author_ip = cge_utils::get_real_ip();
        $comment->feu_uid = $feu_uid;

        if( isset($params['comment']) ) {
            if( $disable_html ) {
                $comment->data = \cge_param::get_string($params,'comment');
                $comment->data = strip_tags(cms_html_entity_decode($comment->data));
            } else {
                $comment->data = \cge_param::get_html($params,'comment');
                $comment->data = cge_utils::clean_input_html($comment->data);
            }
        }
        foreach( $params as $key => $value ) {
            if( startswith($key,'field_') ) {
                $fid = (int)substr($key,6);
                if( is_array($value) ) $value = implode(',',$value);
                $value = $disable_html ? strip_tags($value) : cge_utils::clean_input_html($value);
                $comment->set_field_by_id($fid,$value);
            }
        }

        //
        // validate data
        //
        if( !\cge_utils::valid_form_csrf() ) throw new \RuntimeException( $this->Lang('error_security') );
        if( ($comment->rating < 0) || ($comment->rating > 10) ) throw new \RuntimeException($this->Lang('error_invalidrating'));

        if( $comment->title == '' && $titlerequired  ) throw new \RuntimeException($this->Lang('error_emptytitle'));
        if( $comment->author_name == '' && $namerequired ) throw new \RuntimeException($this->Lang('error_emptyname'));
        if( $comment->author_email == '' && $emailrequired ) throw new \RuntimeException($this->Lang('error_emptyemail'));
        if( $comment->data == '' && $commentrequired ) throw new \RuntimeException($this->Lang('error_emptycomment'));
        // check honeypot captcha
        if( isset($params['feedback__data']) && $params['feedback__data'] !== '' ) throw new \RuntimeException($this->Lang('error_captchafailed'));

        // do captcha checking
        $modname = $this->GetPreference('captcha_module','-1');
        if( $modname != -1 ) {
            $captchamod = $this->GetModuleInstance($modname);
            if( is_object($captchamod) ) {
                $captchastr = \cge_param::get_string($params,'feedback_captcha');
                if( !$captchamod->checkCaptcha($captchastr) ) {
                    // captcha failed
                    throw new \RuntimeException($this->Lang('error_captchafailed'));
                }
            }
        }

        // do email validation
        $tmp = $this->GetPreference('validate_email','none');
        if( $tmp != 'none' && $comment->author_email != '' ) {
            $tmp = is_email($comment->author_email,($tmp == 'domain')?TRUE:FALSE);
            if( !$tmp ) throw new \RuntimeException($this->Lang('error_emailinvalid'));
        }

        // check for repeated voting
        if( $voteonce ) {
            // a bit of magic that controls the level at which users can vote only once.
            $query = 'SELECT id FROM '.REVIEWMANAGER_TABLE_COMMENTS;
            $qparms = array($comment->author_ip);
            $where = array('author_ip = ?');
            $where[] = 'key1 = ?';
            $qparms[] = $comment->key1;
            if( $voteonce >= 2 ) {
                $where[] = 'key2 = ?';
                $qparms[] = $comment->key2;
            }
            if( $voteonce >= 3 ) {
                $where[] = 'key3 = ?';
                $qparms[] = $comment->key3;
            }
            if( $voteinterval > 0 ) {
                $then = time() - $voteinterval * 3600;
                $then = trim($db->DbTimeStamp($then),"'");
                $where[] = 'modified >= ?';
                $qparms[] = $then;
            }

            $query .= ' WHERE '.implode(' AND ',$where);
            $tmp = $db->GetOne($query,$qparms);
            if( $tmp ) throw new \RuntimeException($this->Lang('error_alreadyvoted'));
        }

        // do word limiting.
        $wl = $this->GetPreference('word_limit',0);
        if( $disable_html && $wl > 0 ) $comment->data = cge_string::word_limiter($comment->data,$wl);

        if( $this->GetPreference('use_cookies',0) == 1 ) {
            // Set cookie information
            $cookie = array();
            if( !empty($comment->author_name) ) $cookie['author_name'] = $comment->author_name;
            if( !empty($comment->author_email) ) $cookie['author_email'] = $comment->author_email;
            if( !empty($comment->author_notify) ) $cookie['author_notify'] = $comment->author_notify;
            setcookie(REVIEWMANAGER_COOKIE,serialize($cookie),time()+30*24*60*60); // thirty days
        }



        if( $this->GetPreference('use_cookies',0) == 1 ) {
            // Set cookie information
            $cookie = array();
            if( !empty($comment->author_name) ) $cookie['author_name'] = $comment->author_name;
            if( !empty($comment->author_email) ) $cookie['author_email'] = $comment->author_email;
            if( !empty($comment->author_notify) ) $cookie['author_notify'] = $comment->author_notify;
            setcookie(REVIEWMANAGER_COOKIE,serialize($cookie),time()+30*24*60*60); // thirty days
        }

        $res = $this->_commentops->save( $comment );
        if( !$res ) throw new \RuntimeException($this->Lang('error_dberror'));

        // admin notifications
        comment_notifier::notify_admins($comment);

        if( $comment->status == REVIEWMANAGER_STATUS_PUBLISHED ) {
            // user notifications
            $this->_commentops->save( $comment );
            \CMSMS\HookManager::do_hook('ReviewManager::UserNotify',$comment);
        }

        // success

        $thetemplate = utils::find_layout_template($params,'commenttemplate','ReviewManager::Success Message');
        $tpl = $smarty->CreateTemplate($this->GetTemplateResource($thetemplate),null,null,$smarty);
        $tpl->assign('author_name',$comment->author_name);
        $tpl->assign('author_ip',$comment->author_ip);
        $tpl->assign('author_notify',$comment->author_notify);
        $tpl->assign('title',$comment->title);
        $tpl->assign('comment',$comment);
        $message = $tpl->fetch();
        if( empty($message) ) $message = $this->Lang('msg_commentokay');

        // store information in the session
        // redirect back to originating url
        // and display messages.
  
        // redirect out of here.
        /*
        if( ! \cge_param::get_bool($params,'noredirect') ) {
            // we are allowed to redirect.
            if( !$error && isset($params['destpage']) ) {
                $this->session_clear();
                $page = $this->resolve_alias_or_id($params['destpage']);
                if( $page ) $this->RedirectContent($page);
            }
            else if( isset($params['feedback_origurl']) ) {
                // we can go back to the original url
                $url = html_entity_decode($params['feedback_origurl']);
                if( isset($params['redirectextra']) ) $url .= trim($params['redirectextra']);
                redirect($url);
            }

            // or just back to the original content page.
            $this->RedirectContent($returnid);
        }
*/
    }
    catch( \RuntimeException $e ) {
        $error = 1;	
		$message = $e->getMessage();
    }

    
} // submit


//
// Give everything to smarty, and get ready to render.
//
$this->session_clear();
$this->session_put('rm_comment',serialize($comment));

$thetemplate = utils::find_layout_template($params,'commenttemplate','ReviewManager::Comment Form');
$tpl = $smarty->CreateTemplate($this->GetTemplateResource($thetemplate),null,null,$smarty);

$get_extraparms = function(array $inparms) {
    $list = 'key1,key2,key3,policy,inline,commenttemplate,noredirect,ratingoptions,voteonce,voteinterval,titlerequired,commentrequired,emailrequired,namerequired,redirectextra';
    $list = explode(',',$list);
    $list[] = 'destpage';
    $list[] = 'feedback_origurl';

    $out = [];
    foreach( $inparms as $key => $val ) {
        if( !in_array($key,$list) ) continue;
        $out[$key] = $val;
    }
    $out = \cge_utils::encrypt_params($out);

    $out = ['rm_origparms' => $out['_d'] ];
    return $out;
};

if( !isset($params['destpage']) && !isset($params['feedback_origurl']) ) $params['feedback_origurl'] = cge_url::current_url();
$extraparms = $get_extraparms($params);


if( !empty($error) ) {
    $tpl->assign('error',$error);
}
if( !empty($message) ) {
    $tpl->assign('message',$message);
}
if( count($tfields) ) {
    $tmp = array_keys($tfields);
    foreach( $tmp as $fid ) {
        switch($tfields[$fid]['type']) {
        case 2:
            $val = $comment->get_field_by_id($fid);
            if( $val == '' && isset($tfields[$fid]['dfltcontent']) ) $val = $tfields[$fid]['defaultcontent'];
            $tfields[$fid]['input'] =
                $this->CreateTextArea(isset($tfields[$fid]['attrib']['usewysiwyg']) && $tfields[$fid]['attrib']['usewysiwyg'] == 1 &&
                                      $this->GetPreference('allow_comment_wysiwyg',0),
                                      $id,$val,'field_'.$tfields[$fid]['id']);
            break;

        default:
            $tfields[$fid]['value'] = $comment->get_field_by_id($fid);
            break;
        }
    }
}

$tpl->assign('comment_word_limit',$this->GetPreference('word_limit'));
$config = $gCms->GetConfig();
$path = $config['root_url'].'/modules/'.$this->GetName().'/images/';
$tmp = array('img_on'=>$path.'star.gif','img_off'=>$path.'starOff.gif','img_half'=>$path.'starHalf.gif');
$tpl->assign('rating_imgs',$tmp);
if( is_array($tfields) && count($tfields) ) $tpl->assign('fields',$tfields);
$tpl->assign('extraparms',$extraparms);
$wysiwyg = $this->GetPreference('allow_comment_wysiwyg',0);
$tpl->assign('wysiwyg',$wysiwyg);
$tpl->assign('comment_obj',$comment);
$tpl->assign('inline',$inline);
$tpl->assign('rating_options',$rating_options);

$modname = $this->GetPreference('captcha_module','-1');
if( $modname != -1 ) {
    $captchamod = $this->GetModuleInstance($modname);
    $need_input = method_exists($captchamod, 'NeedsInputField') ? $captchamod->NeedsInputField() : true;
    $tpl->assign('captcha_needs_input',$need_input);
    if( is_object($captchamod) ) $tpl->assign('captcha_img',$captchamod->getCaptcha());
}
if( count($tfields) ) $tpl->assign('fields',$tfields);

//
// Process the template
//
$tpl->display();

#
# EOF
#