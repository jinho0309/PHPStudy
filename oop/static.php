<?php
Class Person{
  private static $count=0;
  private $name;
  function __construct($_name){
    $this->name=$_name;
    self::$count = self::$count +1;
  }
  function enter(){
    echo "<h1>Enter ".$this->name."</h1>";
  }
  function getCount(){
    return self::$count;
  }
}
$p1 = new Person('jino');
$p1->enter();
echo $p1->getCount();
$p2 = new Person('mihye');
$p2->enter();
echo $p1->getCount();

 ?>
