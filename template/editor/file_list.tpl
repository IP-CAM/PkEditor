<div id="page">
                       <div  class="list-info">
                       <?php echo $text_directory;?>: <?php echo $show_directory;?>
                       </div>
                       <div class="right">
                       <a href="<?php echo $mkdir;?>" class="button"><?php echo $button_mkdir;?></a>
                       <?php if(!$root){?>
                       <a href="<?php echo $index;?><?php echo $uplist;?>" class="button"><?php echo $button_up;?></a>
                       <?php } ?>
                       <a href="<?php echo $fwrite;?><?php echo $result['path'];?>" class="button"><?php echo $button_create;?></a>
                       </div>

<table id="list">
<tr><thead><td class="top-entry-left"> </td><td class="top-entry"><?php echo $entry_file;?></td>
<td class="top-entry"><?php echo $entry_size;?></td>
<td class="top-entry-right"><?php echo $entry_rename;?></td>
<td class="top-entry"><?php echo $entry_remove;?></td>
</thead></tr>

<?php 
 if(isset($result['dir']) && $result['dir'] !='' or isset($result['files']) && $result['files'] !=''){ 
    if(isset($result['dir']) && $result['dir'] !=''){
   $key = array_keys($result['dir']);
            
      for($i=0;$i<count($key);$i++){ ?>
<?php if($result['dir'][$key[$i]]['dirname'] !=''){
                if($result['dir'][$key[$i]]['dirname'][0] !='.'){?>
         <tr>
         
         <td class="gif">
                                <img src="image/type/dir.png" alt="dir"/>
         </td>
         
         <td class="dirname">
                                <a href="<?php echo $flist;?><?php echo $result['dir'][$key[$i]]['dir'];?>">
                                 <?php echo $result['dir'][$key[$i]]['dirname'];?>
                                 </a>
          </td>
          
         <td class="size">&nbsp;</td>
         
         <td class="rename">
                                              <a href="<?php echo $rename_dir;?><?php echo $result['dir'][$key[$i]]['dirname'];?>">
                                              <img src="image/rename.gif" title="<?php echo $text_rename;?>" alt="rn"/>
                                              </a>
          </td>
          <td class="remove">
                                              <a href="<?php echo $rmdir;?><?php echo $result['dir'][$key[$i]]['dirname'];?>">
                                              <img src="image/delete.gif" title="<?php echo $text_remove;?>" alt="rn"/>
                                              </a>
           </td></tr>
        <?php }
      }
    }
}

if(isset($result['files']) && $result['files'] !=''){
  $keys = array_keys($result['files']);
    for($i=0;$i<count($keys);$i++){
        if($result['files'][$keys[$i]][0] !=''){?>
    <?php  if($result['files'][$keys[$i]][0][0] !='.'){?>
    
<tr>
                       <td class="gif"><img src="image/type/<?php echo $result['files'][$keys[$i]][1];?>.gif" alt="fi"/></td>
                       <td class="dirname">
                       <a href="<?php echo $open;?><?php echo $result['files'][$keys[$i]][3];?>">
                       <?php echo $result['files'][$keys[$i]][0];?></a></td>
                       <td class="size"><?php echo $result['files'][$keys[$i]][2];?></td>
                       
                       <td class="rename">
                       <a href="<?php echo $rename;?><?php echo $result['files'][$keys[$i]][0];?>">
                       <img src="image/rename.gif" title="<?php echo $text_rename;?>" alt="rn"/>
                       </a>
                       </td>

                       <td class="remove">
                       <a href="<?php echo $remove;?><?php echo $result['files'][$keys[$i]][0];?>">
                       <img src="image/delete.gif" title="<?php echo $text_remove;?>" alt="rn"/>
                       </a>
</td></tr>

     <?php   }
                  }
        }  
        }
}   
 if(isset($result['dir']) && count($result['dir']) === 0 &&  count($result['files']) === 0){?>
<tr><td style="padding:30px;" colspan="3"><?php echo $text_no_results;?></td></tr>
<?php } 
                       if(isset($result['dir']) && isset($result['files'])){
                           $rows = count($result['dir']) + count($result['files']);
                       } elseif(isset($result['dir'])){
                                                  $rows = count($result['dir']);
                       }elseif(isset($result['files'])){
                                                  $rows = count($result['files']);
                       } else{
                           $rows = 0;
                       }
   if($rows < 12){ 
    $end = 12-$rows;
   for($i=0;$i<$end;$i++){?>
    <tr>
    <td class="gif">  &nbsp;</td>
    <td class="size"> &nbsp;</td>
    <td class="dirname"> &nbsp;</td>
    <td class="rename"> &nbsp;</td>
    <td class="remove"> &nbsp;</td>
    </tr>
       <?php  } 
   }?>
</table>
</div>
