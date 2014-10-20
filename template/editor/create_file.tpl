<label class="name" ><strong><?php echo sprintf($text_create_file,$savepath,'');?></label>

<form action="<?php echo $action;?>" method="post" name="editor">
<input type="hidden" name="filepath" value="<?php echo $savepath;?>"/>
<?php echo $entry_newfile;?> <input type="text" size="30" name="filename" value=""/>

<table id="form">
<tr>
                       <td style="vertical-align:top">
                                              <?php 
                                              for($i=1;$i<20;$i++){
                                                echo $i.'<br>';
                                              }
                                              ?>
                       </td>
                       <td><textarea name="data" id="editor" scrolling="yes" wrap="on" cols="141" rows="23"></textarea></td>
    </tr>
</table>

<div style="background-color:#DDDDDD;padding-right:8px;height:30px;">
                       <input style="font-weight:bold;float:right;" type="submit" name="send" value="<?php echo $button_save;?>">
</div>
</form>

</div>
