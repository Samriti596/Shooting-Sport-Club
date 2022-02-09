 <?php include('logincheck.php');?>


 <header class="site-navbar py-3" role="banner">

      <div class="container">
        <div class="row align-items-center">
          
          
          <div class="col-12 col-md-12 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation" style="margin-left:-20px;">

              <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block">
                <li ><a href="login_home.php">Home</a></li>
               <!--  <li><a href="about.php">About Us</a></li> -->
                <li class="has-children">
                  <a href="#">Tournaments</a>
                  <ul class="dropdown">
                    <li><a href="add_tournament.php">Add Tournament</a></li>
                   
                   <li><a href="view_tournament.php">View Tournament</a></li>
                   <li><a href="entry_tournament.php">Check Entry Tournament</a></li>
                    
                  </ul>
                </li>

                <li class="has-children">
                  <a href="#">View Details</a>
                  <ul class="dropdown">
                    <!--  <li><a href="employee_registration.php">Register New Employee</a></li> -->
                    <!-- <li><a href="emp_update_profile.php">Update Employee Profile</a></li> -->
                    <!-- <li><a href="emp_change_password.php">Change Employee password</a></li> -->
                   <li><a href="user_viewprofile.php">View Users Details</a></li>
                    <li><a href="team_details.php">View Team Details</a></li>
                   
                  </ul>
                </li>

                <li class="has-children">
                  <a href="#">Schedule Details</a>
                  <ul class="dropdown">
                    <li><a href="add_scheduel.php">Insert Schedule</a></li>
                    <li><a href="check_scheduel.php">Check Schedule</a></li>
                    
               </ul>
                </li>
                <li class="has-children">
                  <a href="#">Player Details</a>
                  <ul class="dropdown">
                    <li><a href="player_detail.php">Player Details</a></li>
                   
               </ul>
                </li>
                 
                   <li class="has-children">
                  <a href="#">Tournament Registration</a>
                  <ul class="dropdown">
                    <li><a href="tournament_registration_detail.php">Check Registration</a></li>
                   
               </ul>
                </li>

                    <li class="has-children">
                  <a href="#">Feedback</a>
                  <ul class="dropdown">
                    <li><a href="view_feedback.php">View Feedback</a></li>
                   
                    
                  
                   
                  </ul>
                </li>

               
              </ul>
            </nav>
          </div>


          <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

          </div>

        </div>
      </div>
      
    </header>