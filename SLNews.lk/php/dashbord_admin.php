<?php
  require_once 'connect.php'; //insert connection to page
  require_once 'admin.php'; //Check login 

?>

<!DOCTYPE html>
<html>
<head>
	<title>SL NEWS ADMIN Pannel</title>

</head>
<body>
	<h1>SL NEWS ADMIN PANNEL</h1>
	<h3><a style=" color: red; font-size: 1.5em; float: left; margin-right: 2%;" href="logout.php">Logout</a></h3>
	<h3><a style=" color: red; font-size: 1.5em" href="../index.html">SL News Home Page</a></h3>

	<form class="edit_pannel" method="POST" action="">
		<h1>Editor Add Pannel</h1>

		<label>Enter Username </label><br><br>
		<input class="in" type="text" name="uname"><br><br>

		<label>Enter Password </label><br><br>
		<input class="in" type="password" name="pass"><br><br>

		<label>Re-Enter Password </label><br><br>
		<input class="in" type="password" name="repass"><br><br>

		<input class="btn" type="submit" value="Add Editor" name="submit1">
	</form>

	<div class="show_feedback">
<?php 	
				$count = 1;
				$viewquery = " SELECT * FROM feedback";
                $viewresult = mysqli_query($con,$viewquery);

                echo '
                <h1 class="feedtable"> Feedbacks </h1>


                <table class="student_table" style="width : 80%;"> 
                  <tr>
                    <th style="width : 15%"> Email </th>
                    <th style="width : 40%"> Massage </th>
                    <th style="width : 15%"> Date </th>
                    <th style="width : 5%"> Delete </th>  
                  </tr>';

                while($row = mysqli_fetch_assoc($viewresult))
                {
                  echo '
                  <tr>
                  <td>'.$row['email'].'</td>
                  <td>'.$row['massage'].'</td>
                  <td>'.$row['trn_date'].'</td>
                  <td><a href="delete.php?feed_id='.$row['id'].'">Delete</a></td>
                  </tr>
                  ';
                  $count++;
                }
                echo '</table>';
              
 ?>


          </div>
<style type="text/css">
form.edit_pannel{
	width: 30%;
	height: 100%;
	background-color: gray;
	border: 2px solid black;
	float: left;
	padding: 2%;
	margin-right: 2%;
}

form.edit_pannel h1{
	color: white;
	text-align: center;
}
form.edit_pannel label{
	font-size: 1.2em;

}
input.in{
	font-size: 1.2em;
	width: 50%;
}

.btn{
	width: 30%;
	font-size: 1em;

}
#inputState{
	width: 50%;
	font-size: 1.2em;
}


.show_feedback{
	width: 100%;
	float: left;
	margin-top: 5%;
	padding: 2%;
}
.student_table{
	width: 100%;
	text-align: center;
}
.student_table th{
	border: 1px solid black;
}
.student_table td{
	border: 1px solid black;
}
</style>

	<?php 
	if (isset($_POST['submit1'])) {
		$uname= $_REQUEST['uname'];
		$pass= $_REQUEST['pass'];
		$repass= $_REQUEST['repass'];
		$cdate = date("Y/m/d");

		if (empty($uname)) {
			echo '<script> alert("Please Enter UserName");</script>';
		}elseif (empty($pass)) {
			echo '<script> alert("Please Enter Password");</script>';
		}elseif (empty($repass)) {
			echo '<script> alert("Please Enter Re-Password");</script>';
		}
		else 
		{
			if ($pass == $repass) 
			{

				$q2 = "SELECT * FROM editor WHERE username = '$uname'";
				$res2 = mysqli_query($con,$q2);

				if (mysqli_num_rows($res2)>0) {

					echo '<script> alert("Username is Alrady Exist"); </script>';
				}
				else
				{
					$q1="INSERT INTO editor(username,password,trn_date) values('$uname','".md5($pass)."','$cdate')";
	                $res1=mysqli_query($con,$q1);

	                if ($res1) 
	                {
						echo '<script> alert("Editor Adding Sccuss"); </script>';
					}
				}
			}else{
				echo '<script> alert("Password is not Mached"); </script>';
			}
		}
	}


	 ?>



	

</body>
</html>