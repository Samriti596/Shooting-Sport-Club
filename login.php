<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Shooting Sport Club</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by freehtml5.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="freehtml5.co" />

	

  
	<link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,700,800" rel="stylesheet">
	
	
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	
	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	
	</head>
	<body>
		
				<?php
         include("./commonpages/header.php")
		?>
		<?php
			if(isset($_GET["login"]))
			
				if($_GET["registration"] == 'success')
				
		
			?>
				<div class="col-md-12 animate-box" align="center">
					
					
					<table width="60%" height="400px">
						<form action="./PHP/logininsert.php" method="post">
					  <div class="row form-group">
						  <div class="col-md-10">
							  <tr>
							  <h1><font color="red">LOGIN !</font></h1>
							  </tr>
							  <tr>
							  <td><h4>User Name:</h4></td>
							  <td><input type="email" id="email" name="name" class="form-control" placeholder="Your User Name here" required=""></td>
						  </tr>
						  </div>
					  </div>

					  <div class="row form-group">
						  <div class="col-md-12">
							  <tr>
							  <td><h4>Password:</h4></td>
							  <td><input type="password" id="subject" name="pass" class="form-control" placeholder="Your Password here" required=""></td>
						  </tr>
						  </div>
					  </div>

					  
					  <div class="form-group">
						  <tr>
							  <td align="center">&nbsp;</td>
							  <td><a href="./registration.php" input type="back" value="back" name="back" class="btn btn-primary">Back</a>&nbsp;&nbsp;
								  <input type="submit" value="submit" name="btn_login" class="btn btn-primary"> &nbsp; &nbsp;
					  <input type="submit" value="Reset" class="btn btn-primary"></td>

						  </tr>

					  </div>
					  </form>
				  </table>
						  
			  
		
		  <?php
         include("./commonpages/out_footer.php")
		?>
	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Google Map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
	<script src="js/google_map.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>

