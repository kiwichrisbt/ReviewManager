<?php
#---------------------------------------------------------------------------------------------------
# Module: ReviewManager
# Author: Chris Taylor
# Copyright: (C) 2021 Chris Taylor, chris@binnovative.co.uk
#            is a fork of: CGFeedback (c) 2009 by Robert Campbell (calguy1000@cmsmadesimple.org)
# Licence: GNU General Public License version 3
#          see /ReviewManager/lang/LICENCE.txt or <http://www.gnu.org/licenses/>
#---------------------------------------------------------------------------------------------------

use \ReviewManager\utils;

if ( !defined('CMS_VERSION') ) exit;

$CGFeedback_installed = cms_utils::module_available('CGFeedback');

if ( !$CGFeedback_installed || !$this->CheckPermission(REVIEWMANAGER_PERM_FEEDBACK) ) return;


// Clear all tables & import all from CGFeedback tables
$db = $this->GetDb();
$table_list = [
    'module_cgfeedback_comments' => 'module_reviewmanager_comments',
    'module_cgfeedback_fielddefs'=> 'module_reviewmanager_fielddefs',
    'module_cgfeedback_fieldvals' => 'module_reviewmanager_fieldvals'
];
foreach ($table_list as $fromTable => $toTable) {
    // clear all data from reviewmanager tables
    $sql = 'DELETE FROM '.CMS_DB_PREFIX.$toTable;
    $res = $db->Execute($sql);
    if (!$res) throw new Exception( $db->ErrorMsg() );
    // clear all data from reviewmanager tables
    $sql = 'INSERT INTO '.CMS_DB_PREFIX.$toTable.' SELECT * FROM '.CMS_DB_PREFIX.$fromTable;
    $res = $db->Execute($sql);
    if (!$res) throw new Exception( $db->ErrorMsg() );
}


// import all preferences
$CGFeedback = \cms_utils::get_module('CGFeedback');
$preferences = ['validate_email', 'notification_group', 'allow_comment_wysiwyg', 'allow_comment_html', 'moderate_comments', 'use_cookies', 'captcha_module', 'notification_subject', 'usernotification_subject', 'word_limit', 'sfs_score', 'moderation_patterns', 'moderation_iplist', 'titlerequired', 'commentrequired', 'emailrequired', 'namerequired'];
foreach ($preferences as $preference) {
    $this->SetPreference( $preference, $CGFeedback->GetPreference($preference) );
}
$tmp = $CGFeedback->GetPreference('friendlyname');
if ($tmp!='') $this->SetPreference( 'friendlyname', $tmp.'*' );
// convert 'notification_group' into 'notification_emails'
$emails = [];
$gid = $CGFeedback->GetPreference('notification_group', -1);
if ($gid!=-1) {
    $userops = cmsms()->GetUserOperations();
    $users = $userops->LoadUsersInGroup($gid);
    if ( is_array($users) && count($users)!=0 ) {
        for ( $i = 0; $i < count($users); $i++ ) {
            if ( !isset($users[$i]->email) || $users[$i]->email == '' ) continue;
            if ( is_email($users[$i]->email) ) {
                $emails[] = $users[$i]->email;
            }
        }
    }
}
$this->SetPreference('notification_emails', implode(',', $emails));


// import all templates, prefixed with 'ReviewManager_'
$template_types = ['Comment Form', 'Ratings View', 'Summary View', 'Detail View'];
foreach ($template_types as $type_name) {
    $tpl_from_type = \CmsLayoutTemplateType::load('CGFeedback::'.$type_name);
    $tpl_to_type = \CmsLayoutTemplateType::load('ReviewManager::'.$type_name);
    $templates_of_type = \CmsLayoutTemplate::load_all_by_type($tpl_from_type);
    if (!empty($templates_of_type)) {
        foreach ($templates_of_type as $template) {
            $template_content = $template->get_content();
            // convert some CGBF content to RM content 
            if ($type_name=='Comment Form') {
                $template_content = str_replace('{cge_form_csrf}', '{xt_form_csrf}', $template_content);
                $template_content = str_replace('cgfb_submit', 'rm_submit', $template_content);
            }
            utils::create_template_of_type( $tpl_to_type, 'ReviewManager_'.$template->get_name(), $template_content, $template->get_type_dflt() );
        }
    }
}
// convert 3 CGFeedback template into DM ReviewManager templates
$convert_templates = [
    'notification_template' => 'ReviewManager Admin Notification',
    'usernotification_template' => 'ReviewManager User Notification',
    'success_msg' => 'ReviewManager Success Message'
];
$layout_template = new \CmsLayoutTemplate();
foreach ($convert_templates as $CGFB_tpl => $DM_tpl) {
    $contents = $CGFeedback->GetTemplate( $CGFB_tpl );
    $template = $layout_template->load( $DM_tpl );
    $template->set_content( $contents );
    $template->save();
}


// refresh cache to update Admin menu if Module Friendlyname changed
utils::touch_cache();

$this->SetMessage( $this->Lang('import_success_msg') );
$this->RedirectToAdminTab('settings');