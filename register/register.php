<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="../style.css">
    <link rel="stylesheet" href="/bootstrap-4.0b/css/bootstrap.min.css">
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
    <title>STARTERGATE IDENTITY</title>
  </head>
  <body>
    <?php
    echo $_GET['sitename']
    ?>
    <header class="jumbotron">
    <div id=login>회원가입</div>
    <br />
    <div id=lotext>STARTERGATE
    <br />
    <strong>IDENTITY</strong>
    <br />
      <form id='form' action="../function/process_reg.php" method="post">
        <input type="text" class="form-control" name="id" id="form-title" placeholder="ID">
        <input type="password" class="form-control" name="pw" id="form-title" placeholder="PASSWORD">
        <input type="password" class="form-control" name="pwr" id="form-title" placeholder="PASSWORD RETRY">
        <input type="text" class="form-control" name="nickname" id="form-title" placeholder="NICKNAME">
        <input type="submit" name="name" class="btn btn-default btn-lg" value='회원가입'>
      </form>
    </div>
  </header>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>