<div id="file">
<form action="<?php echo $getpath;?>" method="post">
<input type="hidden" name="dirpath" value="<?php echo $dirpath;?>"/>
<input type="hidden" name="getpath" value="<?php echo $getpath;?>"/>
<div class="text_mkdir"><?php echo $text_title_remove;?></div>
<div><?php echo $entry_file;?> <em><?php echo $removefile;?></em></div>
 <input type="checkbox" name="remove" value="<?php echo $removefile;?>"/> <?php echo $text_remove;?><br>
 <input type="submit" name="remove_file" value="<?php echo $button_save;?>" class="button"/>
 <a onclick="location.href='<?php echo $getpath;?>'"class="button"><?php echo $button_cancel;?></a>
</form>
</div>
