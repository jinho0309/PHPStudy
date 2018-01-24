<?php
class Person{
  private $name;
  function sayHi(){
    print("Hi, I'm {$this->name}");
  }
  function setName($name){
    if(empty($name))
      die('I need name');
    $this->name=$name;
  }
  function getName(){
    return $this->name;
  }
}
$test = new Person();
$test->setName('jinho');
$test->sayHi();
echo $test->getName();

 ?>
