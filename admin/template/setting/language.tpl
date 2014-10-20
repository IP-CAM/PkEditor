<div class="page">
<div id="content">
<div class="title"><?php echo $text_languages;?> <a href="<?php echo $add;?>" class="button" style="float:right"><?php echo $button_add;?></a></div>
<table id="form">
<thead>
<tr>
<td class="language"><?php echo $column_language;?></td>
<td class="code"><?php echo $column_code;?></td>
<td class="localisation"><?php echo $column_localisation;?></td>
<td><?php echo $column_action;?></td>
</tr>
</thead>

<?php
foreach($languages as $language){?>
                       <tr><td>
                       
                       <?php 
                       if($language['status'] == 1){?>
                       <strong><?php echo $language['name'];?> (<?php echo $text_default;?>)</strong>
                       <?php } else{
                          echo $language['name'];                    
}?>

</td>

<td><?php echo $language['code'];?></td>

<td><?php echo $language['localisation'];?></td>

<td class="edit"><a href="<?php echo $edit;?><?php echo $language['language_id'];?>"><?php echo $text_edit;?></a></td>
</tr>
<?php } ?>
</table>
 </div>
</div>
