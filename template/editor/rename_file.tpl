<div id="file">
<form action="<?php echo $getpath;?>" method="post">
<input type="hidden" name="dirpath" value="<?php echo $dirpath;?>"/>
<input type="hidden" name="getpath" value="<?php echo $getpath;?>"/>
<input type="hidden" name="oldname" value="<?php echo $renamefile;?>"/>
<div class="text_mkdir"><?php echo $text_rename;?></div>
<div><?php echo $entry_file;?>: <em><?php echo $renamefile;?></em></div>
<?php echo $entry_newname;?> <input type="text" name="filename" size="15"/><br>
 <input type="submit" name="rename_file" value="<?php echo $button_save;?>" class="button"/>
 <a onclick="location.href='<?php echo $getpath;?>'"class="button"><?php echo $button_cancel;?></a>
</form>
</div>
