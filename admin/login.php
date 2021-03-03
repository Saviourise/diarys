<?php
session_start();
$error=''; 
if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Enter UserName i Password";
}
else
{
$username=$_POST['username'];
$password=$_POST['password'];
$connection = mysqli_connect("localhost", "root", "");
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysqli_real_escape_string($connection, $username);
$password = mysqli_real_escape_string($connection, $password);


$db = mysqli_select_db($connection, "diary");
$query = mysqli_query($connection, "SELECT * FROM admin WHERE password='$password' AND username='$username'");
$rows = mysqli_num_rows($query);
if ($rows == 1) {
$_SESSION['login_user']=$username; // Initializing Session
header("location: ../admin.php"); // Redirecting To Other Page
} else {
$error = "UserName or Password is incorrect";
}
mysqli_close($connection); // Closing Connection
}
}
?>