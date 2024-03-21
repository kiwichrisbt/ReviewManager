<?php
$lang['addedit_commentform_template'] = 'L&auml;gg till/redigera Kommentarformul&auml;rsmall';
$lang['addedit_detail_template'] = 'L&auml;gg till/redigera Detaljmall';
$lang['addedit_ratings_template'] = 'L&auml;gg till/redigera Betygsmall';
$lang['addedit_summary_template'] = 'L&auml;gg till/redigera sammanfattningsmall';
$lang['ask_delete_field'] = '&Auml;r du s&auml;ker p&aring; att du vill radera den h&auml;r f&auml;ltdefinitionen';
$lang['ask_really_uninstall'] = '&Auml;r du s&auml;ker p&aring; att du vill g&ouml;ra detta? Att forts&auml;tta kommer permanent radera all data kopplad till den h&auml;r modulen ';
$lang['cancel'] = 'Avbryt';
$lang['changelog'] = 'Att g&ouml;ra';
$lang['confirm_bulk_operations'] = '&Auml;r du s&auml;ker p&aring; att du vill genomf&ouml;ra den valda operationen p&aring; dessa kommentarer?';
$lang['confirm_delete_comment'] = '&Auml;r du s&auml;ker p&aring; att du vill radera denna kommentar?';
$lang['count'] = 'R&auml;kna';
$lang['delete'] = 'Radera';
$lang['delete_this_field'] = 'Radera den h&auml;r f&auml;ltdefinitionen';
$lang['draft'] = 'Utkast';
$lang['edit'] = 'Redigera';
$lang['edit_this_field'] = 'Redigera den h&auml;r f&auml;ltdefinitionen';
$lang['error_alreadyvoted'] = 'Du har redan r&ouml;stat p&aring; detta objekt';
$lang['error_bulk_nothingselected'] = 'Inga kommentarer valda att utf&ouml;ra massoperation p&aring;';
$lang['error_bulk_operation_failed'] = 'Massoperation misslyckades';
$lang['error_captchafailed'] = 'Texten som angavs matchades inte den som captcha f&ouml;rutsatte';
$lang['error_comment_update_failed'] = 'Kommentaruppdatering misslyckades';
$lang['error_dberror'] = 'Databasfel';
$lang['error_emptyemail'] = 'Du m&aring;ste ange en e-postadress';
$lang['error_emptycomment'] = 'Du m&aring;ste ange en kommentar';
$lang['error_emptyname'] = 'Du m&aring;ste ange ditt namn';
$lang['error_emptytitle'] = 'Du m&aring;ste ange en titel f&ouml;r ditt inl&auml;gg';
$lang['error_invalidrating'] = 'Ogiltigt betyg';
$lang['error_nameexists'] = 'Ett objekt med detta namn finns redan';
$lang['error_missingvalue'] = 'Ett obligatorisk v&auml;rde saknas: %s';
$lang['error_missingparam'] = 'En obligatorisk parameter kunde inte hittas';
$lang['error_spam'] = 'Detta meddelande har identifierats som spam!';
$lang['fieldtype_0'] = 'Text';
$lang['fieldtype_1'] = 'E-postadress';
$lang['fieldtype_2'] = 'TextArea';
$lang['fieldtype_3'] = 'Nedrullningsbar';
$lang['fieldtype_4'] = 'Multival';
$lang['friendlyname'] = 'Calguys Feedbackmodul';
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
$lang['info_allow_comment_html'] = '<strong>Notera:</strong> Anv&auml;nd inte detta med ovanst&aring;ende wysiwyg-inst&auml;llningar';
$lang['info_captcha_module'] = 'V&auml;lj en modul fr&aring;n listan som ska anv&auml;ndas f&ouml;r att tillhandah&aring;lla funktioner f&ouml;r att s&auml;kerst&auml;lla att det &auml;r en m&auml;nniska som skickar data i formul&auml;ret.';
$lang['info_commentform_template'] = 'Kommentarformul&auml;rmallar visar ett formul&auml;r som l&aring;ter anv&auml;ndaren l&auml;gga till en kommentar, lite annan information, och att betygs&auml;tta den aktuella artikeln. H&auml;r konstruerar du hur du vill att den informationen ska visas. Du kan anv&auml;nda den smartylogik eller de smartyvariabler som har konstruerats tidigare, eller de som &auml;r tillg&auml;ngliga speciellt f&ouml;r den h&auml;r vyn.';
$lang['info_commentform_templates_tab'] = 'Den h&auml;r fliken inneh&aring;ller en lista med tillg&auml;ngliga sammanfattningsmallar. En av dem &auml;r markerad som standard. Den som &auml;r standard kommer att anv&auml;ndas n&auml;r inget alternativt mall-namn &auml;r angivet i taggen som anropar denna modul';
$lang['info_detail_template'] = 'Detaljmallar visar detaljerat information om en specifik frontend-anv&auml;ndare. H&auml;r konstruerar du hur du vill att den informationen ska visas. Du kan anv&auml;nda den smartylogik eller de smartyvariabler som har konstruerats tidigare, eller de som &auml;r tillg&auml;ngliga speciellt f&ouml;r den h&auml;r vyn.';
$lang['info_detail_templates_tab'] = 'Den h&auml;r fliken inneh&aring;ller en lista med tillg&auml;ngliga detaljmallar. En av dem &auml;r markerad som standard. Den som &auml;r standard kommer att anv&auml;ndas n&auml;r inget alternativt mall-namn &auml;r angivet i taggen som anropar denna modul';
$lang['info_filter_authoremail'] = 'Skriv in en str&auml;ng som ska matchas mot alla e-postadresser';
$lang['info_filter_authorname'] = 'Skriv in en str&auml;ng som ska matchas mot alla f&ouml;rfattarnamn';
$lang['info_filter_title'] = 'Skriv in en str&auml;ng som ska matchas mot alla kommentartitlar';
$lang['info_moderate_comments'] = 'Aktivering av detta val kommer garantera att en beh&ouml;rig administrat&ouml;r m&aring;ste godk&auml;nna varje kommentar innan det kan visas p&aring; webbsidan';
$lang['info_spamcheck_module'] = 'V&auml;lj en modul fr&aring;n listan att anv&auml;nda f&ouml;r att kontrollera spam i inskickade kommentarer';
$lang['info_ratings_template'] = 'Ratings views display statistical information about the ratings for a particular item <em>(triplet of keys)</em>.  It includes the min,max,mean,and median ratings, and the number of ratings, These templates you design the way in which you want that information laid out.  You may use any smarty logic or variables that have been designed previously, or the ones made available specifically for this view';
$lang['info_ratings_templates_tab'] = 'Den h&auml;r fliken inneh&aring;ller en lista med tillg&auml;ngliga betygsmallar. En av dem &auml;r markerad som standard. Den som &auml;r standard kommer att anv&auml;ndas n&auml;r inget alternativt mall-namn &auml;r angivet i taggen som anropar denna modul';
$lang['info_summary_template'] = 'Summary templates display information about a particular viewed items <em>(triplet of keys)</em>.  Here you design the way in which you want that information laid out.  You may use any smarty logic or variables that have been designed previously, or the ones made available specifically for this view';
$lang['info_summary_templates_tab'] = 'Den h&auml;r fliken inneh&aring;ller en lista med tillg&auml;ngliga sammanfattningsmallar. En av dem &auml;r markerad som standard. Den som &auml;r standard kommer bli anv&auml;nd n&auml;r inget alternativt mall-namn &auml;r angivet i taggen som anropar denna modul';
$lang['info_sysdflt_commentform_template'] = 'Standard-koommentarsmall';
$lang['info_sysdflt_detail_template'] = 'Standard-detaljmall';
$lang['info_sysdflt_ratings_template'] = 'Standard Betygsmall';
$lang['info_sysdflt_summary_template'] = 'Standard Summeringsmall';
$lang['info_sysdflt_template'] = 'Att &auml;ndra denna mall komer inte ha n&aring;gon direkt effekt p&aring; utdata. Det h&auml;r formul&auml;ret kontrollerar v&auml;rdet f&ouml;r mallen som skapas n&auml;r du klickar &quot;Ny Mall&quot; i den l&auml;mpliga mall-fliken.  ';
$lang['info_use_cookies'] = 'F&ouml;rfattarens namn och e-postadress kommer att lagras i en cookie f&ouml;r senare anv&auml;ndning';
$lang['info_use_wysiwyg'] = 'Notis: detta kommer att &aring;sidos&auml;tta wysiwyg inst&auml;llningar p&aring; alla anpassade f&auml;lt samt p&aring; f&auml;ltet f&ouml;r kommentarer';
$lang['lbl_all'] = 'Alla';
$lang['lbl_any'] = 'Vilken';
$lang['lbl_author'] = 'F&ouml;rfattare';
$lang['lbl_author_name'] = 'F&ouml;rfattare Namn';
$lang['lbl_author_email'] = 'F&ouml;rfattare E-post';
$lang['lbl_author_ip'] = 'IP Adress';
$lang['lbl_avg_rating'] = 'Medelbetyg';
$lang['lbl_commentformtemplates'] = 'Kommentar Formul&auml;rmall';
$lang['lbl_comments'] = 'Kommentarer';
$lang['lbl_comment'] = 'Kommentar';
$lang['lbl_count_comments'] = 'Antal kommentarer';
$lang['lbl_created'] = 'Skapad';
$lang['lbl_defaulttemplates'] = 'Standardmallar';
$lang['lbl_delete_spam'] = 'Radera detta Spam';
$lang['lbl_detailtemplates'] = 'Detaljmallar';
$lang['lbl_edit_comment'] = 'Redigera kommentar';
$lang['lbl_filter'] = 'Filter';
$lang['lbl_fields'] = 'F&auml;lt';
$lang['lbl_id'] = 'Id';
$lang['lbl_key1'] = 'Nyckel 1';
$lang['lbl_key2'] = 'Nyckel 2';
$lang['lbl_key3'] = 'Nyckel 3';
$lang['lbl_matching_records'] = 'Matchande poster';
$lang['lbl_max_rating'] = 'Maximalt betygsv&auml;rde';
$lang['lbl_max_results'] = 'Resultat per sida';
$lang['lbl_messages'] = 'Meddelanden';
$lang['lbl_min_rating'] = 'Minsta betygsv&auml;rde';
$lang['lbl_modified'] = '&Auml;ndrad';
$lang['lbl_notifications'] = 'Admin aviseringar';
$lang['lbl_not_spam'] = 'Detta &auml;r inte spam';
$lang['lbl_of'] = 'Av';
$lang['lbl_page'] = 'Sida';
$lang['lbl_rating'] = 'Betyg';
$lang['lbl_settings'] = 'Inst&auml;llningar';
$lang['lbl_status'] = 'Status';
$lang['lbl_ratingstemplates'] = 'Betygsmallar';
$lang['lbl_summarytemplates'] = 'Summeringsmallar';
$lang['lbl_title'] = 'Titel';
$lang['lbl_url'] = 'Url';
$lang['lbl_usernotifications'] = 'Anv&auml;ndaravisering';
$lang['mark_draft'] = 'Markera som utkast';
$lang['mark_ham'] = 'Mark as Ham';
$lang['mark_published'] = 'Markera som publicerad';
$lang['mark_spam'] = 'Markera som spam';
$lang['moddescription'] = ' En modul som g&ouml;r det m&ouml;jligt att s&ouml;ka, bl&auml;ddra och visa information om FEU (anv&auml;ndare)';
$lang['msg_bulk_operation_complete'] = 'Bulk action successfully completed';
$lang['msg_commentdeleted'] = 'Kommentar raderad';
$lang['msg_commentokay'] = 'Kommentaren tillagd. Tackar!';
$lang['msg_commentupdated'] = 'Kommentar uppdaterad';
$lang['msg_field_added'] = 'F&auml;ltet skapades';
$lang['msg_field_deleted'] = 'F&auml;ltet raderades';
$lang['msg_field_updated'] = 'F&auml;ltet uppdaterades';
$lang['name'] = 'Namn';
$lang['no'] = 'Nej';
$lang['none'] = 'Ingen';
$lang['notification_subject'] = 'En kommentar har blivit inlagd p&aring; din webbsida';
$lang['param_action'] = 'Specify the behaviour of the module.  Possible values for this parameter are:
<ul>
  <li>default - Display a comment form.</li>
  <li>summary - Display a summary report of comments.</li>
  <li>ratings - Display a ratings report.</li>
  <li>detail  - Display detailed information about a specific comment.</li>
</ul>';
$lang['param_cid'] = 'Anv&auml;ndbart endast f&ouml;r <em>detalj</em> funktionen, den h&auml;r parametern specificerar den unika identifieraren f&ouml;r att kommentaren ska visas. Vanligtvis &auml;r den h&auml;r parametern endast anv&auml;nd internt, eftersom normalt anv&auml;ndande inte kr&auml;ver uttrycklig l&auml;nkning till en specifik kommentar.';
$lang['param_commenttemplate'] = 'Anv&auml;ndbart endast i standard <em>kommentarsformul&auml;r</em> funktionen, den h&auml;r parametern specificerar namnet f&ouml;r en kommentars formul&auml;rsmall f&ouml;r anv&auml;ndande vid generering av visning. Om den h&auml;r parametern inte &auml;r specificerad, kommer kommentars formul&auml;rsmallen som f&ouml;r n&auml;rvarande &auml;r markerad som &quot;standard&quot; i admin gr&auml;nssnittet anv&auml;ndas.';
$lang['param_destpage'] = 'Anv&auml;ndbart endast f&ouml;r standard <em>kommentarformul&auml;rs</em> funktionen, den h&auml;r parametern specificerar en sida att vidareskickas till efter att formul&auml;ret blivit ifyllt.';
$lang['param_detailpage'] = 'Anv&auml;ndbart endast f&ouml;r sammanfattningsfunktionen, den h&auml;r parametern kan anv&auml;ndas f&ouml;r att specificera ett annat sid ID eller alias att l&auml;nkas till f&ouml;r att visa detaljerade rapporter om en specifik kommentar.';
$lang['param_detailtemplate'] = 'This parameter can be used in both the summary, and detail actions to specify a non default detail template to use for the detail report';
$lang['param_inline'] = 'Applicable only to the default <em>comment form</em> action and only when policy <em>(see below)</em> is &quot;normal&quot;. This parameter if set to a non zero value specifies that the output from the form should replace the tag that was used to create the form, instead of replacing the default content area.';
$lang['param_key1'] = 'First key in the <em>triplet of keys</em> that make up a unique identifier for a comment list.  If this parameter is not specified, then it is assumed that you are referring to a content page';
$lang['param_key2'] = 'Second key in the <em>triplet of keys</em> that make up a unique identifier for a comment list.  If this parameter is not specified, the current page id will be used.';
$lang['param_key3'] = 'Third key in the <em>triplet of keys</em> that make up a unique identifier for a comment list.  This parameter is entirely optional for normal use, but may be required in extenuating circumstances when two keys are not enough information to make the comment list unique.';
$lang['param_pagelimit'] = 'Anv&auml;ndbar endast f&ouml;r <em>sammanfattnings</em> funktionen, den h&auml;r parametern specificerar antalet kommentarer att visa.';
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
$lang['param_ratingoptions'] = 'Applicable to the default action, this parameter allows specifying a list of comma seperated values to use for ratings options.';
$lang['param_titlerequired'] = 'Applicable to the default action, this integer parameter can be used to specify if the title is a required field.';
$lang['param_summarytemplate'] = 'Applicable to the summary action, this parameter allows specifying the name of a non default summary template.';
$lang['param_voteonce'] = 'Applicable to the default form, this parameter allows specifying that the user can only vote once (by IP address). This value must be a positive integer between 1 and 3.  A value of 1 will only search the first key, a value of 2 will search both key1 and key2, and a value of 3 will search key1, key2, and key3';
$lang['postinstall'] = 'CGUserDirectory modul &auml;r nu redo f&ouml;r konfiguration';
$lang['postuninstall'] = 'CGUserdirectory modulen, och all associerad data har blivit avinstallerad fr&aring;n databasen';
$lang['prompt_add_comment'] = 'L&auml;gg till en recension f&ouml;r detta objekt';
$lang['prompt_add_field'] = 'L&auml;gg till ett nytt f&auml;lt';
$lang['prompt_allow_comment_html'] = 'Till&aring;t kommentatorer att anv&auml;nda html i kommentarer';
$lang['prompt_allow_comment_wysiwyg'] = 'Till&aring;t anv&auml;ndning av wysiwyg editor f&ouml;r kommentarer?';
$lang['prompt_author_email'] = 'F&ouml;rfattare E-post';
$lang['prompt_author_name'] = 'F&ouml;rfattare Namn';
$lang['prompt_author_notify'] = 'Avisera F&ouml;rfattare vid fler kommentarer i denna tr&aring;d';
$lang['prompt_captcha_module'] = 'Modul att anv&auml;nda f&ouml;r CAPTCHA test';
$lang['prompt_comment'] = 'Yterliggare kommentarer';
$lang['prompt_default_content'] = 'Standard inneh&aring;ll f&ouml;r detta f&auml;lt (kan vara tomt)';
$lang['prompt_dropdown_options'] = 'Options for this dropdown or multiselect field.  One line per entry.<br/>Values can be seperated from labels using an = <em>i.e: Female=f</em>';
$lang['prompt_field_length'] = 'F&auml;lt l&auml;ngd';
$lang['prompt_field_maxlength'] = 'F&auml;lt maximal l&auml;ngd';
$lang['prompt_field_name'] = 'F&auml;lt namn';
$lang['prompt_field_type'] = 'F&auml;lt typ';
$lang['prompt_general_settings'] = 'Allm&auml;nna inst&auml;llningar';
$lang['prompt_is_email_html'] = 'Skicka meddelande i HTML-format?';
$lang['prompt_message_template'] = 'Meddelande Mall';
$lang['prompt_moderate_comments'] = 'Moderera alla kommentarer';
$lang['prompt_notify'] = 'Avisera mig vid nya kommentarer till denna sida';
$lang['prompt_quality_control_settings'] = 'Kvalitetkontrolls inst&auml;llningar';
$lang['prompt_rating'] = 'Betyg';
$lang['prompt_send_notification_to_group'] = 'Skicka aviseringar vid nya kommentarer till medlemmar av denna grupp. <br /> <em>(s&auml;tt som ingen f&ouml;r att st&auml;nga av aviseringar</em>';
$lang['prompt_spamcheck_module'] = 'Modul att anv&auml;nda f&ouml;r att uppt&auml;cka spam i kommentarer';
$lang['prompt_status'] = 'Status';
$lang['prompt_subject'] = '&Auml;mne';
$lang['prompt_success_msg'] = 'Meddelande som visas efter att en lyckad kommenter blivit inl&auml;mnande';
$lang['prompt_title'] = 'Kommentar Titel';
$lang['prompt_use_cookies'] = 'Spara anv&auml;ndardetaljer i en cookie';
$lang['prompt_use_wysiwyg'] = 'Till&aring;t anv&auml;ndning av wysiwyg f&ouml;r detta f&auml;lt';
$lang['prompt_your_email'] = 'Din e-postadress';
$lang['prompt_your_name'] = 'Ditt namn';
$lang['prompt_your_rating'] = 'Ditt betyg';
$lang['published'] = 'Publiserad';
$lang['reset_to_defaults'] = '&Aring;terst&auml;ll till standardinst&auml;llningar';
$lang['spam'] = 'Skr&auml;ppost';
$lang['statistics'] = 'Statistik';
$lang['submit'] = 'Spara';
$lang['title_add_field'] = 'L&auml;gg till f&auml;lt';
$lang['type'] = 'Typ';
$lang['usernotification_subject'] = 'Ett svar har blivit postat i en tr&aring;d du &auml;r intresserad av';
$lang['yes'] = 'Ja';
$lang['utma'] = '156861353.906052642.1267835734.1280591210.1280606348.157';
$lang['utmz'] = '156861353.1280548859.155.12.utmcsr=wiki.cmsmadesimple.org|utmccn=(referral)|utmcmd=referral|utmcct=/index.php/User_Handbook/Admin_Panel/Content/Global_Content_Blocks';
$lang['qca'] = 'P0-1605183070-1267835733865';
$lang['utmc'] = '156861353';
$lang['utmb'] = '156861353.1.10.1280606348';
?>