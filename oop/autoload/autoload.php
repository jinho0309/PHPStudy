<?php
function autoloader($path){//정의되지 않은 클래스가 autoloader의 인자로 들어감.
  $path = str_replace('\\', '/', $path);
  $path = $path.'.php';
  include_once $path;
}
spl_autoload_register('autoloader');//존재하지 않는 클래스를 자동으로 로딩
 ?>
