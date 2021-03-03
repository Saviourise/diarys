<?php
include('login.php');
// if(isset($_SESSION['login_user'])){
// header("location: ../admin.php");
// }
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
  <title>Login</title>
  <link href="login.css" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
</head>
<body>
<div id="main">
<h1>Login form for admin</h1>
<div id="login">
<h3> enter username i password than click on Login button </h3><br/>
<form action="" method="post">
<label for="name">UserName :</label>
<input id="name" name="username" placeholder="username" required="required" type="text" />
<label for="password">Password :</label>
<input id="password" name="password" placeholder="**********" required="required" type="password" />
<input name="submit" type="submit" value="Login">
 <span><?php echo $error; ?></span>
</form>
</div>
</div>
</body>
</html>