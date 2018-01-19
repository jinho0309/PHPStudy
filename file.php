<?php
$file = './test.txt';
$newfile = 'copy.txt';
file_put_contents($file ,'Hello World');
if(!copy($file,$newfile))
  echo 'Can\'t copy file';
echo file_get_contents($newfile);
 ?>
