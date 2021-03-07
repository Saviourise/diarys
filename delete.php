<?php
require "students/connect.php";
$id = $_GET["teacher_id"];
mysqli_query($connection, "DELETE FROM teacher WHERE teacher_id = $id");
 ?>
 <script type="text/javascript">
 	window.location = "teacher.php";
 </script>