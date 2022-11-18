<?php
$lang['addedit_commentform_template'] = 'Pridať/Upraviť &scaron;abl&oacute;nu formul&aacute;ra';
$lang['addedit_detail_template'] = 'Pridať/Upraviť &scaron;abl&oacute;nu detaulu';
$lang['addedit_ratings_template'] = 'Pridať/Upraviť &scaron;abl&oacute;nu hodnotenia';
$lang['addedit_summary_template'] = 'Pridať/Upraviť &scaron;abl&oacute;nu prehľadu';
$lang['ask_delete_field'] = 'Ste si ist&yacute;, že chcete odstr&aacute;niť toto pole?';
$lang['ask_really_uninstall'] = 'Ste si ist&yacute;?  Pr&iacute;dete o v&scaron;etk&yacute; d&aacute;ta s&uacute;visiace s t&yacute;mto modulom';
$lang['cancel'] = 'Zru&scaron;iť';
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
$lang['confirm_bulk_operations'] = 'Ste si ist&yacute;, že chcete urobiť akciu na vybran&eacute; koment&aacute;re?';
$lang['confirm_delete_comment'] = 'Ste si ist&yacute;, že chcete odstr&aacute;niť tento koment&aacute;re';
$lang['count'] = 'Počet';
$lang['delete'] = 'Odstr&aacute;niť';
$lang['delete_this_field'] = 'Odstr&aacute;niť toto pole';
$lang['draft'] = 'Rozp&iacute;san&eacute;';
$lang['edit'] = 'Upraviť';
$lang['edit_this_field'] = 'Upraviť toto pole';
$lang['error_alreadyvoted'] = 'Už ste hlasovali';
$lang['error_bulk_nothingselected'] = 'Neboli vybran&eacute; žiadne koment&aacute;re pre t&uacute;to akciu';
$lang['error_bulk_operation_failed'] = 'Hromadnn&aacute; akcia zlyhala';
$lang['error_captchafailed'] = 'Vložen&yacute; text sa nezhoduje';
$lang['error_comment_update_failed'] = 'Aktualiz&aacute;cia koment&aacute;ra ne&uacute;spe&scaron;n&aacute;';
$lang['error_dberror'] = 'Chyba datab&aacute;ze';
$lang['error_emptyemail'] = 'Mus&iacute;te zadať e-mailov&uacute; adresu';
$lang['error_emptycomment'] = 'Mus&iacute;te zadať koment&aacute;r';
$lang['error_emptyname'] = 'Mus&iacute;te zadať meno';
$lang['error_emptytitle'] = 'Mus&iacute;te zadať nadpis pr&iacute;spevku';
$lang['error_invalidrating'] = 'Neplatn&eacute; hodnoteni';
$lang['error_nameexists'] = 'Položka s t&yacute;mto n&aacute;zvom už existuje';
$lang['error_missingvalue'] = 'Ch&yacute;ba povinn&eacute; pole: %s';
$lang['error_missingparam'] = 'Ch&yacute;ba povinn&eacute; pole';
$lang['error_spam'] = 'T&aacute;to spr&aacute;va bola identifikovan&aacute; ako spam';
$lang['fieldtype_0'] = 'Text';
$lang['fieldtype_1'] = 'E-mailov&aacute; adresa';
$lang['fieldtype_2'] = 'Textov&aacute; oblasť';
$lang['fieldtype_3'] = 'V&yacute;berov&eacute; pole';
$lang['fieldtype_4'] = 'Viacn&aacute;sobn&eacute; v&yacute;berov&eacute; pole';
$lang['friendlyname'] = 'Koment&aacute;re s hodnoten&iacute;m';
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
<li>Template Control - All output is controlled via smarty templates.  Multiple different versions of each display template are allowed.</li>
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
$lang['info_allow_comment_html'] = '<strong>Pozn&aacute;mka:</strong> Nepouž&iacute;vajte s vy&scaron;ie uveden&iacute;m nastaven&iacute;m wysiwyg editora';
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
$lang['lbl_all'] = 'V&scaron;etky';
$lang['lbl_any'] = 'Ak&eacute;koľvek';
$lang['lbl_author'] = 'Autor';
$lang['lbl_author_name'] = 'Meno autora';
$lang['lbl_author_email'] = 'E-mail autora';
$lang['lbl_author_ip'] = 'Ip adresa';
$lang['lbl_avg_rating'] = 'Priemern&eacute; hodnotenie';
$lang['lbl_commentformtemplates'] = '&Scaron;abl&oacute;ny formul&aacute;ra';
$lang['lbl_comments'] = 'Koment&aacute;re';
$lang['lbl_comment'] = 'Koment&aacute;r';
$lang['lbl_count_comments'] = 'Počet koment&aacute;re';
$lang['lbl_created'] = 'Vytvoren&eacute;';
$lang['lbl_defaulttemplates'] = 'Prednastaven&eacute; &scaron;abl&oacute;ny';
$lang['lbl_delete_spam'] = 'Odstr&aacute;niť tento spam';
$lang['lbl_detailtemplates'] = '&Scaron;abl&oacute;ny detailu';
$lang['lbl_edit_comment'] = 'Upraviť koment&aacute;r';
$lang['lbl_filter'] = 'Filter';
$lang['lbl_fields'] = 'Polia';
$lang['lbl_id'] = 'ID';
$lang['lbl_key1'] = 'Kľ&uacute;čov&eacute; slovo 1';
$lang['lbl_key2'] = 'Kľ&uacute;čov&eacute; slovo 2';
$lang['lbl_key3'] = 'Kľ&uacute;čov&eacute; slovo 3';
$lang['lbl_matching_records'] = 'Zhodn&eacute; z&aacute;znamy';
$lang['lbl_max_rating'] = 'Maxim&aacute;lna hodnota hlasovania';
$lang['lbl_max_results'] = 'Počet na stranu';
$lang['lbl_messages'] = 'Spr&aacute;vy';
$lang['lbl_min_rating'] = 'Minim&aacute;lna hodnota hlasovanie';
$lang['lbl_modified'] = 'Upraven&aacute;';
$lang['lbl_notifications'] = 'Notifik&aacute;cie administr&aacute;tora';
$lang['lbl_not_spam'] = 'Toto nie je spam';
$lang['lbl_of'] = 'z';
$lang['lbl_page'] = 'Strana';
$lang['lbl_rating'] = 'Hlasovanie';
$lang['lbl_settings'] = 'Nastavenia';
$lang['lbl_status'] = 'Stav';
$lang['lbl_ratingstemplates'] = '&Scaron;abl&oacute;ny hlasovaniea';
$lang['lbl_summarytemplates'] = '&Scaron;abl&oacute;na prehľadu';
$lang['lbl_title'] = 'Nadpis';
$lang['lbl_url'] = 'Url';
$lang['lbl_usernotifications'] = 'Notifik&aacute;cie už&iacute;vateľa';
$lang['mark_draft'] = 'Označiť ako rozp&iacute;san&eacute;';
$lang['mark_ham'] = 'Označiť ako Ham';
$lang['mark_published'] = 'Označiť ako publikovan&eacute;';
$lang['mark_spam'] = 'Označiť ako spam';
$lang['moddescription'] = 'A flexible module for commenting and rating for a specific item (news, product, company, ...) in a website.  This is a flexible module that can be used for both a ratings system, or a comments/feedback system.  It supports extensive administrator control, including spam checking (with the akismet module), and security (with the captcha module).';
$lang['msg_bulk_operation_complete'] = 'Hromadn&aacute; akcia prebehla v poriadku';
$lang['msg_commentdeleted'] = 'Koment&aacute;r odstr&aacute;nen&yacute;';
$lang['msg_commentokay'] = 'Koment&aacute;re bol &uacute;spe&scaron;ne pridan&yacute;. Ďakujeme';
$lang['msg_commentupdated'] = 'Koment&aacute;r aktualizovan&yacute;';
$lang['msg_field_added'] = 'Pole &uacute;spe&scaron;ne pridan&eacute;';
$lang['msg_field_deleted'] = 'Pole &uacute;spe&scaron;ne odstr&aacute;nen&eacute;';
$lang['msg_field_updated'] = 'Pole &uacute;spe&scaron;ne aktualizovan&eacute;';
$lang['name'] = 'Meno';
$lang['no'] = 'Nie';
$lang['none'] = 'Žiadne';
$lang['notification_subject'] = 'Koment&aacute;re bol zaznamenan&yacute; na webe ';
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
  <li>Custom Field <strong>F:<em>fieldname</em></strong>
  <p>-- It is possible to sort by custom fields, by specifying &quot;F:thename&quot; as the sortby value.</p>
  </li>
</ul>';
$lang['param_sortorder'] = 'Applicable only to the default <em>contact form</em> action, this aprameter specifies the order of the returned results, relative to the sorting parameter.  Possible values are:
<ul>
  <li>ASC - Ascending order</li>
  <li>DESC - <em>(default)</em> Descending order</li>
</ul>';
$lang['param_commentrequired'] = 'Applicable to the default action, this integer parameter can be used to specify if the comment is a required field.';
$lang['param_emailrequired'] = 'Applicable to the default action, this integer parameter can be used to specify if the email address is a required field.';
$lang['param_namerequired'] = 'Applicable to the default action, this integer parameter can be used to specify if the name is a required field.';
$lang['param_ratingoptions'] = 'Applicable to the default action, this parameter allows specifying a list of comma seperated values to use for ratings options.';
$lang['param_titlerequired'] = 'Applicable to the default action, this integer parameter can be used to specify if the title is a required field.';
$lang['param_summarytemplate'] = 'Applicable to the summary action, this parameter allows specifying the name of a non default summary template.';
$lang['param_voteonce'] = 'Applicable to the default form, this parameter allows specifying that the user can only vote once (by IP address). This value must be a positive integer between 1 and 3.  A value of 1 will only search the first key, a value of 2 will search both key1 and key2, and a value of 3 will search key1, key2, and key3';
$lang['postinstall'] = 'Module je pripraven&yacute; na konfigur&aacute;ciu ';
$lang['postuninstall'] = 'Modul a v&scaron;etky d&aacute;ta bud&uacute; odin&scaron;talovan&eacute;';
$lang['prompt_add_comment'] = 'Pridať nov&yacute; koment&aacute;r';
$lang['prompt_add_field'] = 'Pridať pole';
$lang['prompt_allow_comment_html'] = 'Povoliť vkladať HTML';
$lang['prompt_allow_comment_wysiwyg'] = 'Povoliť wysiwyg editor pre koment&aacute;re?';
$lang['prompt_author_email'] = 'E-mail';
$lang['prompt_author_name'] = 'Meno';
$lang['prompt_author_notify'] = 'Notifik&aacute;cia pre ďal&scaron;ie pr&iacute;spevky v tomto f&oacute;re';
$lang['prompt_captcha_module'] = 'Module to use to use for CAPTCHA test';
$lang['prompt_comment'] = 'Ďal&scaron;ie koment&aacute;re';
$lang['prompt_default_content'] = 'Prednastaven&yacute; obsah pre pole (m&ocirc;že byť pr&aacute;zdne)';
$lang['prompt_dropdown_options'] = 'Vlastnosti pre v&yacute;berov&eacute; pole (aj viacv&yacute;berov&eacute;). Každ&aacute; položka na nov&yacute; riadok  .<br/>Hodnoty bud&uacute; od popiskov oddelen&eacute;   = <em>napr.: Žena=zena</em>';
$lang['prompt_field_length'] = 'Dĺžka poľa';
$lang['prompt_field_maxlength'] = 'Maxim&aacute;lna dĺžka poľa';
$lang['prompt_field_name'] = 'N&aacute;zov poľa';
$lang['prompt_field_type'] = 'Typ poľa';
$lang['prompt_general_settings'] = 'Hlavn&eacute; nastavenia';
$lang['prompt_is_email_html'] = 'Odoslať e-mail v HTML form&aacute;te';
$lang['prompt_message_template'] = '&Scaron;abl&oacute;na spr&aacute;vy';
$lang['prompt_moderate_comments'] = 'Moderovať koment&aacute;re';
$lang['prompt_notify'] = 'Notifik&aacute;cia nov&yacute;ch pr&iacute;spevkov';
$lang['prompt_quality_control_settings'] = 'Nastavenia kvality';
$lang['prompt_rating'] = 'Hodnotenie';
$lang['prompt_send_notification_to_group'] = 'Odoslať notifik&aacute;cie pre v&scaron;etk&yacute;ch členov skupiny.<br/><em>(nastaven&eacute; na žiadne sa bude tv&aacute;riť ako vypnut&eacute;)</em>';
$lang['prompt_spamcheck_module'] = 'Modul pre detekciu spamu v koment&aacute;roch';
$lang['prompt_status'] = 'Stav';
$lang['prompt_subject'] = 'Predmet';
$lang['prompt_success_msg'] = 'Spr&aacute;va zobrazen&aacute; po &uacute;spe&scaron;nom vložen&iacute; koment&aacute;ra';
$lang['prompt_title'] = 'Nadpis koment&aacute;ra';
$lang['prompt_use_cookies'] = 'Uložiť detaily o uživateľovi do cookie  ';
$lang['prompt_use_wysiwyg'] = 'Povoliť wysiwyg editore pre toto pole';
$lang['prompt_your_email'] = 'V&aacute;&scaron; E-mail';
$lang['prompt_your_name'] = 'Va&scaron;e meno';
$lang['prompt_your_rating'] = 'Va&scaron;e hodnotenie';
$lang['published'] = 'Publikovan&eacute;';
$lang['reset_to_defaults'] = 'Nastaviť na prednastaven&eacute; hodnoty';
$lang['spam'] = 'Spam';
$lang['statistics'] = '&Scaron;tatistiky';
$lang['submit'] = 'Odoslať';
$lang['title_add_field'] = 'Pridať pole';
$lang['type'] = 'Typ';
$lang['usernotification_subject'] = 'Bola odoslan&aacute; odpoveď vo f&oacute;re, v ktorom pr&iacute;j&iacute;mate notifik&aacute;cie   ';
$lang['yes'] = '&Aacute;no';
$lang['utma'] = '156861353.1423109725.1280259016.1283883395.1284147995.32';
$lang['utmz'] = '156861353.1284147995.32.30.utmcsr=dev.cmsmadesimple.org|utmccn=(referral)|utmcmd=referral|utmcct=/project/files/873';
$lang['qca'] = 'P0-748439131-1280259017524';
$lang['utmb'] = '156861353.2.10.1284147995';
$lang['utmc'] = '156861353';
?>