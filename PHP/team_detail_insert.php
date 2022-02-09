<?php
 session_start();
  $id=$_SESSION['id'];
   if(isset($_POST['btn_t'])){

   $tname=$_POST['tname'];
   $cname=$_POST['tcaptian'];
   $total=$_POST['totalp'];
   $participate=$_POST['participate'];
   $extra=$_POST['extra'];
   
  
   include('connection_db.php');
   $q="INSERT INTO team_detail(user_id, team_name, team_captian, total_player, participate_player, extra_player)VALUES('$id','$tname','$cname','$total','$participate','$extra') ";
  $data=mysqli_query($con,$q);
    if($data){
     
        echo '<script type="text/javascript">'; 
#echo 'alert("Registration Successfully");'; 
echo 'window.location.href = "../player_registration.php";';
echo '</script>';
    }
  else{
    echo"faild";
  }
   }





?>