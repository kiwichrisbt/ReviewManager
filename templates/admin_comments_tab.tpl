{literal}
<script type="text/javascript">
/*<![CDATA[*/
function select_all()
{
  var cb = document.getElementsByName('{/literal}{$actionid}selected[]{literal}');
  var el = document.getElementById('selectall');
  var st = el.checked;
  for( var i = 0; i < cb.length; i++ ) {
    if( cb[i].type == "checkbox" ) {
      cb[i].checked=st;
    }
  }
}

function check_bulk()
{
  var cb = document.getElementsByName('{/literal}{$actionid}selected[]{literal}');
  var st = 0;
  for( var i = 0; i < cb.length; i++ ) {
    if( cb[i].type == "checkbox" && cb[i].checked ) {
      st = 1;
    }
  }

  if( st == 0 ) {
     alert('{/literal}{$mod->Lang('error_bulk_nothingselected')}{literal}');
     return false;
  }
  return confirm('{/literal}{$mod->Lang('confirm_bulk_operations')}{literal}');
}

if( typeof jQuery != 'undefined' ) {
jQuery(document).ready(function($) {
  // tooltip plugins
  if( jQuery().cluetip ) $("a.tooltip").cluetip({local:true, cursor: 'pointer'});
  $('#toggle_filter').on('click',function(e){
    e.preventDefault();
    $('#filterbox').toggle();
  });
}); // end
}

/*]]> */
</script>
{/literal}
{assign var='lbl_edit' value=$mod->Lang('edit')}

<div class="pageoverflow">
  <div style="float: left;">
    {if $allow_add_comments}
	<a href="{cms_action_url action=admin_editcomment}">{admin_icon icon='newobject.gif'}
	 {$mod->Lang('lbl_add_comment')}
	 </a>&nbsp;&nbsp;
    {/if}
	<a id="toggle_filter" href="">{admin_icon icon='reorder.gif'}
	{if $have_filter}{$mod->Lang('view_filter_applied')}{else}{$mod->Lang('view_filter')}{/if}
	</a>
	</div>
  <div style="float: right;">
	{if isset($firstpage_url)}
      <a href="{$firstpage_url}" title="{$mod->Lang('lbl_goto_first_page')}">&lt;&lt;</a>&nbsp;
      <a href="{$prevpage_url}" title="{$mod->Lang('lbl_goto_prev_page')}">&lt;</a>
    {/if}
    {$mod->Lang('lbl_page')}&nbsp;{$curpage}&nbsp;{$mod->Lang('lbl_of')}&nbsp;{$numpages}&nbsp;--&nbsp;<em>({$recordcount}&nbsp;{$mod->Lang('lbl_matching_records')})</em>
    {if isset($nextpage_url)}
      <a href="{$nextpage_url}" title="{$mod->Lang('lbl_goto_next_page')}">&gt;</a>&nbsp;
      <a href="{$lastpage_url}" title="{$mod->Lang('lbl_goto_last_page')}">&gt;&gt;</a>
    {/if}
  </div>
</div>
{$formstart}
<fieldset id="filterbox" style="display: none;">
<div class="pageoptions">
<legend>{$mod->Lang('lbl_filter')}:</legend>
<table class="pageoverflow">
<tr>
  <td valign="top">{* column 1 *}
<div class="pageoverflow">
  <p class="pagetext">{$mod->Lang('lbl_key1')}</p>
  <p class="pageinput">
    <select name="{$actionid}input_key1">
      {html_options options=$key1_opts selected=$key1}
    </select>
  </p>
</div>

<div class="pageoverflow">
  <p class="pagetext">{$mod->Lang('lbl_key2')}</p>
  <p class="pageinput">
    <select name="{$actionid}input_key2">
      {html_options options=$key2_opts selected=$key2}
    </select>
  </p>
</div>

<div class="pageoverflow">
  <p class="pagetext">{$mod->Lang('lbl_key3')}</p>
  <p class="pageinput">
    <select name="{$actionid}input_key3">
      {html_options options=$key3_opts selected=$key3}
    </select>
  </p>
</div>
  {* column 1 *}</td>

  <td valign="top">{* column 2 *}
<div class="pageoverflow">
  <p class="pagetext">{$mod->Lang('lbl_title')}</p>
  <p class="pageinput">
    <input type="text" name="{$actionid}input_title" size="20" maxlength="80" value="{$input_title}"/><br/>
    {$mod->Lang('info_filter_title')}
  </p>
</div>

<div class="pageoverflow">
  <p class="pagetext">{$mod->Lang('lbl_author_name')}</p>
  <p class="pageinput">
    <input type="text" name="{$actionid}input_authorname" size="20" maxlength="80" value="{$input_authorname}"/><br/>
    {$mod->Lang('info_filter_authorname')}
  </p>
</div>

<div class="pageoverflow">
  <p class="pagetext">{$mod->Lang('lbl_author_email')}</p>
  <p class="pageinput">
    <input type="text" name="{$actionid}input_authoremail" size="20" maxlength="80" value="{$input_authoremail}"/><br/>
    {$mod->Lang('info_filter_authoremail')}
  </p>
</div>
  {* column 2 *}</td>

  <td valign="top">{* column 3 *}

<div class="pageoverflow">
  <p class="pagetext">{$mod->Lang('lbl_status')}</p>
  <p class="pageinput">
    <select name="{$actionid}input_status">
      {html_options options=$statuses selected=$input_status}
    </select>
  </p>
</div>

<div class="pageoverflow">
  <p class="pagetext">{$mod->Lang('lbl_agelimit')}</p>
  <p class="pageinput">
    <select name="{$actionid}agelimit">
      {html_options options=$agelimit_opts selected=$input_agelimit}
    </select>
  </p>
</div>

<div class="pageoverflow">
  <p class="pagetext">{$mod->Lang('lbl_max_results')}</p>
  <p class="pageinput">
    <select name="{$actionid}pagelimit">
      {html_options options=$pagelimit_opts selected=$input_pagelimit}
    </select>
  </p>
</div>

  {* column3 *}</td>
  </tr>
</table>
<div class="pageoverflow">
  <p class="pageinput"><input type="submit" name="{$actionid}filter_submit" value="{$mod->Lang('submit')}"/></p>
</div>
<br/>
</div>
</fieldset>


{if !empty($comments)}
<table class="pagetable cms_sortable tablesorter">
 <thead>
 <tr>
	<th width="2%">{$mod->Lang('lbl_id')}</th>
	<th width="2%">{$mod->Lang('lbl_key1')}</th>
	<th width="2%">{$mod->Lang('lbl_key2')}</th>
	<th width="2%">{$mod->Lang('lbl_key3')}</th>
	<th>{$mod->Lang('lbl_title')}</th>
	<th>{$mod->Lang('lbl_author_name')}</th>
	<th>{$mod->Lang('lbl_status')}</th>
	<th>{$mod->Lang('lbl_created')}</th>
	<th class="pageicon {literal}{sortList: false}{/literal}">&nbsp;</th>{* edit *}
	<th class="pageicon {literal}{sorter: false}{/literal}">&nbsp;</th>{* delete *}
	<th class="pageicon {literal}{sorter: false}{/literal}"><input type="checkbox" id="selectall" onclick="select_all();"/></th>
 </tr>
 </thead>
 <tbody>
	 {foreach from=$comments item='onecomment'}
	 {cms_action_url action=admin_editcomment cid=$onecomment.id assign='edit_url'}
	 {cms_action_url action=admin_deletecomment cid=$onecomment.id assign='delete_url'}

    {capture assign='tooltipid'}tooltip-comment-{$onecomment.id}{/capture}

    {* this is for the tooltip *}
    <div id="{$tooltipid}" style="display: none;">
    {$mod->Lang('lbl_author_ip')}:{$onecomment.author_ip}<br/>
    {$mod->Lang('lbl_author_email')}:{$onecomment.author_email}<br/>
    <hr/>
    {$onecomment.data|strip_tags|summarize:50}
    </div>

    {assign var='status_style' value=''}
    {if $onecomment.status == 'draft'}
      {assign var='status_style' value='style="color: orange;"'}
    {elseif $onecomment.status == 'spam'}
      {assign var='status_style' value='style="color: red;"'}
    {/if}
    <tr>
      <td><a href="{$edit_url}" title="{$mod->Lang('edit')}">{$onecomment.id}</a></td>
      <td>{if $onecomment.key1 == '__page__'}{$mod->Lang('lbl_page')}{else}{$onecomment.key1}{/if}</td>
      <td>{$onecomment.key2}</td>
      <td>{$onecomment.key3}</td>
      <td><a href="{$edit_url}" title="{$onecomment.title}" class="tooltip" rel="#{$tooltipid}" >{$onecomment.title|truncate:50}</a></td>
      <td>{$onecomment.author_name}</td>
      <td><span {$status_style}>{$mod->Lang($onecomment.status)}</span></td>
      <td>{$onecomment.created|date_format:'%d/%m/%y %T'}</td>
      <td><a href="{$edit_url}" title="{$mod->Lang('edit')}">{admin_icon icon='edit.gif'}</a></td>
      <td><a href="{$delete_url}" title="{$mod->Lang('delete')}" onclick="return confirm('{$mod->Lang('confirm_delete_comment')}');">{admin_icon icon='delete.gif'}</a></td>
      <td><input type="checkbox" name="{$actionid}selected[]" value="{$onecomment.id}"/></td>
    </tr>
  {/foreach}
  </tbody>
</table>
<div class="pageoverflow">
  <div style="float: left;">&nbsp;</div>
  <div style="float: right;">
    <input type="submit" id="{$actionid}bulk_submit" name="{$actionid}bulk_submit" value="{$mod->Lang('submit')}" onclick="return check_bulk();"/>
    <select name="{$actionid}bulk_action">
      {html_options options=$bulk_options}
    </select>
  </div>
</div>
{/if}
{$formend}