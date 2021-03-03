<?php
    function prikaz($start)
    {
        $pps = 10;
        $connection = mysqli_connect("localhost", "root", "");
        $db = mysqli_select_db($connection,"diary");
        $query = "SELECT class.class_name, subject.subject_name, grades.grades_br, teacher.tfname, teacher.tlname FROM student, class, subject, grades, teacher  WHERE student.class_id = class.class_id AND student.subject_id = subject.subject_id AND student.grades_id = grades.grades_id AND student.teacher_id = teacher.teacher_id AND student.fname = '".$_SESSION ['fname']."' ORDER BY class.class_name DESC LIMIT $start, $pps";
        
        $query_run = mysqli_query($connection, $query) or die(mysqli_error($connection));
        // ispisivanje podataka iz baze:
        while ($r = mysqli_fetch_assoc($query_run)){
            echo "<tr>";
            echo "<td>".$r['class_name']."</td>"."<td>".$r['subject_name']."</td>"."<td>".$r['grades_br']."</td>"."<td>".$r['tfname']."</td>"."<td>".$r['tlname']."</td>";
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
            echo "<a class='pagin' href='index.php?s=$novistart'> Previous </a>";
        }
        $zbir = $start + $pps;
        echo " $start"."-"."$zbir"." / "." $brr ";
        if ($start < ($brr - $pps)) {
            $novistart = $start + $pps;
            echo "<a class='pagin' href='index.php?s=$novistart'> Next </a>";
        }
    }
?>