<?php
 if(isset($_POST['btn_reg'])){

 $name=$_POST['ad_name'];
 $email=$_POST['ad_email'];
 $password=$_POST['ad_pass'];
 $mobile=$_POST['ad_mobile'];
 $address=$_POST['ad_add'];
 $gender=$_POST['gender'];
 
include('connection_db.php');
 $sql="INSERT INTO admin(name,address,mobile,email_id,password,gender)VALUES('$name','$address','$mobile','$email','$password','$gender')";
  
    $data=mysqli_query($con,$sql);
    if($data){
    	header('Location: ../login.php');
    }
    else{
    	header('Location: ../registration.php?err');
    }

 }



?>