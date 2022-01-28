<?php
  require_once 'connect.php'; //insert connection to page

?>

<!DOCTYPE html>
<html>
<head>
	<title>SL NEWS</title>
	<link rel="stylesheet" type="text/css" href="../css/Main_Style.css">
	<!-- <link rel="stylesheet" type="text/css" href="css/feedback_1.css"> -->
	<link rel="stylesheet" type="text/css" href="../css/feedback.css">
	<script type="text/javascript" src="../js/a.js"></script>


	
</head>
<body style="background-color: white">
	<div class="container">
		<div class="head">
			<div class="topNav">
				<ul class="topNav_list">
					<li><a href="index.html" id="topNav_hover">HOME</a></li>
					<li><a href="about.html" id="topNav_hover">ABOUT</a></li>
					<li><a href="contact.html" id="topNav_hover">CONTACT</a></li>
					<li><a href="feedback.html" id="topNav_hover">FEEDBACK</a></li>
					<li><a href="php/login.php" id="topNav_hover">LOGIN</a></li>
				</ul>
						<p id="date"></p>
						<script type="text/javascript">
							var day = new Date(2018, 11, 24, 10, 33, 30);
								document.getElementById("date").innerHTML = day;
						</script>
			</div>

			<div class="middleNav">
				<img class="image" title="SL NEWS" src="../img/logo.png">

			</div>

			<div class="nav">
				<div>
					
					<ul class="navList">
						<li><b><a id="navList_hover" href="#">Local</a></li></b>
						<li><b><a id="navList_hover" href="#">International</a></li></b>
						<li><b><a id="navList_hover" href="#">Sports</a></li></b>
						<li><b><a id="navList_hover" href="#">Wheather</a></li></b>
						<li><b><a id="navList_hover" href="#">Bussiness</a></li></b>
					</ul>
				</div>
					<!-- Load font awesome icons -->
						<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

						<!-- The social media icon bar -->
						
			<div class="icon-bar">
			  <a href="#" class="facebook"><i id="ico" class="fa fa-facebook"></i></a>
			  <a href="#" class="twitter"><i id="ico" class="fa fa-twitter"></i></a>
			  <a href="#" class="google"><i id="ico" class="fa fa-google"></i></a>
			  <a href="#" class="linkedin"><i id="ico" class="fa fa-linkedin"></i></a>
			  <a href="#" class="youtube"><i id="ico" class="fa fa-youtube"></i></a>
			</div>
			</div>

		</div>
		<!-- Header End -->
		<!-- Start Body -->
		<div class="feedback_body">
			<div class="feedback_area">
			<form class="feedback_form" method="POST" action="php/feedback.php">
				<label class="feedback_label">Enter Email </label><br><br>
				<input class="feedback_text" type="text" name="email" placeholder="Enter Email"><br><br><br>
				<label class="feedback_label">Enter Your Feedback</label><br><br>
				<textarea name="massage" cols="50" rows="10"></textarea><br><br>

				<input class="feedback_btn" type="submit" name="submit" value="Send Feedback">

			</form>
			</div>

				<div class="show_feedback">

					<style type="text/css">
						.show_feedback{
							width: 100%;
							background-color: black;
						}
					</style>


			<?php 	
				$count = 1;
				$viewquery = " SELECT * FROM feedback";
                $viewresult = mysqli_query($con,$viewquery);
                while($row = mysqli_fetch_assoc($viewresult))
                {
                 echo '<p>'.$row['email'].'</p>';
                 echo '<p>'.$row['massage'].'</p>';
                 echo "</br>";

                  $count++;
                }
              
			 ?>


          </div>


		</div><!-- End Body -->
		<!-- Sttart Footer -->
		<div class="footer">
			<div>
				<p class="para1">Sri Lankan 24hr News Portal. Its time to change News world.. We are Update evry Minit. <br> <br> Asian Network (Pvt) Limited <br> No 23, Colombo 03 <br>
					T.P: 01124578457, 0112 5896789 <br> Email : support@slnews.com</p>
				<p class="para2">Design By : K.Thilini Maheshika | Faculty of Technology | South Eastern University of Sri Lanka <br>Email : kthilini1999@gmail.com </p>
				<p class="para2">Copyright © The No1 News Portal of Sri Lanka 2020 All rights reserved. Asian Network (Pvt) Limited</p>
			</div>
			
		</div>

	</div>

</body>
</html>