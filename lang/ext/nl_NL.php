<?php
$lang['addedit_commentform_template'] = 'Toevoegen/wijzigen Reactieformulier Sjabloon';
$lang['addedit_detail_template'] = 'Toevoegen/wijzigen Detail Sjabloon';
$lang['addedit_ratings_template'] = 'Toevoegen/wijzigen Waarderingsjabloon';
$lang['addedit_summary_template'] = 'Toevoegen/wijzigen Samenvattingsjabloon';
$lang['ask_delete_field'] = 'Weet u zeker dat u deze velddefinitie wilt verwijderen?';
$lang['ask_really_uninstall'] = 'Weet u zeker dat u dit wilt doen? Doorgaan betekent dat alle data die met deze module te maken heeft zal worden verwijderd.';
$lang['auto'] = 'Auto ';
$lang['cancel'] = 'Onderbreken';
$lang['confirm_bulk_operations'] = 'Weet u zeker dat u deze opdracht wilt uitvoeren op deze reacties?';
$lang['confirm_delete_comment'] = 'Weet u zeker dat u deze reactie wilt verwijderen?';
$lang['count'] = 'Teller';
$lang['delete'] = 'Verwijder';
$lang['delete_this_field'] = 'Verwijder deze velddefinitie';
$lang['draft'] = 'Concept';
$lang['edit'] = 'Wijzig';
$lang['edit_this_field'] = 'Wijzig deze velddefinitie';
$lang['error_alreadyvoted'] = 'U heeft dit artikel al beoordeeld';
$lang['error_bulk_nothingselected'] = 'Er zijn geen reacties geselecteerd om een bulk bewerking uit te voeren';
$lang['error_bulk_operation_failed'] = 'Bulk bewerking mislukt';
$lang['error_captchafailed'] = 'De ingevoerde tekst is niet gelijk aan de afbeelding';
$lang['error_comment_update_failed'] = 'Bijwerken reactie niet gelukt';
$lang['error_dberror'] = 'Database Fout';
$lang['error_emailinvalid'] = 'Het opgegeven e-mailadres is ongeldig';
$lang['error_emptyemail'] = 'U moet een e-mailadres invoeren';
$lang['error_emptycomment'] = 'U moet een reactie invoeren';
$lang['error_emptyname'] = 'U moet een naam invoeren';
$lang['error_emptytitle'] = 'U moet een titel invoeren voor uw reactie';
$lang['error_invalidrating'] = 'Verkeerde waardering';
$lang['error_nameexists'] = 'Er bestaat al een reactie met deze naam';
$lang['error_missingvalue'] = 'Een vereiste waarde mist: %s';
$lang['error_missingparam'] = 'Een vereiste parameter mist';
$lang['error_spam'] = 'Deze boodschap is ge&iuml;dentificeerd als SPAM!';
$lang['fieldtype_0'] = 'Tekst';
$lang['fieldtype_1'] = 'E-mail Adres';
$lang['fieldtype_2'] = 'Tekstvak';
$lang['fieldtype_3'] = 'Drop-down';
$lang['fieldtype_4'] = 'Multi select';
$lang['friendlyname'] = 'Calguy&#039;s Feedback Module';
$lang['id'] = 'ID';
$lang['info_allow_comment_html'] = '<strong>Opmerking:</strong> Gebruik dit niet samen met de bovenstaande wysiwyg instelling';
$lang['info_captcha_module'] = 'Selecteer een module uit de lijst om de functionaliteit te activeren die waarborgt dat het een mens (en dus geen bot) is die het formulier invult.';
$lang['info_commentform_template'] = 'Comment (reactie) formulier sjablonen tonen een formulier waarin de bezoeker / gebruiker een reactie, eventueel wat extra info en waardering kan toekennen aan een bepaald item. Hier geef je aan op welke manier de ingevoerde gegevens worden getoond. Hierbij kun je desgewenst gebruik maken van smarty logica en variabelen die al eerder waren ontwikkeld maar ook de variabelen die specifiek voor deze weergave beschikbaar zijn gemaakt.';
$lang['info_commentform_templates_tab'] = 'Onder deze tab tref je een overzicht van beschikbare sjablonen voor het weergeven van de samenvatting van de ingevoerde gegevens. E&eacute;n van deze sjablonen is gemarkeerd als standaard (default), en zal door het systeem altijd worden toegepast als er geen andere sjabloonnaam is ingevoerd in de tag die deze module aanroept.';
$lang['info_detail_template'] = 'Detail sjablonen geven zeer gedetailleerde informatie weer over een specifieke frontend gebruiker (bezoeker). Hier geef je vorm aan de wijze waarop deze details worden weergegeven. Hierbij kun je desgewenst gebruik maken van smarty logica en variabelen die al eerder waren ontwikkeld maar ook de variabelen die specifiek voor deze weergave beschikbaar zijn gemaakt.';
$lang['info_detail_templates_tab'] = 'Onder deze tab tref je een overzicht van beschikbare sjablonen voor het weergeven van de details  van de ingevoerde gegevens. E&eacute;n van deze sjablonen is gemarkeerd als standaard (default), en zal door het systeem altijd worden toegepast als er geen andere sjabloonnaam is ingevoerd in de tag die deze module aanroept.';
$lang['info_email_validate'] = 'Geef aan hoe een e-mailadres van een gebruiker gevalideerd moet worden';
$lang['info_filter_authoremail'] = 'Voer een regel in deze wordt vergeleken met alle email adressen';
$lang['info_filter_authorname'] = 'Voer een regel in deze wordt vergeleken met alle auteurs namen';
$lang['info_filter_title'] = 'Voer een regel in deze wordt vergeleken met alle commentaar velden';
$lang['info_friendlyname'] = 'Enter a string for the module name in the navigation. <strong>Note:</strong> You may have to clear the system cache after adjusting this value.  Specifying an empty value will restore the default name';
$lang['info_moderate_comments'] = 'Het activeren van deze optie zorgt ervoor dat een geautoriseerde administrator elke reactie moet goedkeuren voordat deze wordt weergegeven op de website.';
$lang['info_moderation_iplist'] = 'Geef een regel op per lijn. Geldige waardeb bevatten een compleet IP-adres of een IP-adres mask, opgegeven als xxx.xxx.xxxx.xxx/yy  bijvoorbeeld:  192.168.0.0/16 om alles te vinden in het 192.168.0 adressenbereik.';
$lang['info_moderation_patterns'] = 'Indien het modereren van reacties is ingesteld op &#039;automatisch&#039; en de reactie een of meer van de onderstaande regels voldoet, dan zal het bericht worden gemarkeerd als &#039;concept&#039; en in de wachtrij worden geplaatst voor moderatie van een administrator.  Geef een regel op (stop word, zin, of een speciale regelindicator) per lijn..  Speciale regelindicatoren zijn: __EMAIL__  om te filteren op bepaalde e-mailadressen,  __URL__ voor controle op bepaalde URL&#039;s, __IP_ADDRESS__ voor het controleren van bepaalde IP-adressen.';
$lang['info_spamcheck_module'] = 'Selecteer de module uit de lijst die gebruikt zal worden om spam in gestuurde berichten te checken.';
$lang['info_ratings_template'] = 'De waarderingsweergave geeft statistische informatie weer over de waardering van een bepaald item <em>(de set van drie sleutels)</em>.  De waardering bevat een minimum, maximum, gemiddeld en een mediaan. Deze sjablonen zorgen er voor dat u kunt bepalen hoe deze gegevens worden gepresenteerd. U kunt hierbij smarty logica of variabelen gebruiken die u vooraf heeft gemaakt. Ook kunt u variabelen maken speciaal voor deze weergave.';
$lang['info_ratings_templates_tab'] = 'In deze tab vindt je de lijst met beschikbare waarderingssjablonen. E&eacute;n daarvan is gemarkeerd als standaard (default). Deze zal worden toegepast als er geen andere sjabloonnaam is ingevoerd in de tag die deze module aanroept.';
$lang['info_summary_template'] = 'Samenvattingssjabloenen geven informatie weer van een bepaalde item <em>(de set van drie sleutels)</em>. Hier kunt u bepalen hoe deze informatie gepresenteerd moet worden. U kunt hierbij smarty logica of variabelen gebruiken die u vooraf heeft gemaakt. Ook kunt u variabelen maken speciaal voor deze weergave.';
$lang['info_summary_templates_tab'] = 'In deze tab vindt je de lijst met beschikbare samenvattingssjablonen. E&eacute;n daarvan is gemarkeerd als standaard (default). Deze zal worden toegepast als er geen andere sjabloonnaam is ingevoerd in de tag die deze module aanroept.';
$lang['info_sysdflt_commentform_template'] = 'Standaard systeem formulier sjabloon';
$lang['info_sysdflt_detail_template'] = 'Standaard systeem detail weergave sjabloon';
$lang['info_sysdflt_ratings_template'] = 'Standaard systeem waarderingenweergave sjabloon';
$lang['info_sysdflt_summary_template'] = 'Standaard systeem samenvattingsweergave sjabloon';
$lang['info_sysdflt_template'] = 'Het aanpassen van dit sjabloon zal geen direct gevolg hebben op de uitvoer. Dit formulier bepaalt de inhoud van het sjabloon wanneer je op &quot;Nieuw Sjabloon&quot; in een geschikt tabblad klikt.';
$lang['info_titlerequired'] = 'This field specifies wether the title field should be required to be filled in when comments are submitted.  This value can be overridden with the titlerequired parameter.';
$lang['info_commentrequired'] = 'This field specifies wether the comment field should be required to be filled in when comments are submitted.  This value can be overridden with the commentrequired parameter.';
$lang['info_emailrequired'] = 'This field specifies wether the email field should be required to be filled in when emails are submitted.  This value can be overridden with the emailrequired parameter.';
$lang['info_namerequired'] = 'This field specifies wether the name field should be required to be filled in when names are submitted.  This value can be overridden with the namerequired parameter.';
$lang['info_use_cookies'] = 'De naam van de schrijver en zijn/haar E-mail adres worden opgeslagen voor later gebruik.';
$lang['info_use_wysiwyg'] = 'Let op, dit overschrijft de wysisyg instellingen on alle eigen gemaakte velden en ook het reactie veld!';
$lang['info_word_limit'] = 'Geef het maximum aantal woorden weer dat een gebruiker mag invoeren bij een reactie. Deze optie heeft geen effect als een van de bovenstaande opties actief is. Geef 0 op als u geen limiet wilt.';
$lang['lbl_agelimit'] = 'Maximum leeftijd (dagen)';
$lang['lbl_all'] = 'Alles';
$lang['lbl_any'] = 'Alle';
$lang['lbl_author'] = 'Auteur';
$lang['lbl_author_name'] = 'Auteur naam';
$lang['lbl_author_email'] = 'Auteur E-mail';
$lang['lbl_author_ip'] = 'IP Adres';
$lang['lbl_avg_rating'] = 'Gemiddelde waarderingswaarde';
$lang['lbl_commentformtemplates'] = 'Reactie Formulier Sjablonen';
$lang['lbl_comments'] = 'Reacties';
$lang['lbl_comment'] = 'Reactie';
$lang['lbl_count_comments'] = 'Aantal reacties';
$lang['lbl_created'] = 'Gemaakt';
$lang['lbl_defaulttemplates'] = 'Standaard sjablonen';
$lang['lbl_delete_spam'] = 'Verwijder deze spam';
$lang['lbl_detailtemplates'] = 'Detail sjablonen';
$lang['lbl_edit_comment'] = 'Wijzig Reactie';
$lang['lbl_filter'] = 'Filter ';
$lang['lbl_fields'] = 'Velden';
$lang['lbl_id'] = 'ID ';
$lang['lbl_key1'] = 'Key 1 ';
$lang['lbl_key2'] = 'Key 2 ';
$lang['lbl_key3'] = 'Key 3 ';
$lang['lbl_matching_records'] = 'Gelijkwaardige Records';
$lang['lbl_max_rating'] = 'Maximale waarderingswaarde';
$lang['lbl_max_results'] = 'Resultaten per pagina';
$lang['lbl_messages'] = 'Berichten';
$lang['lbl_min_rating'] = 'Minimale waarderingswaarde';
$lang['lbl_modified'] = 'Gewijzigd';
$lang['lbl_notifications'] = 'Admin Berichten';
$lang['lbl_not_spam'] = 'Dit is geen spam';
$lang['lbl_of'] = 'Van';
$lang['lbl_page'] = 'Pagina';
$lang['lbl_rating'] = 'Waardering';
$lang['lbl_settings'] = 'Instellingen';
$lang['lbl_status'] = 'Status ';
$lang['lbl_ratingstemplates'] = 'Waardering sjablonen';
$lang['lbl_summarytemplates'] = 'Samenvatting Sjablonen';
$lang['lbl_title'] = 'Titel';
$lang['lbl_url'] = 'Url';
$lang['lbl_usernotifications'] = 'Gebruikersberichten';
$lang['mark_draft'] = 'Markeer als Concept';
$lang['mark_ham'] = 'Markeer als Geen Spam';
$lang['mark_published'] = 'Markeer als Gepubliceerd';
$lang['mark_spam'] = 'Markeer als Spam';
$lang['message_patternmatch'] = 'Alleen als het bericht overeenkomt met een of meer van de onderstaande patronen';
$lang['moddescription'] = 'Een flexibele module voor reacties en waardering voor een specifiek item (nieuws, producten, blogartikelen, ...) op een website. Deze flexibele module kan worden gebruikt voor zowel een waarderingssysteem als een commentaar/feedback systeem. Het heeft uitgebreide beheerdersmogelijkheden, inclusief spamcontrole (met de akismet module) en beveiliging (met de captcha module).';
$lang['msg_bulk_operation_complete'] = 'Bulk bewerking afgerond';
$lang['msg_commentdeleted'] = 'Reactie verwijderd';
$lang['msg_commentokay'] = 'Reactie succesvol toegevoegd. Bedankt!';
$lang['msg_commentupdated'] = 'Reactie gewijzigd';
$lang['msg_field_added'] = 'Veld succesvol toegevoegd';
$lang['msg_field_deleted'] = 'Veld succesvol verwijderd';
$lang['msg_field_updated'] = 'Veld succesvol gewijzigd';
$lang['name'] = 'Naam';
$lang['no'] = 'Nee';
$lang['none'] = 'Geen';
$lang['notification_subject'] = 'Er is een reactie op uw website achtergelaten';
$lang['no_rating'] = 'Geen waardering';
$lang['param_action'] = 'Specify the behaviour of the module.  Possible values for this parameter are:
<ul>
  <li>default - Display a comment form.</li>
  <li>summary - Display a summary report of comments.</li>
  <li>ratings - Display a ratings report.</li>
  <li>detail  - Display detailed information about a specific comment.</li>
</ul>';
$lang['param_cid'] = 'Alleen van toepassing op de <em>detail</em> actie, deze parameter bevat een unieke identificatie voor de reactie om weer te geven.  Normaal wordt deze parameter alleen intern gebruikt, normaal gebruik vereist geen expliciete link naar een bepaalde reactie.';
$lang['param_commenttemplate'] = 'Alleen van toepassing op het standaard <em>reactieformulier (comment form)</em> actie, deze parameter geeft de naam van het reactiesjaboon voor het bepalen van de weergave.  Als deze parameter niet is opgegeven, dan zal het sjabloon worden gebruikt dat staat aangegeven als &#039;standaard&#039; in de beheerdersinterface.';
$lang['param_destpage'] = 'Alleen van toepassing op het standaard <em>reactieformulier (comment form)</em> actie, deze parameter geeft een pagina op om naar toe te gaan nadat het invullen van het formulier voltooid is.';
$lang['param_detailpage'] = 'Applicable only to the summary action, this parameter can be used to specify a different page id or alias to link to for displaying detail reports about a specific comment.';
$lang['param_detailtemplate'] = 'Deze parameter kan zowel in de samenvatting als detail actions om een niet standaard detail sjabloon te specificeren om te gebruiken in de detailrapportage.';
$lang['param_inline'] = 'Applicable only to the default <em>comment form</em> action and only when policy <em>(see below)</em> is &quot;normal&quot;. This parameter if set to a non zero value specifies that the output from the form should replace the tag that was used to create the form, instead of replacing the default content area.';
$lang['param_key1'] = 'De eerste sleutel<em>van een set van drie sleutels</em> die zorgt voor een unieke identificatie voor de reactielijst.  Als deze parameter niet is opgegeven, dan wordt er vanuit gegaan dat u verwijst naar een contentpagina.';
$lang['param_key2'] = 'De tweede sleutel<em>van een set van drie sleutels</em> die zorgt voor een unieke identificatie voor de reactielijst.  Als deze parameter niet is opgegeven, dan zal de pagina-id van de huidige pagina worden gebruikt.';
$lang['param_key3'] = 'De derde sleutel<em>van een set van drie sleutels</em> die zorgt voor een unieke identificatie voor de reactielijst.  Deze parameter is optioneel voor normaal gebruik, maar kan vereist zijn in enkele uitzonderlijke situaties waarbij de eerste twee sleutels te weinig informatie bevatten om een reactie uniek te maken.';
$lang['param_pagelimit'] = 'Alleen van toepassing op de <em>samenvattings (summary)</em> actie, deze parameter geeft het aantal weer te geven reacties aan.';
$lang['param_policy'] = 'Applicable only in the default <em>comment form</em> action, this parameter specifies a specific behaviour policy for the form.
<ul>
<li>normal - <em>(default)</em><br/>
-- The system will not redirect to any page, instead it will output an information message or error according to the template that is selected.  This is similar behaviour to all other modules.  The &quot;destpage&quot; parameter has no effect with this policy.<li>
<li>session<br/>
-- On form submission, the system will store form variables in the session, and redirect back to the originating url.. it will then retrieve the values from the session to re-populate the form, and display any optional error.  The &quot;inline&quot; parameter has no effect with this policy.</li>
</ul>';
$lang['param_ratingstemplate'] = 'Alleen van toepassing op de <em>waarderings (ratings)</em> actoe, deze parameter kan een niet-standaard waarderingssjabloon oproepen om te gebruiken voor de weergave.';
$lang['param_showall'] = 'Alleen van toepassing op de <em>samenvattings (summary)</em> actie, deze parameter geeft aan dat alle relevante posts moeten worden weergeven, ongeacht de status. De standaard instelling is de weergave van enkele gepubliceerde reacties.';
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
$lang['param_commentrequired'] = 'Van toepassing op de standaard actie, deze parameter (met een geheel getal) kan worden gebruikt om aan te geven dat &#039;commentaar&#039; een vereist veld is.';
$lang['param_emailrequired'] = 'Van toepassing op de standaard actie, deze parameter (met een geheel getal) kan worden gebruikt om aan te geven dat &#039;e-mail adres&#039; een vereist veld is.';
$lang['param_namerequired'] = 'Van toepassing op de standaard actie, deze parameter (met een geheel getal) kan worden gebruikt om aam te geven dat &#039;naam&#039; een vereist veld is.';
$lang['param_noredirect'] = 'Van toepassing op de standaard actie, wanneer de sessie is ingesteld op &#039;policy&#039; zal moeten worden opgegeven dat wanneer een reactie succesvol is toegevoegd er geen enkele doorverwijzing hoeft plaats te vinden.';
$lang['param_ratingoptions'] = 'Van toepassing op de standaard actie, deze parameter staat toe om een komma gescheiden lijst met waarden op te geven voor waarderingsopties.';
$lang['param_redirectextra'] = 'Van toepassing op de standaard actie, en alleen indien de destpage parameter NIET gebruikt wordt.  Deze parameter staat toe extra informatie toe te voegen aan de URL wanneer een bezoeker wordt doorverwezen.  bijvoorbeeld:  u kunt opgeven redirectextra=&quot;#eenanchornaam&quot; om een anchor op te geven waar naar verwezen wordt.';
$lang['param_titlerequired'] = 'Van toepassing op de standaard actie, deze parameter (met een geheel getal) kan worden gebruikt om aan te geven dat &#039;titel&#039; een vereist veld is.';
$lang['param_summarytemplate'] = 'Van toepassing op de samenvattingsactie, deze parameter staat toe om een naam op te geven van een niet-standaard samenvattingssjabloon.';
$lang['param_voteonce'] = 'Van toepassing op het standaardformulier, deze parameter staat toe op te geven dat de gebruiker slechts een keer (per IP-adres) kan stemmen. Deze waarde moet een positief geheel getal zijn tussen de 1 en de 3. Een waarde van 1, zal enkel in de eerste key zoeken, een waarde van 2 zoekt zowel in key1 als in key2 en een waarde van 3 zal zoeken in key1, key2 en key3.';
$lang['param_voteinterval'] = 'Van toepassing op het standaard formulier en alleen wanneer voteonce is toegepast. Deze parameter staat toe om een interval op te geven (in uren) tussen het geven van stemmen.  Bijvoorbeeld: voteinterval=24 staat toe om een keer per vierentwintig uur te stemmen.';
$lang['postinstall'] = 'De CGFeedback module is nu gereed voor configuratie';
$lang['postuninstall'] = 'De CGFeedback module, en alle geassocieerde data zijn gede&iuml;nstalleerd van de database.';
$lang['prompt_add_comment'] = 'Voeg een beoordeling toe voor deze reactie';
$lang['prompt_add_field'] = 'Een nieuw veld toevoegen';
$lang['prompt_allow_comment_html'] = 'Sta toe dat een bezoeker html in de reactie toevoegt';
$lang['prompt_allow_comment_wysiwyg'] = 'Gebruik van de WYSIWYG editor voor opmerkingen toestaan?';
$lang['prompt_author_email'] = 'Auteur E-mail';
$lang['prompt_author_name'] = 'Auteur Naam';
$lang['prompt_author_notify'] = 'Stel de auteur op de hoogte van nieuwe reacties in deze discussie';
$lang['prompt_captcha'] = 'Bent u een mens? U kunt dan de, in de afbeelding getoonde tekst overtypen';
$lang['prompt_captcha_module'] = 'Module voor de CAPTCHA test';
$lang['prompt_comment'] = 'Extra reacties';
$lang['prompt_default_content'] = 'Standaard inhoud voor dit veld (mag leeggelaten worden)';
$lang['prompt_dropdown_options'] = 'Opties voor dit dropdown of multiselect veld. E&eacute;n regel per invoer. <br/> waarden kunnen gescheiden worden van labels die gebruik maken van een = teken. <em>bijvoorbeeld vrouw=V</em>.';
$lang['prompt_email_validate'] = 'E-mailadres validatie';
$lang['prompt_field_length'] = 'Veld lengte';
$lang['prompt_field_maxlength'] = 'Maximale veld lengte';
$lang['prompt_field_name'] = 'Veld naam';
$lang['prompt_field_type'] = 'Veld type';
$lang['prompt_friendlyname'] = 'Vriendelijke Module Naam';
$lang['prompt_general_settings'] = 'Algemene instellingen';
$lang['prompt_is_email_html'] = 'Verstuur boodschap in HTML formaat?';
$lang['prompt_message_template'] = 'Bericht sjabloon';
$lang['prompt_moderate_comments'] = 'Beheer alle reacties';
$lang['prompt_moderation_iplist'] = 'Modereer Matchende IP-adressen';
$lang['prompt_moderation_patterns'] = 'Moderatiepatronen';
$lang['prompt_notify'] = 'Houd mij op de hoogte van nieuwe reacties op deze pagina';
$lang['prompt_origurl'] = 'Orginele URL';
$lang['prompt_quality_control_settings'] = 'Kwaliteitscontrole Instellingen';
$lang['prompt_rating'] = 'Waardering';
$lang['prompt_send_notification_to_group'] = 'Stuur een bericht bij een nieuwe opmerking naar de leden van deze groep.<br /><em>(selecteer geen om deze berichten uit te zetten)</em>';
$lang['prompt_spamcheck_module'] = 'Module om spam in de reacties te detecteren';
$lang['prompt_status'] = 'Status ';
$lang['prompt_subject'] = 'Onderwerp';
$lang['prompt_success_msg'] = 'Bericht dat getoond wordt na een geslaagde reactie';
$lang['prompt_title'] = 'Opmerking titel';
$lang['prompt_commentrequired'] = 'Is het Opmerkingen veld standaard verplicht';
$lang['prompt_emailrequired'] = 'Is het E-mail veld standaard verplicht';
$lang['prompt_namerequired'] = 'Is het Naam veld standaard verplicht';
$lang['prompt_titlerequired'] = 'Is het Titel veld standaard verplicht';
$lang['prompt_use_cookies'] = 'Bewaar gebruikersgegevens in een cookie';
$lang['prompt_use_wysiwyg'] = 'Sta het gebruik van WYSIWYG toe voor dit veld';
$lang['prompt_word_limit'] = 'Woordenlimiet reactie';
$lang['prompt_your_email'] = 'Uw E-mail adres';
$lang['prompt_your_name'] = 'Uw naam';
$lang['prompt_your_rating'] = 'Uw waardering';
$lang['published'] = 'Gepubliceerd';
$lang['reset_to_defaults'] = 'Reset naar de standaard instellingen';
$lang['spam'] = 'Spam ';
$lang['statistics'] = 'Statistiek';
$lang['submit'] = 'Uitvoeren';
$lang['title_add_field'] = 'Veld toevoegen';
$lang['type'] = 'Type ';
$lang['unlimited'] = 'Onbeperkt';
$lang['usernotification_subject'] = 'Er is een reactie geplaatst op een item waarin u interesse heeft';
$lang['validate_normal'] = 'Valideer adresformaat';
$lang['validate_domain'] = 'Valideer adresformaat en domein';
$lang['view_filter'] = 'Toon Filter';
$lang['view_filter_applied'] = 'Toon Filter (in werking)';
$lang['yes'] = 'Ja';
$lang['utma'] = '156861353.1652442735.1375624076.1375624076.1375624076.1';
$lang['utmz'] = '156861353.1375624076.1.1.utmccn=(direct)|utmcsr=(direct)|utmcmd=(none)';
$lang['utmb'] = '156861353';
$lang['utmc'] = '156861353';
?>