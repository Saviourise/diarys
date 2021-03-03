<?php
session_start();
if (isset($_POST['submit'])) {
	$connection = mysqli_connect("localhost", "root", "");
	$db = mysqli_select_db($connection, "diary");
	$query = "SELECT * FROM student WHERE email='$_POST[email]' AND password='$_POST[password]'";
	$query_run = mysqli_query($connection, $query);

	while ($row = mysqli_fetch_assoc($query_run)) {
		if($row['email'] == $_POST['email']){
		if($row['password'] == $_POST['password']){
			$_SESSION['email'] = $row['email'];
			$_SESSION['fname'] = $row['fname'];
			$_SESSION['lname'] = $row['lname'];
		header("Location: student_dashboard.php");	
		}else {
			echo "Wrong email";
		}
	}else {
			echo "Wrong password";
		}
	}
}
?>