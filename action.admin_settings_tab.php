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

if ( !$this->CheckPermission('Modify Site Preferences') ) exit;
$this->SetCurrentTab('settings');

if ( utils::exists($params, 'submit') ) {
    $this->SetPreference('titlerequired', (int)$params['titlerequired']);
    $this->SetPreference('commentrequired', (int)$params['commentrequired']);
    $this->SetPreference('emailrequired', (int)$params['emailrequired']);
    $this->SetPreference('namerequired', (int)$params['namerequired']);
    $this->SetPreference('allow_comment_wysiwyg', (int)$params['allow_comment_wysiwyg']);
    $this->SetPreference('allow_comment_html', (int)$params['allow_comment_html']);
    $this->SetPreference('word_limit', (int)$params['word_limit']);
    $this->SetPreference('validate_email', trim($params['validate_email']));
    $this->SetPreference('use_cookies', (int)$params['use_cookies']);
    $this->SetPreference('friendlyname', trim($params['friendlyname']));
    $this->SetPreference('notification_emails', trim($params['notification_emails']));
    $this->SetPreference(REVIEWMANAGER_PREF_NOTIFICATION_SUBJECT, trim($params['admin_notification_subject']));
    $this->SetPreference(REVIEWMANAGER_PREF_USERNOTIFICATION_SUBJECT, trim($params['user_notification_subject']));
    $this->SetPreference('moderate_comments', utils::get_string($params, 'moderate_comments'));
    $this->SetPreference('moderation_patterns', $params['moderation_patterns']);
    $this->SetPreference('moderation_iplist', $params['moderation_iplist']);
    $this->SetPreference('captcha_module', $params['captcha_module']);
    $this->SetPreference('sfs_score', (int)$params['sfs_score']);

    utils::touch_cache();
    $this->RedirectToAdminTab('settings');
}

$tpl = $smarty->CreateTemplate( $this->GetTemplateResource('admin_settings_tab.tpl'), null, null, $smarty );

$tmp = $this->GetModulesWithCapability('captcha');
$tmp2 = array('-1' => $this->Lang('none'));
if ( count($tmp) ) {
    foreach( $tmp as $name ) {
        $mod = cms_utils::get_module($name);
        if ( is_object($mod) ) $tmp2[$name] = $mod->GetName();
    }
}
$tpl->assign('captcha_modules', $tmp2);

$opts = [ 'none'=>$this->Lang('none'),
	      'normal'=>$this->Lang('validate_normal'),
	      'domain'=>$this->Lang('validate_domain')];
$tpl->assign('validate_opts', $opts);

$opts = [ 'auto' => $this->Lang('automatic'),
          'none' => $this->Lang('none'),
          'always' => $this->Lang('always') ];
$tpl->assign('moderation_opts', $opts);

$prefs = [];
$prefs['titlerequired'] = $this->Getpreference('titlerequired', 1);
$prefs['commentrequired'] = $this->Getpreference('commentrequired', 1);
$prefs['emailrequired'] = $this->Getpreference('emailrequired', 1);
$prefs['namerequired'] = $this->Getpreference('namerequired', 1);
$prefs['allow_comment_wysiwyg'] = $this->GetPreference('allow_comment_wysiwyg', 0);
$prefs['allow_comment_html'] = $this->GetPreference('allow_comment_html', 0);
$prefs['word_limit'] = $this->GetPreference('word_limit', 0);
$prefs['validate_email'] = $this->GetPrefernce('validate_email');
$prefs['use_cookies'] = $this->GetPreference('use_cookies');
$prefs['friendlyname'] = $this->GetPreference('friendlyname');

$prefs['notification_emails'] = $this->GetPreference('notification_emails');
$prefs['admin_notification_subject'] = $this->GetPreference(REVIEWMANAGER_PREF_NOTIFICATION_SUBJECT);
$prefs['user_notification_subject'] = $this->GetPreference(REVIEWMANAGER_PREF_USERNOTIFICATION_SUBJECT);

$prefs['moderate_comments'] = $this->GetPreference('moderate_comments');
$prefs['moderation_patterns'] = $this->GetPreference('moderation_patterns');
$prefs['moderation_iplist'] = $this->GetPreference('moderation_iplist');
$prefs['captcha_module'] = $this->GetPreference('captcha_module', -1);
$prefs['sfs_score'] = $this->GetPreference('sfs_score', 10);

$tpl->assign('prefs', $prefs);

$tpl->assign( 'CGFeedback_installed', cms_utils::module_available('CGFeedback') );

$tpl->display();


