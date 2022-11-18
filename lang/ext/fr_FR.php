<?php
$lang['addedit_commentform_template'] = 'Ajouter/éditer le gabarit de formulaire des commentaires&nbsp;';
$lang['addedit_detail_template'] = 'Ajouter/éditer le gabarit de détail';
$lang['addedit_ratings_template'] = 'Ajouter/éditer le gabarit de rapport';
$lang['addedit_summary_template'] = 'Ajouter/éditer le gabarit de sommaire';
$lang['ask_delete_field'] = 'Êtes-vous certain de vouloir supprimer cette définition de champ ?';
$lang['ask_really_uninstall'] = 'Êtes-vous certain de vouloir faire cela ? Continuer supprimera de façon irrémédiable toutes les données associées à ce module.';
$lang['auto'] = 'Auto&nbsp;';
$lang['cancel'] = 'Annuler';
$lang['confirm_bulk_operations'] = 'Êtes-vous certain(e) de vouloir continuer les opérations selectionnées sur ces commentaires ?';
$lang['confirm_delete_comment'] = 'Êtes-vous certain(e) de vraiment vouloir supprimer ce commentaire ?';
$lang['count'] = 'Compte';
$lang['delete'] = 'Supprimer';
$lang['delete_this_field'] = 'Supprimer cette définition de champ';
$lang['desc_event_CommentEdited'] = 'Evénement envoyé après l\'édition d\'un commentaire par un visiteur ou un administrateur';
$lang['draft'] = 'Brouillon';
$lang['edit'] = 'Editer';
$lang['edit_this_field'] = 'Editer cette définition de champ';
$lang['error_alreadyvoted'] = 'Vous avez déjà voté pour cet élément';
$lang['error_bulk_nothingselected'] = 'Aucun commentaire n"a été sélectionné pour effectuer une opération en série';
$lang['error_bulk_operation_failed'] = 'Echec de l\'opération en série';
$lang['error_captchafailed'] = 'Le texte entré ne correspond pas à l\'image captcha fournie';
$lang['error_comment_update_failed'] = 'Mise à jour du commentaire échoué';
$lang['error_dberror'] = 'Erreur de base de donnée';
$lang['error_emailinvalid'] = 'L\'adresse courriel entrée est invalide';
$lang['error_emptyemail'] = 'Vous devez fournir une adresse de courriel';
$lang['error_emptycomment'] = 'Vous devez écrire un commentaire';
$lang['error_emptyname'] = 'Vous devez écrire votre nom';
$lang['error_emptytitle'] = 'Vous devez écrire un titre';
$lang['error_invalidrating'] = 'Notation invalide';
$lang['error_nameexists'] = 'Un objet avec ce même nom existe déjà';
$lang['error_missingvalue'] = 'Une valeur obligatoire est manquante : %s';
$lang['error_missingparam'] = 'Un paramètre obligatoire est manquant';
$lang['error_spam'] = 'Ce message a été identifié comme spam !';
$lang['fieldtype_0'] = 'Texte';
$lang['fieldtype_1'] = 'Adresse de courriel';
$lang['fieldtype_2'] = 'Zone de texte';
$lang['fieldtype_3'] = 'Déroulant';
$lang['fieldtype_4'] = 'Sélection multiple';
$lang['friendlyname'] = 'Commentaires et notations';
$lang['help_event_CommentEdited'] = '<p>An event sent AFTER a comment has been edited by either a site visitor or an administrator.</p>
<h4>Parameters:</h4>
<ul>
  <li>"comment" - The cgfb_comment object.</li>
  <li>"user"    - The integer UID of the admin user who edited the comment.</li>
</ul>';
$lang['id'] = 'Id';
$lang['info_allow_comment_html'] = '<strong>Note :</strong> Do not use this with the above wysiwyg setting';
$lang['info_captcha_module'] = 'Choisissez un module capable de vérifier qu\'un humain est bien à l\'origine du commentaire posté dans la liste ci-contre.';
$lang['info_commentform_template'] = 'Ce gabarit est destiné à afficher un formulaire de saisie d\'un commentaire, d\'une note et/ou d\'informations complémentaires pour l\'utilisateur du site vis-à-vis d\'un élément (page, actualité,..). Vous pouvez ici modifier ce gabarit. Vous pouvez utiliser les balises et variables Smarty générales ou celles disponibles spécifiquement pour ce formulaire.';
$lang['info_commentform_templates_tab'] = 'Cet onglet contient la liste des gabarits de sommaire disponibles. L\'un d\'eux est marqué par défaut. Ce dernier sera utilisé si aucun autre nom de gabarit n\'est précisé dans le tag appelant ce module.';
$lang['info_detail_template'] = 'Ce gabarit affiche le détail d\'un commentaire posté sur le site. Ici, vous pouvez définir l\'affichage de ce commentaire. Vous pouvez utiliser les outils fournis par Smarty et/ou les variables définies précédemment ou disponibles spécifiquement pour cette vue.';
$lang['info_detail_templates_tab'] = 'Cet onglet contient la liste des gabarits de détail disponibles. L\'un d\'eux est défini par défaut. Ce dernier sera utilisé si aucun autre nom de gabarit n\'est précisé dans le tag qui appelle le module.';
$lang['info_email_validate'] = 'Préciser comment doit être validée l\'adresse de courriel entrée par l\'utilisateur';
$lang['info_filter_authoremail'] = 'Entrez une chaine de caractères qui sera testée avec toutes les adresses de courriel';
$lang['info_filter_authorname'] = 'Entrez une chaine de caractères qui sera testée avec tous les noms d\'auteur';
$lang['info_filter_title'] = 'Entrez une chaine de caractères qui sera testée avec tous les titres de commentaires';
$lang['info_moderate_comments'] = 'Activez cette option et chaque commentaire devra être validé par un administrateur avant affichage sur le site';
$lang['info_moderation_iplist'] = 'Entrez une règle par ligne. Les syntaxes valides pour la saisie d\'adresses IP sont la saisie complète d\'une IP ou la saisie d\'un masque tel que xxx.xxx.xxx.xxx/yy - Par exemple, entrez : 192.168.0.0/16 pour cibler toutes les IP comprises entre 192.168.0.0 et 192.168.0.16.';
$lang['info_moderation_patterns'] = 'Si la modération des commentaires est définie à "Auto" et que le commentaire testé valide une ou plusieurs des règles définies ici, le message sera marqué en "Brouillon" et sera en attente de validation par un administrateur. Entrez une règle par ligne (mot interdit, phrase, ou règle spéciale).
<br />Les règles spéciales sont :
<br /><strong>__EMAIL__</strong> : pour n\'importe quelle adresse e-mail
<br /><strong>__URL__</strong> : pour n\'importe quelle adresse URL
<br /><strong>__IP_ADDRESS__</strong> : pour n\'importe quelle adresse IP (vous pouvez aussi utiliser la modération par adresse IP)';
$lang['info_spamcheck_module'] = 'Slectionnez le module anti-spam dans la liste';
$lang['info_ratings_template'] = 'La vue de rapport affiche des informations statistiques sur les commentaires et notes d\'un élément particulier <em>(défini par le triptique de clés)</em>. Cela inclus : la notation mini, max, moyenne et le nombre de notations. Vous pouvez réaliser ce gabarit de manière à afficher ces informations tel que vous le souhaitez. Vous pouvez utiliser les outils Smarty ainsi que les variables disponibles.';
$lang['info_ratings_templates_tab'] = 'Cet onglet contient la liste des gabarits de rapport disponibles. L\'un d\'eux est marqué par défaut. Ce dernier sera utilisé si aucun autre nom de gabarit n\'est précisé dans le tag appelant ce module.';
$lang['info_summary_template'] = 'Une vue de sommaire affiche la liste des commentaires/notations pour un élément particulier <em>(défini par le triptique de clés)</em>. Vous pouvez réaliser ce gabarit de manière à afficher ces informations tel que vous le souhaitez. Vous pouvez utiliser les outils Smarty ainsi que les variables disponibles.';
$lang['info_summary_templates_tab'] = 'Cet onglet contient la liste des gabarits de sommaire disponibles. L\'un d\'eux est marqué par défaut. Ce dernier sera utilisé si aucun autre nom de gabarit n\'est précisé dans le tag appelant ce module.';
$lang['info_sysdflt_commentform_template'] = 'Gabarit par défaut pour le formulaire de commentaire';
$lang['info_sysdflt_detail_template'] = 'Gabarit par défaut pour la vue du détail';
$lang['info_sysdflt_ratings_template'] = 'Gabarit par défaut pour la vue de rapport';
$lang['info_sysdflt_summary_template'] = 'Gabarit par défaut pour la vue de sommaire';
$lang['info_sysdflt_template'] = 'Modifier le gabarit dans ce formulaire n\'aura pas de répercussion immédiate. Ce formulaire contrôle les gabarits nouvellement créés uniquement.';
$lang['info_use_cookies'] = 'Le nom de l\'auteur et son adresse de courriel seront stockés dans un cookie pour une utilisation ultérieure';
$lang['info_use_wysiwyg'] = 'Note : cette opération va écraser les réglages de l\'éditeur WYSIWYG sur tous les champs personnalisés ainsi que dans les champs de commentaire';
$lang['info_word_limit'] = 'Nombre maximal de mots dans le commentaires. Cette option n\'aura aucun effet si une des options spécifiées plus haut est utilisée. Mettre 0 pour un nombre de mots illimités.';
$lang['lbl_agelimit'] = 'Age maximum (jours)';
$lang['lbl_all'] = 'Tous';
$lang['lbl_any'] = 'Aucun';
$lang['lbl_author'] = 'Auteur';
$lang['lbl_author_name'] = 'Nom de l\'auteur';
$lang['lbl_author_email'] = 'Adresse de courriel de  l\'auteur';
$lang['lbl_author_ip'] = 'Addresse IP';
$lang['lbl_avg_rating'] = 'Valeur de la note moyenne';
$lang['lbl_commentformtemplates'] = 'Gabarit du formulaire de commentaire';
$lang['lbl_comments'] = 'Commentaires';
$lang['lbl_comment'] = 'Commentaire';
$lang['lbl_count_comments'] = 'Nombre de commentaire';
$lang['lbl_created'] = 'Créé';
$lang['lbl_defaulttemplates'] = 'Gabarit par défaut';
$lang['lbl_delete_spam'] = 'Supprimer ce spam';
$lang['lbl_detailtemplates'] = 'Gabarit de détail';
$lang['lbl_edit_comment'] = 'Editer le commentaire';
$lang['lbl_filter'] = 'Filtrer';
$lang['lbl_fields'] = 'Champs';
$lang['lbl_id'] = 'ID';
$lang['lbl_key1'] = 'Clé 1';
$lang['lbl_key2'] = 'Clé 2';
$lang['lbl_key3'] = 'Clé 3';
$lang['lbl_matching_records'] = 'Résultats correspondants';
$lang['lbl_max_rating'] = 'Valeur de la note maximale';
$lang['lbl_max_results'] = 'Résultats par page';
$lang['lbl_messages'] = 'Messages';
$lang['lbl_min_rating'] = 'Valeur de la note minimale';
$lang['lbl_modified'] = 'Modifié';
$lang['lbl_notifications'] = 'Notifications de l\'Administrateur';
$lang['lbl_not_spam'] = 'Ce n\'est pas du Spam';
$lang['lbl_of'] = 'de';
$lang['lbl_page'] = 'Page';
$lang['lbl_rating'] = 'Notation';
$lang['lbl_settings'] = 'Paramètres';
$lang['lbl_status'] = 'Statut';
$lang['lbl_ratingstemplates'] = 'Gabarit de rapport';
$lang['lbl_summarytemplates'] = 'Gabarit de sommaire';
$lang['lbl_title'] = 'Titre';
$lang['lbl_url'] = 'URL';
$lang['lbl_usernotifications'] = 'Notifications des utilisateurs';
$lang['mark_draft'] = 'Marquer comme Brouillon';
$lang['mark_ham'] = 'Marquer comme Ham';
$lang['mark_published'] = 'Marquer comme Publié';
$lang['mark_spam'] = 'Marquer comme Spam';
$lang['message_patternmatch'] = 'Seulement si le message valide un ou plusieurs des motifs ci-dessous';
$lang['moddescription'] = 'Un module flexible pour commenter ou noter des items (articles, product, company, ...) dans votre site.  Ce module peut être utilisé comme système de notation et/ou de commentaires. Il peut être associé à des fonctions supplémentaires d\'administration comme la lutte contre le spam avec les modules Akismet ou Captcha.';
$lang['msg_bulk_operation_complete'] = 'Opération en série effectuée avec succès !';
$lang['msg_commentdeleted'] = 'Commentaire effacé';
$lang['msg_commentokay'] = 'Commentaire ajouté avec succés. Merci !';
$lang['msg_commentupdated'] = 'Commentaire mis à jour';
$lang['msg_field_added'] = 'Champ ajouté avec succès';
$lang['msg_field_deleted'] = 'Champ effacé avec succés';
$lang['msg_field_updated'] = 'Champ mis à jour avec succés';
$lang['name'] = 'Nom';
$lang['no'] = 'Non';
$lang['none'] = 'Aucun';
$lang['notification_subject'] = 'Un commentaire a été posté sur votre site';
$lang['param_action'] = 'Définit le comportement du module. Les valeurs possibles pour ce paramètre sont :
<ul>
  <li>default - Affiche un formulaire de commentaire.</li>
  <li>summary - Affiche un rapport résumé des commentaires.</li>
  <li>ratings - Affiche un rapport statistique des notations.</li>
  <li>detail  - Affiche des informations détaillées pour un commentaire spécifique.</li>
</ul>';
$lang['param_cid'] = 'Utilisé uniquement avec l\'action <em>detail</em>, ce vous permet de spécifier l\'identifiant unique du commentaire à afficher. En principe, ce paramètre est utilisé en interne. Une utilisation normale ne devrait pas vous demander l\'affichage d\'un commentaire spécifique.';
$lang['param_commenttemplate'] = 'Utilisé uniquement avec l\'action <em>default</em> (affichage du formulaire de commentaire), ce paramètre vous permet de sélectionner le gabarit à utiliser pour afficher le formulaire. Si non précisé, c\'est le gabarit de formulaire par défaut qui sera utilisé.';
$lang['param_destpage'] = 'Utilisé uniquement avec l\'action <em>default</em> (affichage du formulaire de commentaire), ce paramètre vous permet de spécifier la page vers laquelle l\'utilisateur doit être redirigé après avoir validé le formulaire.';
$lang['param_detailpage'] = 'Uniquement pour l\'action <em>résumé</em>, ce paramètre peut être utilisé pour définir un lien vers l\'id ou l\'alias d\'une page servant à afficher les détails d\'un commentaire spécifique.';
$lang['param_detailtemplate'] = 'Ce paramètre peut être utilisé à la fois pour les actions <em>summary</em> (sommaire) et <em>detail</em (détail) pour spécifier le gabarit à utiliser en lieu et place du gabarit sélectionné par défaut.';
$lang['param_inline'] = 'Utilisé uniquement pour l\'action <em>default</em> (affichage du formulaire de commentaire), et seulement quand le paramètre <em>policy</em> est défini à <em>normal</em>. Si différent de 0, ce paramètre spécifie que la sortie du formulaire remplacera la balise qui a été utilisée pour le formulaire, au lieu de remplacer tout le contenu de la page.';
$lang['param_key1'] = 'Première clé du <em>triptique de clés</em> qui définissent un élément de manière unique pour la liste des commentaires. Si ce paramètre n\'est pas renseigné, le module considère que vous faites référence à la page de contenu en cours.';
$lang['param_key2'] = 'Seconde clé du <em>triptique de clés</em> qui définissent un élément de manière unique pour la liste des commentaires. Si ce paramètre n\'est pas spécifié, la page en cours sera prise en compte.';
$lang['param_key3'] = 'Troisième clé du <em>triptique de clés</em> qui définissent un élément de manière unique pour la liste des commentaires. Ce paramètre est totalement optionnel, mais peut être utile dans le cas où les deux première clés ne suffiraient pas à définir l\'élément à commenter.';
$lang['param_pagelimit'] = 'Uniquement pour l\'action <em>summary</em> (liste des commentaires), ce paramètre spécifie le nombre de commentaires à afficher.';
$lang['param_policy'] = 'Utilisé uniquement avec l\'action <em>default</em> (affichage du formulaire de commentaires), ce paramètre détermine la politique de fonctionnement du formulaire :
<ul><li>normal - (par défaut) Le module ne va rediriger vers aucune page. Il affichera une information ou une erreur en fonction du gabarit utilisé. C\'est le même fonctionnement que pour les autres modules. Le paramètre <em>destpage</em> n\'a aucun effet avec cette politique</li>
<li>session - A la validation du formulaire, le module va enregistrer les variables de formulaire dans la session, et rediriger vers l\'URL d\'origine. Il va alors récupérer les données du formulaire depuis la session et les réinjecter dans le formulaire, puis ensuite afficher les éventuelles erreurs. Le paramètre <em>inline</em> n\'a aucun effet avec cette politique</li></ul>';
$lang['param_ratingstemplate'] = 'Utilisé uniquement avec l\'action <em>ratings</em> (rapport de notation), ce paramètre vous permet de choisir le gabarit à utiliser pour afficher le rapport, à la place du gabarit choisi par défaut.';
$lang['param_showall'] = 'Utilisé uniquement avec l\'action <em>summary</em> (liste des commentaires), ce paramètre indique que tous les commentaires doivent être affichés, quel que soit leur statut. Le fonctionnement par défaut est d\'afficher uniquement les commentaires publiés.';
$lang['param_sortby'] = 'Utilisé uniquement avec l\'action <em>summary</em>, ce paramètre spécifie l\'ordre de tri des résultats retournés. Les valeurs possibles sont :
<ul>
  <li><strong>rating</strong> : note</li>
  <li><strong>title</strong> : titre du commentaire</li>
  <li><strong>status</strong> - statut - cette option n\'est utile qu\'avec le paramètre "showall"</li>
  <li><strong>author_name</strong> : nom d\'auteur</li>
  <li><strong>author_email</strong> : e-mail de l\'auteur</li>
  <li><strong>author_ip</strong> : adresse IP de l\'auteur</li>
  <li><strong>created</strong> : <em>(par défaut)</em> - date de création</li>
  <li><strong>modified</strong> : date de modification</li>
  <li><strong>F:<em>NomDuChamp</em></strong> : il est possible de trier selon les champs personnalisés, en indiquant le champ à la place de NomDuChamp</li>
</ul>';
$lang['param_sortorder'] = 'Utilisé uniquement avec l\'action <em>summary</em> (liste des commentaires), ce paramètre spécifie l\'ordre de tri des résultats, en fonction du paramètre <em>sortby</em>. Les valeurs possibles sont :
<ul><li>ASC - Ordre croissant</li>
  <li>DESC - <em>(par défaut)</em> Ordre décroissant</li>
</ul>';
$lang['param_commentrequired'] = 'Utilisé uniquement avec l\'action par défaut, ce paramètre vous permet de spécifier si le champ "commentaire" est requis (valeurs : 0 ou 1)';
$lang['param_emailrequired'] = 'Utilisé uniquement avec l\'action par défaut, ce paramètre vous permet de spécifier si le champ "adresse E-mail" est requis (valeurs : 0 ou 1)';
$lang['param_namerequired'] = 'Utilisé uniquement avec l\'action par défaut, ce paramètre vous permet de spécifier si le champ "nom" est requis (valeurs : 0 ou 1)';
$lang['param_noredirect'] = 'Utilisé uniquement avec l\'action par défaut et lorsque <em>policy</em> est défini à "session", ce paramètre vous permet de spécifier si une redirection doit être faite lorsque le commentaire a été enregistré avec succès.';
$lang['param_ratingoptions'] = 'Utilisé uniquement avec l\'action par défaut, ce paramètre vous permet de spécifier une liste de valeurs possibles à utiliser pour la notation (valeurs séparées par une virgule).';
$lang['param_redirectextra'] = 'Utilisé uniquement avec l\'action par défaut, et uniquement quand le paramètre <em>destpage</em> n\'est PAS utilisé. Ce paramètre vous permet d\'ajouter une information à l\'URL vers laquelle rediriger. Par exemple, vous pouvez saisir <em>redirectextra="#nomdelancre"</em> pour rediriger vers une ancre spécifique.';
$lang['param_titlerequired'] = 'Utilisé uniquement avec l\'action par défaut, ce paramètre vous permet de spécifier si le champ "titre" est requis (valeurs : 0 ou 1)';
$lang['param_summarytemplate'] = 'Utilisé uniquement avec l\'action <em>summary</em> (sommaire des commentaires), ce paramètre vous permet de spécifier le gabarit d\'affichage à utiliser pour cette vue.';
$lang['param_voteonce'] = 'Utilisé uniquement avec l\'action par défaut, ce paramètre vous permet de préciser si l\'internaute ne peut noter/commentaire qu\'une seule fois (basé sur l\'adresse IP). Cette valeur doit être un entier positif entre 1 et 3 :
<ul><li>1 : le module va vérifier uniquement l\'adresse IP sur le champ <em>key1</em> (l\'internaute pourra commenter à nouveau si <em>key1</em> est différent)</li>
<li>2 : le module va vérifier l\'IP sur les champs <em>key1</em> et <em>key2</em></li>
<li>3 : le module va vérifier l\'IP sur les trois clés';
$lang['postinstall'] = 'Le module Commentaires et notations (CGFeedback) est maintenant prêt à être configuré';
$lang['postuninstall'] = 'Le module Commentaires et notations (CGFeedback) ainsi que toutes les données associées ont été enlevés de la base de données';
$lang['prompt_add_comment'] = 'Ajouter un commentaire';
$lang['prompt_add_field'] = 'Ajouter un nouveau champ';
$lang['prompt_allow_comment_html'] = 'Autoriser les commentateurs a inclure du code HTML dans leurs commentaires';
$lang['prompt_allow_comment_wysiwyg'] = 'Autoriser l\'utilisation de l\'éditeur WYSIWYG pour les commentaires ?';
$lang['prompt_author_email'] = 'Courriel de l\'auteur';
$lang['prompt_author_name'] = 'Nom de l\'auteur';
$lang['prompt_author_notify'] = 'Avertir l\'auteur de l\'ajout de commentaires sur ce thread';
$lang['prompt_captcha_module'] = 'Module utilisé pour exécuter les tests CAPTCHA';
$lang['prompt_comment'] = 'Commentaire';
$lang['prompt_default_content'] = 'Contenu par défaut pour ce champs (optionnel, laisser à blanc)';
$lang['prompt_dropdown_options'] = 'Options pour liste déroulant (dropdown) ou champs multi-sélection. Une ligne par entrée.<br/>Les valeurs peuvent être séparées du label en utilisant le symbol égal : <em>i:e : Femme=f</em>';
$lang['prompt_email_validate'] = 'Validation de l\'adresse e-mail';
$lang['prompt_field_length'] = 'Longeur du champ';
$lang['prompt_field_maxlength'] = 'Taille maximum du champ';
$lang['prompt_field_name'] = 'Nom du champ';
$lang['prompt_field_type'] = 'Type du champ';
$lang['prompt_general_settings'] = 'Paramètres généraux';
$lang['prompt_is_email_html'] = 'Envoyer le message au format HTML?';
$lang['prompt_message_template'] = 'Gabarit des messages';
$lang['prompt_moderate_comments'] = 'Modérer tous les commentaires';
$lang['prompt_moderation_iplist'] = 'Modérer selon la/les adresse(s) IP';
$lang['prompt_moderation_patterns'] = 'Motifs de modération';
$lang['prompt_notify'] = 'Me prévenir lorsqu\'il y a de nouveaux commentaires sur cette page';
$lang['prompt_origurl'] = 'Adresse URL originale';
$lang['prompt_quality_control_settings'] = 'Paramétres de contrôle de la qualité';
$lang['prompt_rating'] = 'Notation';
$lang['prompt_send_notification_to_group'] = 'Envoi de notifications de nouveaux commentaires aux membres de ce groupe :<br/><em>(régler sur aucun pour désactiver les notifications)</em>';
$lang['prompt_spamcheck_module'] = 'Module utilisé pour détecter le spam dans les commentaires';
$lang['prompt_status'] = 'Statut';
$lang['prompt_subject'] = 'Sujet';
$lang['prompt_success_msg'] = 'Message affiché après un envoi de commentaire réussi';
$lang['prompt_title'] = 'Titre du commentaire';
$lang['prompt_use_cookies'] = 'Sauvegarder les paramètres utilisateur dans un cookie';
$lang['prompt_use_wysiwyg'] = 'Autoriser l\'éditeur WYSIWYG';
$lang['prompt_word_limit'] = 'Nombre de mots max. par commentaire';
$lang['prompt_your_email'] = 'Votre courriel';
$lang['prompt_your_name'] = 'Votre nom';
$lang['prompt_your_rating'] = 'Votre note';
$lang['published'] = 'Publié';
$lang['reset_to_defaults'] = 'Retour aux paramètres usine';
$lang['spam'] = 'Spam';
$lang['statistics'] = 'Statistiques';
$lang['submit'] = 'Envoyer';
$lang['title_add_field'] = 'Ajouter un champ';
$lang['type'] = 'Type';
$lang['unlimited'] = 'Illimité';
$lang['usernotification_subject'] = 'Une réponse a été postée sur une discussion que vous suivez';
$lang['validate_normal'] = 'Validation du format d\'adresse';
$lang['validate_domain'] = 'Validation du format d\'adresse et de nom de domaine';
$lang['yes'] = 'Oui';
?>