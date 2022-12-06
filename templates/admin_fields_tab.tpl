<div class="pageoverflow">
    <table class="pagetable cms_sortable tablesorter" cellspacing="0">
        <thead>
            <tr>
                <th>{$mod->Lang('id')}</th>
                <th>{$mod->Lang('name')}</th>
                <th>{$mod->Lang('type')}</th>
                <th class="{literal}{sorter: false}{/literal} pageicon"></th>
                <th class="{literal}{sorter: false}{/literal} pageicon"></th>
                <th class="{literal}{sorter: false}{/literal} pageicon"></th>
                <th class="{literal}{sorter: false}{/literal} pageicon"></th>
            </tr>
        </thead>
        <tbody>
{if isset($fields)}
    {foreach from=$fields item='onefield'}

     {cms_action_url action=admin_add_field fid=$onefield.id assign='edit_url'}
	 {cms_action_url action=admin_del_field fid=$onefield.id assign='delete_url'}

        {cycle values="row1,row2" assign='rowclass'}
        <tr class="{$rowclass}" onmouseover="this.className='{$rowclass}hover';" onmouseout="this.className='{$rowclass}';">
            <td>{$onefield.id}</td>
            <td><a href="{$edit_url}" title="{$mod->Lang('edit_this_field')}">{$onefield.name}</a></td>
            <td>{$fieldtypes[$onefield.type]}</td>
            <td>
            {if isset($onefield.movedown_url)}
                <a href="{$onefield.movedown_url}" title="{$mod->Lang('move_down')}">{admin_icon icon='sort_down.gif' alt=$mod->Lang('down')}</a>
            {/if}
            </td>
            <td>
            {if isset($onefield.moveup_url)}
                <a href="{$onefield.moveup_url}" title="{$mod->Lang('move_up')}">{admin_icon icon='sort_up.gif' alt=$mod->Lang('up')}</a>
            {/if}
            </td>
            <td><a href="{$edit_url}" title="{$mod->Lang('edit_this_field')}">{admin_icon icon='edit.gif' alt=$mod->Lang('edit')}</a></td>
            <td><a href="{$delete_url}" title="{$mod->Lang('delete_this_field')}" onclick="return confirm('{$mod->Lang('ask_delete_field')}');">{admin_icon icon='delete.gif'}</a></td>
        </tr>
    {/foreach}
{else}
        <tr>
            <td colspan="7">{$mod->Lang('no_fields_defined')}</td>
        </tr>
{/if}
    </tbody>
  </table>
</div>

<p class="pageoverflow">
    {*cms_action_url action=admin_add_field pid=$page->id*}
    <a href="{cms_action_url action=admin_add_field}">{admin_icon icon='newobject.gif'} {$mod->Lang('prompt_add_field')}</a>
</p>

{*
<pre>
$:{$|print_r}
</pre>
*}