<label class="name"><strong><?php echo $entry_file;?></strong><em><?php echo $filename;?></em></label>
<form action="<?php echo $filex;?>" method="post" name="editor">
<input type="hidden" name="filepath" value="<?php echo $savepath;?>"/>
<input type="hidden" name="filename" value="<?php echo $filename;?>"/>
<input type="checkbox" name="iso8859" value="yes" onClick="location.href='<?php echo $filex;?>&iso8859=change'" <?php if(isset($_GET['utf8'])){ echo ' checked';}?>/> <?php echo $text_utf8_encode;?>
<table>
<tr><td class="row" style="vertical-align:top;font-size:16px;line-height:17.09px;padding-top:7px;"><?php 
$fs = trim($_GET['file']);
if(file_exists($fs)){
$fp = file($fs);
$rows = count($fp);
$min = 10;
if($rows == 0){
  $row = 10;
}
else{
$row = $rows;
}
$t=array();
$s=1;
for($i=0;$i<count($fp);$i++){

     if(strlen($fp[$i]) > 145){
        $len{$i} = strlen($fp[$i]);
         array_push($t, $len{$i});
         $r{$i} = ceil($len{$i}/145);
        echo $s;
       for($j=0;$j<$r{$i};$j++){
            echo '<br>';
       }
     } else{
        echo $s.'<br>';
    }
$s++;
}
}
$summ = array_sum($t); 
$sum = ceil($summ/129);
?>
</td><td style="vertical-align:top">
<textarea name="data" id="editor" scrolling="yes" cols="145"  rows="<?php echo $row+$sum+12;?>"><?php if(!isset($_GET['iso8859'])){echo $result;}else { echo utf8_encode($result);}?></textarea>
<div style="background-color:#DDDDDD;padding-right:8px;height:30px;">
<input style="font-weight:bold;float:right;" type="submit" name="send" value="<?php echo $button_save;?>" class="button"></div>
</form>
</div>
