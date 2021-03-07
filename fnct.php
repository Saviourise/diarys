<?php
    function prikaz($start)
    {
        $pps = 10;
        $connection = mysqli_connect("localhost", "root", "");
        $db = mysqli_select_db($connection,"diary");
        $query = "SELECT teacher.teacher_id, teacher.tfname, teacher.tlname, teacher.temail, teacher.tpassword, subject.subject_name, class.class_name FROM student, teacher, subject, class  WHERE student.teacher_id = teacher.teacher_id AND student.subject_id = subject.subject_id  AND student.class_id = class.class_id LIMIT $start, $pps";
        
        $query_run = mysqli_query($connection, $query) or die(mysqli_error($connection));
        // ispisivanje podataka iz baze:
        while ($r = mysqli_fetch_assoc($query_run)){
            echo "<tr>";
            echo "<td>".$r['tfname']."</td>"."<td>".$r['tlname']."</td>"."<td>".$r['temail']."</td>"."<td>".$r['tpassword']."</td>"."<td>".$r['subject_name']."</td>"."<td>".$r['class_name']."</td>"."<td class='edit'>"; ?><a id="edit" href="edit.php?teacher_id=<?php echo $r['teacher_id'];?>">Edit</a> <?php echo"</td>"."<td>"; ?><a id="delete" onclick="return confirm('Are you sure you want to delete this item?');" href="delete.php?teacher_id=<?php echo $r['teacher_id'];?>">Delete</a> <?php echo"</td>";
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
            echo "<a class='pagin' href='index.php?s=$novistart'> Previous page </a>";
        }
        $zbir = $start + $pps;
        echo " $start"."-"."$zbir"." / "." $brr ";
        if ($start < ($brr - $pps)) {
            $novistart = $start + $pps;
            echo "<a class='pagin' href='index.php?s=$novistart'> Next page </a>";
        }
    }
?>