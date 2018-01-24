<?php
interface ContractInterface{
  public function compare(string $str1, string $str2):bool;
}
class Concreate implements ContractInterface{
  public function compare(string $str1, string $str2):bool{
    if($str1===$str2)
      return true;
    else
      return false;
  }
}
class Dummy implements ContractInterface
{
  public function compare(string $str1, string $str2):bool{
    return true;
  }
}
$obj = new Concreate();
if($obj->compare('test1','test2')){
  echo "true";
}
else {
  echo "false";
}

 ?>
