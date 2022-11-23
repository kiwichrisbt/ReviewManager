<?php
#A
$lang['addedit_commentform_template'] = 'Add/Edit Comment Form Template';
$lang['addedit_detail_template'] = 'Add/Edit Detail Template';
$lang['addedit_ratings_template'] = 'Add/Edit Ratings Template';
$lang['addedit_summary_template'] = 'Add/Edit Summary Template';
$lang['ask_delete_field'] = 'Are you sure you want to remove this field definition';
$lang['ask_really_uninstall'] = 'Are you sure you want to do this?  Continuing will permanently delete all data associated with this module';
$lang['auto'] = 'Auto';
$lang['automatic'] = 'Automatic';
$lang['always'] = 'Always';

#B


#C
$lang['cancel'] = 'Cancel';
$lang['confirm_bulk_operations'] = 'Are you sure you want to perform the selcted operation on these comments?';
$lang['confirm_delete_comment'] = 'Are you sure you really want to delete this comment?';
$lang['count'] = 'Count';

#D
$lang['delete'] = 'Delete';
$lang['delete_this_field'] = 'Delete this field definition';
$lang['desc_adminsearch'] = 'Search all comments (regardless of status or expiry)';
$lang['disabled'] = 'Disabled';
$lang['draft'] = 'Draft';

#E
$lang['edit'] = 'Edit';
$lang['edit_this_field'] = 'Edit this field definition';
$lang['error_alreadyvoted'] = 'You have already voted for this item';
$lang['error_bulk_nothingselected'] = 'No comments were selected to perform a bulk operation on';
$lang['error_bulk_operation_failed'] = 'Bulk operation failed';
$lang['error_captchafailed'] = 'The text entered did not match that of the captcha provided';
$lang['error_comment_update_failed'] = 'Comment update failed';
$lang['error_dberror'] = 'Database Error';
$lang['error_emailinvalid'] = 'The email address specified is invalid';
$lang['error_emptyemail'] = 'You must provide an email address';
$lang['error_emptycomment'] = 'You must provide a comment';
$lang['error_emptyname'] = 'You must provide your name';
$lang['error_emptytitle'] = 'You must provide a title for your post';
$lang['error_invalidrating'] = 'Invalid Rating';
$lang['error_invalidcomment'] = 'Invalid comment id';
$lang['error_comment_uknown'] = 'Comment %s not found, or otherwise unavailable';
$lang['error_nameexists'] = 'An item by that name already exists';
$lang['error_missingvalue'] = 'A required value is missing: %s';
$lang['error_missingparam'] = 'A required parameter is missing';
$lang['error_security'] = 'Hmmm. We have encountered a security related problem';
$lang['error_spam'] = 'This message has been identified as spam!';

#F
$lang['fieldtype_0'] = 'Text';
$lang['fieldtype_1'] = 'Email Address';
$lang['fieldtype_2'] = 'Text Area';
$lang['fieldtype_3'] = 'Dropdown';
$lang['fieldtype_4'] = 'Multiselect';
$lang['friendlyname'] = 'Review Manager';


#G


#H


#I
$lang['id'] = 'Id';
$lang['import_all_from_cgfeedback'] = 'Import All from CGFeedback';
$lang['import_ReviewManager_alert'] =  <<<EOT
ReviewManager module is installed. All Feedback, fields, templates and settings can be imported into Review Manager. Importing from ReviewManager will replace all Review Manager data and settings. The steps below will enable Review Manager to fully replace ReviewManager. Make sure you have a site backup first!
EOT;
$lang['import_ReviewManager_text'] =  <<<EOT
ReviewManager module is installed. All Feedback, fields, templates and settings can be imported into Review Manager. Importing from ReviewManager will replace all Review Manager data and settings. The steps below will enable Review Manager to fully replace ReviewManager.
EOT;
$lang['import_step_1'] = 'import all feedback, fields, templates and settings';
$lang['import_step_2'] = 'Use Extensions > Admin Search to find all \'{ReviewManager\' tags and replace with \'{ReviewManager\'. All templates imported from ReviewManager have been prefixed with \'ReviewManager_\'. Rename the templates and/or update the template parameters.';
$lang['import_step_3'] = 'Check that all Feedback is now showing as Reviews across the website. Then you can uninstall ReviewManager.';
$lang['import_success_msg'] = 'Successfully imported all reviews, settings & templates from ReviewManager module.';

$lang['info_allow_comment_html'] = '<strong>Note:</strong> Do not use this with the above wysiwyg setting';
$lang['info_captcha_module'] = 'Select a module from the list to use for providing functionality to ensure that there is a human entering data into the form.';
$lang['info_commentform_template'] = 'Comment Form templates display a form which allows the user to enter a comment, some ancillary information, and to rate the particular item.  Here you design the way in which you want that information laid out.  You may use any smarty logic or variables that have been designed previously, or the ones made available specifically for this view';
$lang['info_commentform_templates_tab'] = 'This tab contains the list of available summary templates.  One of them is marked as default.  The default one will be used when no alternate template name is supplied on the tag that calls this module';
$lang['info_detail_template'] = 'Detail templates display detailed information about a specific frontend user.  Here you design the way in which you want that information laid out.  You may use any smarty logic or variables that have been designed previously, or the ones made available specifically for this view';
$lang['info_detail_templates_tab'] = 'This tab contains the list of available detail templates.  One of them is marked as default.  The default one will be used when no alternate template name is supplied on the tag that calls this module';
$lang['info_email_validate'] = 'Specify how the user entered email address should be validated';
$lang['info_filter_authoremail'] = 'Enter a string that will be matched against all email addresses';
$lang['info_filter_authorname'] = 'Enter a string that will be matched against all author names';
$lang['info_filter_title'] = 'Enter a string that will be matched against all comment titles';
$lang['info_friendlyname'] = 'Enter a string for the module name in the navigation. Leave empty to use default module name';
$lang['info_moderate_comments'] = 'Enabling this option will ensure that an authorized administrator must approve each comment before it can be displayed on the website';
$lang['info_moderation_iplist'] = 'Specify one rule per line.  Valid syntax includes a complete ip address or an ip address mask specified as xxx.xxx.xxxx.xxx/yy  i.e:  192.168.0.0/16 to match everything in the 192.168.0 address range.';
$lang['info_moderation_patterns'] = 'When moderation of comments is set to &quot;automatic&quot; and the comment supplied matches one or more of the rules specified here, the message will be marked as &quot;draft&quot; and await moderation by an administrator.  Enter one rule (stop word, phrase, or special rule identifier) per line..  Special rule identifiers are: __EMAIL__  to match any email address,  __URL__ to match any URL, __IP_ADDRESS__ to match any IP address.';
$lang['info_notification_emails'] = 'A comma separated list of email addresses, to be notified when a new comment is submitted.';
$lang['info_sfs_score'] = 'Select a minimum score from stopforumspam before an item is marked as spam.  Setting a value of 0 will disable stopforumspam checks entirely';
$lang['info_spamcheck_module'] = 'Select a module from the list to use for checking spam in submitted messages';
$lang['info_ratings_template'] = 'Ratings views display statistical information about the ratings for a particular item <em>(triplet of keys)</em>.  It includes the min,max,mean,and median ratings, and the number of ratings, These templates you design the way in which you want that information laid out.  You may use any smarty logic or variables that have been designed previously, or the ones made available specifically for this view';
$lang['info_ratings_templates_tab'] = 'This tab contains the list of available ratings templates.  One of them is marked as default.  The default one will be used when no alternate template name is supplied on the tag that calls this module';
$lang['info_summary_template'] = 'Summary templates display information about a particular viewed items <em>(triplet of keys)</em>.  Here you design the way in which you want that information laid out.  You may use any smarty logic or variables that have been designed previously, or the ones made available specifically for this view';
$lang['info_summary_templates_tab'] = 'This tab contains the list of available summary templates.  One of them is marked as default.  The default one will be used when no alternate template name is supplied on the tag that calls this module';
$lang['info_sysdflt_commentform_template'] = 'Prototype Comment Form Template';
$lang['info_sysdflt_detail_template'] = 'Prototype Detail View Template';
$lang['info_sysdflt_ratings_template'] = 'Prototype Ratings View Template';
$lang['info_sysdflt_summary_template'] = 'Prototype Summary View Template';
$lang['info_sysdflt_template'] = 'Altering this template will have no immediate effect on any output.  This form controls the value of the template that is created when you click &quot;New Template&quot; in the appropriate template tab.';
$lang['info_titlerequired'] = 'This field specifies whether the title field should be required to be filled in when comments are submitted.  This value can be overridden with the titlerequired parameter.';
$lang['info_commentrequired'] = 'This field specifies whether the comment field should be required to be filled in when comments are submitted.  This value can be overridden with the commentrequired parameter.';
$lang['info_emailrequired'] = 'This field specifies whether the email field should be required to be filled in when emails are submitted.  This value can be overridden with the emailrequired parameter.';
$lang['info_namerequired'] = 'This field specifies whether the name field should be required to be filled in when names are submitted.  This value can be overridden with the namerequired parameter.';
$lang['info_use_cookies'] = 'Author name and email address will be stored in a cookie for later use';
$lang['info_use_wysiwyg'] = 'Note: this will override the wysiwyg setting on all custom fields as well as on the comment field';
$lang['info_word_limit'] = 'Specify the maximum number of words in the user supplied comment.  This option has no effect if any of the above options are on.  Specify 0 for no limit';
$lang['info_notification_messages'] = 'The <strong>Notification</strong> and <strong>Message</strong> templates are now stored in the Design Manager. See \'Admin Notification\', \'User Notification\' and \'Success Message\' template types.';
$lang['info_admin_notification_subject'] = 'The email template for Admin Notifications is now stored in Design Manager. The default \'ReviewManager::Admin Notification\' template is used.';
$lang['info_user_notification_subject'] = 'The email template for User Notifications is now stored in Design Manager. The default \'ReviewManager::User Notification\' template is used.';


#J


#K


#L
$lang['lbl_adminsearch'] = 'Search ReviewManager Comments';
$lang['lbl_agelimit'] = 'Maximum Age (Days)';
$lang['lbl_all'] = 'All';
$lang['lbl_any'] = 'Any';
$lang['lbl_author'] = 'Author';
$lang['lbl_author_name'] = 'Author Name';
$lang['lbl_author_email'] = 'Author Email';
$lang['lbl_author_ip'] = 'IP Address';
$lang['lbl_avg_rating'] = 'Average Rating Value';
$lang['lbl_commentformtemplates'] = 'Comment Form Templates';
$lang['lbl_comments'] = 'Comments';
$lang['lbl_comment'] = 'Comment';
$lang['lbl_count_comments'] = 'Number of Comments';
$lang['lbl_created'] = 'Created';
$lang['lbl_defaulttemplates'] = 'Prototype Templates';
$lang['lbl_delete_spam'] = 'Delete this Spam';
$lang['lbl_detailtemplates'] = 'Detail Templates';
$lang['lbl_add_comment'] = 'Add new Comment';
$lang['lbl_edit_comment'] = 'Edit Comment';
$lang['lbl_filter'] = 'Filter';
$lang['lbl_fields'] = 'Fields';
$lang['lbl_id'] = 'ID';
$lang['lbl_importer'] = 'ReviewManager Importer';
$lang['lbl_key1'] = 'Key 1';
$lang['lbl_key2'] = 'Key 2';
$lang['lbl_key3'] = 'Key 3';
$lang['lbl_matching_records'] = 'Matching Records';
$lang['lbl_max_rating'] = 'Maximum Rating Value';
$lang['lbl_max_results'] = 'Results per Page';
$lang['lbl_min_rating'] = 'Minimum Rating Value';
$lang['lbl_modified'] = 'Modified';
$lang['lbl_notifications_messages'] = 'Notifications & Messages';
$lang['lbl_not_spam'] = 'This is Not Spam';
$lang['lbl_of'] = 'Of';
$lang['lbl_page'] = 'Page';
$lang['lbl_rating'] = 'Rating';
$lang['lbl_settings'] = 'Settings';
$lang['lbl_status'] = 'Status';
$lang['lbl_ratingstemplates'] = 'Ratings Templates';
$lang['lbl_summarytemplates'] = 'Summary Templates';
$lang['lbl_title'] = 'Title';
$lang['lbl_url'] = 'URL';
$lang['lbl_usernotifications'] = 'User Notifications';


#M
$lang['mark_draft'] = 'Mark as Draft';
$lang['mark_ham'] = 'Mark as Ham';
$lang['mark_published'] = 'Mark as Published';
$lang['mark_spam'] = 'Mark as Spam';
$lang['message_patternmatch'] = 'Only if the message matches one or more patterns below';
$lang['moddescription'] = 'A flexible module for commenting and rating for a specific item (news, product, company, ...) in a website.  This is a flexible module that can be used for both a ratings system, or a comments/feedback system.  It supports extensive administrator control, including spam checking (with the akismet module), and security (with the captcha module).';
$lang['msg_bulk_operation_complete'] = 'Bulk action successfully completed';
$lang['msg_commentdeleted'] = 'Comment deleted';
$lang['msg_commentokay'] = 'Comment successfully added.  Thank you';
$lang['msg_commentupdated'] = 'Comment updated';
$lang['msg_field_added'] = 'Field successfully added';
$lang['msg_field_deleted'] = 'Field successfully deleted';
$lang['msg_field_updated'] = 'Field update successful';


#N
$lang['name'] = 'Name';
$lang['no'] = 'No';
$lang['none'] = 'None';
$lang['notification_subject'] = 'A comment has been posted on your website';
$lang['notify_n_draft_items'] = 'There are %d comments are not published';
$lang['no_rating'] = 'No Rating';
$lang['no_fields_defined'] = '--- No fields defined ---';


#O

#P
$lang['page'] = 'Page';
$lang['param_action'] = <<<EOT
Specify the behaviour of the module.  Possible values for this parameter are:
<ul>
  <li>default - Display a comment form.</li>
  <li>summary - Display a summary report of comments.</li>
  <li>ratings - Display a ratings report.</li>
  <li>detail  - Display detailed information about a specific comment.</li>
</ul>
EOT;
$lang['param_cid'] = 'Applicable to only to the <em>detail</em> action, this parameter specifies the unique identifier for the comment to display.  Normally this parameter is used only internally, as normal usage does not require explicit linking to a specific comment.';
$lang['param_commenttemplate'] = 'Applicable only in the default <em>comment form</em> action, this parameter specifies the name of a comment form template to use for generating the display.  If this parameter is not specified, the comment form template that is currently marked as &quot;default&quot; in the admin interface will be used.';
$lang['param_destpage'] = 'Applicable only in the default <em>comment form</em> action, this parameter specifies a page to redirect to after the form has been completed.';
$lang['param_detailpage'] = 'Applicable only to the summary action, this parameter can be used to specify a different page id or alias to link to for displaying detail reports about a specific comment.  This parameter has no function when pretty urls are enabled.';
$lang['param_detailtemplate'] = 'This parameter can be used in both the summary, and detail actions to specify a non default detail template to use for the detail report';
$lang['param_inline'] = 'Applicable only to the default <em>comment form</em>, and summary actions This parameter if set to a non zero value specifies that the output from the form should replace the tag that was used to create the form, instead of replacing the default content area.';
$lang['param_key1'] = 'First key in the <em>triplet of keys</em> that make up a unique identifier for a comment list.  If this parameter is not specified, then it is assumed that you are referring to a content page';
$lang['param_key2'] = 'Second key in the <em>triplet of keys</em> that make up a unique identifier for a comment list.  If this parameter is not specified, the current page id will be used.';
$lang['param_key3'] = 'Third key in the <em>triplet of keys</em> that make up a unique identifier for a comment list.  This parameter is entirely optional for normal use, but may be required in extenuating circumstances when two keys are not enough information to make the comment list unique.';
$lang['param_pagelimit'] = 'Applicable only to the <em>summary</em> action, this parameter specifies the number of comments to display.';
$lang['param_ratingstemplate'] = 'Applicable only to the <em>ratings</em> action, this parameter can name a non default ratings template to use for the display.';
$lang['param_showall'] = 'Applicable only to the <em>summary</em> action, this parameter indicates that all relevant posts should be displayed, independant of status. The default setting is to display only published comments.';
$lang['param_sortby'] = <<<EOT
Applicable only in the <em>summary</em> action, this parameter specifies the sorting of the returned results.  Possible values are:
<ul>
  <li>rating</li>
  <li>title</li>
  <li>status - This option is only useful with the showall parameter.</li>
  <li>author_name</li>
  <li>author_email</li>
  <li>author_ip</li>
  <li>created <em>(default)</em></li>
  <li>modified</li>
  <li>Custom Field <strong>F:<em>fieldname</em></strong>
  <p>-- It is possible to sort by custom fields, by specifying &quot;F:thename&quot; as the sortby value.</p>
  </li>
</ul>
EOT;
$lang['param_sortorder'] = <<<EOT
Applicable only to the default <em>contact form</em> action, this aprameter specifies the order of the returned results, relative to the sorting parameter.  Possible values are:
<ul>
  <li>ASC - Ascending order</li>
  <li>DESC - <em>(default)</em> Descending order</li>
</ul>
EOT;
$lang['param_commentrequired'] = <<<EOT
Applicable to the default action, this integer parameter can be used to specify if the comment is a required field.
EOT;
$lang['param_emailrequired'] = <<<EOT
Applicable to the default action, this integer parameter can be used to specify if the email address is a required field.
EOT;
$lang['param_namerequired'] = <<<EOT
Applicable to the default action, this integer parameter can be used to specify if the name is a required field.
EOT;
$lang['param_noredirect'] = <<<EOT
Applicable to the default action, specify that when a comment is successfully added not to perform any redirection.
EOT;
$lang['param_ratingoptions'] = <<<EOT
Applicable to the default action, this parameter allows specifying a list of comma seperated values to use for ratings options.
EOT;
$lang['param_redirectextra'] = <<<EOT
Applicable to the default action, and only when the destpage parameter is NOT used.  this parameter allows specifying extra information to append to the url when redirecting.  i.e:  you may specify redirectextra=&quot;#someanchorname&quot; to specify an anchor to redirect to.
EOT;
$lang['param_since'] = <<<EOT
Applicable to the summary and ratings actions, this parameter can be used to specify a minimum absolute time (unix timestamp) or a relative time (compatible with strtotime) to filter results on.<br/>
i.e:  <code>{ReviewManager key1=CGBlog key2=\$article_id since='-1 Month'}</code> will display all of the comments for a blog post within the last month.
EOT;
$lang['param_titlerequired'] = <<<EOT
Applicable to the default action, this integer parameter can be used to specify if the title is a required field.
EOT;
$lang['param_summarytemplate'] = <<<EOT
Applicable to the summary action, this parameter allows specifying the name of a non default summary template.
EOT;
$lang['param_voteonce'] = <<<EOT
Applicable to the default form, this parameter allows specifying that the user can only vote once (by IP address). This value must be a positive integer between 1 and 3.  A value of 1 will only search the first key, a value of 2 will search both key1 and key2, and a value of 3 will search key1, key2, and key3.
EOT;
$lang['param_voteinterval'] = <<<EOT
Applicable to the default form, and only when voteonce is applied, this parameter allows specifying an interval (in hours) between allowed votes.  i.e: voteinterval=24 would only allow voting every twenty four hours.
EOT;
$lang['postinstall'] = 'The ReviewManager module is now ready for configuration';
$lang['postuninstall'] = 'The ReviewManager module, and all associated data has been uninstalled from the database';
$lang['prompt_add_comment'] = 'Add a Review of this item';
$lang['prompt_add_field'] = 'Add a new field';
$lang['prompt_admin_notification_subject'] = 'Admin Notification Email Subject';
$lang['prompt_allow_comment_html'] = 'Allow commentor to include html in comments';
$lang['prompt_allow_comment_wysiwyg'] = 'Allow use of the wysiwyg editor for comments?';
$lang['prompt_author_email'] = 'Author Email';
$lang['prompt_author_name'] = 'Author Name';
$lang['prompt_author_notify'] = 'Notify Author of additional comments on this thread';
$lang['prompt_captcha'] = 'Are you a human?  If so, please enter the text displayed in the following image';
$lang['prompt_captcha_module'] = 'Module to use to use for CAPTCHA test';
$lang['prompt_comment'] = 'Additional Comments';
$lang['prompt_default_content'] = 'Default content for this field (may be left empty)';
$lang['prompt_dropdown_options'] = 'Options for this dropdown or multiselect field.  One line per entry.<br/>Values can be seperated from labels using an = <em>i.e: Female=f</em>';
$lang['prompt_email_validate'] = 'Email Address Validation';
$lang['prompt_field_length'] = 'Field Length';
$lang['prompt_field_maxlength'] = 'Field Maximum Length';
$lang['prompt_field_name'] = 'Field Name';
$lang['prompt_field_type'] = 'Field Type';
$lang['prompt_friendlyname'] = 'Module Friendlyname';
$lang['prompt_general_settings'] = 'General Settings';
$lang['prompt_import_ReviewManager'] = 'Import ReviewManager Content';
$lang['prompt_is_email_html'] = 'Send message in HTML format?';
$lang['prompt_message_template'] = 'Message Template';
$lang['prompt_moderate_comments'] = 'Moderate all comments';
$lang['prompt_moderation_iplist'] = 'Moderate Matching IP Addresses';
$lang['prompt_moderation_patterns'] = 'Moderation Patterns';
$lang['prompt_notification_emails'] = 'Admin Email Notification List';
$lang['prompt_notify'] = 'Notify me of new comments to this item';
$lang['prompt_origurl'] = 'Original URL';
$lang['prompt_quality_control_settings'] = 'Quality Control Settings';
$lang['prompt_rating'] = 'Rating';
$lang['prompt_send_notification_to_group'] = 'Send notifications of new comments to members of this group.<br/><em>(set to none to disable notifications)</em>';
$lang['prompt_sfs_score'] = 'StopForumSpam Threshold';
$lang['prompt_spamcheck_module'] = 'Module to use to detect spam in comments';
$lang['prompt_status'] = 'Status';
$lang['prompt_subject'] = 'Subject';
$lang['prompt_success_msg'] = 'Message displayed after successful comment submission';
$lang['prompt_title'] = 'Comment Title';
$lang['prompt_commentrequired'] = 'Is the Comment field required by default';
$lang['prompt_emailrequired'] = 'Is the Email field required by default';
$lang['prompt_namerequired'] = 'Is the Name field required by default';
$lang['prompt_titlerequired'] = 'Is the Title field required by default';
$lang['prompt_user_notification_subject'] = 'User Notification Email Subject';
$lang['prompt_use_cookies'] = 'Save user details in a cookie';
$lang['prompt_use_wysiwyg'] = 'Allow use of wysiwyg for this field';
$lang['prompt_word_limit'] = 'Comment Word Limit';
$lang['prompt_your_email'] = 'Your Email Address';
$lang['prompt_your_name'] = 'Your Name';
$lang['prompt_your_rating'] = 'Your Rating';
$lang['published'] = 'Published';

#Q


#R
$lang['reset_to_defaults'] = 'Reset to Factory Default';

#S
$lang['save_settings'] = 'Save settings';
$lang['spam'] = 'Spam';
$lang['statistics'] = 'Statistics';
$lang['submit'] = 'Submit';


#T
$lang['title_add_field'] = 'Add Field';
$lang['title_draft_comments'] = 'Unapproved Feedback';
$lang['type'] = 'Type';
$lang['type_ReviewManager'] = 'ReviewManager';
$lang['type_Comment_Form'] = 'Comment Form';
$lang['type_Ratings_View'] = 'Ratings View';
$lang['type_Summary_View'] = 'Summary View';
$lang['type_Detail_View'] = 'Detail View';
$lang['type_Admin_Notification'] = 'Admin Notification';
$lang['type_Success_Message'] = 'Success Message';
$lang['type_User_Notification'] = 'User Notification';


#U
$lang['unlimited'] = 'Unlimited';
$lang['usernotification_subject'] = 'A reply has been posted in a thread you are interested in';

#V
$lang['validate_normal'] = 'Validate Address Format';
$lang['validate_domain'] = 'Validate Address Format and Domain';
$lang['view_filter'] = 'View Filter';
$lang['view_filter_applied'] = 'View Filter (applied)';

#W


#X


#Y
$lang['yes'] = 'Yes';

#Z











###    ###   #########   ###        #########
###    ###   #########   ###        #########
###    ###   ###         ###        ###   ###
##########   #########   ###        #########
##########   #########   ###        #########
###    ###   ###         ###        ###
###    ###   #########   #########  ###
###    ###   #########   #########  ###

$lang['help_tab_general'] = 'General';
$lang['help_general'] = <<<EOT

<p>This module provides a complete mechanism for users to be able to provide reviews for the whole business or individual pages, news articles, products, etc.  Visitors can make commments, and to optionally provide a rating on the particular item.</p>

<div class="warning">
    <p><strong>USE AT YOUR OWN RISK!</strong></p>
    <p>Note: This module tracks users IP addresses and email addresses.  It does not anonymize them, and there is no mechanism to anonymize them after a period of time.  This IS not compatible with Do-not-track mechanisms, and may be incompatible with some laws.</p>
</div>

<h3>Features</h3>
<ul>
    <li>Moderation - Optionally, all comments can be marked as &quot;draft&quot; for review by an administrator before allowing the comment to be displayed on the website.</li>
    <li>Spam Checking - Optionally, all comments can be ran through stopforumspam to detect attacks.</li>
    <li>Captcha support - Optionally, visitors can be required to validate that they are human by entering the value displayed in a randomly generated captcha image.</li>
    <li>Admin Notification - Administrators can be notified by email of new comments.</li>
    <li>User Notification - Visitors can choose to be notified by email of additional comments on threads that they are interested in.</li>
    <li>Custom Fields - Administrators can define custom fields (with a variety of types, and attributes), to allow the visitor to enter additional information with their comment.</li>
    <li>Template Control - All output is controlled via smarty templates.  Multiple different versions of each display template are allowed.</li>
    <li>A ratings system.</li>
    <li><strong>Much More...</strong></li>
</ul>
<br>

<h3>Permissions</h3>
<ul>
    <li>Manage Reviews - can select which Admin user groups can view and edit reviews</li>
    <li>All Settings & Options - available to Admin Users with 'Modify Site Preferences' access</li>
</ul>
<br>

<h3>Additional Modules</h3>
<ul>
    <li><b>Captcha module</b> (optional) - for captcha support to be enabled</li>
</ul>
EOT;


$lang['help_tab_import'] = 'CGFeedback Import';
$lang['help_import'] = <<<EOT
<p>Is CGFeedback is installed you will see an option to import all CGFeedback items, fields, settings and templates into ReviewManager.</p><br>
EOT;


$lang['help_tab_usage'] = 'Usage';
$lang['help_usage'] = <<<EOT

<h3>How do I use it</h3>

<h4>Calling ReviewManager from a page</h4>
<p>The simplest way to utilize this module, is to include the following tag in the bottom of your page content: <code>{ldelim}ReviewManager{rdelim}</code>.</p>
<p>This will create a comment form to allow visitors to enter comments and ratings about that particular page.   To display those comments, you would add a tag like: {ldelim}ReviewManager action='summary'{rdelim} below the tag specified above.  Tags can optionally be placed in page templates, or in module templates.</p>

<h4>Calling ReviewManager from news, or other modules</h4>
<p>ReviewManager can be utilized within the news module to allow site visitors to enter comments on particular items in News or any module.  To do this, you would enter a tag such as: <code>{ldelim}ReviewManager key1=&quot;News&quot; key2=\$entry->id{rdelim}</code> into the appropriate news detail template.   Similarly to display those comments, you would use a tag such as <code>{ldelim}ReviewManager key1=&quot;News&quot; key2=\$entry->id action='summary'{rdelim}</code></p>
<p>Similar techniques can be used to allow ReviewManager to interact with almost any other module in limitless ways.</p>
<p>Additional parameters can be used to further customize the behaviour and output of the module.  You are encouraged to explore the parameters as described below, and try them.</p>
<br>

<h4>Hooks</h4>
<p>The following hooks are provided to enable other modules to be called when various ReviewManager actions occur:</p>
<ul>
    <li><code>ReviewManager::UserNotify</code>
        <p>Sent immediately before the user is notified that the review is now published.</p>
        <p>Parameters:</p>
        <ul>
            <li><code>comment</code> : object - comment details</li>
        </ul>
    </li>
    <li><code>ReviewManager::BeforeDeleteComment</code>
        <p>Sent immediately before a comment is deleted.</p>
        <p>Parameters:</p>
        <ul>
            <li><code>comment</code> : object - comment details</li>
        </ul>
    </li>
    <li><code>ReviewManager::BeforeSaveComment</code>
        <p>Sent immediately before the commnet is saved.</p>
        <p>Parameters:</p>
        <ul>
            <li><code>comment</code> : object - comment details</li>
        </ul>
    </li>
</ul>
EOT;


$lang['help_tab_about'] = 'About';
$lang['help_about'] = <<<EOT

<h3>Support</h3>
<p>As per the GPL licence, this software is provided as is. Please read the text of the license for the full disclaimer.
The module author is not obligated to provide support for this code. However you might get support through the following:</p>
<ul>
   <li>For support, first <strong>search</strong> the <a href="//forum.cmsmadesimple.org" target="_blank">CMS Made Simple Forum</a>, for issues with the module similar to those you are finding. Open a <strong>new forum topic</strong> to request help, with a thorough description of your issue, and steps to reproduce it.</li>
   <li>Or, try the <a href="//cms-made-simple.slack.com" target="_blank">CMS Made Simple Slack channel</a>, you can <a href="//www.cmsmadesimple.org/support/documentation/chat/" target="_blank">join here</a>.</li>
   <li>If you find a bug you can <a href="http://dev.cmsmadesimple.org/bug/list/???"  target="_blank">submit a Bug Report</a>.</li>
   <li>For any good ideas you can <a href="http://dev.cmsmadesimple.org/feature_request/list/???"  target="_blank">submit a Feature Request</a>.</li>
   <li>If you found the Module useful - shout out to me on Twitter <a href="//twitter.com/KiwiChrisBT">@KiwiChrisBT</a></li>
</ul><br>

<h3>Copyright &amp; Licence</h3>
<p>Copyright © 2020, Chris Taylor {mailto address='chris@binnovative.co.uk' encode=javascript}. All Rights Are Reserved.<br>
This module is a fork of: ReviewManager (c) 2009 by Robert Campbell (calguy1000@cmsmadesimple.org)</p><br>

<p>This module has been released under the GNU Public License v3. However, as a special exception to the GPL, this software is distributed as an addon module to CMS Made Simple. You may only use this software when there is a clear and obvious indication in the admin section that the site was built with CMS Made Simple!</p><br>

<p>This program is free software; you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation; either version 3 of the License, or (at your option) any later version.</p><br>

<p>This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.</p><br>

<p>You should have received a copy of the GNU General Public License along with this program, see /ReviewManager/lang/LICENCE.txt or <a href="//www.gnu.org/licenses/">www.gnu.org/licenses/</a>.</p><br>

EOT;










#########  ###    ###  ##########  ###    ###  #########  ########  ###       #########  #########
#########  ###    ###  ##########  ####   ###  #########  ########  ###       #########  #########
###        ###    ###  ###    ###  #####  ###  ###        ###       ###       ###   ###  ###
###        ##########  ##########  ### ## ###  ###        ########  ###       ###   ###  ###
###        ##########  ##########  ###  #####  ###   ###  ########  ###       ###   ###  ###   ###
###        ###    ###  ###    ###  ###   ####  ###   ###  ###       ###       ###   ###  ###   ###
#########  ###    ###  ###    ###  ###    ###  #########  ########  ######### #########  #########
#########  ###    ###  ###    ###  ###    ###  #########  ########  ######### #########  #########

$lang['changelog'] = <<<'EOD'

<h3>Version 0.1 - 28Aug20</h3>
<ul>
   <li>??? list changes here...</li>
</ul>
<br>


EOD;


