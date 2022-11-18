{* detail template *}
  <div class="feedback_summary_item">
    <div class="feedback_item_title">
      {$mod->Lang('lbl_title')}:&nbsp;{$onecomment->title}
    </div>

    <div class="feedback_item_authorname">
      {$mod->Lang('lbl_author_name')}:&nbsp;{$onecomment->created|cms_date_format}
    </div>

    <div class="feedback_item_rating">
      {$mod->Lang('lbl_rating')}:&nbsp;{$onecomment->rating}&nbsp;&nbsp;
      {section name='rating' start=1 loop=6}
        {if $smarty.section.rating.index <= $onecomment->rating}
          <img src="{$rating_imgs.img_on}" alt=""/>
        {else}
          <img src="{$rating_imgs.img_off}" alt=""/>
        {/if}
      {/section}
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

    {if $onecomment->author_ip}
    <div class="feedback_item_authorip">
      {$mod->Lang('lbl_author_ip')}:&nbsp;{$onecomment->author_ip}
    </div>
    {/if}

    <div class="feedback_item_data">
      {$onecomment->data}
    </div>

    {foreach $onecomment->fields as $name => $value}
      <div class="feedback_item_field">
        {$name}:&nbsp;{$value}
      </div>
    {/foreach}

    <br/><br/>
  </div>
