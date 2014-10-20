<div id="file">
<form action="<?php echo $getpath;?>" method="post">
<input type="hidden" name="dirpath" value="<?php echo $dirpath;?>"/>
<input type="hidden" name="getpath" value="<?php echo $getpath;?>"/>
<input type="hidden" name="oldname" value="<?php echo $dirname;?>"/>
<div class="text_mkdir"><?php echo $text_rename_dir;?></div>
<div><?php echo $entry_directory;?>: <em><?php echo $dirname;?></em></div>
<?php echo $entry_newname;?> <input type="text" name="dirname" size="15"/><br>
 <input type="submit" name="rename_dir" value="<?php echo $button_save;?>" class="button"/>
 <a onclick="location.href='<?php echo $getpath;?>'"class="button"><?php echo $button_cancel;?></a>
</form>
</div>
