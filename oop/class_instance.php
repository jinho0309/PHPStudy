<?php
class MyFileObject{
   private $name;
    function __construct($fname){
      $this->name= $fname;
    }
    function isFile(){
      return is_file($this->name);
    }
    function readFile(){
        echo file_get_contents($this->name);
    }
}

$file = new MyFileObject('data.txt');
 var_dump($file->isFile());
 $file->readFile();
 ?>
