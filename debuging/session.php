<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>DEBUG!</title>
  </head>
  <body>
    <?php
      echo $_SESSION['pid'];
      $pid = $_SESSION['pid'];
      if ($pid == '') {
        echo $pid;
      } else {
        echo 'pid 세션 정보가 없습니다.';
      }
    ?>
  </body>
</html>
