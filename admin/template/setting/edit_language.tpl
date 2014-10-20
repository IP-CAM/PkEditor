<div class="page-form">
<div id="content">

<form action="<?php echo $action;?>" method="post">
<table id="edit">
<tr><td colspan="2" class="title">
<?php echo $text_edit_language;?>
</td></tr>
<tr><td class="entry"><?php echo $entry_name;?></td><td class="value"><?php echo $language['name'];?></td></tr>
<tr><td class="entry"><?php echo $entry_code;?></td><td class="value"><?php echo $language['code'];?></td></tr>
<tr><td class="entry"><?php echo $entry_localisation;?></td><td class="value"><?php echo $language['localisation'];?></td></tr>
<tr><td colspan="2" class="checks">
<?php if($status == 0){ ?>
<input type="checkbox" name="language" value="<?php echo $language['name'];?>"/> <?php echo $text_to_use;?><br/>
<?php } else { ?>
<input type="radio" name="language" value="<?php echo $language['name'];?>" checked="checked"/> <?php echo $text_use;?><br/>
<?php } ?>
</td></tr>
<input type="hidden" name="localisation" value="<?php echo $language['localisation'];?>"/>

<tr><td colspan="2" class="bottom">
<?php if($status == 0){ ?>
<input type="checkbox" name="delete" value="<?php echo $language['language_id'];?>"/> <?php echo $text_delete;?><br/>
<?php } ?>
</td></tr>
</table>
<div style="margin-top:8px;">
<?php if($status == 0){ ?>
<input type="submit" name="edit" value="<?php echo $button_save;?>" class="button"/>
<?php } ?>
<a href="<?php echo $cancel;?>" class="button" alt="Cancel"><?php echo $button_cancel;?></a></div>
</form>

 </div>
</div>
