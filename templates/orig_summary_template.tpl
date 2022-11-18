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
    <div class="cgfeedback_summary_item">
      <div class="row">
         <div class="col-sm-3">{$mod->Lang('lbl_title')}:</div>
         <div class="col-sm-9">
            <a href="{$one->detail_url}" title="{$one->title}">{$one->title}</a>
            {section name='rating' start=1 loop=6}
              {if $smarty.section.rating.index <= $one->rating}
                <img src="{$rating_imgs.img_on}" alt=""/>
              {else}
                <img src="{$rating_imgs.img_off}" alt=""/>
              {/if}
            {/section}
          </div>
        </div>

        <div class="row">
          <div class="col-sm-3">{$mod->Lang('lbl_created')}:</div>
          <div class="col-sm-9">{$one->created|date_format:'%x'}</div>
        </div>

       {if $one->author_name}
         <div class="row">
           <div class="col-sm-3">{$mod->Lang('lbl_author_name')}:</div>
           <div class="col-sm-9">{$one->author_name}</div>
         </div>
       {/if}

       <div class="row">
         {$one->data|cms_html_entity_decode}
       </div>

       {$fields=$one->get_field_hash()}
       {foreach $fields as $name => $value}
           <div class="row">
             <div class="col-sm-3">{$name}:</div>
             <div class="col-sm-9">{$value|htmlspecialchars}</div>
           </div>
       {/foreach}
     </div>
   {/foreach}{* comments *}
{/strip}
</div>{* .cgfeedback_summary_report *}
