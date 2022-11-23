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
    {$mod->Lang('lbl_avg_rating')}:&nbsp;{$stats.avg|string_format:"%.1f"}
  </div>

  <div class="feedback_ratings_item">
  {if $stats.int_avg}<span class="star-rating-sprite star-rating-sprite-{$stats.int_avg|string_format:"%.1f" * 4}"></span>{/if}
  </div>
 
</div>
 {include file='module_file_tpl:ReviewManager;default_stylesheet.tpl'}
{/strip}