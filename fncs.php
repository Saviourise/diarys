<?php
    function prikaz($start)
    {
        $pps = 10;
        $connection = mysqli_connect("localhost", "root", "");
        $db = mysqli_select_db($connection,"diary");
        $query = "SELECT student.fname, student.lname, student.password, student.email, class.class_name, teacher.tfname, teacher.tlname, subject.subject_name, grades.grades_br FROM student, class, teacher, subject, grades WHERE student.class_id = class.class_id AND student.subject_id = subject.subject_id AND student.grades_id = grades.grades_id AND student.teacher_id = teacher.teacher_id LIMIT $start, $pps";
        
        $query_run = mysqli_query($connection, $query) or die(mysqli_error($connection));
        // ispisivanje podataka iz baze:
        while ($r = mysqli_fetch_assoc($query_run)){
            echo "<tr>";
            echo "<td>".$r['fname']."</td>"."<td>".$r['lname']."</td>"."<td>".$r['password']."</td>"."<td>".$r['email']."</td>"."<td>".$r['class_name']."</td>"."<td>".$r['tfname']."</td>"."<td>".$r['tlname']."</td>"."<td>".$r['subject_name']."</td>"."<td>".$r['grades_br']."</td>"."<td class='edit'>"; ?><a id="edit" href="">Edit</a> <?php echo"</td>"."<td>"; ?><a id="delete" onclick="return confirm('Are you sure you want to delete this item?');" href="">Delete</a> <?php echo"</td>";
            echo "</tr>";
        }
    }
    function paginacija($start)
    {
        $pps = 10;
        $connection = mysqli_connect("localhost", "root", "", "diary");
        $q = mysqli_query($connection,"SELECT * FROM student");
        $brr = mysqli_num_rows($q); 
        if ($start != 0) {
            $novistart = $start - $pps; 
            echo "<a class='pagin' href='index.php?s=$novistart'> Prethodna strana </a>";
        }
        $zbir = $start + $pps;
        echo " $start"."-"."$zbir"." / "." $brr ";
        if ($start < ($brr - $pps)) {
            $novistart = $start + $pps;
            echo "<a class='pagin' href='index.php?s=$novistart'> Sledeća strana </a>";
        }
    }
?>