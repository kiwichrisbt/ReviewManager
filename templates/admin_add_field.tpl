<h3>{$mod->Lang('title_add_field')}</h3>

{form_start}
<div class="pageoverflow">
  <p class="pageinput">
    <input type="submit" name="{$actionid}submit" value="{$mod->Lang('submit')}"/>
    <input type="submit" name="{$actionid}cancel" value="{$mod->Lang('cancel')}"/>
  </p>
</div>

<div class="pageoverflow">
  <p class="pagetext">{$mod->Lang('prompt_field_name')}:</p>
  <p class="pageinput"><input type="text" size="80" maxlength="255" name="{$actionid}name" value="{$fld.name}"/></p>
</div>

<div class="pageoverflow">
  <p class="pagetext">{$mod->Lang('prompt_field_type')}:</p>
  <p class="pageinput">
    <select name="{$actionid}type" onchange="this.form.submit();">
        {html_options options=$fldtypes selected=$fld.type}
    </select>
  </p>
 </div>

{if $fld.type == 0 or $fld.type == 1}
  {* text field or email field *}

<div class="pageoverflow">
  <p class="pagetext">{$mod->Lang('prompt_field_length')}:</p>
  <p class="pageinput"><input id="fldlen" type="text" name="{$actionid}attrib_length" value="{$fld.attrib.length|default:40}" maxlength="3"/></p>
</div>

<div class="pageoverflow">
  <p class="pagetext">{$mod->Lang('prompt_field_maxlength')}:</p>
  <p class="pageinput"><input id="fldmaxlen" type="text" name="{$actionid}attrib_maxlength" value="{$fld.attrib.maxlength|default:80}" maxlength="4"/></p>
</div>

{elseif $fld.type == 2}
  {* text area field *}

<div class="pageoverflow">
  <p class="pagetext">{$mod->Lang('prompt_default_content')}:</p>
  <p class="pagetext"><textarea id="dfltcontent" name="{$actionid}attrib_dfltcontent" rows="10" cols="100">{$fld.attrib.dfltcontent|default:''}</textarea></p>
</div>

<div class="pageoverflow">
  <p class="pagetext">{$mod->Lang('prompt_use_wysiwyg')}:</p>
  <p class="pageinput">
    <select id="usewysiwyg" name="{$actionid}attrib_usewysiwyg">
      {html_options options=$yesno selected=$flds.attrib.usewysiwyg}
    </select>
  </p>
 </div>


{elseif $fld.type == 3 or $fld.type == 4}
  {* dropdown or multiselect *}
<div class="pageoverflow">
  <p class="pagetext">{$mod->Lang('prompt_dropdown_options')}:</p>
  <p class="pagetext"><textarea id="options" name="{$actionid}attrib_options" rows="5">{$fld.attrib.options|default:''}</textarea></p>
</div>
{/if}

{form_end}