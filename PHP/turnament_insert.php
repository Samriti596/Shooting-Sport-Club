<?php
 session_start();
  $id=$_SESSION['id'];
   if(isset($_POST['btn_t'])){

   $game=$_POST['game'];
   $name=$_POST['name'];
   $email=$_POST['email'];
   $contact=$_POST['contact'];
   $address=$_POST['address'];
   $date=$_POST['date'];
   $team=$_POST['team'];
  
   include('connection_db.php');
   $q="INSERT INTO entry_register_tournament(user_id, game_name, name, email, contact, address, apply_date, team_name)VALUES('$id','$game','$name','$email','$contact','$address','$date','$team') ";
  $data=mysqli_query($con,$q);
    if($data){
     
        echo '<script type="text/javascript">'; 
echo 'alert("Registration Successfully");'; 
echo 'window.location.href = "../team_details.php";';
echo '</script>';
    }
  else{
    echo"failed";
  }
   }





?>