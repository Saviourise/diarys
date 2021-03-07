<?php 
    require "students/connect.php"; require "fncs.php";
?>
<!DOCTYPE html>
<html lang="sr-RS" xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="UTF-8">
	<title>Teachers</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1" />
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
	<meta name="mobile-web-app-capable" content="yes" />
	<meta name="author" content="Dobrica Menković" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
  <meta name="robots" content="noindex, nofollow" />
  <!-- <meta http-equiv="refresh" content="30"> -->
	<link href="images/logo.ico" rel="shortcut icon" type="image/x-icon"/>
  <link href="css/spisak.css" rel="stylesheet" type="text/css" media="screen" />
  <!-- <script src="http://maps.googleapis.com/maps/api/js"></script> -->
  <script src="http://code.jquery.com/jquery-latest.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <link href='https://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
  <!--[if lt IE 9]>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.js"></script>
  <![endif]-->
  
  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
</head>
<body>
    <div style = "overflow-x:auto;">
	<table>
		<caption>Students<button class="btn" onClick="#">Insert</button><button class="btn" onClick="location.href='spretraga/pretrazi.php'">Search</button><button class="btn" onClick="window.print()">Print</button><button class="btn" onClick="location.href='logout.php';">Close</button> <span style="color:#818181; font-size: 0.5em;">&nbsp;&nbsp;&nbsp; Logged: Admin</span></caption>
		<thead> <tr><th>FirstName</th><th>LastName</th><th>Password</th><th>Email</th><th>Class</th><th>TeacherName</th><th>TeacherSurname</th><th>Subject</th><th>Grades</th><th>Edit</th><th>Delete</th></tr></thead>
      <?php 
        if (isset($_GET['s'])) {
          $s = $_GET['s'];
        }else {
          $s = 0;
        }
        prikaz($s);
        paginacija($s);
    ?>
	</table>
    </div>

</body>
</html>