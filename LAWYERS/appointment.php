<?php
include("admin/config.php");
// echo $_GET['id'];
if(isset($_GET['id'])){

    $id = $_GET['id'];
    $data = $con->query("Select * FROM `users` WHERE `id`='$id'");
    $info =  mysqli_fetch_array($data);
// echo $data[2];
}



?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from html.themexriver.com/rexlaw/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 Dec 2022 18:32:24 GMT -->
<head>
	<meta charset="UTF-8">
	<title>LAWYERS</title>
	<link rel="shortcut icon" href="assets/frontend/img/logo/ficon.png" type="image/x-icon">
	<meta name="author" content="themexriver">
	<meta name="description" content="Rexlaw - Law Attorney HTML Template">
	<meta name="keywords" content="	accountant, adviser, advocate, attorney, barrister, business, consultant, counsel, finance, justice, law, law firm, lawyer, legal, solicitor">
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="assets/frontend/css/owl.carousel.css">
	<link rel="stylesheet" href="assets/frontend/css/fontawesome-all.css">
	<link rel="stylesheet" href="assets/frontend/css/animate.css">
	<link rel="stylesheet" href="assets/frontend/css/flaticon.css">
	<link rel="stylesheet" href="assets/frontend/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/frontend/css/video.min.css">
	<link rel="stylesheet" href="assets/frontend/css/style.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</head>

<body>

<?php
include('navbar.php');
?>
<br><br><br><br>	
<!-- Start of breadcrumb section
	============================================= -->
	<section id="breadcrumb" class="breadcrumb_section relative-position" data-background="assets/frontend/img/background/brbg.jpg">
		<div class="background_overlay"></div>
		<div class="breadcrumb_watermark">Appointment</div>
		<div class="container">
			<h2 class="breadcrumb_title">Appointment</h2>
			<div class="breadcrumb_item ul-li">
				<ul class="breadcrumb">
					<li class="breadcrumb-item"><a href="index.php">Home</a></li>
					<li class="breadcrumb-item active">Appointment</li>
				</ul>
			</div>
		</div>
		<div class="slider_side_btn">
			<a class="block-display" href="#"><i class="fas fa-th"></i>Free Case Study</a>
		</div>
	</section>
<!-- End of breadcrumb section
	============================================= -->
    <!-- Start of estimate project
	============================================= -->
	<section id="estimate" class="estimate_contact_section">
		<div class="container">
			<div class="section_title_area text-center headline pera-content">
				<p>
					<span class="title_shape_left"></span>
					Appoitment
					<span class="title_shape_right"></span>
				</p>
				<h2>
					Make An Appointment
				</h2>
			</div>
			<div class="estimate_form">
				<form id="contact_form" action="appointment.php" method="POST" enctype="multipart/form-data">
					<div class="row">
						<div class="col-md-6">
							<div class="contact-info">
								<input class="email" name="username" type="text" placeholder="Enter your full name">
								<div class="icon-bg">
									<i class="far fa-user"></i>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="contact-info">
								<input class="name" name="email" type="email" placeholder="Enter your email">
								<div class="icon-bg">
									<i class="far fa-envelope"></i>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="contact-info">
								<input class="email" name="phone" type="text" placeholder="Enter your phone">
								<div class="icon-bg">
									<i class="fas fa-phone"></i>
								</div>
							</div>
						</div>
					

						<div class="col-md-4">
							<div class="contact-info">
								<input class="text" name="name"  value=" <?= $info['name'] ?>" readonly>
								<input class="text" name="lawyer_id"  value=" <?= $info['id'] ?>"type="hidden" >
								<div class="icon-bg">
									<i class="fas fa-calendar-alt"></i>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="contact-info">
								<input class="text" name="lawyer_category"  value=" <?= $info['lawyer_category'] ?>" readonly>
								
								<div class="icon-bg">
									<i class="fas fa-calendar-alt"></i>
								</div>
							</div>
						</div>
                   
                   
						<div class="col-md-12">
							<div class="contact-info">
								<textarea id="message" name="message" placeholder="Enter your case details"></textarea>
								<div class="icon-bg">
									<i class="far fa-edit"></i>
								</div>
							</div>
						</div>
					</div>
					<div class="sub-button  text-uppercase">
						<button type="submit"  name="submit"value="Submit">Submit Now</button> 
					</div> 
				</form>
			</div>
		</div>
	</section>
<!-- End  of estimate project
	============================================= -->	
    <?php





if(isset($_POST['submit'])){

  // echo $_POST['Myname'] * $_POST['headline'];

  $name = $_POST['name'];
  $username = $_POST['username'];
  $email = $_POST['email'];
  $phone=$_POST['phone'];
  $lawyer_category=$_POST['lawyer_category'];
  $message=$_POST['message'];
  $lawyer_id=$_POST['lawyer_id'];


  $insert = $con->query("INSERT INTO `appointment`(`name`,`username`,`email`,`phone` ,`lawyer_category`,`message`,`lawyer_id`) VALUES
  
   ('$name','$username','$email' ,'$phone','$lawyer_category','$message','$lawyer_id')");

if($insert){

}
}
?>



    <?php
include('footer.php');
?>
    	<!-- For Js Library -->
        <script src="assets/frontend/js/jquery.min.js"></script>
	<script src="assets/frontend/js/bootstrap.min.js"></script>
	<script src="assets/frontend/js/popper.min.js"></script>
	<script src="assets/frontend/js/owl.carousel.min.js"></script>
	<script src="assets/frontend/js/jarallax.js"></script>
	<script src="assets/frontend/js/appear.js"></script>
	<script src="assets/frontend/js/wow.min.js"></script>
	<script src="assets/frontend/js/circle-progress.js"></script>
	<script src="assets/frontend/js/parallax-scroll.js"></script>
	<script src="assets/frontend/js/jquery.counterup.min.js"></script>
	<script src="assets/frontend/js/waypoints.min.js"></script>
	<script src="assets/frontend/js/tilt.jquery.min.js"></script>
	<script src="assets/frontend/js/jquery.magnific-popup.min.js"></script>
	<script src="assets/frontend/js/script.js"></script>
	<script src="assets/frontend/js/gmap3.min.js"></script>
	<script src='http://maps.google.com/maps/api/js?key=AIzaSyB6w8j2weabWNNnmQbh4Vsi2-sd7Sqv5zM&amp;ver=5.3.2'></script>
</body>

<!-- Mirrored from html.themexriver.com/rexlaw/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 Dec 2022 18:32:31 GMT -->
</html>