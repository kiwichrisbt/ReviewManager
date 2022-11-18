{* user notification template *}
<html>
<body>
<h1>{$subject}</h1>

<table>
<tr>
  <td>{$mod->Lang('lbl_url')}:</td>
  <td>{$orig_url}</td>
</tr>
<tr>
  <td>{$mod->Lang('lbl_key1')}:</td>
  <td>{$key1}</td>
</tr>
<tr>
  <td>{$mod->Lang('lbl_key2')}:</td>
  <td>{$key2}</td>
</tr>
{if !empty($key3) }
<tr>
  <td>{$mod->Lang('lbl_key3')}:</td>
  <td>{$key3}</td>
</tr>
{/if}
<tr>
  <td>{$mod->Lang('lbl_author')}:</td>
  <td>{$author_name} {if !empty($author_email)}({$author_email}){/if}</td>
</tr>
<tr>
  <td>{$mod->Lang('lbl_title')}:</td>
  <td>{$title}</td>
</tr>
<tr>
  <td>{$mod->Lang('lbl_rating')}:</td>
  <td>{$rating}</td>
</tr>
<tr>
  <td>{$mod->Lang('lbl_comment')}:</td>
  <td>{$comment}</td>
</tr>
{foreach from=$fields item='onefield'}
<tr>
  <td>{$onefield.name}:</td>
  <td>{$onefield.value}</td>
</tr>
{/foreach}
</body>
</html>
