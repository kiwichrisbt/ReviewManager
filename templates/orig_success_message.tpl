{* comment successfull template *}
<p>
Thank you {$comment->author_name} for your comment entitled &quot;{$comment->title}&quot;. 
{if $comment->author_notify}You will be notified of any further replies to this thread.{/if}
</p>