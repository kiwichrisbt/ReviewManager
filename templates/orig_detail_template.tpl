{if isset($message) && $message ne ''}
  {if isset($error)}
  <div class="danger">{$message}</div>
  {else}
  <div class="message">{$message}</div>
  {/if}
{else}
{* detail template *}
  <div class="feedback_summary_item">
    <div class="feedback_item_title">
      {$mod->Lang('lbl_title')}:&nbsp;{$onecomment->title}
    </div>

    <div class="feedback_item_created">
      {$mod->Lang('lbl_created')}:&nbsp;{$onecomment->created|cms_date_format}
    </div>

    <div class="feedback_item_rating">
      {if $onecomment->rating}<span class="star-rating-sprite star-rating-sprite-{$onecomment->rating * 4}"></span>{/if}
    </div>

    {if $onecomment->author_name}
    <div class="feedback_item_authorname">
      {$mod->Lang('lbl_author_name')}:&nbsp;{$onecomment->author_name}
    </div>
    {/if}

    {if $onecomment->author_email}
    <div class="feedback_item_authoremail">
      {$mod->Lang('lbl_author_email')}:&nbsp;{$onecomment->author_email}
    </div>
    {/if}

    <div class="feedback_item_data">
      {$onecomment->data}
    </div>

    {foreach $onecomment->fields as $name => $value}
    {if $value}
      <div class="feedback_item_field">
        {$name}:&nbsp;{$value}
      </div>
    {/if}
    {/foreach}

    <br/><br/>
  </div>
  {include file='module_file_tpl:ReviewManager;default_stylesheet.tpl'}
{/if}