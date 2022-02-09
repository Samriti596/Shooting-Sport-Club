

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
	<script src="js/modernizr-2.6.2.min.js">
	
	
</script>   

	</head>
	<body>
	<?php
 include('./PHP/connection_db.php');
 if(isset($_POST['submit'])){
	 $email =$_POST['email'];
	 $password =$_POST['pass'];
	 $email_search ="select * from users where email='$email'";
	 $query=mysqli_query($con,$email_search);
	 $email_count= mysqli_num_rows($query);
	 if($email_count){
		 $email_pass=mysqli_fetch_assoc($query);
		 $db_pass=$email_pass['pass'];
		 $pass_decode=password_verify ($password,$db_pass);
		 if($pass_decode){
			 echo "login successfully!!";

		 }
		 else 
		 echo "incorrect";
		
		}
		 else 
		 echo "invalid";
	
	}
?>
	
				<?php
         include("./commonpages/header.php")
		?>

	
	<div class="col-md-12 animate-box" align="center">
	<table width="55%" height="700px" align="center">
					<form action="./PHP/registration_insert.php" name="form" align="center" method="POST">
                      
						<div class="row form-group">
							<div class="col-md-12">
						    <div class="col-md-12">
								<tr>
								<h1><font color="red">REGISTRATION !</font></h1>
								</tr>
								<tr>
								<td><h4>Name:</td></h4>
								<td><input type="text" id="name"  name="name" class="form-control" placeholder="Your Name here" required="Please enter your name"></td>
							</tr>
							</div>
						</div>
						<div class="row form-group">
							<div class="col-md-12">
								<tr>
								<td><h4>Email:</td></h4>
								<td><input type="email" id="email" name="email" class="form-control" placeholder="Your Email here" required=""></td>
							</tr>
							</div>
						</div>
						
						<div class="row form-group">
							<div class="col-md-12">
								<tr>
								<td><h4>Password:</td></h4>
								<td><input type="password" id="pass" name="pass" class="form-control" placeholder="Your Password here" required=""></td>
							</tr>
							</div>
						</div>
						<div class="row form-group">
							<div class="col-md-12">
								<tr>
								<td><h4>Age:</td></h4>
								<td><input type="text" id="age" name="age" class="form-control" placeholder="Age limit is between 10 to 18 years" required=""></td>
							</tr>
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<tr>
								<td><h4>Contact:</td></h4>
								<td><input type="number" id="Mobile" name="contact" class="form-control" placeholder="Your contact here" required=""></td>
							</tr>
							</div>
						</div>
						<div class="row form-group">
							<div class="col-md-12">
								<tr>
								<td><h4>Register Date:</td></h4>
								<td><input type="date" id="date" name="regdate" class="form-control" placeholder="registeration date" required=""></td>
							</tr>
							</div>
						</div>
						

						<div class="row form-group">
							<div class="col-md-12">
								<tr>
								<td><h4>Address:</td></h4>
								<td><textarea cols="75" rows="5" name="address" required="">
									
								</textarea></td>
							</tr>
							</div>
						</div>
						
						<div class="form-group">
							<tr>
								<td>&nbsp;</td>
								<td align="center">
									<input type="submit"  value="Register" name='submit' class="btn btn-primary"> &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
						<input type="submit"  value="Cancel"  name='submit' class="btn btn-primary">
					</td>

							</tr>

						</div>
                    </table>
					</form>		
			
				<?php
         include("./commonpages/out_footer.php")
		?>

	

		
	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	
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

