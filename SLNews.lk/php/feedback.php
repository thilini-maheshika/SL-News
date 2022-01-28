<?php 
include "connect.php";

	if (isset($_POST['submit'])) {
		$email = $_REQUEST['email'];
		$msg = $_REQUEST['massage'];
		$trndate =  date("Y/m/d");



		if (empty($email)) {
			echo '<script> alert("Please Enter Email"); window.location.href="../feedback.html"; </script>';

		}else if (empty($msg)) {
			echo '<script> alert("Please Enter Massage"); window.location.href="../feedback.html"; </script>';
		}elseif (filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$Query = "INSERT INTO feedback (email,massage,trn_date) values ('$email','$msg','$trndate')";
			$result = mysqli_query($con,$Query);

			if ($result) {
				echo '<script> alert("Feedback Send Successfuly"); window.location.href="../feedback.html"; </script>';
			}
		}
	}
?>