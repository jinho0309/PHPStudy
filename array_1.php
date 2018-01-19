<?php
$arr=['one','two',2];
echo count($arr);
echo '</br>';
var_dump($arr);
echo '</br>';
array_push($arr,"show");
var_dump($arr);
echo '</br>';
array_merge($arr,["me","the"]);
var_dump($arr);
echo '</br>';
array_unshift($arr,3);
var_dump($arr);
echo '</br>';
array_splice($arr,2,0,5);
var_dump($arr);
echo '</br>';
array_pop($arr);
array_shift($arr);
var_dump($arr);
echo '</br>';
for($i=0;$i<count($arr);$i++)
  echo $arr[$i].' ';
echo '</br>';
$arr2=array('one'=>1,'two'=>2,'three'=>3);
$arr2['four']=4;

foreach($arr2 as $key=>$value)
  echo $key.' '.$value;
echo '</br>';
foreach($arr2 as $value)
  echo $value.' ';
 ?>
