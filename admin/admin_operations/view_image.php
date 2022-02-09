
<?php
//include('./php/logincheck.php');

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Shooting Sport Club</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,700,900|Display+Playfair:200,300,400,700"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">



    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    <style type="text/css">
     
 .tbl{
  width:140%;
  color:white;
  font-size: 15px; 
  margin-left: -180px;
  
  
 }
 


    </style>
  </head>
  <body>
  
  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
    
   <?php include('./commonpages/header.php');?>
  

    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(images/Dark.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">

          <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
            <h2 class="text-white font-weight-light text-uppercase font-weight-bold">Tournament Details</h2>
           <!--  <p class="breadcrumb-custom"> -->
            <form action="view_image.php" method="post">
        <p><input type="submit" name="view" class="btn btn-primary py-3 px-5 text-white" value="VIEW!"></p>
      
    <table class="tbl" cellpadding="5px" cellspacing="5px">

    <tr style="border-bottom: 2px solid">
       <th>IMAGE</th>
       <th colspan="2">IMAGE NAME</th>       
       <th colspan="2">DELETE</th>
       <th colspan="2">UPDATE</th>
       
    </tr>
    <?php
   if(isset($_POST['view'])){
   include('./php/connection_db.php');
  
  $sql="SELECT * FROM galery ";

  $data=mysqli_query($con,$sql);

    
         while($row=mysqli_fetch_array($data)){
      
      ?>
    <tr style="border-bottom: 2px solid">
      
       <td><img src="./images/galery/<?=$row['contact1.jpg']?>" width="100px" height="100px"></td>
       <td colspan="2" align="center"><?=$row['image_name']?></td>
       <td colspan="2"><a href="./php/image_delete.php?id=<?=$row['img_id'];?>">DELETE</a></td>
       <td colspan="2"><a href="./image_update.php?id=<?=$row['img_id'];?>">UPDATE</a></td>
      
    </tr>
  <?php
   }
 
 }
  ?>


     </table>

      </form>      <!-- </p> -->
          </div>
        </div>
         

      </div>
    </div>  

   <!-- footer remove form here --> 
    
   
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>
    
  </body>
</html>