<!-- <?php
#session_start();
#$name=$_SESSION['name'];

?> -->


 <header class="site-navbar py-3" role="banner">

      <div class="container">
        <div class="row align-items-center">
          
          
          <div class="col-12 col-md-12 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation" style="margin-left:-20px;">

              <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block">
                <li class="active"><a href="login_home.php">Home</a></li>
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
                  <a href="#">Users Details</a>
                  <ul class="dropdown">
                    <!--  <li><a href="employee_registration.php">Register New Employee</a></li> -->
                    <!-- <li><a href="emp_update_profile.php">Update Employee Profile</a></li> -->
                    <!-- <li><a href="emp_change_password.php">Change Employee password</a></li> -->
                   <li><a href="user_viewprofile.php">View Users Details</a></li>
                    <!-- 
                    <li><a href="#">Warehousing</a></li>
                    <li><a href="#">Storage</a></li> -->
                  </ul>
                </li>

                <li class="has-children">
                  <a href="#">Shaduel Details</a>
                  <ul class="dropdown">
                    <li><a href="insert_insurance_form.php">Insert Shaduel</a></li>
                    <li><a href="check_insurance.php">Check Shaduel</a></li>
                    <li><a href="check_insurance.php">Update Shaduel</a></li>
               </ul>
                </li>
                <li class="has-children">
                  <a href="#">Player Details</a>
                  <ul class="dropdown">
                    <li><a href="player_detail.php">Player Details</a></li>
                   
               </ul>
                </li>

                    <li class="has-children">
                  <a href="#">Galery</a>
                  <ul class="dropdown">
                    <li><a href="insert_image.php">Insert Image</a></li>
                    <li><a href="view_image.php">Check Galery</a></li>
                    
                  
                    <!-- 
                    <li><a href="#">Warehousing</a></li>
                    <li><a href="#">Storage</a></li> -->
                  </ul>
                </li>

               <!--  <li><a href="industries.html">Industries</a></li>
                <li><a href="blog.html">Blog</a></li>
                <li><a href="contact.html">Contact</a></li> -->
              </ul>
            </nav>
          </div>


          <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

          </div>

        </div>
      </div>
      
    </header>