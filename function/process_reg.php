<?php
  require("../config/config.php");
  require("../lib/db.php");
  require("../lib/password.php");
  require("../lib/codegen.php");
  $conn = db_init($config["host"],$config["duser"],$config["dpw"],$config["dname"]);

  $id = $_POST['id'];
  $pw = $_POST['pw'];
  const PASSWORD_COST = ['cost'=>12];
  $password = password_hash($pw, PASSWORD_DEFAULT, PASSWORD_COST);
  $nickname = $_POST['nickname'];
  $pid = generateRenStr(10);
  $sql = 'INSERT INTO userdata (id,pw,nickname,pid) VALUES("'.$id.'","'.$password.'", "'.$nickname.'","'.$pid.'")';
  $result = mysqli_query($conn, $sql);
  header('Location: ../login/login.php');
?>
