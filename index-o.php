<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta charset="utf-8">
  <title>Alpha Coders - SRU</title>

  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  
  <!-- ** Plugins Needed for the Project ** -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
	<!-- FontAwesome -->
  <link rel="stylesheet" href="plugins/fontawesome/font-awesome.min.css">
	<!-- Animation -->
	<link rel="stylesheet" href="plugins/animate.css">
	<!-- Prettyphoto -->
	<link rel="stylesheet" href="plugins/prettyPhoto.css">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="plugins/owl/owl.carousel.css">
	<link rel="stylesheet" href="plugins/owl/owl.theme.css">
	<!-- Flexslider -->
	<link rel="stylesheet" href="plugins/flex-slider/flexslider.css">
	<!-- Flexslider -->
	<link rel="stylesheet" href="plugins/cd-hero/cd-hero.css">
	<!-- Style Swicther -->
	<link id="style-switch" href="css/presets/preset3.css" media="screen" rel="stylesheet" type="text/css">

	<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="plugins/html5shiv.js"></script>
      <script src="plugins/respond.min.js"></script>
    <![endif]-->
   
  <!-- Main Stylesheet -->
  <link href="css/style.css" rel="stylesheet">
  <!--Favicon-->
	<link rel="icon" href="img/favicon/favicon-32x32.png" type="image/x-icon" />
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/favicon/favicon-144x144.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/favicon/favicon-72x72.png">
	<link rel="apple-touch-icon-precomposed" href="img/favicon/favicon-54x54.png">

	<style type="text/css">
		#text{
			display: none;
		}
		#fele{
			display: none;
		}
	</style>
	

</head>

<body>
	<div class="body-inner">


<!-- Header start -->
<header id="header" class="fixed-top header3" role="banner">
	<div class="container">
		<nav class="navbar navbar-expand-lg navbar-light px-4 py-2">
			<center><a class="navbar-brand" href="index.html"><h1>Alpha Coders<sub>SRU</sub></h1></a></center>
			<button class="navbar-toggler ml-auto border-0 rounded-0 text-dark" type="button" data-toggle="collapse"
				data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
			</button>
		</nav>
	</div>
</header>
<!--/ Header end -->

<section id="main-container">
	<div class="container">
		<div class="row">
		<center>
			<div class="col-md-12">
				<form id="contact-form" action="" method="post" role="form">
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
							<label>Application Type</label>
						    <select class="form-control" name="application_type" id="name">
									<option>Select your application type</option>
									<option value="gate">GATE</option>
									<option value="cat">CAT</option>
									<option value="mat">MAT</option>
									<option value="net">NET</option>
									<option value="set">SET</option>
									<option value="other">Other</option>
								</select>
							</div>
						</div>
						<div class="col-md-12" id="fele">
							<div class="col-md-12">
								<div class="form-group">
									<label>Maximum File Size</label>
									<input class="form-control" name="size" id="email" placeholder="" type="number" >
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label>Compression Type</label>
									<select class="form-control" name="compression_type" id="name">
										<option>Select your compression type</option>
										<option value="high">High</option>
										<option value="recommended">Recommended</option>
										<option value="low">Low</option>
									</select>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label>Aspect Ratio</label>
									<label></label>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<input class="form-control" name="height" id="height" placeholder="Height" type="number" >
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<input class="form-control" name="width" id="width" placeholder="Width" type="number" >
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label>Upload File</label>
									<input type="file" name="uploaded_file" class="form-control">
	    						</div>
							</div>
						</div>
						<div class="col-md-12" id="text">
							<table>
								<tr>
									<td><h3>Application Type: </h3></td>
									<td></td>
								</tr>
								<tr>
									<td><h3>Maximum File Size Allowed:</h3></td>
									<td></td>
								</tr>
								<tr>
									<td><h3>Compression Type Allowed:</h3></td>
									<td></td>
								</tr>
								<tr>
									<td><h3>Aspect Ratio:</h3></td>
									<td></td>
								</tr>
							</table>
							<div class="col-md-12">
								<div class="form-group">
									<label>Upload File</label>
									<input type="file" name="uploaded_file" class="form-control">
	    						</div>
							</div>
						</div> 
						<div class="text-left">
							<input class="btn btn-primary solid blank" type="submit" name="submit" value="Submit">
						</div>
					</div>
				</form>
			</div>
		</div>
		</center>
		
	</div>
	<!--/ container end -->
</section>

<?php 
	if(isset($_POST['submit'])){
		$application_type = $_POST['application_type'];
		if($application_type == "gate"){
			?>
				<script>document.getElementById('text').style.display = 'block';</script>
			<?php
		}
		else if($application_type == "other"){
			?>
				<script>document.getElementById('fele').style.display = 'block';</script>
			<?php
		} 
	}
?>

<!-- Footer start -->
<section id="footer" class="footer footer-map">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<div class="footer-logo">
					<h1 style="color:#fff;">Alpha Coders<sub>SRU</sub></h1>
				</div>
				<div class="gap-20"></div>
			</div>
		</div>
		<!--/ Row end -->
		<div class="row">
			<div class="col-md-12 text-center">
				<div class="copyright-info">
					&copy; Alpha Coders. <span><br>Designed by <a
							href="https://alpha-coders-sru.000webhostapp.com">alpha-coders-sru.000webhostapp.com</a></span>
				</div>
			</div>
		</div>
		<!--/ Row end -->
		<div id="back-to-top" data-spy="affix" data-offset-top="10" class="back-to-top affix position-fixed">
			<button class="btn btn-primary" title="Back to Top"><i class="fa fa-angle-double-up"></i></button>
		</div>
	</div>
	<!--/ Container end -->
</section>
<!--/ Footer end -->

</div><!-- Body inner end -->

<!-- jQuery -->
<script src="plugins/jQuery/jquery.min.js"></script>
<!-- Bootstrap JS -->
<script src="plugins/bootstrap/bootstrap.min.js"></script>
<!-- Style Switcher -->
<script type="text/javascript" src="plugins/style-switcher.js"></script>
<!-- Owl Carousel -->
<script type="text/javascript" src="plugins/owl/owl.carousel.js"></script>
<!-- PrettyPhoto -->
<script type="text/javascript" src="plugins/jquery.prettyPhoto.js"></script>
<!-- Bxslider -->
<script type="text/javascript" src="plugins/flex-slider/jquery.flexslider.js"></script>
<!-- CD Hero slider -->
<script type="text/javascript" src="plugins/cd-hero/cd-hero.js"></script>
<!-- Isotope -->
<script type="text/javascript" src="plugins/isotope.js"></script>
<script type="text/javascript" src="plugins/ini.isotope.js"></script>
<!-- Wow Animation -->
<script type="text/javascript" src="plugins/wow.min.js"></script>
<!-- Eeasing -->
<script type="text/javascript" src="plugins/jquery.easing.1.3.js"></script>
<!-- Counter -->
<script type="text/javascript" src="plugins/jquery.counterup.min.js"></script>
<!-- Waypoints -->
<script type="text/javascript" src="plugins/waypoints.min.js"></script>
<!-- google map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU&libraries=places"></script>
<script src="plugins/google-map/gmap.js"></script>

<!-- Main Script -->
<script src="js/script.js"></script>

</body>

</html>