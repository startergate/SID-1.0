<?php
  require '../config/config.php';
  require '../lib/db.php';
  require '../lib/codegen.php';
  $conn = db_init($config['host'], $config['duser'], $config['dpw'], $config['dname']);

  $id = $_POST['id'];
  $pw_temp = $_POST['pw'];
  $pwr = $_POST['pwr'];
  $password = hash('sha256', $pw_temp);
  $nickname = $_POST['nickname'];
  if ($pw_temp === $pwr) {
      $pid = generateRenStr(10);
      $sql = 'INSERT INTO userdata (id,pw,nickname,pid) VALUES("'.$id.'","'.$password.'", "'.$nickname.'","'.$pid.'")';
      $result = mysqli_query($conn, $sql);
      echo "<script>window.alert('회원가입이 완료되었습니다. 로그인 해주세요.');</script>";
      echo "<script>window.location=('../login/login.php');</script>";
  } else {
      echo "<script>window.alert('비밀번호를 정확히 재입력해주세요.');</script>";
      echo "<script>window.location=('../register/register.php');</script>";
  }
