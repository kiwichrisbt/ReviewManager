{* admin_settings_tab.tpl *}


{if $CGFeedback_installed}
<fieldset>
    <legend>{$mod->Lang('prompt_import_cgfeedback')} </legend>
    <div class="warning">
        <p class="pageinput">
            {$mod->Lang('import_cgfeedback_alert')}
        </p>
    </div>
    <p class="pageinput">
    <ol>
        <li><a class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-icon-primary" href="{cms_action_url action=admin_importer}"><span class="ui-button-icon-primary ui-icon ui-icon-arrowthickstop-1-n"></span><span class="ui-button-text">{$mod->Lang('import_all_from_cgfeedback')}</span></a> - {$mod->Lang('import_step_1')}</li><br>
        <li>{$mod->Lang('import_step_2')}</li><br>
        <li>{$mod->Lang('import_step_3')}</li>
    </ol>
        
    </p>
</fieldset>
<br>
{/if}



{form_start action=admin_settings_tab}
<div class="pageoverflow">
    <p class="pageinput">
        <input type="submit" name="{$actionid}submit" value="{$mod->Lang('save_settings')}"/>
    </p>
</div>

<fieldset>
  <legend>&nbsp;{$mod->Lang('prompt_general_settings')}:&nbsp;</legend>
  <div class="c_full cf m_bottom_10">
    <p class="grid_3"><label for="titlerequired">{$mod->Lang('prompt_titlerequired')}</label>:</p>
    <p class="grid_8">
      <select id="titlerequired" name="{$actionid}titlerequired" class="c_full">
      {cge_yesno_options selected=$prefs.titlerequired}
      </select>
      <br/>{$mod->Lang('info_titlerequired')}
    </p>
  </div>

  <div class="c_full cf m_bottom_10">
    <p class="grid_3"><label for="commentrequired">{$mod->Lang('prompt_commentrequired')}</label>:</p>
    <p class="grid_8">
      <select id="commentrequired" name="{$actionid}commentrequired" class="c_full">
      {cge_yesno_options selected=$prefs.commentrequired}
      </select>
      <br/>{$mod->Lang('info_commentrequired')}
    </p>
  </div>

  <div class="c_full cf m_bottom_10">
    <p class="grid_3"><label for="emailrequired">{$mod->Lang('prompt_emailrequired')}</label>:</p>
    <p class="grid_8">
      <select id="emailrequired" name="{$actionid}emailrequired" class="c_full">
      {cge_yesno_options selected=$prefs.emailrequired}
      </select>
      <br/>{$mod->Lang('info_emailrequired')}
    </p>
  </div>

  <div class="c_full cf m_bottom_10">
    <p class="grid_3"><label for="namerequired">{$mod->Lang('prompt_namerequired')}</label>:</p>
    <p class="grid_8">
      <select id="namerequired" name="{$actionid}namerequired" class="c_full">
      {cge_yesno_options selected=$prefs.namerequired}
      </select>
      <br/>{$mod->Lang('info_namerequired')}
    </p>
  </div>

  <div class="c_full cf m_bottom_10">
    <label for="allow_comment_wysieyg" class="grid_3">{$mod->Lang('prompt_allow_comment_wysiwyg')}</label>
    <p class="grid_8">
      <select id="allow_comment_wysiwyg" name="{$actionid}allow_comment_wysiwyg" class="c_full">
      {cge_yesno_options selected=$prefs.allow_comment_wysiwyg}
      </select>
      <br/>{$mod->Lang('info_use_wysiwyg')}
    </p>
  </div>

  <div class="c_full cf m_bottom_10">
    <label for="allow_comment_html" class="grid_3">{$mod->Lang('prompt_allow_comment_html')}</label>
    <p class="grid_8">
      <select id="allow_comment_html" name="{$actionid}allow_comment_html" class="c_full">
      {cge_yesno_options selected=$prefs.allow_comment_html}
      </select>
      <br/>{$mod->Lang('info_allow_comment_html')}
    </p>
  </div>

  <div class="c_full cf m_bottom_10">
    <label for="word_limit" class="grid_3">{$mod->Lang('prompt_word_limit')}</label>
    <p class="grid_8">
      <input id="word_limit" type="text" name="{$actionid}word_limit" value="{$prefs.word_limit}" maxlength="4" class="c_full"/>
      <br/>
      {$mod->Lang('info_word_limit')}
    </p>
  </div>

  <div class="c_full cf m_bottom_10">
   <label for="email_validate" class="grid_3">{$mod->Lang('prompt_email_validate')}:</label>
   <p class="grid_8">
     <select id="validate_email" name="{$actionid}validate_email" class="c_full">
       {html_options options=$validate_opts selected=$prefs.validate_email}
     </select>
     <br/>
     {$mod->Lang('info_email_validate')}
   </p>
  </div>

  <div class="c_full cf m_bottom_10">
    <label for="use_cookies" class="grid_3">{$mod->Lang('prompt_use_cookies')}</label>
    <p class="grid_8">
      <select id="use_cookies" name="{$actionid}use_cookies" class="c_full">
      {cge_yesno_options selected=$prefs.use_cookies}
      </select>
      <br/>{$mod->Lang('info_use_cookies')}
    </p>
  </div>

  <div class="c_full cf m_bottom_10">
    <label for="friendlyname" class="grid_3">{$mod->Lang('prompt_friendlyname')}</label>
    <p class="grid_8">
      <input id="friendlyname" type="text" name="{$actionid}friendlyname" value="{$prefs.friendlyname}" maxlength="80" class="c_full"/>
      <br/>{$mod->Lang('info_friendlyname')}
    </p>
  </div>
</fieldset>
<br>


<fieldset>
    <legend>{$mod->Lang('lbl_notifications_messages')}:</legend>
    <div class="c_full cf m_bottom_10">
        <p class="grid_12">{$mod->Lang('info_notification_messages')}</p>
    </div><br>
    
    <div class="c_full cf m_bottom_10">
        <label for="notification_emails" class="grid_3">{$mod->Lang('prompt_notification_emails')}</label>
        <p class="grid_8">
            <input id="notification_emails" type="text" name="{$actionid}notification_emails" value="{$prefs.notification_emails}" class="c_full"/>
            <br/>{$mod->Lang('info_notification_emails')}
        </p>
    </div>

    <div class="c_full cf m_bottom_10">
        <label for="admin_notification_subject" class="grid_3">{$mod->Lang('prompt_admin_notification_subject')}</label>
        <p class="grid_8">
            <input id="admin_notification_subject" type="text" name="{$actionid}admin_notification_subject" value="{$prefs.admin_notification_subject}" class="c_full"/>
            <br/>{$mod->Lang('info_admin_notification_subject')}
        </p>
    </div>
    
    <div class="c_full cf m_bottom_10">
        <label for="user_notification_subject" class="grid_3">{$mod->Lang('prompt_user_notification_subject')}</label>
        <p class="grid_8">
            <input id="user_notification_subject" type="text" name="{$actionid}user_notification_subject" value="{$prefs.user_notification_subject}" class="c_full"/>
            <br/>{$mod->Lang('info_user_notification_subject')}
        </p>
    </div>
</fieldset>
<br>


<fieldset>
  <legend>&nbsp;{$mod->Lang('prompt_quality_control_settings')}:&nbsp;</legend>
  <div class="c_full cf m_bottom_10">
    <label for="moderate_comments" class="grid_3">{$mod->Lang('prompt_moderate_comments')}:</label>
    <p class="grid_8">
      <select id="moderate_comments" name="{$actionid}moderate_comments" class="c_full">
        {html_options options=$moderation_opts selected=$prefs.moderate_comments}
      </select>
      <br/>{$mod->Lang('info_moderate_comments')}</p>
  </div>

  <div class="c_full cf m_bottom_10">
    <label for="moderation_patterns" class="grid_3">{$mod->Lang('prompt_moderation_patterns')}:</label>
    <p class="grid_8">
      <textarea id="moderation_patterns" name="{$actionid}moderation_patterns" rows="5" class="c_full">{$prefs.moderation_patterns}</textarea>
      <br/>
      {$mod->Lang('info_moderation_patterns')}
    </p>
  </div>

  <div class="c_full cf m_bottom_10">
    <label for="moderation_iplist" class="grid_3">{$mod->Lang('prompt_moderation_iplist')}:</label>
    <p class="grid_8">
      <textarea id="moderation_iplist" name="{$actionid}moderation_iplist" rows="5" class="c_full">{$prefs.moderation_iplist}</textarea>
      <br/>
      {$mod->Lang('info_moderation_iplist')}
    </p>
  </div>

  <div class="c_full cf m_bottom_10">
    <label for="captcha_module" class="grid_3">{$mod->Lang('prompt_captcha_module')}</label>
    <p class="grid_8">
      <select id="captcha_module" name="{$actionid}captcha_module" class="c_full">
        {html_options options=$captcha_modules selected=$prefs.captcha_module}
      </select>
      <br/>{$mod->Lang('info_captcha_module')}</p>
  </div>

  <div class="c_full cf m_bottom_10">
    <label for="sfs_score" class="grid_3">{$mod->Lang('prompt_sfs_score')}</label>
    <p class="grid_8">
      {$opts=[0=>$mod->Lang('disabled'),1=>1,5=>5,10=>10,25=>25,100=>100,1000=>1000]}
      <select id="sfs_score" name="{$actionid}sfs_score" class="c_full">
        {html_options options=$opts selected=$prefs.sfs_score}
      </select>
      <br/>{$mod->Lang('info_sfs_score')}
    </p>
  </div>

</fieldset>

<div class="pageoverflow">
    <p class="pageinput">
        <input type="submit" name="{$actionid}submit" value="{$mod->Lang('save_settings')}"/>
    </p>
</div>
{form_end}
