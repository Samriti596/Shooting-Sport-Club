  
<?php include('./PHP/logincheck.php');?>
<link rel="stylesheet" href="css/style2.css">

<header class="header">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="logo">
			<div id="fh5co-logo"><img src="images/logo.webp" style="width: 100px;margin-top: -48px;height: 65px;z-index: 1;position: absolute;"></div>
            </div>
            <button type="button" class="nav-toggler">
               <span></span>
            </button>
            <nav class="nav">
               <ul>
                  <li><a href="index1.php">Index</a></li>
                  <li><a href="home.php">Home</a></li>                  
                  <li><a href="view_players.php">Players-Details</a></li>
				  <li><a href="view_teamdetails.php">Team-Details</a></li>
            	  <li><a href="schedule.php">Schedule</a></li>
				  <li><a href="login_feedback.php">feedback</a></li><br>
				  <li><a href="./PHP/logout.php">Logout</a></li>
               </ul>
            </nav>
        </div>
    </div>

 </header>
 <script src="js/script.js"></script>