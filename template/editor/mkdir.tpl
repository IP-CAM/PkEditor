<div id="file">
<form action="<?php echo $getpath;?>" method="post">
<input type="hidden" name="dirpath" value="<?php echo $dirpath;?>"/>
<input type="hidden" name="getpath" value="<?php echo $getpath;?>"/>
<div class="text_mkdir"><?php echo $text_mkdir;?></div>
<input type="text" name="dirname" size="15"/><br/>
<input type="submit" name="create_dir" value="<?php echo $button_save;?>" class="button"/>
 <a onclick="location.href='<?php echo $getpath;?>'"class="button"><?php echo $button_cancel;?></a>
</form>
</div>
