<?php
  require("../config/config.php");
  require("../lib/db.php");
  require("../lib/codegen.php");
  $conn = db_init($config["host"],$config["duser"],$config["dpw"],$config["dname"]);

  $sitename = mysqli_real_escape_string($conn, $_POST['sitename']);
  $link = mysqli_real_escape_string($conn, $_POST['link']);
  $pid = generateRenStr(20);
  $upid = $_SESSION['uid'];
  $sql = "INSERT INTO sitestatements (sitename,link, pid, upid) VALUES('".$sitename."', '".$link."', '".$pid."', '".$upid."')";
  $result = mysqli_query($conn, $sql);
  header('Location: ../index.php');
?>
