<?php 

session_start();

if(session_destroy()) // Destroying All Sessions

{

header("Location: system.php"); // go to admin/log.php

}

?>