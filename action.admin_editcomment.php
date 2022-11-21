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
if( !isset($gCms) ) exit;
if( !$this->CheckPermission(REVIEWMANAGER_PERM_FEEDBACK) ) exit;
use \ReviewManager\comment;
use \ReviewManager\comment_notifier;
use \ReviewManager\comment_ops;

#
# Initialization
#
$this->SetCurrentTab('comments');
$comment = new comment();

#
# Setup
#
if( isset($params['cancel']) ) {
 $this->RedirectToAdminTab();
}
$cid = (int) \cge_param::get_int($params,'cid');
if( isset($cid) && $cid > 1) {
	$comment = $this->_commentops->load($cid);
}
#
# Get the data
#

$tfields = comment_ops::get_fielddefs();
$allow_wysiwyg = $this->GetPreference('allow_comment_wysiwyg',0);
foreach( $tfields as $fid => &$tfield ) {
    $tfield['value'] = $comment->get_field_by_id($tfield['id']);
    switch($tfield['type']) {
    case 2:
        $tfield['input'] =
            $this->CreateTextArea(isset($tfield['attribs']['usewysiwyg']) && $tfield['attribs']['usewysiwyg'] == 1 && $allow_wysiwyg,
                                  $id, $tfield['value'],'field_'.$tfield['id']);
        break;
    }
}
$orig_status = $comment->status;

#
# Process form data
#

if( (isset($params['delete_spam']) && !empty($params['delete_spam'])) ||
    (isset($params['delete']) && !empty($params['delete'])) ) {
    $this->Redirect($id,'admin_deletecomment',$returnid,array('cid'=>$cid));
}
else if( isset($params['submit']) && !empty($params['submit']) ) {
    // Get values from params
    try {
        $comment->from_array($params);
        foreach( $params as $key => $value ) {
            if( startswith($key,'field_') ) {
                $fid = (int)substr($key,6);
                if( is_array($value) ) $value = implode(',',$value);
                $comment->set_field_by_id($fid,$value);
            }
        }
		
		print_r($comment);

        // data validation
        if( ($comment->rating < 0) || ($comment->rating > 10) ) throw new \Exception($this->Lang('error_invalidrating'));
        if( $comment->data == '' )	throw new \Exception( $this->Lang('error_emptycomment') );
		if( !$comment->id ) {
			$login_ops = \CMSMS\LoginOperations::get_instance();
			$comment->author_name = $login_ops->get_loggedin_username();
		}
        if( $comment->author_name == '') throw new \Exception($this->Lang('error_emptyname'));
		
        \CMSMS\HookManager::do_hook('ReviewManager::BeforeSaveComment',$comment);
        $res = $this->_commentops->save( $comment );
        if( !$res ) throw new \Exception($this->Lang('error_dberror'));

        if( $comment->status == REVIEWMANAGER_STATUS_PUBLISHED && $orig_status != REVIEWMANAGER_STATUS_PUBLISHED ) {
            \CMSMS\HookManager::do_hook('REVIEWMANAGER::UserNotify',$comment);
        }

        $this->SetMessage($this->Lang('msg_commentupdated'));
		$this->RedirectToAdminTab();
    }
    catch( \Exception $e ) {
        echo $this->ShowErrors($this->Lang('error_comment_update_failed').': '.$e->GetMessage());
    }
}

#
# Give everything to smarty
#
$status_options = array();
$status_options[REVIEWMANAGER_STATUS_DRAFT]     = $this->Lang(REVIEWMANAGER_STATUS_DRAFT);
$status_options[REVIEWMANAGER_STATUS_PUBLISHED] = $this->Lang(REVIEWMANAGER_STATUS_PUBLISHED);
$status_options[REVIEWMANAGER_STATUS_SPAM]      = $this->Lang(REVIEWMANAGER_STATUS_SPAM);
$rating_options = array();
for( $i = 0; $i < 5; $i++ ) {
    $rating_options[$i+1] = sprintf('&nbsp;%d&nbsp;',$i+1);
}
$smarty->assign('status_options',$status_options);
$smarty->assign('rating_options',$rating_options);
$smarty->assign('allow_wysiwyg',$allow_wysiwyg);
$smarty->assign('comment',$comment);
if( count($tfields) ) $smarty->assign('fields',$tfields);

#
# Process Template
#
echo $this->ProcessTemplate('admin_editcomment.tpl');

#
# EOF
#
