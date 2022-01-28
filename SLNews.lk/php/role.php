<?php 
session_start();
if ($_SESSION['uname'] == 'admin') {
	header('location:dashbord_admin.php');
}else{
	header('location:dashbord.php');
}

 ?>
