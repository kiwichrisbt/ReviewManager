<h3>{$mod->Lang('lbl_edit_comment')}</h3>

{$formstart}
<div class="c_full cf">
  <p class="grid_2"></p>
  <p class="grid_9">
    <input type="submit" name="{$actionid}submit" value="{$mod->Lang('submit')}"/>
    <input type="submit" name="{$actionid}cancel" value="{$mod->Lang('cancel')}"/>
    <input type="submit" name="{$actionid}delete" value="{$mod->Lang('delete')}"/>
  </p>
</div>

<div class="c_full cf">
    <label class="grid_2">{$mod->Lang('prompt_origurl')}:</label>
    <input class="grid_8" type="text" name="{$actionid}origurl" maxlength="255" value="{$comment->origurl}"/></p>
</div>
<div class="c_full cf">
    <label class="grid_2">{$mod->Lang('prompt_status')}:</label>
    <select class="grid_6" name="{$actionid}status">
         {html_options options=$status_options selected=$comment->status}
    </select>
 </div>

<div class="c_full cf">
  <label class="grid_2">{$mod->Lang('prompt_title')}:</label>
  <p class="grid_9"><input type="text" name="{$actionid}title" size="80" maxlength="255" value="{$comment->title}"/></p>
</div>

<div class="c_full cf">
  <label class="grid_2">{$mod->Lang('prompt_author_name')}:</label>
  <p class="grid_9"><input type="text" name="{$actionid}author_name" size="80" maxlength="255" value="{$comment->author_name}"/></p>
</div>

<div class="c_full cf">
  <p class="grid_2">{$mod->Lang('prompt_author_email')}:</p>
  <p class="grid_9"><input type="text" name="{$actionid}author_email" size="80" maxlength="255" value="{$comment->author_email}"/></p>
</div>

<div class="c_full cf">
  <p class="grid_2">{$mod->Lang('prompt_rating')}:</p>
  <p class="grid_9">
    <select name="{$actionid}rating">
       {html_options options=$rating_options selected=$comment->rating}
    </select>
  </p>
</div>

<div class="c_full cf">
  <p class="grid_2">{$mod->Lang('prompt_comment')}:</p>
  <p class="grid_9">{cge_textarea wysiwyg=$allow_wysiwyg prefix=$actionid name=data value=$comment->data rows=5 cols="82"}</p>
</div>

<div class="c_full cf">
  <p class="grid_2">&nbsp;</p>
  <p class="grid_9"><input type="checkbox" name="{$actionid}author_notify" value="1" {if $comment->author_notify == 1}checked="checked"{/if}/>
  {$mod->Lang('prompt_author_notify')}</p>
</div>

{* custom fields *}
{if isset($fields)}
{foreach from=$fields key='fieldid' item='field'}
<div class="c_full cf">
  <div class="grid_2">
    {$field.name}:
  </div>
  <div class="grid_9">
  {if isset($field.input)}
    {$field.input}
  {elseif $field.type == 0 or $field.type == 1 }
    <input type="text" name="{$actionid}field_{$fieldid}" size="{$field.attribs.length}" maxlength="{$field.attribs.maxlength}" value="{$field.value}"/>
  {elseif $field.type == 2}
    {* text area fields should have an input... so this should never get called... but just in case *}
    <textarea name="{$actionid}field_{$fieldid}">{$field.value}</textarea>
  {elseif $field.type == 3}
    <select name="{$actionid}field_{$fieldid}">
      {html_options options=$field.attribs.options selected=$field.value}
    </select>
  {elseif $field.type == 4}
    <select multiple="multiple" size="4" name="{$actionid}field_{$fieldid}[]">
      {html_options options=$field.attribs.options selected=$field.value}
    </select>
  {/if}
  </div>
</div>
{/foreach}
{/if}

{$formend}