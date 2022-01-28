<?php
require_once 'connect.php';

     $id = $_REQUEST['feed_id'];

     $query1="DELETE FROM feedback WHERE id='$id '";
     mysqli_query($con,$query1);
     header('location:dashbord_admin.php');

?>