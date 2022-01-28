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
</body>
</html>