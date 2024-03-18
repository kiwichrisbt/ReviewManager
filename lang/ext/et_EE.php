<?php
$lang['addedit_commentform_template'] = 'Add/Edit Comment Form Template';
$lang['addedit_detail_template'] = 'Add/Edit Detail Template';
$lang['addedit_ratings_template'] = 'Add/Edit Ratings Template';
$lang['addedit_summary_template'] = 'Add/Edit Summary Template';
$lang['ask_delete_field'] = 'Are you sure you want to remove this field definition';
$lang['ask_really_uninstall'] = 'Are you sure you want to do this?  Continuing will permanently delete all data associated with this module';
$lang['cancel'] = 'Cancel';
$lang['changelog'] = '<ul>
<li>version 1.0 - March, 2009
    <ul>
      <li>Initial Release</li>
    </ul></li>
<li>version 1.0.1 - March, 2009
    <ul>
      <li>Minor template change.</li>
      <li>Set a default success message.</li>
    </ul></li>
<li>version 1.0.2 - April, 2009
    <ul>
      <li>Fix minor issue with permissions checking.</li>
    </ul></li>
</ul>
<li>version 1.0.4 - October, 2009
    <ul>
      <li>Minor bug fixes.</li>
    </ul></li>';
$lang['confirm_bulk_operations'] = 'Are you sure you want to perform the selcted operation on these comments?';
$lang['confirm_delete_comment'] = 'Are you sure you really want to delete this comment?';
$lang['delete'] = 'Delete';
$lang['delete_this_field'] = 'Delete this field definition';
$lang['draft'] = 'Draft';
$lang['edit'] = 'Edit';
$lang['edit_this_field'] = 'Edit this field definition';
$lang['error_bulk_nothingselected'] = 'No comments were selected to perform a bulk operation on';
$lang['error_bulk_operation_failed'] = 'Bulk operation failed';
$lang['error_captchafailed'] = 'The text entered did not match that of the captcha provided';
$lang['error_comment_update_failed'] = 'Comment update failed';
$lang['error_dberror'] = 'Database Error';
$lang['error_emptycomment'] = 'Sa pead sisestama kommentaari';
$lang['error_emptyname'] = 'Sa pead sisestama oma nime';
$lang['error_emptytitle'] = 'Sa pead sisestama oma postituse pealkirja';
$lang['error_invalidrating'] = 'Vale hinnang';
$lang['error_nameexists'] = 'An item by that name already exists';
$lang['error_missingvalue'] = 'A required value is missing: %s';
$lang['error_missingparam'] = 'A required parameter is missing';
$lang['error_spam'] = 'This message has been identified as spam!';
$lang['fieldtype_0'] = 'Text';
$lang['fieldtype_1'] = 'Email Address';
$lang['fieldtype_2'] = 'Text Area';
$lang['fieldtype_3'] = 'Dropdown';
$lang['fieldtype_4'] = 'Multiselect';
$lang['fieldtype_5'] = 'File Upload';
$lang['friendlyname'] = 'Calguys Feedback Module';
$lang['help'] = '<h3>What Does This Do?</h3>
<p>This module provides a complete mechanism for users to be able to provide feedback to individual pages, or infact to individual news articles, products, or other items on your website.  It includes the ability for visitors to make commments, and to optionally provide a rating on the particular item.</p>
<h3>Features</h3>
<ul>
<li>Moderation - Optionally, all comments can be marked as &quot;draft&quot; for review by an administrator before allowing the comment to be displayed on the website.</li>
<li>Spam Checking - Optionally, all comments can be ran through <a href="http://www.akismet.com">akismet</a> to detect spam.</li>
<li>Captcha support - Optionally, visitors can be required to validate that they are human by entering the value displayed in a randomly generated captcha image.</li>
<li>Admin Notification - Administrators can be notified by email of new comments.</li>
<li>User Notification - Visitors can choose to be notified by email of additional comments on threads that they are interested in.</li>
<li>Custom Fields - Administrators can define custom fields (with a variety of types, and attributes), to allow the visitor to enter additional information with their comment.</li>
<li>Template Control - All output is controlled via smarty templates.  Multiple different versions of teach display template is allowed.</li>
<li><strong>Much More...</strong></li>
</ul>
<h3>How do I use it</h3>
<h4>Calling CGFeedback from a page</h4>
<p>The simplest way to utilize this module, is to include the following tag in the bottom of your page content: <code>{CGFeedback}</code>.  This will create a comment form to allow visitors to enter comments and ratings about that particular page.   To display those comments, you would add a tag like: {CGFeedback action=&#039;summary&#039;} below the tag specified above.  Tags can optionally be placed in page templates, or in module templates.</p>
<h4>Calling CGFeedback from news.</h4>
<p>CGFeedback can be utilized within the news module to allow site visitors to enter comments on particular news articles.  To do this, you would enter a tag such as: <code>{CGFeedback key1=&quot;News&quot; key2=$entry->id}</code> into the appropriate news detail template.   Similarly to display those comments, you would use a tag such as <code>{CGFeedback key1=&quot;News&quot; key2=$entry->id action=&#039;summary&#039;}</code></p>
<p>Similar techniques can be used to allow CGFeedback to interact with almost any other module in limitless ways.</p>
<p>Additional parameters can be used to further customize the behaviour and output of the module.  You are encouraged to explore the parameters as described below, and try them.</p>
<h3>Additional Modules</h3>
<p>For captcha support to be enabled, you must have the lastest version of the Captcha module (version 0.4 or greater).</p>
<p>For akismet support to be enabled, you must have the lastest version of the AkismetCheck module (version 0.2 or greater).</p>
<h3>Support</h3>
<p>This module does not include commercial support. However, there are a number of resources available to help you with it:</p>
<ul>
<li>For the latest version of this module, FAQs, or to file a Bug Report or buy commercial support, please visit calguy\&#039;s
module homepage at <a href="http://techcom.dyndns.org">techcom.dyndns.org</a>.</li>
<li>Additional discussion of this module may also be found in the <a href="http://forum.cmsmadesimple.org">CMS Made Simple Forums</a>.</li>
<li>The author, calguy1000, can often be found in the <a href="irc://irc.freenode.net/#cms">CMS IRC Channel</a>.</li>
<li>Lastly, you may have some success emailing the author directly.</li>  
</ul>
<h3>Copyright and License</h3>
<p>Copyright &copy; 2008, Robert Campbel <a href="mailto:calguy1000@cmsmadesimple.org"><calguy1000@cmsmadesimple.org></a>. All Rights Are Reserved.</p>
<p>This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.</p>
<p>However, as a special exception to the GPL, this software is distributed
as an addon module to CMS Made Simple.  You may not use this software
in any Non GPL version of CMS Made simple, or in any version of CMS
Made simple that does not indicate clearly and obviously in its admin 
section that the site was built with CMS Made simple.</p>
<p>This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.
You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA 02111-1307 USA
Or read it <a href="http://www.gnu.org/licenses/licenses.html#GPL">online</a></p>';
$lang['id'] = 'Id';
$lang['info_allow_comment_html'] = '<strong>Note:</strong> Do not use this with the above wysiwyg setting';
$lang['info_captcha_module'] = 'Select a module from the list to use for providing functionality to ensure that there is a human entering data into the form.';
$lang['info_commentform_template'] = 'Comment Form templates display a form which allows the user to enter a comment, some ancillary information, and to rate the particular item.  Here you design the way in which you want that information laid out.  You may use any smarty logic or variables that have been designed previously, or the ones made available specifically for this view';
$lang['info_commentform_templates_tab'] = 'This tab contains the list of available summary templates.  One of them is marked as default.  The default one will be used when no alternate template name is supplied on the tag that calls this module';
$lang['info_detail_template'] = 'Detail templates display detailed information about a specific frontend user.  Here you design the way in which you want that information laid out.  You may use any smarty logic or variables that have been designed previously, or the ones made available specifically for this view';
$lang['info_detail_templates_tab'] = 'This tab contains the list of available detail templates.  One of them is marked as default.  The default one will be used when no alternate template name is supplied on the tag that calls this module';
$lang['info_filter_authoremail'] = 'Enter a string that will be matched against all email addresses';
$lang['info_filter_authorname'] = 'Enter a string that will be matched against all author names';
$lang['info_filter_title'] = 'Enter a string that will be matched against all comment titles';
$lang['info_moderate_comments'] = 'Enabling this option will ensure that an authorized administrator must approve each comment before it can be displayed on the website';
$lang['info_spamcheck_module'] = 'Select a module from the list to use for checking spam in submitted messages';
$lang['info_ratings_template'] = 'Ratings views display statistical information about the ratings for a particular item <em>(triplet of keys)</em>.  It includes the min,max,mean,and median ratings, and the number of ratings, These templates you design the way in which you want that information laid out.  You may use any smarty logic or variables that have been designed previously, or the ones made available specifically for this view';
$lang['info_ratings_templates_tab'] = 'This tab contains the list of available ratings templates.  One of them is marked as default.  The default one will be used when no alternate template name is supplied on the tag that calls this module';
$lang['info_summary_template'] = 'Summary templates display information about a particular viewed items <em>(triplet of keys)</em>.  Here you design the way in which you want that information laid out.  You may use any smarty logic or variables that have been designed previously, or the ones made available specifically for this view';
$lang['info_summary_templates_tab'] = 'This tab contains the list of available summary templates.  One of them is marked as default.  The default one will be used when no alternate template name is supplied on the tag that calls this module';
$lang['info_sysdflt_commentform_template'] = 'System Default Comment Form Template';
$lang['info_sysdflt_detail_template'] = 'System Default Detail View Template';
$lang['info_sysdflt_ratings_template'] = 'System Default Ratings View Template';
$lang['info_sysdflt_summary_template'] = 'System Default Summary View Template';
$lang['info_sysdflt_template'] = 'Altering this template will have no immediate effect on any output.  This form controls the value of the template that is created when you click &quot;New Template&quot; in the appropriate template tab.';
$lang['info_use_cookies'] = 'Author name and email address will be stored in a cookie for later use';
$lang['info_use_wysiwyg'] = 'Note: this will override the wysiwyg setting on all custom fields as well as on the comment field';
$lang['lbl_all'] = 'All';
$lang['lbl_any'] = 'Any';
$lang['lbl_author'] = 'Author';
$lang['lbl_author_name'] = 'Author Name';
$lang['lbl_author_email'] = 'Author Email';
$lang['lbl_author_ip'] = 'IP Address';
$lang['lbl_avg_rating'] = 'Keskmine hinnang';
$lang['lbl_commentformtemplates'] = 'Comment Form Templates';
$lang['lbl_comments'] = 'Comments';
$lang['lbl_comment'] = 'Comment';
$lang['lbl_count_comments'] = 'Kommentaaride arv';
$lang['lbl_created'] = 'Created';
$lang['lbl_defaulttemplates'] = 'Default Templates';
$lang['lbl_delete_spam'] = 'Delete this Spam';
$lang['lbl_detailtemplates'] = 'Detail Templates';
$lang['lbl_edit_comment'] = 'Edit Comment';
$lang['lbl_filter'] = 'Filter';
$lang['lbl_fields'] = 'Fields';
$lang['lbl_id'] = 'ID';
$lang['lbl_key1'] = 'Key 1';
$lang['lbl_key2'] = 'Key 2';
$lang['lbl_key3'] = 'Key 3';
$lang['lbl_matching_records'] = 'Matching Records';
$lang['lbl_max_rating'] = 'Maksimaalne hinnang';
$lang['lbl_max_results'] = 'Results per Page';
$lang['lbl_messages'] = 'Messages';
$lang['lbl_min_rating'] = 'Minimaalne hinnang';
$lang['lbl_modified'] = 'Modified';
$lang['lbl_notifications'] = 'Admin Notifications';
$lang['lbl_not_spam'] = 'This is Not Spam';
$lang['lbl_of'] = 'Kokku';
$lang['lbl_page'] = 'Lehek&uuml;lg';
$lang['lbl_rating'] = 'Hinnang';
$lang['lbl_settings'] = 'Settings';
$lang['lbl_status'] = 'Status';
$lang['lbl_ratingstemplates'] = 'Ratings Templates';
$lang['lbl_summarytemplates'] = 'Summary Templates';
$lang['lbl_title'] = 'Title';
$lang['lbl_url'] = 'URL';
$lang['lbl_usernotifications'] = 'User Notifications';
$lang['mark_draft'] = 'Mark as Draft';
$lang['mark_ham'] = 'Mark as Ham';
$lang['mark_published'] = 'Mark as Published';
$lang['mark_spam'] = 'Mark as Spam';
$lang['moddescription'] = 'A module allowing searching, browsing, and viewing details about frontend users';
$lang['msg_bulk_operation_complete'] = 'Bulk action successfully completed';
$lang['msg_commentdeleted'] = 'Comment deleted';
$lang['msg_commentokay'] = 'Comment successfully added.  Thank you';
$lang['msg_commentupdated'] = 'Comment updated';
$lang['msg_field_added'] = 'Field successfully added';
$lang['msg_field_deleted'] = 'Field successfully deleted';
$lang['msg_field_updated'] = 'Field update successful';
$lang['name'] = 'Name';
$lang['no'] = 'No';
$lang['none'] = 'None';
$lang['notification_subject'] = 'A comment has been posted on your website';
$lang['param_action'] = 'Specify the behaviour of the module.  Possible values for this parameter are:
<ul>
  <li>default - Display a comment form.</li>
  <li>summary - Display a summary report of comments.</li>
  <li>ratings - Display a ratings report.</li>
  <li>detail  - Display detailed information about a specific comment.</li>
</ul>';
$lang['param_cid'] = 'Applicable to only to the <em>detail</em> action, this parameter specifies the unique identifier for the comment to display.  Normally this parameter is used only internally, as normal usage does not require explicit linking to a specific comment.';
$lang['param_commenttemplate'] = 'Applicable only in the default <em>comment form</em> action, this parameter specifies the name of a comment form template to use for generating the display.  If this parameter is not specified, the comment form template that is currently marked as &quot;default&quot; in the admin interface will be used.';
$lang['param_destpage'] = 'Applicable only in the default <em>comment form</em> action, this parameter specifies a page to redirect to after the form has been completed.';
$lang['param_detailpage'] = 'Applicable only to the summary action, this parameter can be used to specify a different page id or alias to link to for displaying detail reports about a specific comment.';
$lang['param_detailtemplate'] = 'This parameter can be used in both the summary, and detail actions to specify a non default detail template to use for the detail report';
$lang['param_inline'] = 'Applicable only to the default <em>comment form</em> action and only when policy <em>(see below)</em> is &quot;normal&quot;. This parameter if set to a non zero value specifies that the output from the form should replace the tag that was used to create the form, instead of replacing the default content area.';
$lang['param_key1'] = 'First key in the <em>triplet of keys</em> that make up a unique identifier for a comment list.  If this parameter is not specified, then it is assumed that you are referring to a content page';
$lang['param_key2'] = 'Second key in the <em>triplet of keys</em> that make up a unique identifier for a comment list.  If this parameter is not specified, the current page id will be used.';
$lang['param_key3'] = 'Third key in the <em>triplet of keys</em> that make up a unique identifier for a comment list.  This parameter is entirely optional for normal use, but may be required in extenuating circumstances when two keys are not enough information to make the comment list unique.';
$lang['param_pagelimit'] = 'Applicable only to the <em>summary</em> action, this parameter specifies the number of comments to display.';
$lang['param_policy'] = 'Applicable only in the default <em>comment form</em> action, this parameter specifies a specific behaviour policy for the form.
<ul>
<li>normal - <em>(default)</em><br/>
-- The system will not redirect to any page, instead it will output an information message or error according to the template that is selected.  This is similar behaviour to all other modules.  The &quot;destpage&quot; parameter has no effect with this policy.<li>
<li>session<br/>
-- On form submission, the system will store form variables in the session, and redirect back to the originating url.. it will then retrieve the values from the session to re-populate the form, and display any optional error.  The &quot;inline&quot; parameter has no effect with this policy.</li>
</ul>';
$lang['param_ratingstemplate'] = 'Applicable only to the <em>ratings</em> action, this parameter can name a non default ratings template to use for the display.';
$lang['param_showall'] = 'Applicable only to the <em>summary</em> action, this parameter indicates that all relevant posts should be displayed, independant of status. The default setting is to display only published comments.';
$lang['param_sortby'] = 'Applicable only in the <em>summary</em> action, this parameter specifies the sorting of the returned results.  Possible values are:
<ul>
  <li>rating</li>
  <li>title</li>
  <li>status - This option is only useful with the showall parameter.</li>
  <li>author_name</li>
  <li>author_email</li>
  <li>author_ip</li>
  <li>created <em>(default)</em></li>
  <li>modified</li>
<li>random</li>
  <li>Custom Field <strong>F:<em>fieldname</em></strong>
  <p>-- It is possible to sort by custom fields, by specifying &quot;F:thename&quot; as the sortby value.</p>
  </li>
</ul>';
$lang['param_sortorder'] = 'Applicable only to the default <em>contact form</em> action, this aprameter specifies the order of the returned results, relative to the sorting parameter.  Possible values are:
<ul>
  <li>ASC - Ascending order</li>
  <li>DESC - <em>(default)</em> Descending order</li>
</ul>';
$lang['postinstall'] = 'The CGFeedback module is now ready for configuration';
$lang['postuninstall'] = 'The CGFeedback module, and all associated data has been uninstalled from the database';
$lang['prompt_add_comment'] = 'Lisa &uuml;levaade sellele artiklile';
$lang['prompt_add_field'] = 'Add a new field';
$lang['prompt_allow_comment_html'] = 'Allow commentor to include html in comments';
$lang['prompt_allow_comment_wysiwyg'] = 'Allow use of the wysiwyg editor for comments?';
$lang['prompt_author_email'] = 'Autori email';
$lang['prompt_author_name'] = 'Autori nimi';
$lang['prompt_author_notify'] = 'Notify Author of additional comments on this thread';
$lang['prompt_captcha_module'] = 'Module to use to use for CAPTCHA test';
$lang['prompt_comment'] = 'Lisakommentaarid';
$lang['prompt_default_content'] = 'Default content for this field (may be left empty)';
$lang['prompt_dropdown_options'] = 'Options for this dropdown or multiselect field.  One line per entry.<br/>Values can be seperated from labels using an = <em>i.e: Female=f</em>';
$lang['prompt_field_length'] = 'Field Length';
$lang['prompt_field_maxlength'] = 'Field Maximum Length';
$lang['prompt_field_name'] = 'Field Name';
$lang['prompt_field_type'] = 'Field Type';
$lang['prompt_general_settings'] = 'General Settings';
$lang['prompt_is_email_html'] = 'Send message in HTML format?';
$lang['prompt_message_template'] = 'Message Template';
$lang['prompt_moderate_comments'] = 'Modererate all comments';
$lang['prompt_notify'] = 'Teata mulle uutest kommentaaridest sellele lehele';
$lang['prompt_quality_control_settings'] = 'Quality Control Settings';
$lang['prompt_rating'] = 'Hinnang';
$lang['prompt_send_notification_to_group'] = 'Send notifications of new comments to members of this group.<br/><em>(set to none to disable notifications)</em>';
$lang['prompt_spamcheck_module'] = 'Module to use to detect spam in comments';
$lang['prompt_status'] = 'Status';
$lang['prompt_subject'] = 'Subject';
$lang['prompt_success_msg'] = 'Message displayed after successfull comment submission';
$lang['prompt_title'] = 'Kommentaari pealkiri';
$lang['prompt_use_cookies'] = 'Save user details in a cookie';
$lang['prompt_use_wysiwyg'] = 'Allow use of wysiwyg for this field';
$lang['prompt_your_email'] = 'Sinu emaili aadress';
$lang['prompt_your_name'] = 'Sinu nimi';
$lang['prompt_your_rating'] = 'Sinu hinnang';
$lang['published'] = 'Published';
$lang['reset_to_defaults'] = 'Reset to Factory Default';
$lang['spam'] = 'Spam';
$lang['submit'] = 'Saada';
$lang['title_add_field'] = 'Add Field';
$lang['type'] = 'Type';
$lang['usernotification_subject'] = 'Sind huvitavale teemale on postitatud vastus';
$lang['yes'] = 'Yes';
$lang['utma'] = '156861353.3215545266732019000.1241091787.1255086083.1255092103.160';
$lang['utmz'] = '156861353.1254469083.145.28.utmccn=(organic)|utmcsr=google|utmctr=cmsms requirements|utmcmd=organic';
$lang['qca'] = '1240683615-58409973-79915303';
$lang['utmc'] = '156861353';
$lang['utmb'] = '156861353.1.10.1255092103';
?>