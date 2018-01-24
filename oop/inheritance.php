<?php
Class Animal{
  function run(){
    print('running..<br>');
  }
  function breathe(){
    print('breathing...<br>');
  }
}
Class Human extends Animal{
  function think(){
    print('thinking...<br>');
  }
}
$person = new Human();
$person->run();
$person->breathe();
$person->think();

 ?>
