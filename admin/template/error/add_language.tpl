<div class="page-form">
<div id="content">

<form action="<?php echo $action;?>" method="post">
<table id="edit">
<tr><td colspan="2" class="error">
<?php echo $error['error_warning'];?>
</td></tr>
<tr><td class="entry"><?php echo $entry_language_name;?></td>
<td class="value"><input type="text" name="name" size="15" value="<?php echo $name;?>"/></td></tr>
<tr>
<td class="entry"><?php echo $entry_language_code;?></td>
<td class="value"><input type="text" name="code" size="3" value="<?php echo $code;?>"/></td></tr>
<tr>
<td class="entry"><?php echo $entry_language_localisation;?></td>
<td class="value"><input type="text" name="localisation" size="3" value=""/></td></tr>
<tr>
<td colspan="2" class="checks">
<input type="checkbox" name="setting" value="1"/> <?php echo $text_add_use;?><br/>
</td></tr>
<tr><td colspan="2" class="bottom">
</td></tr>
</table>
<div style="margin-top:8px;">
<input type="submit" name="add" value="<?php echo $button_save;?>" class="button"/>
<a href="<?php echo $cancel;?>" class="button" alt="Cancel"><?php echo $button_cancel;?></a></div>
</form>

 </div>
</div>
