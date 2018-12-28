<?php
  $password = password_hash($_POST['pw'], PASSWORD_DEFAULT);
  echo $password;
