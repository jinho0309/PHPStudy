<?php
class ParentClass{
  public $_public = '<h1>public</h1>';
  protected $_protected = '<h1>protected</h1>';
  private $_private = '<h1>private</h1>';
}
class ChildClass extends ParentClass{
  function callPublic(){
    echo $this->_public;
  }
  function callProtected(){
    echo $this->_protected;
  }
  function callPrivate(){
    echo $this->_private;//private은 상속이 안된다.(자식에서는 접근할 수 없다.)
  }
}
$obj = new ChildClass();
echo $obj->_public;
echo $obj->_private;
//echo $obj->_protected;//직접접근은 안됨.
echo $obj->callPublic();
echo $obj->callPrivate();
echo $obj->callProtected();//메소드에서는 접근 가능
 ?>
