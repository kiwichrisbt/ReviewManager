<h3>{if $comment->id}{$mod->Lang('lbl_edit_comment')}{else}{$mod->Lang('lbl_add_comment')}{/if}</h3>

{form_start cid=$comment->id}
<div class="pageoverflow">
  <p class="pageinput">
    <input type="submit" name="{$actionid}submit" value="{$mod->Lang('submit')}"/>
    <input type="submit" name="{$actionid}cancel" value="{$mod->Lang('cancel')}"/>
    {if $comment->id}<input type="submit" name="{$actionid}delete" value="{$mod->Lang('delete')}"/>{/if}
  </p>
</div>

<div class="pageoverflow">
    <p class="pagetext">{$mod->Lang('prompt_status')}:</p>
	<p class="pageinput">
		<select name="{$actionid}status">
			 {html_options options=$status_options selected=$comment->status}
		</select>
	</p>
 </div>

<div class="pageoverflow">
  <p class="pagetext">{$mod->Lang('prompt_rating')}:</p>
  <p class="pageinput">
    <select name="{$actionid}rating">
       {html_options options=$rating_options selected=$comment->rating}
    </select>
  </p>
</div>

<div class="pageoverflow">
  <p class="pagetext">{$mod->Lang('lbl_created')}:</p>
  <p class="pageinput">
    <input type="date" name="{$actionid}created" value="{$comment->created|date_format:'%Y-%m-%d'}"/>
  </p>
</div>

<div class="pageoverflow">
  <p class="pagetext">{$mod->Lang('prompt_title')}:</p>
  <p class="pageinput"><input type="text" name="{$actionid}title" size="80" maxlength="255" value="{$comment->title}"/></p>
</div>

{if $comment->id}
<div class="pageoverflow">
  <p class="pagetext">{$mod->Lang('prompt_author_name')}:</p>
  <p class="pageinput"><input type="text" name="{$actionid}author_name" size="80" maxlength="255" value="{$comment->author_name}"/></p>
</div>
<div class="pageoverflow">
  <p class="pagetext">{$mod->Lang('prompt_author_email')}:</p>
  <p class="pageinput"><input type="text" name="{$actionid}author_email" size="80" maxlength="255" value="{$comment->author_email}"/></p>
</div>
<div class="pageoverflow">
    <p class="pagetext">{$mod->Lang('prompt_origurl')}:</p>
	<p class="pageinput">
    <input type="text" name="{$actionid}origurl" size="80" maxlength="255" value="{$comment->origurl}"/>
	</p>
</div>
<div class="pageoverflow">
  <p class="pagetext">&nbsp;</p>
  <p class="pageinput"><input type="checkbox" name="{$actionid}author_notify" value="1" {if $comment->author_notify == 1}checked="checked"{/if}/>
  {$mod->Lang('prompt_author_notify')}</p>
</div>
{/if}


<div class="pageoverflow">
  <p class="pagetext">{$mod->Lang('prompt_comment')}:</p>
  <p class="pageinput">
	  {cms_textarea prefix=$actionid name=data value=$comment->data enablewysiwyg=true}
	</p>
</div>
{* custom fields *}
{if isset($fields)}
{foreach from=$fields key='fieldid' item='field'}
<div class="pageoverflow">
  <div class="pagetext">
    {$field.name}:
  </div>
  <div class="pageinput">
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
{form_end}