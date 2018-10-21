<?php
$content =  getdata("https://www.imdb.com/title/tt4633694/?ref_=nv_sr_1");
 $explode_content = explode('<div class="title_wrapper">',$content);
 print_r ($explode_content[0]);
/* $title_explode_content = explode('<span id="titleYear">',$explode_content[1]); */
/* print_r($title_explode_content[0]); */
?>