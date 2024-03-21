<?php
$lang['addedit_commentform_template'] = 'Hozz&aacute;sz&oacute;l&aacute;s űrlap sablon hozz&aacute;ad&aacute;sa/szerkeszt&eacute;se';
$lang['addedit_detail_template'] = 'R&eacute;szletek sablon hozz&aacute;ad&aacute;sa/szerkeszt&eacute;se';
$lang['addedit_ratings_template'] = '&Eacute;rt&eacute;kel&eacute;s sablon hozz&aacute;ad&aacute;sa/szerkeszt&eacute;se';
$lang['addedit_summary_template'] = '&Ouml;sszefoglal&oacute; sablon hozz&aacute;ad&aacute;sa/szerkeszt&eacute;se';
$lang['ask_delete_field'] = 'Biztosan t&ouml;r&ouml;lni akar&ouml;d ezt a mezőmeghat&aacute;roz&aacute;st?';
$lang['ask_really_uninstall'] = 'Biztosan folytatni akarod? Ha igen, a modullal t&aacute;rs&iacute;tott &ouml;sszes adat t&ouml;rl&eacute;sre ker&uuml;l.';
$lang['auto'] = 'Automata';
$lang['cancel'] = 'M&eacute;gsem';
$lang['confirm_bulk_operations'] = 'Biztosan v&eacute;grehajtod ezt a feladatot ezeken a hozz&aacute;sz&oacute;l&aacute;soko?';
$lang['confirm_delete_comment'] = 'Biztosan t&ouml;r&ouml;lni akarod ezt a hozz&aacute;sz&oacute;l&aacute;st?';
$lang['count'] = 'Sz&aacute;ml&aacute;l&oacute;';
$lang['delete'] = 'T&ouml;rl&eacute;s';
$lang['delete_this_field'] = 'T&ouml;r&ouml;ld ezt a mezőmeghat&aacute;roz&aacute;st';
$lang['draft'] = 'Piszkozat';
$lang['edit'] = 'Szerkeszt&eacute;s';
$lang['edit_this_field'] = 'Szerkeszd ezt a mezőmeghat&aacute;roz&aacute;st';
$lang['error_alreadyvoted'] = 'M&aacute;r szavazt&aacute;l ezen az elemen';
$lang['error_bulk_nothingselected'] = 'Egy hozz&aacute;sz&oacute;l&aacute;s sem volt kiv&aacute;lasztva amelyen v&eacute;gre lehet hajtani t&ouml;meges feladatot';
$lang['error_bulk_operation_failed'] = 'T&ouml;meges feladat v&eacute;grehajt&aacute;sa sikertelen';
$lang['error_captchafailed'] = 'A megadott sz&ouml;veg nem egyezik a k&eacute;pen levővel';
$lang['error_comment_update_failed'] = 'Hozz&aacute;sz&oacute;l&aacute;s friss&iacute;t&eacute;se sikertelen';
$lang['error_dberror'] = 'Adatb&aacute;zis hiba';
$lang['error_emailinvalid'] = 'A megadott email c&iacute;m &eacute;rv&eacute;nytelen';
$lang['error_emptyemail'] = 'Meg kell adnod egy email c&iacute;met';
$lang['error_emptycomment'] = 'Meg kell adnod egy hozz&aacute;sz&oacute;l&aacute;st';
$lang['error_emptyname'] = 'Meg kell adnod a neved';
$lang['error_emptytitle'] = 'Egy c&iacute;met kell adnod';
$lang['error_invalidrating'] = '&Eacute;rv&eacute;nytelen &eacute;rt&eacute;kel&eacute;s';
$lang['error_nameexists'] = 'Ilyen nevű elem m&aacute;r l&eacute;tezik';
$lang['error_missingvalue'] = 'Egy sz&uuml;ks&eacute;ges &eacute;rt&eacute;k hi&aacute;nyzik: %s';
$lang['error_missingparam'] = 'Egy sz&uuml;ks&eacute;ges param&eacute;ter hi&aacute;nyzik';
$lang['error_spam'] = 'Ezt az &uuml;zenetet nemk&iacute;v&aacute;ntk&eacute;nt azonos&iacute;tottuk';
$lang['fieldtype_0'] = 'Sz&ouml;veg';
$lang['fieldtype_1'] = 'Email c&iacute;m';
$lang['fieldtype_2'] = 'Sz&ouml;veges mező';
$lang['fieldtype_3'] = 'Leg&ouml;rd&uuml;lő';
$lang['fieldtype_4'] = 'T&ouml;bbsz&ouml;r&ouml;s v&aacute;laszt&aacute;s';
$lang['friendlyname'] = 'Calguys Feedback Modul';
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
$lang['info_allow_comment_html'] = '<strong>Megjegyz&eacute;s:</strong> Ne haszn&aacute;ld ezt a fenti wysiwyg be&aacute;ll&iacute;t&aacute;s n&eacute;lk&uuml;l';
$lang['info_captcha_module'] = 'Select a module from the list to use for providing functionality to ensure that there is a human entering data into the form.';
$lang['info_commentform_template'] = 'Comment Form templates display a form which allows the user to enter a comment, some ancillary information, and to rate the particular item.  Here you design the way in which you want that information laid out.  You may use any smarty logic or variables that have been designed previously, or the ones made available specifically for this view';
$lang['info_commentform_templates_tab'] = 'This tab contains the list of available summary templates.  One of them is marked as default.  The default one will be used when no alternate template name is supplied on the tag that calls this module';
$lang['info_detail_template'] = 'Detail templates display detailed information about a specific frontend user.  Here you design the way in which you want that information laid out.  You may use any smarty logic or variables that have been designed previously, or the ones made available specifically for this view';
$lang['info_detail_templates_tab'] = 'This tab contains the list of available detail templates.  One of them is marked as default.  The default one will be used when no alternate template name is supplied on the tag that calls this module';
$lang['info_email_validate'] = 'Hat&aacute;rozd meg hogyan &eacute;rv&eacute;nyes&iacute;ts&uuml;k a megadott email c&iacute;met';
$lang['info_filter_authoremail'] = 'Enter a string that will be matched against all email addresses';
$lang['info_filter_authorname'] = 'Enter a string that will be matched against all author names';
$lang['info_filter_title'] = 'Enter a string that will be matched against all comment titles';
$lang['info_moderate_comments'] = 'Enabling this option will ensure that an authorized administrator must approve each comment before it can be displayed on the website';
$lang['info_moderation_iplist'] = 'Specify one rule per line.  Valid syntax includes a complete ip address or an ip address mask specified as xxx.xxx.xxxx.xxx/yy  i.e:  192.168.0.0/16 to match everything in the 192.168.0 address range.';
$lang['info_moderation_patterns'] = 'When moderation of comments is set to &quot;automatic&quot; and the comment supplied matches one or more of the rules specified here, the message will be marked as &quot;draft&quot; and await moderation by an administrator.  Enter one rule (stop word, phrase, or special rule identifier) per line..  Special rule identifiers are: __EMAIL__  to match any email address,  __URL__ to match any URL, __IP_ADDRESS__ to match any IP address.';
$lang['info_spamcheck_module'] = 'Select a module from the list to use for checking spam in submitted messages';
$lang['info_ratings_template'] = 'Ratings views display statistical information about the ratings for a particular item <em>(triplet of keys)</em>.  It includes the min,max,mean,and median ratings, and the number of ratings, These templates you design the way in which you want that information laid out.  You may use any smarty logic or variables that have been designed previously, or the ones made available specifically for this view';
$lang['info_ratings_templates_tab'] = 'This tab contains the list of available ratings templates.  One of them is marked as default.  The default one will be used when no alternate template name is supplied on the tag that calls this module';
$lang['info_summary_template'] = 'Summary templates display information about a particular viewed items <em>(triplet of keys)</em>.  Here you design the way in which you want that information laid out.  You may use any smarty logic or variables that have been designed previously, or the ones made available specifically for this view';
$lang['info_summary_templates_tab'] = 'This tab contains the list of available summary templates.  One of them is marked as default.  The default one will be used when no alternate template name is supplied on the tag that calls this module';
$lang['info_sysdflt_commentform_template'] = 'Alap&eacute;rtelmezett rendszer űrlap sablon';
$lang['info_sysdflt_detail_template'] = 'Alap&eacute;rtelmezett rendszer R&eacute;szlet n&eacute;zeti sablon';
$lang['info_sysdflt_ratings_template'] = 'Alap&eacute;rtelmezett rendszer &Eacute;rt&eacute;kel&eacute;si sablon';
$lang['info_sysdflt_summary_template'] = 'Alap&eacute;rtelmezett rendszer &Ouml;sszegz&eacute;si sablon';
$lang['info_sysdflt_template'] = 'Altering this template will have no immediate effect on any output.  This form controls the value of the template that is created when you click &quot;New Template&quot; in the appropriate template tab.';
$lang['info_use_cookies'] = 'Szerző neve &eacute;s email c&iacute;me egy s&uuml;tiben (cookie) t&aacute;rol&oacute;dik k&eacute;sőbbi haszn&aacute;latra';
$lang['info_use_wysiwyg'] = '<strong>Megjegyz&eacute;s:</strong> ez fel&uuml;l&iacute;rja az &ouml;sszes testreszabott mezőn &eacute;s a hozz&aacute;sz&oacute;l&aacute;s mezőn levő wysiwyg be&aacute;ll&iacute;t&aacute;st';
$lang['info_word_limit'] = 'Hat&aacute;rozd meg a maxim&aacute;lisan haszn&aacute;lhat&oacute; szavak sz&aacute;m&aacute;t a felhaszn&aacute;l&oacute; &aacute;ltal megadott hozz&aacute;sz&oacute;l&aacute;sban. Ennek az opci&oacute;nak semmi hat&aacute;sa, ha a fenti opci&oacute;k b&aacute;rmelyike be van kapcsolva. &Iacute;rj 0-t hogy kikapcsold.';
$lang['lbl_agelimit'] = 'Maxim&aacute;lis kor (napokban)';
$lang['lbl_all'] = 'Mindenik';
$lang['lbl_any'] = 'B&aacute;rmelyik';
$lang['lbl_author'] = 'Szerző';
$lang['lbl_author_name'] = 'Szerző neve';
$lang['lbl_author_email'] = 'Szerző email';
$lang['lbl_author_ip'] = 'IP c&iacute;m';
$lang['lbl_avg_rating'] = '&Aacute;tlagos &eacute;rt&eacute;kel&eacute;s';
$lang['lbl_commentformtemplates'] = 'Hozz&aacute;sz&oacute;l&aacute;s űrlap sablonok';
$lang['lbl_comments'] = 'Hozz&aacute;sz&oacute;l&aacute;sok';
$lang['lbl_comment'] = 'Hozz&aacute;sz&oacute;l&aacute;s';
$lang['lbl_count_comments'] = 'Hozz&aacute;sz&oacute;l&aacute;sok sz&aacute;ma';
$lang['lbl_created'] = 'L&eacute;trehozva';
$lang['lbl_defaulttemplates'] = 'Alap&eacute;rtelmezett sablonok';
$lang['lbl_delete_spam'] = 'Nemk&iacute;v&aacute;ntak t&ouml;rl&eacute;se';
$lang['lbl_detailtemplates'] = 'R&eacute;szletek sablonok';
$lang['lbl_edit_comment'] = 'Hozz&aacute;sz&oacute;l&aacute;s m&oacute;dos&iacute;t&aacute;sa';
$lang['lbl_filter'] = 'Szűrő';
$lang['lbl_fields'] = 'Mezők';
$lang['lbl_id'] = 'ID';
$lang['lbl_key1'] = '1. kulcs';
$lang['lbl_key2'] = '2. kulcs';
$lang['lbl_key3'] = '3. kulcs';
$lang['lbl_matching_records'] = 'Egyező tal&aacute;lat';
$lang['lbl_max_rating'] = 'Maxim&aacute;lis &eacute;rt&eacute;kel&eacute;si &eacute;rt&eacute;k';
$lang['lbl_max_results'] = 'Tal&aacute;lat oldalank&eacute;nt';
$lang['lbl_messages'] = '&Uuml;zenetek';
$lang['lbl_min_rating'] = 'Minim&aacute;lis &eacute;rt&eacute;kel&eacute;si &eacute;rt&eacute;k';
$lang['lbl_modified'] = 'M&oacute;dos&iacute;tva';
$lang['lbl_notifications'] = 'Admin &eacute;rtes&iacute;t&eacute;sek';
$lang['lbl_not_spam'] = 'Ez nem nemk&iacute;v&aacute;nt (spam)';
$lang['lbl_of'] = '-b&oacute;l';
$lang['lbl_page'] = 'Oldal';
$lang['lbl_rating'] = '&Eacute;rt&eacute;kel&eacute;s';
$lang['lbl_settings'] = 'Be&aacute;ll&iacute;t&aacute;sok';
$lang['lbl_status'] = '&Aacute;llapot';
$lang['lbl_ratingstemplates'] = '&Eacute;rt&eacute;kel&eacute;s sablonok';
$lang['lbl_summarytemplates'] = '&Ouml;sszefoglal&oacute; sablonok';
$lang['lbl_title'] = 'C&iacute;m';
$lang['lbl_url'] = 'URL';
$lang['lbl_usernotifications'] = 'Felhaszn&aacute;l&oacute; &eacute;rtes&iacute;t&eacute;sek';
$lang['mark_draft'] = 'Megjel&ouml;l&eacute;s iszkozatk&eacute;nt';
$lang['mark_ham'] = 'Megje&eacute;&ouml;l&eacute;s sonkak&eacute;nt [(??)Mark as Ham]';
$lang['mark_published'] = 'Megjel&ouml;l&eacute;s k&ouml;zz&eacute;tettk&eacute;nt';
$lang['mark_spam'] = 'Megjel&ouml;l&eacute;s nemk&iacute;v&aacute;ntk&eacute;nt';
$lang['message_patternmatch'] = 'Csak ha az &uuml;zenet megfelel egy vagy t&ouml;bb al&aacute;bb felsorolt mint&aacute;nak';
$lang['moddescription'] = 'A flexible module for commenting and rating for a specific item (news, product, company, ...) in a website.  This is a flexible module that can be used for both a ratings system, or a comments/feedback system.  It supports extensive administrator control, including spam checking (with the akismet module), and security (with the captcha module).';
$lang['msg_bulk_operation_complete'] = 'T&ouml;meges feladat v&eacute;grehajtva';
$lang['msg_commentdeleted'] = 'Hozz&aacute;sz&oacute;l&aacute;s t&ouml;r&ouml;lve';
$lang['msg_commentokay'] = 'Hozz&aacute;sz&oacute;l&aacute;s sikeresen elk&uuml;ldve. K&ouml;sz&ouml;nj&uuml;k.';
$lang['msg_commentupdated'] = 'Hozz&aacute;sz&oacute;l&aacute;s friss&iacute;tve';
$lang['msg_field_added'] = 'Mező sikeresen hozz&aacute;adva';
$lang['msg_field_deleted'] = 'Mező sikeresen t&ouml;r&ouml;lve';
$lang['msg_field_updated'] = 'Mező friss&iacute;t&eacute;se sikeres';
$lang['name'] = 'N&eacute;v';
$lang['no'] = 'Nem';
$lang['none'] = 'Semelyik';
$lang['notification_subject'] = 'Egy hozz&aacute;sz&oacute;l&aacute;s k&ouml;zz&eacute;t&eacute;ve a weboldaladon';
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
$lang['param_detailpage'] = 'Applicable only to the summary action, this parameter can be used to specify a different page id or alias to link to for displaying detail reports about a specific comment.  This parameter has no function when pretty urls are enabled.';
$lang['param_detailtemplate'] = 'This parameter can be used in both the summary, and detail actions to specify a non default detail template to use for the detail report';
$lang['param_inline'] = 'Applicable only to the default <em>comment form</em>, and summary actions This parameter if set to a non zero value specifies that the output from the form should replace the tag that was used to create the form, instead of replacing the default content area. In the default <em>(comment form)</em> action this parameter is effective only when policy <em>(see below)</em> is &quot;normal&quot;. ';
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
$lang['param_commentrequired'] = 'Applicable to the default action, this integer parameter can be used to specify if the comment is a required field.';
$lang['param_emailrequired'] = 'Applicable to the default action, this integer parameter can be used to specify if the email address is a required field.';
$lang['param_namerequired'] = 'Applicable to the default action, this integer parameter can be used to specify if the name is a required field.';
$lang['param_noredirect'] = 'Applicable to the default action, when session is set to &quot;policy&quot; will specify that when a comment is successfully added not to perform any redirection.';
$lang['param_ratingoptions'] = 'Applicable to the default action, this parameter allows specifying a list of comma seperated values to use for ratings options.';
$lang['param_redirectextra'] = 'Applicable to the default action, and only when the destpage parameter is NOT used.  this parameter allows specifying extra information to append to the url when redirecting.  i.e:  you may specify redirectextra=&quot;#someanchorname&quot; to specify an anchor to redirect to.';
$lang['param_titlerequired'] = 'Applicable to the default action, this integer parameter can be used to specify if the title is a required field.';
$lang['param_summarytemplate'] = 'Applicable to the summary action, this parameter allows specifying the name of a non default summary template.';
$lang['param_voteonce'] = 'Applicable to the default form, this parameter allows specifying that the user can only vote once (by IP address). This value must be a positive integer between 1 and 3.  A value of 1 will only search the first key, a value of 2 will search both key1 and key2, and a value of 3 will search key1, key2, and key3';
$lang['postinstall'] = 'A CGFeedback modul k&eacute;szen &aacute;ll a be&aacute;ll&iacute;t&aacute;sra';
$lang['postuninstall'] = 'F CGFeedback modul &eacute;s minden hozz&aacute;fűződő inform&aacute;ci&oacute; elt&aacute;vol&iacute;tva az adatb&aacute;zisb&oacute;l';
$lang['prompt_add_comment'] = '&Eacute;rt&eacute;kel&eacute;s hozz&aacute;ad&aacute;sa';
$lang['prompt_add_field'] = '&Uacute;j mező hozz&aacute;ad&aacute;sa';
$lang['prompt_allow_comment_html'] = 'Hozz&aacute;sz&oacute;l&oacute; haszn&aacute;lhat html-t';
$lang['prompt_allow_comment_wysiwyg'] = 'Wysiwyg Haszn&aacute;lat&aacute;nak enged&eacute;lyez&eacute;se a hozz&aacute;sz&oacute;l&aacute;sokhoz?';
$lang['prompt_author_email'] = 'Szerző email c&iacute;me';
$lang['prompt_author_name'] = 'Szerző neve';
$lang['prompt_author_notify'] = 'Szerző &eacute;rtes&iacute;t&eacute;se tov&aacute;bbi hozz&aacute;sz&oacute;l&aacute;sok eset&eacute;n';
$lang['prompt_captcha_module'] = 'CAPTCHA ellenőrz&eacute;sre haszn&aacute;lt modul';
$lang['prompt_comment'] = 'Tov&aacute;bbi megjegyz&eacute;sek';
$lang['prompt_default_content'] = 'Alap&eacute;rtelmezett tartalom ennek a mezőnek (&uuml;resen lehet hagyni)';
$lang['prompt_dropdown_options'] = 'Options for this dropdown or multiselect field.  One line per entry.<br/>Values can be seperated from labels using an = <em>i.e: Female=f</em>';
$lang['prompt_email_validate'] = 'Email c&iacute;m &eacute;rv&eacute;nyes&iacute;t&eacute;se';
$lang['prompt_field_length'] = 'Mező hossza';
$lang['prompt_field_maxlength'] = 'Mező maxim&aacute;lis hossza';
$lang['prompt_field_name'] = 'Mező neve';
$lang['prompt_field_type'] = 'Mező t&iacute;pusa';
$lang['prompt_general_settings'] = '&Aacute;ltal&aacute;nos be&aacute;ll&iacute;t&aacute;sok';
$lang['prompt_is_email_html'] = '&Uuml;zenet k&uuml;ld&eacute;se HTML form&aacute;tumban?';
$lang['prompt_message_template'] = '&Uuml;zenet Sablon';
$lang['prompt_moderate_comments'] = 'Minden hozz&aacute;sz&oacute;l&aacute;s moder&aacute;l&aacute;sa';
$lang['prompt_moderation_iplist'] = 'Egyező IP c&iacute;mek moder&aacute;l&aacute;sa';
$lang['prompt_moderation_patterns'] = 'Moder&aacute;l&aacute;si s&eacute;ma';
$lang['prompt_notify'] = '&Eacute;rtes&iacute;ts &uacute;j hozz&aacute;sz&oacute;ll&aacute;s eset&eacute;n';
$lang['prompt_origurl'] = 'Eredeti URL';
$lang['prompt_quality_control_settings'] = 'Minős&eacute;gellenőrz&eacute;s be&aacute;ll&iacute;t&aacute;sok';
$lang['prompt_rating'] = '&Eacute;rt&eacute;kel&eacute;s';
$lang['prompt_send_notification_to_group'] = 'K&uuml;ldj &eacute;rts&iacute;t&eacute;st &uacute;j hozz&aacute;sz&oacute;l&aacute;s eset&eacute;n ezen csoport tagjainak.<br/><em>(&aacute;lltsd semelyikre a kikapcsol&aacute;shoz)</em>';
$lang['prompt_spamcheck_module'] = 'Nemk&iacute;v&aacute;nt sz&ouml;veg (spam) szűr&eacute;s&eacute;re haszn&aacute;lt modul';
$lang['prompt_status'] = '&Aacute;llapot';
$lang['prompt_subject'] = 'T&aacute;rgy';
$lang['prompt_success_msg'] = 'A sikeres hozz&aacute;sz&oacute;l&aacute;s eset&eacute;n ki&iacute;rt &uuml;zenet';
$lang['prompt_title'] = 'Hozz&aacute;sz&oacute;l&aacute;s c&iacute;me';
$lang['prompt_use_cookies'] = 'Mentsd a felhaszn&aacute;l&oacute; adatait s&uuml;tibe';
$lang['prompt_use_wysiwyg'] = 'Wysiwyg enged&eacute;lyez&eacute;se ezen a mezőn';
$lang['prompt_word_limit'] = 'Hozz&aacute;fűz&eacute;s szavainak korl&aacute;tja';
$lang['prompt_your_email'] = 'Email c&iacute;med';
$lang['prompt_your_name'] = 'Neved';
$lang['prompt_your_rating'] = 'Az &eacute;rt&eacute;kel&eacute;sed';
$lang['published'] = 'K&ouml;zz&eacute;t&eacute;ve';
$lang['reset_to_defaults'] = 'Gy&aacute;ri be&aacute;ll&iacute;t&aacute;sok vissza&aacute;ll&iacute;t&aacute;sa';
$lang['spam'] = 'Nemk&iacute;v&aacute;nt sz&ouml;veg (spam)';
$lang['statistics'] = 'Statisztik&aacute;k';
$lang['submit'] = 'K&uuml;ld&eacute;s';
$lang['title_add_field'] = 'Mező hozz&aacute;ad&aacute;sa';
$lang['type'] = 'T&iacute;pus';
$lang['unlimited'] = 'V&eacute;gtelen';
$lang['usernotification_subject'] = 'Egy &aacute;ltalad k&ouml;vetett cikkhez hozz&aacute;sz&oacute;ltak';
$lang['validate_normal'] = 'C&iacute;m form&aacute;tum &eacute;rv&eacute;nyes&iacute;t&eacute;se';
$lang['validate_domain'] = 'C&iacute;m form&aacute;tum &eacute;s domain &eacute;rv&eacute;nyes&iacute;t&eacute;se';
$lang['yes'] = 'Igen';
$lang['utma'] = '156861353.1184258547.1338748570.1338748570.1338748570.1';
$lang['utmc'] = '156861353';
$lang['utmz'] = '156861353.1338748570.1.1.utmccn=(direct)|utmcsr=(direct)|utmcmd=(none)';
$lang['utmb'] = '156861353';
?>