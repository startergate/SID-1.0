<?php
  session_start();
  $_SESSION['uid'] = '';
  echo "<script>window.alert('로그아웃이 완료되었습니다.');</script>";
  echo "<script>window.location=('../index.php');</script>";
?>
