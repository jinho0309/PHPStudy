<?php
Class MyFileObject extends SplFileObject{
  function getContents(){
    $content = $this->fread($this->getSize());
    $this->rewind();
    return $content;
  }
}
// $file= new SplFileObject('data.txt');
// var_dump($file->fread($file->getSize()));//포인터가 파일끝으로 간다.
// $file->rewind();//포인터 처음으로;

$file=new MyFileObject('data.txt');
echo $file->getContents();
echo $file->getContents();
 ?>
