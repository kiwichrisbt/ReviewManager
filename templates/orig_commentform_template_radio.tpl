{* comment form template *}
{if isset($message) && !isset($error)}
  <div class="message">{$message}</div>
{else}
  {if isset($error)}<div class="danger">{$message}</div>{/if}
  {* no message... display the form *}
  <div class="rm_addcomment">
  {form_start action=default inline=$inline extraparms=$extraparms}{xt_form_csrf}
  {*
   * A simple honeypot captcha field.  This field needs to be a text field, but hidden with CSS
   * deleting this field from the template will have no effect on form behavior, but if this
   * field exists, and is populated an error will be generated.
   *}
  <input type="text" name="{$actionid}feedback__data" value="" style="display: none;"/>
  <fieldset style="margin: 1em;">
  <legend>&nbsp;{$mod->Lang('prompt_add_comment')}&nbsp;</legend>

  <div class="row">
    <div class="four-col text-right">
       <label for="{$actionid}title">{$mod->Lang('prompt_title')}:</label>
    </div>
    <div class="eight-col">
      <input type="text" id="{$actionid}title" name="{$actionid}title" maxlength="255" value="{$comment_obj->title}"/>
    </div>
  </div>

  <div class="row">
    <div class="four-col text-right">
       <label for="{$actionid}author_name">*{$mod->Lang('prompt_your_name')}:</label>
    </div>
    <div class="eight-col">
      <input type="text" id="{$actionid}author_name" name="{$actionid}author_name" maxlength="255" value="{$comment_obj->author_name}" required/>
    </div>
  </div>

  <div class="row">
    <div class="four-col text-right">
       <label for="{$actionid}author_email">{$mod->Lang('prompt_your_email')}:</label>
    </div>
    <div class="eight-col">
      <input type="email" id="{$actionid}author_email" name="{$actionid}author_email" maxlength="255" value="{$comment_obj->author_email}"/>
    </div>
  </div>

  <div class="row">
    <div class="four-col text-right"></div>
    <div class="eight-col">
      <label> <input type="checkbox" name="{$actionid}author_notify" value="1" {if $comment_obj->author_notify == 1}checked{/if}/> {$mod->Lang('prompt_notify')}</label>
    </div>
  </div>

  <div class="row">
    <div class="four-col text-right">
       <label>{$mod->Lang('prompt_your_rating')}:</label>
    </div>
    <div class="eight-col">
      <div class="stars-container">
      <div class="rate">
        {foreach $rating_options_reversed as $option}
          <input type="radio" name="{$actionid}rating" value="{$option}" id="start{$option}"/>
          <label for="start{$option}">{$option}&nbsp;</label>
        {/foreach}
      </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="four-col text-right">
       <label for="{$actionid}comment">{$mod->Lang('prompt_comment')}:</label>
    </div>
    <div class="eight-col">
      {cms_textarea name="{$actionid}comment" id="{$actionid}comment" rows=3 value=$comment_obj->data enablewysiwyg=$wysiwyg}
    </div>
  </div>

  {* custom fields *}
  {if isset($fields)}
    {foreach $fields as $fieldid => $field}
      {$_id="{$actionid}field_{$fieldid}"}
      <div class="row">
        <div class="four-col text-right">
          <label for="{$_id}">{$field.name}:</label>
        </div>
        <div class="eight-col">
          {if $field.type == 0 or $field.type == 1 }
            <input type="text" name="{$actionid}field_{$fieldid}" value="{$field.value|default:''}" size="{$field.attrib.length}" maxlength="{$field.attrib.maxlength}"/>
          {elseif $field.type == 2}
            {cms_textarea name="{$actionid}field_{$fieldid}" id="{$_id}" rows=3 value=$field.value|default:'' enablewysiwyg=$field.attrib.usewysiwyg|default:0}
          {elseif $field.type == 3}
            <select name="{$actionid}field_{$fieldid}">
              {html_options options=$field.attrib.options selected="{$field.value}"}
            </select>
          {elseif $field.type == 4}
            <select multiple="multiple" size="4" name="{$actionid}field_{$fieldid}[]">
              {html_options options=$field.attrib.options selected="{$field.value}"}
            </select>
  	  {elseif isset($field.input)}
            {$field.input}
          {/if}
        </div>
      </div>
    {/foreach}
  {/if}

  {if isset($captcha_img)}
    {* handle captcha image *}
    <div class="row">
      <div class="four-col text-right"><label for="{$actionid}captchatext">{$mod->Lang('prompt_captcha')}:</label></div>
      <div class="eight-col">
        {if $captcha_needs_input}
        <input type="text" class="form-control" id="{$actionid}captchatext" name="{$actionid}feedback_captcha" value="" size="20"/><br/>
	{/if}
        {$captcha_img}
      </div>
    </div>
  {/if}

  <div class="row">
    <div class="four-col text-right"></div>
    <div class="eight-col">
      <button class="btn btn-active" name="{$actionid}rm_submit">{$mod->Lang('submit')}</button>
    </div>
  </div>

  </fieldset>
  {form_end}
  </div>

{include file='module_file_tpl:ReviewManager;default_stylesheet.tpl'}

{/if}