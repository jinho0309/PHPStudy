<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">

  </head>
  <body>
      <?php
      ini_set("display_errors", "1");//php설정을 변경.. 에러를 볼수있도록
    //  var_dump($_FILES); Array로 되어있는 걸 확인할 수 있다.
      $uploaddir = 'C:\Bitnami\wampstack-7.1.13-0\apache2\htdocs\firstphp\file\\';
      $uploadfile = $uploaddir . basename($_FILES['userfile']['name']);//basename : 경로를 정확하게 하기위해..보안과관련됨
      echo '<pre>';
      if(move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)){
        echo "파일이 유효하고, 성공적으로 업로드\n";
      }else {
        echo "파일 업로드 공격의 가능성이 있습니다.!\n";
      }
      echo '자세한 디버깅 정보입니다:';
      print_r($_FILES);
      print '</pre>';
       ?>
       <img src="file/<?=$_FILES['userfile']['name']?>"/>
  </body>
</html>
