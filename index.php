<!DOCTYPE html>
<html>
<head>
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
						<header class="jumbotron text-center">
				   	 	<img src="/static/img/common/arm-up.png" alt="STARTERGATE" class="img-rounded" id=articleimg \>
				   		<h3>안녕하세요!</h3>
							<br />
							STARTERGATE<strong>IDENTITY</strong>는 통합 로그인 시스템 구현을 위한 서비스입니다. 개발 중입니다.
							<br />
							이 서비스는 개인 개발용으로만 사용할 수 있습니다. 이 서비스를 만든 사람은
							<a href=http://namu.wiki/w/사용자:satellite target="_blank">#</a>을 참조하세요.
					  </header>
						<header class="jumbotron text-center">
							<h4>적용법</h4>
							이 서비스를 적용시키려면 다음과 같은 문자열을 로그인 버튼에 form 문법으로 삽입시켜야합니다.
							<br />
							<div id="control">
								<a href="./new_site.php" class="btn btn-success btn-lg">사이트 추가하기</a>
							</div>
						</header>
            <header class="jumbotron text-left">
              <h4>개발중인 하부 페이지</h4>
              <a href="./login/login.php">로그인</a>
							<br />
							<a href="./login/logout.php">로그아웃</a>
              <br />
              <a href="./register/register.php">회원가입</a>
							<br />
							<a href="./new_site.php">신규 사이트 등록</a>
							<br />
							<a href="./debug.php">디버그용</a>
							<br />
							<?php echo "Your PID Is ".$_SESSION['pid']; ?>
							<br />
							<?php echo "Your Nickname Is ".$_SESSION['nickname']; ?>
							<br />
							<?php echo "Your Session ID Is ".session_id(); ?>
            </header>
						<h4><strong>Copyright Info</strong></h4>
						<div>Icons made by <a href="http://www.freepik.com" target="_blank" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" target="_blank" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>
					</article>
				</div>
			</div>
		</div>
		<script src="/jquery/jquery-3.3.1.min.js"></script>
    <script src="/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
