{* cgfeedback ratings template *}
{strip}
<div id="{$actionid}_feedback_ratings_report">
  <div class="feedback_ratings_item">
    {$mod->Lang('lbl_count_comments')}:&nbsp;{$stats.count}
  </div>

  <div class="feedback_ratings_item">
    {$mod->Lang('lbl_min_rating')}:&nbsp;{$stats.min}
  </div>

  <div class="feedback_ratings_item">
    {$mod->Lang('lbl_max_rating')}:&nbsp;{$stats.max}
  </div>

  <div class="feedback_ratings_item">
    {$mod->Lang('lbl_avg_rating')}:&nbsp;{$stats.avg}
  </div>

  <div class="feedback_ratings_item">
    {section name='rating' start=1 loop=6}
    {if $smarty.section.rating.index <= $stats.int_avg}
       <img src="{$rating_imgs.img_on}" alt=""/>
    {/if}
    {/section}
    {if isset($stats.fraction)}
       <img src="{$rating_imgs.img_half}" alt=""/>
    {/if}
  </div>
 
{* feedback_ratings_report *}</div>
{/strip}