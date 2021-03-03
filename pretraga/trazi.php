<!DOCTYPE html>
<html lang="en-EN" xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="UTF-8" />
<title>search</title>
<link href="../css/spisak.css" rel="stylesheet" type="text/css" media="screen" />
<link href='https://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<?php session_start(); ?>
</head>
<body>
<?php
 $connection = mysqli_connect("localhost", "root", "") or die (mysql_error ());
 $db = mysqli_select_db($connection,"diary") or die (mysql_error ()) ;

if (isset($_POST["submit"])) {
    $sql = "SELECT class.class_name, subject.subject_name, grades.grades_br, teacher.tfname, teacher.tlname FROM student, class, subject, grades, teacher WHERE student.class_id = class.class_id AND student.subject_id = subject.subject_id AND student.grades_id = grades.grades_id AND student.teacher_id = teacher.teacher_id AND class_name = '$_POST[search_box]' AND student.fname = '".$_SESSION ['fname']."'";
}
$query = mysqli_query($connection, $sql) or die(mysqli_error($connection)); 
$br_rezultata = mysqli_num_rows($query);
echo "<p style='background: #E8E8E8; padding: 8px 8px 0 8px; color: #006600; font-size: 1.2em; float: left;'>Total found ".$br_rezultata."</p><br />";
echo "<table>";
 ?>
 <caption>Search result <button class="btn" onClick="window.print()">Print</button><button class="btn" onClick="location.href='pretrazi.php';">Search</button>&nbsp;&nbsp;<span id="ses"><?php echo $_SESSION ['fname']?> <?php echo $_SESSION ['lname']?></span></caption>
 <thead> <tr><th>Class</th><th>Subject</th><th>Grades</th><th>TeacherName</th><th>TeacherLastName</th></tr></thead>
 <?php   
while($red = mysqli_fetch_array($query)){
	echo "<tr>";
    echo "<td>".$red['class_name']."</td>"."<td>".$red['subject_name']."</td>"."<td>".$red['grades_br']."</td>"."<td>".$red['tfname']."</td>"."<td>".$red['tlname']."</td>";

    echo "</tr>";
}
echo "</table>";
mysqli_close($connection);
?>
</body>
</html>