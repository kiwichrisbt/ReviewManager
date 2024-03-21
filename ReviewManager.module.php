<?php
#---------------------------------------------------------------------------------------------------
# Module: ReviewManager
# Authors: Chris Taylor, Magal, with CMS Made Simple Foundation able to assign new administrators.
# Copyright: (C) 2021 Chris Taylor, chris@binnovative.co.uk
#            is a fork of: CGFeedback (c) 2009 by Robert Campbell (calguy1000@cmsmadesimple.org)
# Licence: GNU General Public License version 3
#          see /ReviewManager/lang/LICENCE.txt or <http://www.gnu.org/licenses/>   
#---------------------------------------------------------------------------------------------------
# CMS Made Simple(TM) is (c) CMS Made Simple Foundation 2004-2020 (info@cmsmadesimple.org)
# Project's homepage is: http://www.cmsmadesimple.org
# Module's homepage is: http://dev.cmsmadesimple.org/projects/ReviewManager
#---------------------------------------------------------------------------------------------------
# This program is free software; you can redistribute it and/or modify it under the terms of the GNU
# General Public License as published by the Free Software Foundation; either version 3 of the 
# License, or (at your option) any later version.
#
# However, as a special exception to the GPL, this software is distributed
# as an addon module to CMS Made Simple.  You may not use this software
# in any Non GPL version of CMS Made simple, or in any version of CMS
# Made simple that does not indicate clearly and obviously in its admin
# section that the site was built with CMS Made simple.
#
# This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; 
# without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  
# See the GNU General Public License for more details.
#
# You should have received a copy of the GNU General Public License along with this program.  
# If not, see <http://www.gnu.org/licenses/>.
#---------------------------------------------------------------------------------------------------

use \ReviewManager\comment_operations;

define('REVIEWMANAGER_PERM_FEEDBACK', 'Manage Reviews');  
define('REVIEWMANAGER_COOKIE', 'reviewmanager_details');   
define('REVIEWMANAGER_STATUS_PUBLISHED', 'published'); 
define('REVIEWMANAGER_STATUS_DRAFT', 'draft');
define('REVIEWMANAGER_STATUS_SPAM', 'spam');  

define('REVIEWMANAGER_TYPE_TEXT', 0); 
define('REVIEWMANAGER_TYPE_EMAIL', 1);
define('REVIEWMANAGER_TYPE_TEXTAREA', 2); 
define('REVIEWMANAGER_TYPE_DROPDOWN', 3); 
define('REVIEWMANAGER_TYPE_MULTISELECT', 4);  
define('REVIEWMANAGER_TYPE_FILEUPLOAD', 5);  

define('REVIEWMANAGER_TABLE_FIELDVALS', CMS_DB_PREFIX.'module_reviewmanager_fieldvals'); 
define('REVIEWMANAGER_TABLE_FIELDDEFS', CMS_DB_PREFIX.'module_reviewmanager_fielddefs'); 
define('REVIEWMANAGER_TABLE_COMMENTS', CMS_DB_PREFIX.'module_reviewmanager_comments');   

define('REVIEWMANAGER_PREF_USERNOTIFICATION_TEMPLATE', 'usernotification_template');    
define('REVIEWMANAGER_PREF_NOTIFICATION_TEMPLATE', 'notification_template');    
define('REVIEWMANAGER_PREF_USERNOTIFICATION_SUBJECT', 'usernotification_subject');  
define('REVIEWMANAGER_PREF_NOTIFICATION_SUBJECT', 'notification_subject');  



final class ReviewManager extends CMSModule
{
    protected $_commentops;

    public function __construct()
    {
        parent::__construct();

        $smarty = CmsApp::get_instance()->GetSmarty();
        if( !$smarty ) return;

        require_once dirname(__FILE__).'/lib/class.comment_operations.php';
        $db = $this->GetDb();
        $this->_commentops = new comment_operations($db);

        \CMSMS\HookManager::add_hook( 'ReviewManager::UserNotify', function( \ReviewManager\comment $comment ) {
                \ReviewManager\comment_notifier::email_notify_users( $comment );
            });
    }

    public function LazyLoadAdmin() { return TRUE; }
    public function GetName() { return 'ReviewManager'; }
    public function GetVersion() { return '1.1.3'; }
    public function GetAuthor() { return 'Chris Taylor'; }
    public function GetAuthorEmail() { return 'chris@binnovative.co.uk'; }
    public function IsPluginModule() { return TRUE; }
    public function HasAdmin() { return TRUE; }
    public function GetAdminSection() { return $this->GetPreference('adminSection', 'content'); }
    public function GetAdminDescription() { return $this->Lang('moddescription'); }
    public function GetFriendlyName() { return $this->GetPreference( 'friendlyname', $this->Lang('friendlyname') ); }
    public function MinimumCMSVersion() { return '2.2.1'; }
    public function GetDependencies() { return ['CMSMSExt' => '1.2.1']; }
    // public function GetChangeLog() { return $this->Lang('changelog'); }
    public function GetChangeLog() { return file_get_contents(dirname(__FILE__).'/doc/changelog.inc'); }
    public function AllowAutoInstall() { return FALSE; }
    public function AllowAutoUpgrade() { return FALSE; }
    public function InstallPostMessage() { return $this->Lang('postinstall'); }
    public function UninstallPostMessage() { return $this->Lang('postuninstall'); }
    public function UninstallPreMessage() { return $this->Lang('ask_really_uninstall'); }

    public function VisibleToAdminUser()
    {
        return $this->CheckPermission('Modify Site Preferences') ||
            $this->Checkpermission(REVIEWMANAGER_PERM_FEEDBACK);
    }

    public function GetHelp() {
        $smarty = \CmsApp::get_instance()->GetSmarty();
        $smarty->assign('mod', $this);
        return $this->ProcessTemplate('help.tpl');
    }

    public function InitializeAdmin()
    {
        // common parameters
        $this->CreateParameter('key1',null,$this->Lang('param_key1'));
        $this->CreateParameter('key2',null,$this->Lang('param_key2'));
        $this->CreateParameter('key3',null,$this->Lang('param_key3'));
        $this->CreateParameter('destpage',null,$this->Lang('param_destpage'));
        $this->CreateParameter('inline','0',$this->Lang('param_inline'));
        $this->CreateParameter('commenttemplate','',$this->Lang('param_commenttemplate'));
        $this->CreateParameter('noredirect',0,$this->Lang('param_noredirect'));
        $this->CreateParameter('voteonce',0,$this->Lang('param_voteonce'));
        $this->CreateParameter('voteinterval',0,$this->Lang('param_voteinterval'));
        $this->CreateParameter('titlerequired',1,$this->Lang('param_titlerequired'));
        $this->CreateParameter('commentrequired',1,$this->Lang('param_commentrequired'));
        $this->CreateParameter('emailrequired',1,$this->Lang('param_emailrequired'));
        $this->CreateParameter('namerequired',1,$this->Lang('param_namerequired'));
        $this->CreateParameter('ratingoptions','1,2,3,4,5',$this->Lang('param_ratingoptions'));
        $this->CreateParameter('redirectextra','',$this->Lang('param_redirectextra'));
        $this->CreateParameter('pagelimit',10000,$this->Lang('param_pagelimit'));
        $this->CreateParameter('since','',$this->Lang('param_since'));
        $this->CreateParameter('sortby','created',$this->Lang('param_sortby'));
        $this->CreateParameter('summarytemplate','',$this->Lang('param_summarytemplate'));
        $this->CreateParameter('sortorder','DESC',$this->Lang('param_sortorder'));
        $this->CreateParameter('showall',0,$this->Lang('param_showall'));
        $this->CreateParameter('detailpage','',$this->Lang('param_detailpage'));
        $this->CreateParameter('detailtemplate','',$this->Lang('param_detailtemplate'));
        $this->CreateParameter('ratingstemplate','',$this->Lang('param_ratingstemplate'));
        $this->CreateParameter('cid','',$this->Lang('param_cid'));
        $this->CreateParameter('action','default',$this->Lang('param_action'));
    }

    public function InitializeFrontend()
    {
        $this->RegisterModulePlugin();
        $this->RestrictUnknownParams();
        $this->RegisterRoute('/[Ff]eedback\/[Dd]etail\/(?P<cid>[0-9]+)\/(?P<returnid>[0-9]+)$/', array('action'=>'detail'));
        $this->RegisterRoute('/[Ff]eedback\/[Dd]etail\/(?P<cid>[0-9]+)\/(?P<returnid>[0-9]+)\/(?P<feedback_junk>.*?)$/', array('action'=>'detail'));

        $this->SetParameterType('key1',CLEAN_STRING);
        $this->SetParameterType('key2',CLEAN_STRING);
        $this->SetParameterType('key3',CLEAN_STRING);
        $this->SetParameterType('author_name',CLEAN_STRING);
        $this->SetParameterType('author_email',CLEAN_STRING);
        $this->SetParameterType('author_notify',CLEAN_INT);
        $this->SetParameterType('rating',CLEAN_INT);
        $this->SetParameterType('title',CLEAN_STRING);
        $this->SetParameterType('comment',CLEAN_STRING);
        $this->SetParameterType('destpage',CLEAN_STRING);
        $this->SetParameterType('inline',CLEAN_INT);
        $this->SetParameterType('commenttemplate',CLEAN_STRING);
        $this->SetParameterType('noredirect',CLEAN_INT);
        $this->SetParameterType('ratingoptions',CLEAN_STRING);
        $this->SetParameterType('voteonce',CLEAN_INT);
        $this->SetParameterType('voteinterval',CLEAN_INT);
        $this->SetParameterType('titlerequired',CLEAN_INT);
        $this->SetParameterType('commentrequired',CLEAN_INT);
        $this->SetParameterType('emailrequired',CLEAN_INT);
        $this->SetParameterType('namerequired',CLEAN_INT);
        $this->SetParameterType('redirectextra',CLEAN_STRING);
        $this->SetParameterType('pagenum',CLEAN_INT);
        $this->SetParameterType('pagelimit',CLEAN_INT);
        $this->SetParameterType('since',CLEAN_INT);
        $this->SetParameterType('summarytemplate',CLEAN_STRING);
        $this->SetParameterType('sortby',CLEAN_STRING);
        $this->SetParameterType('sortorder',CLEAN_STRING);
        $this->SetParameterType('showall',CLEAN_INT);
        $this->SetParameterType('detailpage',CLEAN_STRING);
        $this->SetParameterType('detailtemplate',CLEAN_STRING);
        $this->SetParameterType('ratingstemplate',CLEAN_STRING);
        $this->SetParameterType('cid',CLEAN_STRING);
        $this->SetParameterType(CLEAN_REGEXP.'/cgfb_.*/',CLEAN_STRING);
        $this->SetParameterType(CLEAN_REGEXP.'/field_.*/',CLEAN_STRING);
        $this->SetParameterType(CLEAN_REGEXP.'/feedback_.*/',CLEAN_STRING);

        if( (int) $this->GetPreference('sfs_score',10) > 0 ) \CMSMS\HookManager::add_hook('ReviewManager::BeforeSaveComment', [ $this, 'check_stopforumspam'] );
    }

    public function GetHeaderHTML()
    {
        $obj = $this->GetModuleInstance('JQueryTools');
        if( is_object($obj) ) {
            $tmpl = <<<EOT
{JQueryTools action='incjs' exclude='form'}
{JQueryTools action='ready'}
EOT;
            return $this->ProcessTemplateFromData($tmpl);
        }
    }

    public function HasCapability($capability, $params = array())
    {
        switch( $capability ) {
        case CmsCoreCapabilities::PLUGIN_MODULE:
        case CmsCoreCapabilities::ADMINSEARCH:
        case CmsCoreCapabilities::TASKS:
            return TRUE;
        }
        return FALSE;
    }

    public function get_pretty_url($id,$action,$returnid='',$params=array(),$inline=false)
    {
        if( $inline ) return;
        if( !$returnid ) return;
        if( $action != 'detail' ) return;
        $cid = \xt_param::get_int($params,'cid');
        if( $cid < 1 ) return;
        $comment = $this->_commentops->load($cid);
        if( !$comment ) return;

        $out = "feedback/detail/$cid/$returnid/".munge_string_to_url($comment->title);
        return $out;
    }

    public static function page_type_lang_callback($str)
    {
        $mod = cms_utils::get_module('ReviewManager');
        $str = str_replace(' ','_',$str);
        if( is_object($mod) ) return $mod->Lang('type_'.$str);
    }

    public static function reset_page_type_defaults(CmsLayoutTemplateType $type)
    {
        $mod = cms_utils::get_module('ReviewManager');
        if( $type->get_originator() != $mod->GetName() ) throw new CmsLogicException('Cannot reset contents for this template type');

        $fn = null;
        switch( $type->get_name() ) {
        case 'Comment Form':
            $fn = 'orig_commentform_template.tpl';
            break;
        case 'Ratings View':
            $fn = 'orig_ratings_template.tpl';
            break;
        case 'Summary View':
            $fn = 'orig_summary_template.tpl';
            break;
        case 'Detail View':
            $fn = 'orig_detail_template.tpl';
            break;
        case 'Admin Notification':
            $fn = 'orig_notification_template.tpl';
            break;
        case 'User Notification':
            $fn = 'orig_usernotification_template.tpl';
            break;
        case 'Success Message':
            $fn = 'orig_success_message.tpl';
            break;
        }

        if( !$fn ) return;
        $fn = __DIR__.'/templates/'.$fn;
        if( file_exists($fn) ) return @file_get_contents($fn);
    }

    public function check_stopforumspam( \ReviewManager\comment $comment )
    {
        $tester = new \ReviewManager\stopforumspam_handler();
        $res = $tester->is_spam( $comment );
        if( $res ) {
            audit('','ReviewManager','Found spammer via stopforumspam');
            $comment->status = REVIEWMANAGER_STATUS_SPAM;
        }
        return $comment;
    }

    public function get_adminsearch_slaves()
    {
        return [ 'ReviewManager\\AdminSearch_slave' ];
    }

    public function get_tasks()
    {
        debug_to_log(__METHOD__);
        return [ new \ReviewManager\CreateAlertsTask() ];
    }
} // class
