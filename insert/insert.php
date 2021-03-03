<?php
    
    $informacija = " ";
    $tfname = $tlname = $temail = $tpassword  = $subject_name =  $class_name = "";

    if($_SERVER["REQUEST_METHOD"] == "POST") {
    	if(empty($_POST["tfname"])){
    		$informacija = "Enter first name";
    	}else {
    		$tfname = test_input($_POST["tfname"]);
    	}
    	if(empty($_POST["tlname"])){
    		$informacija = "Enter last name";
    	}else {
    		$tlname = test_input($_POST["tlname"]);
    	}
    	if(empty($_POST["temail"])){
    		$informacija = "Enter email";
    	}else {
    		$temail = test_input($_POST["temail"]);
    	}
      if(empty($_POST["tpassword"])){
        $informacija = "Enter password";
      }else {
        $tpassword = test_input($_POST["tpassword"]);
      }
      if(empty($_POST["subject_name"])){
        $informacija = "Enter subject";
      }else {
        $subject_name = test_input($_POST["subject_name"]);
      }
      if(empty($_POST["class_name"])){
        $informacija = "Enter class";
      }else {
        $class_name = test_input($_POST["class_name"]);
      }
      
    	$host = "localhost";
    	$user = "root";
    	$baza ="diary";
    	$pass = "";
    	$connection = mysqli_connect($host, $user, $pass, $baza);
    	mysqli_select_db($connection, $baza);
      $query = "INSERT INTO teacher (teacher_id, tfname, tlname, tpassword, temail) VALUES (NULL,'$tfname', '$tlname', '$tpassword', '$temail')";
      $query_run = mysqli_multi_query($connection, $query) or die(mysqli_error($connection));
  
      mysqli_close($connection);
    }

     function test_input($data) {
          $data = trim($data);
          $data = stripcslashes($data);
          $data = htmlspecialchars($data);
          return $data;
        }
?>