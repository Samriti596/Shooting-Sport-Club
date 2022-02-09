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
            background-image:url(images/gallery9.JPG);
        }
       35%{
   	       background-image:url(images/gallery3.JPG);
        }
      50%{
      	 background-image:url(images/gallery1.JPG);
       }
       75%{
       	background-image:url(images/gallery10.JPG);
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
		
	
				<?php
         include("./commonpages/loginheader.php")
		?>
				
	
	<header id="fh5co-header" class="fh5co-cover animate" role="banner" style="" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1><font color="ORANGE">WELCOME</h1></font>
								<h1><font color="ORANGE">SHOOTING SPORT CLUB</h1></font>
							
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<div id="fh5co-gallery">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
					<h1><font color="red">CLUB<h2>GALLERY</h2></font></h1>
					
				</div>
			</div>
		</div>
		<div class="container-fluid">
			<div class="row row-bottom-padded-md">
				<div class="col-md-12">
					<ul id="fh5co-portfolio-list">

					<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/naseb.JPG); ">
							<a href="#">
								<div class="case-studies-summary">
									<span style="color:pink">Shooting Sports Club</span>
									
								</div>
							</a>
						</li>
						<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/gallery1.JPG); ">
							<a href="#">
								<div class="case-studies-summary">
									<span style="color:pink">Shooting Sports Club</span>
									
								</div>
							</a>
						</li>

						<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/gallery3.JPG); ">
							<a href="#">
								<div class="case-studies-summary">
								<span style="color:pink">Shooting Sports Club</span>
								</div>
							</a>
						</li>

						<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/gallery4.JPG); "> 
							<a href="#">
								<div class="case-studies-summary">
								<span style="color:pink">Shooting Sports Club</span>
								</div>
							</a>
						</li>
						<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/gallery6.JPG); ">
							<a href="#">
								<div class="case-studies-summary">
								<span style="color:pink">Shooting Sports Club</span>
								</div>
							</a>
						</li>
						<li class="two-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/gallery9.JPG); ">
							<a href="#">
								<div class="case-studies-summary">
								<span style="color:pink">Shooting Sports Club</span>
								</div>
							</a>
						</li>
						<li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/gallery7.JPG); ">
							<a href="#">
								<div class="case-studies-summary">
								<span style="color:pink">Shooting Sports Club</span>
								</div>
							</a>
						</li>
					</ul>		
				</div>
			</div>
		</div>
	</div>


	<div id="fh5co-services" class="fh5co-bg-section" style="height: 40px; padding: 4em; background-color: cornsilk;" >
		<H1 align="center"><font color="black"><span id="font"><u>UPCOMING TOURNAMENTS</u></span></font></H1>
		
		</div>
     
      <div id="fh5co-blog" class="fh5co-bg-section" style="padding: 4em; background-color:cornsilk;">
		<div class="container">
			
			<div class="row row-bottom-padded-md">
 <?php
            include('./PHP/connection_db.php');
              $sql="SELECT t_id, game_name, game_type, player_size, total_player, start_date, end_date, place, entry_fees, wining_price FROM tournament";
               $query=mysqli_query($con,$sql);
              while($row=mysqli_fetch_array($query)){
             ?>

                    <div class="col-lg-5 col-md-4">
					<div class="fh5co-blog animate-box">
						 <a href="#"><img class="img-responsive" height="100%" src="images/gallery6.JPG" alt=""></a> 
						<h1></h1>
						<h1></h1>
						<div class="blog-text">
							<h1></h1>
							<h3><a href=""#><?=$row['game_name']?></a></h3>
							<span class="posted_on"><?=$row['start_date']?></span>
							<hr>
							<table width="100%">
						
					<tr>
                        <td><h4 align="left" style="color:orange">Place :</h4></td>
                        <td><span><?=$row['place']?></span></td>
                    </tr>
                    <tr>
                        <td><h4 align="left" style="color:orange">Entry Fees :</h4></td>
                        <td><span><?=$row['entry_fees']?></span></td>
                    </tr>
                    <tr>
                        <td><h4 align="left" style="color:orange">Win Price :</h4></td>
                        <td><span><?=$row['wining_price']?></span></td>
                    </tr>
                    <tr>
						<td><h4 align="left" style="color:orange">End Date :</h4></td>
						<td><span><?=$row['end_date']?></span></td>
					</tr>
					<tr>
						<td><h4 align="left" style="color:orange">Player Participate :</h4></td>
						<td><span><?=$row['player_size']?></span></td>
					</tr>
					<tr>
						<td><h4 align="left" style="color:orange">Total player :</h4></td>
						<td><span><?=$row['total_player']?></span></td>
					</tr>
					</table>
							<hr>
							<p><a href="reg_turnament.php?rid=<?=$row['t_id'];?>" class="btn btn-primary btn-outline btn-sm">Click To Register <i class="icon-arrow-right"></i></a></p>
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
	
	<div id="fh5co-started" class="fh5co-bg" style="background-image: url(images/gallery6.JPG);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center">
				<b><h1 style="color:orange">Sports Classes this Summer<br><span><font color="black"><button class="btn btn-primary btn-lg">Play Now </span></h1></button></font></b>
				</div>
			</div>
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center">
					
				</div>
			</div>
		</div>
	</div>

	
	<div id="fh5co-services" class="fh5co-bg-section" style="height: 40px; padding: 4em; background-color:lightsky;">
		<H1 align="center"><font color="black"><span id="font"><u>UPCOMING EVENTS!</u></span></font></H1>
		
		</div>
     
      <div id="fh5co-blog" class="fh5co-bg-section" style="padding: 4em;  background-color:lightsky;">
		<div class="container">
			
			<div class="row row-bottom-padded-md">
 <?php
          
            include('./PHP/connection_db.php');
              $sql="SELECT s_date, s_time, groupA_team_name, groupB_team_name, game_name, place FROM schedule";
               $query=mysqli_query($con,$sql);
              while($row=mysqli_fetch_array($query)){
              	
             ?>
                 
				<div class="col-lg-12 col-md-12" >
					<div class="fh5co-blog animate-box">
						  
						<h1></h1>
						<h1></h1>
						<div class="blog-text" style="margin-top:-2em;">
							
							<h1 align="left"><a href=""><?=$row['groupA_team_name']?></a></h1>
				             <h2 align="center"><a href="">VS</a></h2>
				             <h1 align="right"><a href=""><?=$row['groupB_team_name']?></a></h1>
							<span class="posted_on">Welcome To Sports Club</span>
							<hr>
							<center>
							<table width="90%" style="margin-left: 0px;">
						
					<tr>
					<td><h2 align="left" style="color:orange">DATE</h2></td>
                        <td><h2 align="left" style="color:orange">TIME</h2></td>
                        <td><h2 align="left" style="color:orange">GAME</h2></td>
                        <td><h2 align="left" style="color:orange">DESTINATION</h2></td>
                        
                    </tr>
                    <tr>
					<td><h4><span ><?=$row['s_date']?></span></td></h4>
                       <td><h4><span><?=$row['s_time']?></span></td></h4>
                       <td><h4><span><?=$row['game_name']?></span></td></h4>
                       <td><h4><span><?=$row['place']?></span></td></h4>
                    </tr>
                    
					</table>
				</center>
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
	<!-- Main -->
	<script src="js/main.js"></script>

	

	</body>
</html>

