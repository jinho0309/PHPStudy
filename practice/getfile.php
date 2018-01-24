
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <?php
     $dir = "C:\Bitnami\wampstack-7.1.13-0\apache2\htdocs\\firstphp\\factory\\";
      $filedir = $dir.basename($_FILES['myfile']['name']);
     if(move_uploaded_file($_FILES['myfile']['tmp_name'],$filedir))
       echo "성공";
     else {
       echo "실패";
     }
      ?>
      <img src="<?php echo $_FILES['myfile']['name']?>" alt="그림">
   </body>
 </html>
