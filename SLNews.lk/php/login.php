<?php
	require_once 'connect.php';
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
<style type="text/css">
	
	body{
	background-color: white;
}
#log_in{
color: red;
text-align: center;
text-transform: uppercase;
	font-size: 3vw;	
}
#form{
	text-align: center;
	margin-top: 2%;
	margin-left:30%;
	/*margin-top: 50px;*/
	background-color: white;
	width: 30%;	
	border: 1px solid black;
	padding: 2%;
	padding-top: 0px;
}
label.uname{
	font-size: 2vw;
	color: black;
	text-decoration: bold;
}
.img{
	width: 50%;
	padding-top: 0;
}
input.text_box{
	width: 80%;
	height: 45px;
	margin-top: 2%;
	text-align: center;
	font-size: 1	vw;
}
button.but_01{
	width: 80%;
	height: 50px;
	font-size: 20px;
	background-color: black;
	color: white;
	padding-bottom: 5px;
	padding-top: 5px;
	cursor: pointer;
	margin-top: 2%;	
}

</style>
</head>
<body>

<form id="form" action="login.php" method="POST">
	<h2 id="log_in">Log In</h2>
	<img src="../img/login.png" class="img"><br><br>


	<label class="uname">User Name</label><br>
	<input class="text_box" style="text-transform: uppercase;" type="text" name="uname"><br><br>

	<label class="uname">Password</label><br>
	<input class="text_box" type="password" id="pass"  name="pass"><br><br>

	<button class="but_01" type="submit" name="submit"><b>Log In</b></button><br><br>
	<a href="../index.html">Back to Home Page</a>

<?php
	if(isset($_POST['submit']))
	{
		$uname=stripslashes($_REQUEST['uname']);
		$password=stripslashes($_REQUEST['pass']);

		$loginsql ="SELECT * FROM editor WHERE 	username='$uname' AND password='".md5($password)."'";
		$result = mysqli_query($con,$loginsql) or mysqli_errno();
		$rows = mysqli_num_rows($result);
		
		if($rows==1){
			$_SESSION['uname']=$uname;
			echo "<script type=\"text/javascript\">window.location.href='role.php'; </script>";
		}
		else{
			echo "Username or Password is incorrect";
		}
	}
?>
</form>
</body>
</html>