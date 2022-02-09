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
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
     
     <style type="text/css">
     	
   .animate{
   	animation: animate 14s ease-in-out infinite;
   }
   @keyframes animate{
        0%,100%{
            background-image:url(images1/bg1.png);
        }
       25%{
   	       background-image:url(images1/bg2.jpg);
        }
      50%{
      	 background-image:url(images1/bg3.jpg);
       }
       75%{
       	background-image:url(images1/bg4.jpg);
       }

              }

       #font{

  	
    animation:fontText 1.5s infinite;
}

@keyframes fontText{
    0%,100%%{   color: red;    }
    25%{    color: transparent; }
    50%{    color: green; }
    75%{    color:red;  }
   
}       
     </style>


	</head>
	<body>
		
		
	<?php include('./commonpages/loginheader.php');?>



	<div id="fh5co-services" class="fh5co-bg-section" style="height: 40px; padding: 4em;">
		<H1 align="center"><font color="black"><span id="font"><u>PLAYERS DETAILS</u></span></font></H1>
		
		</div>
     
      <div id="fh5co-blog" class="fh5co-bg-section" style="padding: 4em;">
		<div class="container">
			
			<div class="row row-bottom-padded-md">
 <?php
          
            include('./PHP/connection_db.php');
              $sql="SELECT p_id, player_name, p_designation, p_type, contact, team_name, p_image FROM player_detail ";
               $query=mysqli_query($con,$sql);
              while($row=mysqli_fetch_array($query)){
              	
             ?>
                 
				<div class="col-lg-4 col-md-4">
					<div class="fh5co-blog animate-box">
						  
						<h1></h1>
						<h1></h1>
						<div class="blog-text" style="margin-top:-2em;">
							
							 
								
							<h3><a href=""><?=$row['player_name']?></a></h3>
						
			
<div style="width: 60%; margin-left: 120px; height: 100px; margin-top:20px;"><img height="100%px" width="100%" border="3px" src="images1/player_images/<?=$row['p_image']?>"></div>
						
							<span class="posted_on"><?=$row['team_name']?></span>
							<hr>
							<table width="120%" style="margin-left: -25px;">
						
					<tr>
                        <td style="width: 0px;"><h4 align="left">Type:-</h4></td>
                        <td><span><?=$row['p_type']?></span></td>
                    </tr>
                    <tr>
                        <td><h4 align="left">Contact:-</h4></td>
                        <td><span><?=$row['contact']?></span></td>
                    </tr>
                    <tr>
                        <td><h4 align="left">Designation:-</h4></td>
                        <td><span><?=$row['p_designation']?></span></td>
                    </tr>
                   
					</table>
							<hr>
					
						</div> 
						
					</div>
				</div>
				
				<?php
                    }
			      ?>

			</div>
		</div>
	</div>

	</div>
	
	

	
			
	<?php
         include("commonpages/footer.php")
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
	<!-- Main -->
	<script src="js/main.js"></script>

	

	</body>
</html>

