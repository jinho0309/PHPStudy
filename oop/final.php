<?php
class ParentClass{
  function a(){
    echo 'Parent';
  }
  final function b(){//final은 override를 금지함
    echo 'Parent B';
  }
}
class ChildClass extends ParentClass{
  function a(){
    echo 'Child';
  }
  // function b(){
  //   echo 'Child B';
  // }
}
$obj = new ChildClass();
$obj->a();
$obj->b();
 ?>
