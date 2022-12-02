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

#
# Tables
#
$db = $this->GetDb();
$dict = NewDataDictionary($db);
$taboptarray = array('mysql'=>'ENGINE=MyISAM');

// Event types table
$flds = "
    id      I KEY AUTO,
    name    C(255),
    type    I,
    attribs X,
    iorder  I";
$sqlarray = $dict->CreateTableSQL(REVIEWMANAGER_TABLE_FIELDDEFS, $flds, $taboptarray);
$dict->ExecuteSQLArray($sqlarray);


$flds = "
    id            I KEY AUTO,
    key1          C(255),
    key2          C(255),
    key3          C(255),
    rating        I,
    title         C(255),
    data          X,
    status        C(20),
    author_name   C(255),
    author_email  C(255),
    author_ip     C(25),
    author_notify I1,
    admin_notes   X,
    notified      I1,
    origurl       C(255),
    created      ".CMS_ADODB_DT.",
    modified     ".CMS_ADODB_DT.",
    extra         X2";
$sqlarray = $dict->CreateTableSQL(REVIEWMANAGER_TABLE_COMMENTS, $flds, $taboptarray);
$dict->ExecuteSQLArray($sqlarray);


$flds = "
    comment_id    I KEY,
    field_id      I KEY,
    value         X";
$sqlarray = $dict->CreateTableSQL(REVIEWMANAGER_TABLE_FIELDVALS, $flds, $taboptarray);
$dict->ExecuteSQLArray($sqlarray);


#
# Permissions
#
$this->CreatePermission(REVIEWMANAGER_PERM_FEEDBACK, REVIEWMANAGER_PERM_FEEDBACK);


#
# Templates
#
$commentform_type = utils::create_template_type('Comment Form', $this);
$ratings_type = utils::create_template_type('Ratings View', $this);
$summary_type = utils::create_template_type('Summary View', $this);
$detail_type = utils::create_template_type('Detail View', $this);
$admin_notification_type = utils::create_template_type('Admin Notification', $this);
$user_notification_type = utils::create_template_type('User Notification', $this);
$success_message_type = utils::create_template_type('Success Message', $this);

$fn = __DIR__.'/templates/orig_commentform_template.tpl';
if ( is_file($fn) ) utils::create_template_of_type($commentform_type, 'ReviewManager Sample Comment Form', file_get_contents($fn), true);
$fn = __DIR__.'/templates/orig_commentform_template_radio.tpl';
if ( is_file($fn) ) utils::create_template_of_type($commentform_type, 'ReviewManager Radio Comment Form', file_get_contents($fn));
$fn = __DIR__.'/templates/orig_ratings_template.tpl';
if ( is_file($fn) ) utils::create_template_of_type($ratings_type, 'ReviewManager Ratings View', file_get_contents($fn), true);
$fn = __DIR__.'/templates/orig_summary_template.tpl';
if ( is_file($fn) ) utils::create_template_of_type($summary_type, 'ReviewManager Summary View', file_get_contents($fn), true);
$fn = __DIR__.'/templates/orig_detail_template.tpl';
if ( is_file($fn) ) utils::create_template_of_type($detail_type, 'ReviewManager Detail View', file_get_contents($fn), true);
$fn = __DIR__.'/templates/orig_notification_template.tpl';
if ( is_file($fn) ) utils::create_template_of_type($admin_notification_type, 'ReviewManager Admin Notification', file_get_contents($fn), true);
$fn = __DIR__.'/templates/orig_usernotification_template.tpl';
if ( is_file($fn) ) utils::create_template_of_type($user_notification_type, 'ReviewManager User Notification', file_get_contents($fn), true);
$fn = __DIR__.'/templates/orig_success_message.tpl';
if ( is_file($fn) ) utils::create_template_of_type($success_message_type, 'ReviewManager Success Message', file_get_contents($fn), true);


// Preferences
$this->SetPreference('titlerequired', 1);
$this->SetPreference('commentrequired', 1);
$this->SetPreference('emailrequired', 1);
$this->SetPreference('namerequired', 1);
$this->SetPreference('allow_comment_wysiwyg', 0);
$this->SetPreference('allow_comment_html', 0);
$this->SetPreference('word_limit', 0);
$this->SetPreference('validate_email', 'none');
$this->SetPreference('use_cookies', 0);
$this->SetPreference('friendlyname', $this->Lang('friendlyname'));

$this->SetPreference('notification_emails', '');
$this->SetPreference(REVIEWMANAGER_PREF_NOTIFICATION_SUBJECT, $this->Lang('notification_subject'));
$this->SetPreference(REVIEWMANAGER_PREF_USERNOTIFICATION_SUBJECT, $this->Lang('usernotification_subject'));

$this->SetPreference('moderate_comments', 'always');
$this->SetPreference('moderation_patterns', '');
$this->SetPreference('moderation_iplist', '');
$this->SetPreference('captcha_module', -1);
$this->SetPreference('sfs_score', 10);


