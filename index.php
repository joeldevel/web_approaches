<?php

 $web_site_link ="https://devexcathedra.wordpress.com";
 $list_content = ['blah blah blah', 'Hola amigos','All right?'];
 $page_title = "Bonjour";
 $page_heading_title = "Bonjour mes amies";
 ?>
<html>
 <head>
   <title><?=$page_title?></title>
 </head>
 <body>
   <h1><?=$page_heading_title?></h1>
   <ul>
  <?php foreach ($list_content as $key):?>
  <li><?=$key?></li>
  <?php endforeach;?>
   </ul>
  <p>Check out this <a href="<?=$web_site_link?>">genial site</a></p>
</body>
</html>
