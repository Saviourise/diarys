<?php 

session_start();

if(session_destroy()) // Destroying All Sessions

{

header("Location: ../admin/log.php"); //go to admin/log.php

}

?>