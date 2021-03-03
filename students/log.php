<?php
include('login.php');
// if(isset($_SESSION['login_user'])){
// header("location: student_dashboard.php");
// }
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
  <title>Login</title>
  <link href="../admin/login.css" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
</head>
<body>
<div id="main">
<h1>Login form for students</h1>
<div id="login">
<h3> enter email i password than click on Login button </h3><br/>
<form action="" method="post">
<label for="emaile">Email :</label>
<input id="email" name="email" placeholder="email" type="text" />
<label for="password">Password :</label>
<input id="password" name="password" placeholder="**********" type="password" />
<input name="submit" type="submit" value="Login">

</form>
</div>
</div>
</body>
</html>