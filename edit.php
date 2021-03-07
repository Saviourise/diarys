<?php
     $con=mysqli_connect("localhost", "root", "", "diary");
     $edit=$_GET['teacher_id'];
     $select="SELECT * FROM teacher, subject, class WHERE teacher_id = '$edit' ";
     $run=mysqli_query($con, $select) or die( mysqli_error($con));
     $row=mysqli_fetch_array($run);
        $teacher_id=$row['teacher_id'];
        $tfname=$row['tfname'];
        $tlname=$row['tlname'];
        $temail=$row['temail'];
        $tpassword=$row['tpassword'];
        $subject_name=$row['subject_name'];
        $class_name=$row['class_name'];
     
?> 
<!DOCTYPE html>
<html lang="sr-RS" xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="UTF-8" />
	<title>Edit Teacher Record</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1" />
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
	<meta name="mobile-web-app-capable" content="yes" />
	<meta name="author" content="Dobrica Menković" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
  <meta name="robots" content="noindex, nofollow" />
	<link href="images/logo.ico" rel="shortcut icon" type="image/x-icon"/>
  <link href="insert/insert.css" rel="stylesheet" type="text/css" media="screen" />
  <link href='https://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
  <script src="http://code.jquery.com/jquery-latest.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!--[if lt IE 9]>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.js"></script>
  <![endif]-->
  
  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
</head>
<body>
<div id="vraper">
  <div class="prijava" id="prijava">
  <h2>Edit Teacher:</h2>
  <form action="edit.php?teacher_id=<?php echo $teacher_id;?>" method="post">
    <input type="text" name="tfname" id="tfname" class="input" placeholder="first name" required="required" aria-required="true" value="<?php echo $tfname;?>" >
    <input type="text" name="tlname" id="tlname" class="input" placeholder="last name" aria-required="true" required="required" value="<?php echo $tlname;?>" ><br/>
    <input type="text" name="temail" id="temail" class="input" placeholder="email" required="required" aria-required="true" value="<?php echo $temail;?>" >
    <input type="text" name="tpassword" id="tpassword" class="input" placeholder="password" required="required" aria-required="true" value="<?php echo $tpassword;?>" >
    <input type="text" name="subject_name" id="subject_name" class="input" placeholder="subject" required="required" aria-required="true" value="<?php echo $subject_name;?>" >
    <input type="text" name="class_name" id="class_name" class="input" placeholder="class" required="required" aria-required="true" value="<?php echo $class_name;?>" >
    <input type="submit" name="submit" value="Save" id="submit" />
    <span id="minitel"><a href="teacher.php">Display</a></span> 
  </form>
    <div id="status" class="clear"></div>
    <br /><br />
  </div>
</div>
  
</body>
</html>
<?php 
if(isset($_POST['submit'])) {
	$teacher_id_u=$_GET['teacher_id'];
	$tfname_u=$_POST['tfname'];
	$tlname_u=$_POST['tlname'];
	$temail_u=$_POST['temail'];
	$tpassword_u=$_POST['tpassword'];
  $subject_name_u=$_POST['subject_name'];
  $class_name_u=$_POST['class_name'];

	$update = "UPDATE teacher SET tfname = '$tfname_u', tlname = '$tlname_u', temail = '$temail_u', tpassword = '$tpassword_u', subject_name = '$subject_name_u', class_name = 'class_name_u' WHERE teacher_id='$teacher_id_u' ";
	$run_u = mysqli_query($con, $update);

	if ($run_u) {
		echo "<script>alert('Record Update Successfully');</script>";
		echo "<script>window.open('teacher.php', '_self');</script>";
	}
}

?>