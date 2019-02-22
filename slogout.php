<?php
session_start();

if (!isset($_SESSION['mysession'])) 
{
	header("Location: sindex.php");
} 
else if (isset($_SESSION['mysession'])!="")
 
 {
	header("Location: student_home.php");
}

if (isset($_GET['logout'])) 
{
	session_destroy();
	unset($_SESSION['mysession']);
	header("Location: sindex.php");
}
