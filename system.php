<!DOCTYPE html>
<html lang="en-US" manifest="demo.appcache" xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="utf-8">
  <title>LOGIN PAGE</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv=x-ua-compatible content=ie=edge>
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
	<meta name="mobile-web-app-capable" content="yes" />
	<meta name="author" content="Dobrica Menković" />
	<meta name="description" content="some website" />
	<meta name="keywords" content="" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<link rel="shortcut icon" href="" type="image/x-icon"/>
  <link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
  <!-- Bootstrap 4 -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <!--[if lt IE 9]>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.js"></script>
  <![endif]-->

  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <![endif]-->
</head>
<body>
  <center><br/>
    <h2>SCHOOL MENAGEMENT SYSTEM</h2><br/>
    <form action="" method="POST">
      <input class="system" type="submit" name="admin" value="Admin Login" />
      <input class="system" type="submit" name="teacher" value="Teacher Login" />
      <input class="system" type="submit" name="student" value="Student Login" />
    </form>
    <?php
      if(isset($_POST["admin"])){
        header("Location: admin/log.php");
      }
      if(isset($_POST["teacher"])){
        header("Location: teachers/log.php");
      }
      if(isset($_POST["student"])){
        header("Location: students/log.php");
      }
    ?>
  </center>
</body>
</html>