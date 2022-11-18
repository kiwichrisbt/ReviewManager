<h3>{$mod->Lang('title_add_field')}</h3>

{$formstart}
<div class="c_full cf">
  <p class="grid_8">
    <input type="submit" name="{$actionid}submit" value="{$mod->Lang('submit')}"/>
    <input type="submit" name="{$actionid}cancel" value="{$mod->Lang('cancel')}"/>
  </p>
</div>

<div class="c_full cf">
  <label for="fldname" class="grid_3">{$mod->Lang('prompt_field_name')}:</label>
  <input id="fldname" type="text" name="{$actionid}name" value="{$fld.name}" maxlength="255" class="grid_8"/></p>
</div>

<div class="c_full cf">
  <label for="fldtype" class="grid_3">{$mod->Lang('prompt_field_type')}:</label>
  <select id="fldtype" name="{$actionid}type" onchange="this.form.submit();" class="grid_8">
    {html_options options=$fldtypes selected=$fld.type}
  </select>
</div>

{if $fld.type == 0 or $fld.type == 1}
  {* text field or email field *}
  <div class="c_full cf">
    <label for="fldlen" class="grid_3">{$mod->Lang('prompt_field_length')}:</label>
    <input id="fldlen" type="text" name="{$actionid}attrib_length" value="{$fld.attrib.length|default:40}" maxlength="3" class="grid_3"/>
  </div>

  <div class="c_full cf">
    <label for="fldmaxlen" class="grid_3">{$mod->Lang('prompt_field_maxlength')}:</label>
    <input id="fldmaxlen" type="text" name="{$actionid}attrib_maxlength" value="{$fld.attrib.maxlength|default:80}" maxlength="4" class="grid_3"/>
  </div>
{elseif $fld.type == 2}
  {* text area field *}
  <div class="c_full cf">
    <label for="dfltcontent" class="grid_3">{$mod->Lang('prompt_default_content')}:</label>
    <textarea id="dfltcontent" name="{$actionid}attrib_dfltcontent" rows="5" class="grid_8">{$fld.attrib.dfltcontent|default:''}</textarea>
  </div>

  <div class="c_full cf">
    <label for="usewysiwyg" class="grid_3">{$mod->Lang('prompt_use_wysiwyg')}:</label>
    <select id="usewysiwyg" name="{$actionid}attrib_usewysiwyg" class="grid_3">
      {html_options options=$yesno selected=$flds.attrib.usewysiwyg}
    </select>
  </div>
{elseif $fld.type == 3 or $fld.type == 4}
  {* dropdown or multiselect *}
  <div class="c_full cf">
    <label for="options" class="grid_3">{$mod->Lang('prompt_dropdown_options')}:</label>
    <textarea id="options" name="{$actionid}attrib_options" rows="5" class="grid_8">{$fld.attrib.options|default:''}</textarea>
   </div>
{/if}

{$formend}