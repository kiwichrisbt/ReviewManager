{* summary template *}
<div class="cgfeedback_summary_report">
{strip}
  {if $pagination.pagecount > 1}
     <div class="cgfeedback_pagination">
     <span>{$mod->Lang('page')}:</span>
     <span>
       {$pages=$pagination->get_pagelist()}
       {$curpage=$pagination.page}
       {foreach $pages as $pagenum}
         <a href="{$pagination->get_pageurl($pagenum)}" {if $pagenum==$curpage}class="active"{/if}>{$pagenum}</a>&nbsp;
       {/foreach}
     </span>
     </div>
  {/if}{* pagecount *}

  {foreach $comments as $one}
    <div class="rm_addcomment">
      <div class="row">
         <div class="three-col">{$mod->Lang('lbl_title')}:</div>
         <div class="nine-col">
            <a href="{$one->detail_url}" title="{$one->title}">{$one->title}</a><br>
            {if $one->rating}<span class="star-rating-sprite star-rating-sprite-{$one->rating * 4}"></span>{/if}
          </div>
        </div>

        <div class="row">
          <div class="three-col">{$mod->Lang('lbl_created')}:</div>
          <div class="nine-col">{$one->created|date_format:'%x'}</div>
        </div>

       {if $one->author_name}
         <div class="row">
           <div class="three-col">{$mod->Lang('lbl_author_name')}:</div>
           <div class="nine-col">{$one->author_name}</div>
         </div>
       {/if}

       <div class="row">
       <div class="row">
           <div class="three-col">{$mod->Lang('lbl_comment')}:</div>
           <div class="nine-col">{$one->data|cms_html_entity_decode}</div>
         </div>
       </div>

       {$fields=$one->get_field_hash()}
       {foreach $fields as $name => $value}
       {if $value}
           <div class="row">
             <div class="three-col">{$name}:</div>
             <div class="nine-col">{$value|htmlspecialchars}</div>
           </div>
        {/if}
       {/foreach}
     </div>
   {/foreach}{* comments *}
{/strip}
{include file='module_file_tpl:ReviewManager;default_stylesheet.tpl'}
</div>
