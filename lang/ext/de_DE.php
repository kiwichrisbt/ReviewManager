<?php
$lang['addedit_commentform_template'] = 'Kommentar-Formular-Template hinzuf&uuml;gen/bearbeiten';
$lang['addedit_detail_template'] = 'Detail-Template hinzuf&uuml;gen/bearbeiten';
$lang['addedit_ratings_template'] = 'Bewertungs-Template hinzuf&uuml;gen/bearbeiten';
$lang['addedit_summary_template'] = 'Zusammenfassungs-Template hinzuf&uuml;gen/bearbeiten';
$lang['ask_delete_field'] = 'Wollen Sie diese Felddefinition wirklich l&ouml;schen?';
$lang['ask_really_uninstall'] = 'Wollen Sie dies wirklich? Alle Daten, die mit diesem Modul verkn&uuml;pft sind, werden gel&ouml;scht.';
$lang['auto'] = 'Automatisch';
$lang['cancel'] = 'Abbrechen';
$lang['confirm_bulk_operations'] = 'M&ouml;chten Sie die gew&auml;hlte Aktion wirklich auf diese Kommentare anwenden?';
$lang['confirm_delete_comment'] = 'M&ouml;chten Sie diesen Kommentar wirklich l&ouml;schen?';
$lang['count'] = 'Z&auml;hlung';
$lang['delete'] = 'L&ouml;schen';
$lang['delete_this_field'] = 'Diese Felddefinition l&ouml;schen';
$lang['draft'] = 'Entwurf';
$lang['edit'] = 'Bearbeiten';
$lang['edit_this_field'] = 'Diese Felddefinition bearbeiten';
$lang['error_alreadyvoted'] = 'Sie haben bereits f&uuml;r diesen Artikel gestimmt';
$lang['error_bulk_nothingselected'] = 'F&uuml;r die Massenbearbeitung wurden keine Kommentare ausgew&auml;hlt';
$lang['error_bulk_operation_failed'] = 'Massenbearbeitung fehlgeschlagen';
$lang['error_captchafailed'] = 'Der eingegebene Text stimmt nicht mit dem Captcha &uuml;berein';
$lang['error_comment_update_failed'] = 'Aktualisierung des Kommentars fehlgeschlagen';
$lang['error_dberror'] = 'Datenbankfehler';
$lang['error_emailinvalid'] = 'Die angegebene E-Mail-Adresse ist ung&uuml;ltig';
$lang['error_emptyemail'] = 'Bitte eine E-Mail-Adresse angeben';
$lang['error_emptycomment'] = 'Bitte einen Kommentartext eingeben!';
$lang['error_emptyname'] = 'Bitte Ihren Namen angeben!';
$lang['error_emptytitle'] = 'Bitte einen Titel f&uuml;r den Beitrag angeben!';
$lang['error_invalidrating'] = 'Ung&uuml;ltige Bewertung';
$lang['error_nameexists'] = 'Ein Eintrag mit diesem Namen existiert bereits';
$lang['error_missingvalue'] = 'Ein ben&ouml;tigter Wert fehlt: %s';
$lang['error_missingparam'] = 'Ein ben&ouml;tigter Parameter fehlt';
$lang['error_spam'] = 'Diese Nachricht wurde als SPAM identifiziert!';
$lang['fieldtype_0'] = 'Text ';
$lang['fieldtype_1'] = 'E-Mail-Adresse';
$lang['fieldtype_2'] = 'Mehrzeiliger Textbereich';
$lang['fieldtype_3'] = 'Aufklappmen&uuml;';
$lang['fieldtype_4'] = 'Mehrfachauswahl';
$lang['friendlyname'] = 'Feedback-Modul';
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
$lang['id'] = 'ID';
$lang['info_allow_comment_html'] = '<strong>Hinweis:</strong> Dies sollte nicht zusammen mit den oben angegebenen WYSIWYG Einstellungen verwendet werden.';
$lang['info_captcha_module'] = 'W&auml;hle ein Modul zur Funktionsbereitstellung aus der Liste aus, um sicherzustellen, dass ein Mensch Daten in das Formular eintr&auml;gt.';
$lang['info_commentform_template'] = 'Kommentarformularvorlagen zeigen ein Formular an, welches dem Benutzer erlaubt einen Kommentar, zus&auml;tzliche Informationen oder Bewertungen f&uuml;r ein bestimmtes Element zu hinterlassen. Hier wird Gestaltung und Layout der Vorlage vorgenommen. Du kannst jede bereits bestehende Smarty-Logik oder Variable verwenden oder die, die speziell f&uuml;r diese Ansicht erstellt wurden.';
$lang['info_commentform_templates_tab'] = 'Diese Registerkarte enth&auml;lt die Liste der verf&uuml;gbaren Zusammenfassungsvorlagen. Eine von ihnen ist als Standard definiert. Die Standardvorlage wird verwendet, wenn kein alternativer Vorlagenname beim Modulaufruf angegeben wurde.';
$lang['info_detail_template'] = 'Die Detailvorlage zeigt Informationen &uuml;ber einen spezifischen Seitenbenutzer. Hier wird Gestaltung und Layout der Vorlage vorgenommen. Du kannst jede bereits bestehende Smarty-Logik oder Variable verwenden oder die, die speziell f&uuml;r diese Ansicht erstellt wurden.';
$lang['info_detail_templates_tab'] = 'Diese Registerkarte enth&auml;lt die Liste der verf&uuml;gbaren Detailvorlagen. Eine von ihnen ist als Standard definiert. Die Standardvorlage wird verwendet, wenn kein alternativer Vorlagenname beim Modulaufruf angegeben wurde.';
$lang['info_email_validate'] = 'Festlegen, wie vom Benutzer eingegebene E-Mail-Adresse validiert werden soll';
$lang['info_filter_authoremail'] = 'Geben sie eine Zeichenfolge ein, die mit allen E-Mail-Adressen verglichen wird.';
$lang['info_filter_authorname'] = 'Geben sie eine Zeichenfolge ein, die mit allen Autorennamen verglichen wird.';
$lang['info_filter_title'] = 'Geben sie eine Zeichenfolge ein, die mit allen Kommentartiteln verglichen wird.';
$lang['info_moderate_comments'] = 'Mit der Aktivierung dieser Option gehen sie sicher, dass ein autorisirter Administrator jeden Kommentar genehmigen muss, bevor er auf der Seite dargestellt wird.';
$lang['info_moderation_iplist'] = 'Specify one rule per line.  Valid syntax includes a complete ip address or an ip address mask specified as xxx.xxx.xxxx.xxx/yy  i.e:  192.168.0.0/16 to match everything in the 192.168.0 address range.';
$lang['info_moderation_patterns'] = 'When moderation of comments is set to &quot;automatic&quot; and the comment supplied matches one or more of the rules specified here, the message will be marked as &quot;draft&quot; and await moderation by an administrator.  Enter one rule (stop word, phrase, or special rule identifier) per line..  Special rule identifiers are: __EMAIL__  to match any email address,  __URL__ to match any URL, __IP_ADDRESS__ to match any IP address.';
$lang['info_spamcheck_module'] = 'Bitte w&auml;hlen sie ein Modul, das nach Spam in abgesendeten Nachrichten sucht.';
$lang['info_ratings_template'] = 'Ratings views display statistical information about the ratings for a particular item <em>(triplet of keys)</em>.  It includes the min,max,mean,and median ratings, and the number of ratings, These templates you design the way in which you want that information laid out.  You may use any smarty logic or variables that have been designed previously, or the ones made available specifically for this view';
$lang['info_ratings_templates_tab'] = 'Diese Registerkarte enth&auml;lt die Liste der verf&uuml;gbaren Bewertungsvorlagen. Eine von ihnen ist als Standard definiert. Die Standardvorlage wird verwendet, wenn kein alternativer Vorlagenname beim Modulaufruf angegeben wurde.';
$lang['info_summary_template'] = 'Summary templates display information about a particular viewed items <em>(triplet of keys)</em>.  Here you design the way in which you want that information laid out.  You may use any smarty logic or variables that have been designed previously, or the ones made available specifically for this view';
$lang['info_summary_templates_tab'] = 'Diese Registerkarte enth&auml;lt die Liste der verf&uuml;gbaren Zusammenfassungsvorlagen. Eine von ihnen ist als Standard definiert. Die Standardvorlage wird verwendet, wenn kein alternativer Vorlagenname beim Modulaufruf angegeben wurde.';
$lang['info_sysdflt_commentform_template'] = 'Standard-Kommentarformular-Template';
$lang['info_sysdflt_detail_template'] = 'Standard-Detailansichts-Template';
$lang['info_sysdflt_ratings_template'] = 'Standard-Bewertungs-Template';
$lang['info_sysdflt_summary_template'] = 'Standard-Zusammenfassungsansichts-Template';
$lang['info_sysdflt_template'] = 'Das Ver&auml;ndern dieser Vorlage hat keinen unmittelbaren Effekt auf irgend eine Ausgabe auf der Seite. Dieses Formular ist allein f&uuml;r den Standardinhalt der Vorlage wenn &bdquo;neue Vorlage erstellen&ldquo; gew&auml;hlt wird.';
$lang['info_use_cookies'] = 'Autorenname und E-Mail-Adresse werden f&uuml;r sp&auml;tere Verwendung in einem Cookie gespeichert.';
$lang['info_use_wysiwyg'] = 'Hinweis: Dies wird die WYSIWYG-Einstellung aller eigenen Felder und des Kommentarfelds &uuml;berschreiben.';
$lang['info_word_limit'] = 'Specify the maximum number of words in the user supplied comment.  This option has no effect if any of the above options are on.  Specify 0 for no limit';
$lang['lbl_agelimit'] = 'Maximales Alter (Tage)';
$lang['lbl_all'] = 'Alle(s)';
$lang['lbl_any'] = 'Egal';
$lang['lbl_author'] = 'Autor';
$lang['lbl_author_name'] = 'Autorenname';
$lang['lbl_author_email'] = 'Autoren-E-Mail';
$lang['lbl_author_ip'] = 'IP-Addresse';
$lang['lbl_avg_rating'] = 'Durchschnittliche Bewertung';
$lang['lbl_commentformtemplates'] = 'Kommentarformular-Templates';
$lang['lbl_comments'] = 'Kommentare';
$lang['lbl_comment'] = 'Kommentar';
$lang['lbl_count_comments'] = 'Anzahl der Kommentare';
$lang['lbl_created'] = 'Erstellt';
$lang['lbl_defaulttemplates'] = 'Standardvorlagen';
$lang['lbl_delete_spam'] = 'Diesen Spam l&ouml;schen';
$lang['lbl_detailtemplates'] = 'Detail-Templates';
$lang['lbl_edit_comment'] = 'Kommentar bearbeiten';
$lang['lbl_filter'] = 'Filter';
$lang['lbl_fields'] = 'Felder';
$lang['lbl_id'] = 'ID';
$lang['lbl_key1'] = 'Schl&uuml;ssel 1';
$lang['lbl_key2'] = 'Schl&uuml;ssel 2';
$lang['lbl_key3'] = 'Schl&uuml;ssel 3';
$lang['lbl_matching_records'] = '&Uuml;bereinstimmende Eintr&auml;ge';
$lang['lbl_max_rating'] = 'Maximaler Wert f&uuml;r Bewertungen';
$lang['lbl_max_results'] = 'Resultate pro Seite';
$lang['lbl_messages'] = 'Nachrichten';
$lang['lbl_min_rating'] = 'Minimaler Wert f&uuml;r Bewertungen';
$lang['lbl_modified'] = '&Uuml;berarbeitet';
$lang['lbl_notifications'] = 'Administratorenmitteilungen';
$lang['lbl_not_spam'] = 'Dies ist kein Spam';
$lang['lbl_of'] = 'von';
$lang['lbl_page'] = 'Seite';
$lang['lbl_rating'] = 'Bewertung';
$lang['lbl_settings'] = 'Einstellungen';
$lang['lbl_status'] = 'Status';
$lang['lbl_ratingstemplates'] = 'Bewertungs-Templates';
$lang['lbl_summarytemplates'] = 'Zusammenfassungs-Templates';
$lang['lbl_title'] = 'Titel';
$lang['lbl_url'] = 'URL';
$lang['lbl_usernotifications'] = 'Benutzerbenachrichtigungen';
$lang['mark_draft'] = 'Als Entwurf markieren';
$lang['mark_ham'] = 'Als kein Spam markieren';
$lang['mark_published'] = 'Als ver&ouml;ffentlicht markieren';
$lang['mark_spam'] = 'Als Spam markieren';
$lang['message_patternmatch'] = 'Nur wenn die Nachricht mit einen oder mehreren Muster unten &uuml;bereinstimmt';
$lang['moddescription'] = 'Ein Modul zum Suchen, St&ouml;bern und Anzeigen von Details &uuml;ber angemeldete Benutzer';
$lang['msg_bulk_operation_complete'] = 'Massenaktion erfolgreich abgeschlossen';
$lang['msg_commentdeleted'] = 'Kommentar gel&ouml;scht';
$lang['msg_commentokay'] = 'Kommentar wurde hinzugef&uuml;gt. Vielen Dank.';
$lang['msg_commentupdated'] = 'Kommentar aktualisiert';
$lang['msg_field_added'] = 'Feld wurde hinzugef&uuml;gt';
$lang['msg_field_deleted'] = 'Feld wurde gel&ouml;scht';
$lang['msg_field_updated'] = 'Feld wurde aktualisiert';
$lang['name'] = 'Name';
$lang['no'] = 'Nein';
$lang['none'] = 'Keine Vorgabe';
$lang['notification_subject'] = 'Ein Kommentar wurde auf Ihrer Website bekannt gegeben';
$lang['param_action'] = 'Spezifiziert das Verhalten des Moduls. M&amp;ouml;gliche Werte sind:
<ul>
  <li>default - Zeigt ein Kommentarformular.</li>
  <li>summary - Zeigt eine Zusammenfassung der Kommentare.</li>
  <li>ratings - Zeigt eine Bewertungs&uuml;bersicht.</li>
  <li>detail  - Zeigt detaillierte Informationen zu einem spezifischen Kommentar.</li>
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
$lang['param_commentrequired'] = 'Applicable to the default action, this integer parameter can be used to specify if the comment is a required field.';
$lang['param_emailrequired'] = 'Applicable to the default action, this integer parameter can be used to specify if the email address is a required field.';
$lang['param_namerequired'] = 'Applicable to the default action, this integer parameter can be used to specify if the name is a required field.';
$lang['param_noredirect'] = 'Applicable to the default action, when session is set to &quot;policy&quot; will specify that when a comment is successfully added not to perform any redirection.';
$lang['param_ratingoptions'] = 'Applicable to the default action, this parameter allows specifying a list of comma seperated values to use for ratings options.';
$lang['param_redirectextra'] = 'Applicable to the default action, and only when the destpage parameter is NOT used.  this parameter allows specifying extra information to append to the url when redirecting.  i.e:  you may specify redirectextra=&quot;#someanchorname&quot; to specify an anchor to redirect to.';
$lang['param_titlerequired'] = 'Applicable to the default action, this integer parameter can be used to specify if the title is a required field.';
$lang['param_summarytemplate'] = 'Applicable to the summary action, this parameter allows specifying the name of a non default summary template.';
$lang['param_voteonce'] = 'Applicable to the default form, this parameter allows specifying that the user can only vote once (by IP address). This value must be a positive integer between 1 and 3.  A value of 1 will only search the first key, a value of 2 will search both key1 and key2, and a value of 3 will search key1, key2, and key3';
$lang['postinstall'] = 'Das CGFeedback-Modul ist nun zur Konfiguration bereit.';
$lang['postuninstall'] = 'Das CGFeedback-Modul und alle damit verbundenen Daten wurden aus der Datenbank entfernt.';
$lang['prompt_add_comment'] = 'Artikel kommentieren und bewerten';
$lang['prompt_add_field'] = 'Ein neues Feld hinzuf&uuml;gen';
$lang['prompt_allow_comment_html'] = 'HTML in Kommentaren erlauben';
$lang['prompt_allow_comment_wysiwyg'] = 'Den WYSIWYG-Editor f&uuml;r Kommentare verwenden?';
$lang['prompt_author_email'] = 'Autoren-E-Mail';
$lang['prompt_author_name'] = 'Autorenname';
$lang['prompt_author_notify'] = 'Autoren &uuml;ber weitere Kommentare in diesem Strang benachrichtigen';
$lang['prompt_captcha_module'] = 'Modul f&uuml;r den CAPTCHA-Test';
$lang['prompt_comment'] = 'Kommentar';
$lang['prompt_default_content'] = 'Standardinhalt f&uuml;r dieses Feld (darf auch leer sein)';
$lang['prompt_dropdown_options'] = 'Options for this dropdown or multiselect field.  One line per entry.<br/>Values can be seperated from labels using an = <em>i.e: Female=f</em>';
$lang['prompt_email_validate'] = 'Pr&uuml;fung der E-Mail-Adressen';
$lang['prompt_field_length'] = 'Feldl&auml;nge (Anzahl der Zeichen)';
$lang['prompt_field_maxlength'] = 'Maximale Feldl&auml;nge (Anzahl der Zeichen)';
$lang['prompt_field_name'] = 'Feldname';
$lang['prompt_field_type'] = 'Feldtyp';
$lang['prompt_general_settings'] = 'Allgemeine Einstellungen';
$lang['prompt_is_email_html'] = 'Nachricht im HTML-Format senden?';
$lang['prompt_message_template'] = 'Nachrichten-Template';
$lang['prompt_moderate_comments'] = 'Alle Kommentare moderieren';
$lang['prompt_moderation_iplist'] = 'Passende IP-Adressen moderieren';
$lang['prompt_moderation_patterns'] = 'Moderationsmuster';
$lang['prompt_notify'] = '&Uuml;ber neue Kommentare auf dieser Seite benachrichtigen';
$lang['prompt_origurl'] = 'Ursprungs-URL';
$lang['prompt_quality_control_settings'] = 'Einstellungen der Qualit&auml;tskontrolle';
$lang['prompt_rating'] = 'Bewertung';
$lang['prompt_send_notification_to_group'] = 'Senden Sie Benachrichtigungen &uuml;ber neue Kommentare zu Mitgliedern dieser Gruppe.<br/><em>(auf none setzen zum Deaktivieren von Benachrichtigungen)</em>';
$lang['prompt_spamcheck_module'] = 'Modul, um Spam in Kommentaren zu finden';
$lang['prompt_status'] = 'Status';
$lang['prompt_subject'] = 'Thema';
$lang['prompt_success_msg'] = 'Nachricht, die nach erfolgreicher Absendung eines Kommentars angezeigt werden soll';
$lang['prompt_title'] = 'Kommentartitel';
$lang['prompt_use_cookies'] = 'Benutzerdetails in einem Cookie speichern';
$lang['prompt_use_wysiwyg'] = 'Formatierungseditor f&uuml;r dieses Feld erlauben';
$lang['prompt_word_limit'] = 'Kommentar-Zeichen-Limit';
$lang['prompt_your_email'] = 'Ihre E-Mail-Adresse';
$lang['prompt_your_name'] = 'Ihr Name';
$lang['prompt_your_rating'] = 'Ihre Bewertung';
$lang['published'] = 'Ver&ouml;ffentlicht';
$lang['reset_to_defaults'] = 'Auf die programmseitigen Voreinstellungen zur&uuml;cksetzen';
$lang['spam'] = 'Spam';
$lang['statistics'] = 'Statistiken';
$lang['submit'] = 'Absenden';
$lang['title_add_field'] = 'Feld hinzuf&uuml;gen';
$lang['type'] = 'Typ';
$lang['unlimited'] = 'Unlimitiert';
$lang['usernotification_subject'] = 'Es wurde gerade eine Antwort auf einen Artikel gegeben, an dem Sie interessiert sind.';
$lang['validate_normal'] = 'Adressen-Format validieren';
$lang['validate_domain'] = 'Adressen-Format und Domain validieren';
$lang['yes'] = 'Ja';
?>