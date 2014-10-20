<div class="page"/>


<div class="right">
<a href="<?php echo $cancel;?>" class="button"><?php echo $button_cancel;?></a>
</div>

<div id="menu">
 <ul id="navi">
      <li class="top">HTML
             <ul>
                       <li><img src="image/editor/html.gif" title="<?php echo $tag_html;?>" alt="html"/>
                       <div><a href="<?php echo $filepath;?>#" onClick="surroundText('&lt;html&gt;','\r\n&lt;/html&gt;',document.forms.editor.data);">
                       <?php echo $tag_html;?></a>
                       </div>
                       </li>
                       
                        <li>
                        <img src="image/editor/head.gif" title="<?php echo $tag_head;?>" alt="head"/>
                        <div><a href="<?php echo $filepath;?>#" onClick="surroundText('&lt;head&gt;','\r\n&lt;/head&gt;',document.forms.editor.data);">
                        <?php echo $tag_head;?></a>
                        </div>
                        </li>
                        
                                              <li>
                       <img src="image/editor/title.gif" title="<?php echo $tag_title;?>" alt="title"/>
                       <div>
                       <a href="<?php echo $filepath;?>#" onClick="surroundText('&lt;title&gt;','&lt;/title&gt;',document.forms.editor.data);">
                       <?php echo $tag_title;?></a>
                       </div>
                       </li>
                       
                       <li>
                       <img src="image/editor/body.gif" title="<?php echo $tag_body;?>" alt="body"/>
                       <div>
                       <a href="<?php echo $filepath;?>#" onClick="surroundText('&lt;body&gt;','\r\n&lt;/body&gt;',document.forms.editor.data);">
                       <?php echo $tag_body;?></a>
                       </div>
                       </li>
                       
                       <li>
                       <img src="image/editor/div.gif" title="<?php echo $tag_div;?>" alt="div"/>
                       <div>
                       <a href="<?php echo $filepath;?>#" onClick="surroundText('&lt;div&gt;','\r\n&lt;/div&gt;',document.forms.editor.data);">
                       <?php echo $tag_div;?></a>
                       </div>
                       </li>
                       
                        <li>
                        <img src="image/editor/tb.gif" title="<?php echo $tag_table;?>" alt="table"/>
                       <div>
                        <a href="<?php echo $filepath;?>#" onClick="surroundText('&lt;table&gt;','\r\n&lt;/table&gt;',document.forms.editor.data);">
                        <?php echo $tag_table;?></a>
                       </div>
                        </li>
                        
                       <li>
                       <img src="image/editor/caption.gif" title="<?php echo $tag_caption;?>" alt="caption"/>
                       <div>
                       <a href="<?php echo $filepath;?>#" onClick="surroundText('&lt;caption&gt;','&lt;/caption&gt;',document.forms.editor.data);">
                       <?php echo $tag_caption;?></a>
                       </div>
                       </li>
                       
                       <li>
                       <img src="image/editor/thead.gif" title="<?php echo $tag_thead;?>" alt="thead"/>
                       <div>
                       <a href="<?php echo $filepath;?>#" onClick="surroundText('&lt;thead&gt;','\r\n&lt;/thead&gt;',document.forms.editor.data);">
                       <?php echo $tag_thead;?></a>
                       </div>
                       </li>
                       
                       <li>
                       <img src="image/editor/tr.gif" title="<?php echo $tag_tr;?>" alt="tr"/>
                       <div>
                       <a href="<?php echo $filepath;?>#" onClick="surroundText('&lt;tr&gt;','\r\n&lt;/tr&gt;',document.forms.editor.data);">
                       <?php echo $tag_tr;?></a>
                       </div>
                       </li>
                       <li>
                       <img src="image/editor/td.gif" title="<?php echo $tag_td;?>" alt="td"/>
                       <div>
                       <a href="<?php echo $filepath;?>#" onClick="surroundText('&lt;td&gt;','&lt;/td&gt;',document.forms.editor.data);">
                       <?php echo $tag_td;?></a>
                       </div>
                       </li>
                       
                       <li>
                       <img src="image/editor/form.gif" title="<?php echo $tag_form;?>" alt="form"/>
                       <div>
                       <a href="<?php echo $filepath;?>#" onClick="surroundText('&lt;form action=&quot;a&quot; method=&quot;post&quot;&gt;','\r\n&lt;/form&gt;',document.forms.editor.data);">
                       <?php echo $tag_form;?></a>
                       </div></li>
                                               <li>
                                               <img src="image/editor/input.gif" title="<?php echo $tag_input;?>" alt="input"/>
                       <div>
                        <a href="<?php echo $filepath;?>#" onClick="insertAtCaret(document.getElementById('editor'),'&lt;input type=&quot;text&quot; name=&quot;&quot;/&gt;');">
                        <?php echo $tag_input;?></a>
                       </div>
                        </li>
                        
                       <li>
                       <img src="image/editor/select.gif" title="<?php echo $tag_select;?>" alt="select"/>
                       <div>
                       <a href="<?php echo $filepath;?>#" onClick="surroundText('&lt;select name=&quot;&quot;&gt;','\r\n&lt;/select&gt;',document.forms.editor.data);">
                       <?php echo $tag_select;?></a>
                       </div>
                       </li>
                       
                       <li>
                       <img src="image/editor/checkbox.gif" title="<?php echo $tag_checkbox;?>" alt="checkbox"/>
                       <div>
                       <a href="<?php echo $filepath;?>#" onClick="insertAtCaret(document.getElementById('editor'),'&lt;input type=&quot;checkbox&quot; name=&quot;&quot;/&gt;');">
                       <?php echo $tag_checkbox;?></a>
                       </div>
                       </li>
                       
                                              <li>
                       <img src="image/editor/textarea.gif" title="<?php echo $tag_textarea;?>" alt="textarea"/>
                       <div>
                       <a href="<?php echo $filepath;?>#" onClick="insertAtCaret(document.getElementById('editor'),'&lt;textarea name=&quot;&quot; &gt;&lt;/textarea&gt;');">
                       <?php echo $tag_textarea;?></a>
                       </div>
                       </li>
                       
                       <li>
                       <img src="image/editor/bold.gif" title="<?php echo $shape_strong;?>" alt="bold"/>
                       <div>
                       <a href="<?php echo $filepath;?>#" onClick="surroundText('&lt;strong&gt;','&lt;/strong&gt;',document.forms.editor.data);" >
                       <?php echo $shape_strong;?></a>
                       </li>
                       
                       <li>
                       <img src="image/editor/italic.gif" title="<?php echo $shape_italic;?>" alt="italic"/>
                       <div>
                       <a href="<?php echo $filepath;?>#" onClick="surroundText('&lt;em&gt;','&lt;/em&gt;',document.forms.editor.data);">
                       <?php echo $shape_italic;?></a>
                       </div>
                       </li>
                       
                       <li>
                       <img src="image/editor/underline.gif" title="<?php echo $shape_underline;?>" alt="underline"/>
                       <div>
                       <a href="<?php echo $filepath;?>#" onClick="surroundText('&lt;u&gt;','&lt;/u&gt;',document.forms.editor.data);">
                       <?php echo $shape_underline;?></a>
                       </div>
                       </li>
                       
                       <li>
                       <img src="image/editor/indent.gif" title="<?php echo $shape_indent;?>" alt="indent"/>
                       <div>
                       <a href="<?php echo $filepath;?>#" onClick="surroundText('  ',' ',document.forms.editor.data);" >
                       <?php echo $shape_indent;?></a>
                       </div>
                       </li>
         </ul>
    </li>
    <li class="top">PHP
         <ul>
                       <li>
                       <img src="image/editor/php.gif" title="<?php echo $php_tag;?>" alt="php"/>
                       <div>
                       <a href="<?php echo $filepath;?>#" onClick="surroundText('&lt;?php\r\n',' \r\n?&gt;',document.forms.editor.data);">
                       <?php echo $php_tag;?></a> 
                       </div>
                       </li>  
                       
                       <li>
                       <img src="image/editor/for.gif" title="<?php echo $php_for;?>" alt="for"/>
                       <div>
                       <a href="<?php echo $filepath;?>#" onClick="surroundText('for($i = 0; $i <count($a); $i++){\r\n',' \r\n}',document.forms.editor.data);">
                       <?php echo $php_for;?></a>
                       </div>
                       </li>
                       
                       <li>
                       <img src="image/editor/foreach.gif" title="<?php echo $php_foreach;?>" alt="foreach"/>
                       <div>
                       <a href="<?php echo $filepath;?>#" onClick="surroundText('foreach($a as $b){\r\n',' \r\n}',document.forms.editor.data);">
                       <?php echo $php_foreach;?></a>
                       </div>
                       </li>
                       
                       <li>
                       <img src="image/editor/class.gif" title="<?php echo $php_class;?>" alt="class"/>
                       <div>
                       <a href="<?php echo $filepath;?>#" onClick="surroundText('class a{\r\n',' \r\n}',document.forms.editor.data);">
                       <?php echo $php_class;?></a>
                       </div>
                       </li>
                       
                       <li>
                       <img src="image/editor/public_method.gif" title="<?php echo $php_public_method;?>" alt="public_method"/>
                       <div>
                       <a href="<?php echo $filepath;?>#" onClick="surroundText('public function a(){\r\n',' \r\n}',document.forms.editor.data);">
                       <?php echo $php_public_method;?></a>
                       </div>
                       </li>
                       
                       <li>
                       <img src="image/editor/function.gif" title="<?php echo $php_function;?>" alt="function"/>
                       <div>
                       <a href="<?php echo $filepath;?>#" onClick="surroundText('function a(){\r\n',' \r\n}',document.forms.editor.data);">
                       <?php echo $php_function;?></a>
                       </div>
                       </li>
                       
                       <li>
                       <img src="image/editor/include.gif" title="<?php echo $php_include;?>" alt="include"/>
                       <div>
                       <a href="<?php echo $filepath;?>#" onClick="surroundText('include(',');',document.forms.editor.data);">
                       <?php echo $php_include;?></a>
                       </div>
                       </li>
                       
                       <li>
                       <img src="image/editor/require.gif" title="<?php echo $php_require;?>" alt="require"/>
                       <div>
                       <a href="<?php echo $filepath;?>#" onClick="surroundText('require(',');',document.forms.editor.data);">
                       <?php echo $php_require;?></a>
                       </div>
                       </li>
                       
                       <li>
                       <img src="image/editor/if.gif" title="<?php echo $php_if;?>" alt="if"/>
                       <div>
                       <a href="<?php echo $filepath;?>#" onClick="surroundText('if($a == $b){\r\n',' \r\n}',document.forms.editor.data);">
                       <?php echo $php_if;?></a>
                       </div>
                       </li>

                       <li>
                       <img src="image/editor/elseif.gif" title="<?php echo $php_elseif;?>" alt="elseif"/>
                       <div>
                       <a href="<?php echo $filepath;?>#" onClick="surroundText('elseif($c == $d){\r\n',' \r\n}',document.forms.editor.data);">
                       <?php echo $php_elseif;?></a>
                       </div>
                       </li>
                       
                       <li>
                       <img src="image/editor/else.gif" title="<?php echo $php_else;?>" alt="else"/>
                       <div>
                       <a href="<?php echo $filepath;?>#" onClick="surroundText('else{\r\n',' \r\n}',document.forms.editor.data);">
                       <?php echo $php_else;?></a>
                       </div>
                       </li>
                       
                       <li>
                       <img src="image/editor/array.gif" title="<?php echo $php_array;?>" alt="array"/>
                       <div>
                       <a href="<?php echo $filepath;?>#" onClick="surroundText('array(',');',document.forms.editor.data);">
                       <?php echo $php_array;?></a>
                       </div>
                       </li>
                       
                       <li>
                       <img src="image/editor/explode.gif" title="<?php echo $php_explode;?>" alt="explode"/>
                       <div>
                       <a href="<?php echo $filepath;?>#" onClick="surroundText('explode(&quot;&quot;,',');',document.forms.editor.data);">
                       <?php echo $php_explode;?></a>
                       </div>
                       </li>
                       
                       <li>
                       <img src="image/editor/implode.gif" title="<?php echo $php_implode;?>" alt="implode"/>
                       <div>
                       <a href="<?php echo $filepath;?>#" onClick="surroundText('implode(&quot&quot;,',');',document.forms.editor.data);">
                       <?php echo $php_implode;?></a>
                       </li>
                       
                       <li>
                       <img src="image/editor/file_exists.gif" title="<?php echo $php_file_exists;?>" alt="file_exists"/>
                       <div>
                       <a href="<?php echo $filepath;?>#" onClick="surroundText('file_exists(',')',document.forms.editor.data);">
                       <?php echo $php_file_exists;?></a>
                       </div>
                       </li>
                       
                       <li>
                       <img src="image/editor/file_get_contents.gif" title="<?php echo $php_file_get_contents;?>" alt="file_get_contents"/>
                       <div>
                       <a href="<?php echo $filepath;?>#" onClick="surroundText('file_get_contents(',');',document.forms.editor.data);">
                       <?php echo $php_file_get_contents;?></a>
                       </div>
                       </li>
                       
                       <li>
                       <img src="image/editor/opendir.gif" title="<?php echo $php_opendir;?>" alt="opendir"/>
                       <div>
                       <a href="<?php echo $filepath;?>#" onClick="surroundText('$dir = opendir(',');\r\nwhile(($file = readdir($dir)) !=false){\r\n}',document.forms.editor.data);">
                       <?php echo $php_opendir;?></a>
                       </div>
                       </li>
                       
            </ul>
      </li>
</ul>
</div>
