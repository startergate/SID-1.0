<!DOCTYPE html>
<html>
<head>
	<?php
	ob_start();
	session_start();
	$uid = $_SESSION['uid'];
	if(empty($uid)) {
		echo "<script>window.alert('로그인이 필요합니다.');</script>";
		echo "<script>window.location=('./login/login.php');</script>";
		exit;
	}
	?>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="apple-touch-icon" sizes="57x57" href="/static/img/favicon/startergate_id/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="/static/img/favicon/startergate_id/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="/static/img/favicon/startergate_id/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="/static/img/favicon/startergate_id/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="/static/img/favicon/startergate_id/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="/static/img/favicon/startergate_id/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="/static/img/favicon/startergate_id/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="/static/img/favicon/startergate_id/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="/static/img/favicon/startergate_id/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="/static/img/favicon/startergate_id/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/static/img/favicon/startergate_id/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="/static/img/favicon/startergate_id/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/static/img/favicon/startergate_id/favicon-16x16.png">
	<link rel="manifest" href="./manifest.json">
	<meta name="msapplication-TileImage" content="/static/img/favicon/startergate_id//ms-icon-144x144.png">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="theme-color" content="#ffffff">
	<link href="/static/img/favicon/favicon-32x32.png" rel="icon" type="image/X-icon" />
	<title>STARTERGATE IDENTITY</title>
	<link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="./css/master.css">
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<link rel="stylesheet" type="text/css" href="/Normalize.css">
</head>
<body id="target">
	<div class="container">
    <header class="jumbotron text-center">
      <img src="/static/img/common/STARTERGATEIDENTITY.png" alt="STARTERGATE" class="img-rounded" id=logo \>
    </header>
				<div class="row">
					<div class="col-md-12">
  				<article>
  					<form action="./function/process_ns.php" method="post">
							<div class="form-group">
								<label for="form-title">사이트 이름</label>
 								<input type="text" class="form-control" name="sitename" id="form-title" placeholder="사이트 이름을 적어주세요.">
 							</div>
							<div class="form-group">
								<label for="form-title">링크</label>
								<textarea class="form-control" name="link" id="form-title" placeholder="링크를 적어주세요." rows=10></textarea>
 							</div>
							<input type="submit" name="name" class="btn btn-default btn-lg">
  					</form>
  				</article>
					<hr>
				</div>
			</div>
		</div>
  </body>
</html>
