<!DOCTYPE html>
<html lang="en-EN" xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="UTF-8" />
<title>search</title>
<link href="../css/spisak.css" rel="stylesheet" type="text/css" media="screen" />
<link href='https://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
</head>
<body>
<?php
 $connection = mysqli_connect("localhost", "root", "") or die (mysql_error ());
 $db = mysqli_select_db($connection,"diary") or die (mysql_error ()) ;
 
 if (isset($_POST["submit"])) {
 $sql = "SELECT  student.fname, student.lname, student.password, student.email, class.class_name, teacher.tfname, teacher.tlname, subject.subject_name, grades.grades_br FROM student, class, teacher, subject, grades WHERE student.class_id = class.class_id AND student.teacher_id = teacher.teacher_id AND student.subject_id = subject.subject_id AND student.grades_id = grades.grades_id AND fname = '$_POST[search_name]' AND lname = '$_POST[search_surname]' ";
}
$query = mysqli_query($connection, $sql) or die(mysqli_error($connection)); 
$br_rezultata = mysqli_num_rows($query);
echo "<p style='background: #E8E8E8; padding: 8px 8px 0 8px; color: #006600; font-size: 1.2em; float: left;'>Total found ".$br_rezultata."</p><br />";
echo "<table>";
 ?>
 <caption>Search result <button class="btn" onClick="window.print()">Print</button><button class="btn" onClick="location.href='pretrazi.php';">Search</button></caption>
 <thead> <tr><th>FirstName</th><th>LastName</th><th>Password</th><th>Email</th><th>Class</th><th>TeacherName</th><th>TeacherSurname</th><th>Subject</th><th>Grades</th><th>Edit</th><th>Delete</th></tr></thead>
 <?php   
while($red = mysqli_fetch_array($query)){
	
	echo "<tr>";
    echo "<td>".$red['fname']."</td>"."<td>".$red['lname']."</td>"."<td>".$red['password']."</td>"."<td>".$red['email']."</td>"."<td>".$red['class_name']."</td>"."<td>".$red['tfname']."</td>"."<td>".$red['tlname']."</td>"."<td>".$red['subject_name']."</td>"."<td>".$red['grades_br']."</td>"."<td class='edit'>"; ?><a id="edit" href="">Edit</a> <?php echo"</td>"."<td>"; ?><a id="delete" onclick="return confirm('Are you sure you want to delete this item?');" href="">Delete</a> <?php echo"</td>";

    echo "</tr>";
}
echo "</table>";
mysqli_close($connection);
?>
</body>
</html>