<?php
if(isset($_POST['btn_login'])){
    
     $uemail=addslashes($_POST['uemail']);
     $upass=addslashes($_POST['upass']);

     include("connection_db.php");
     $sql="SELECT user_id,name FROM admin WHERE email_id='$uemail' AND password='$upass'";
     $result=mysqli_query($con,$sql);
     $data=mysqli_num_rows($result);
     if($data>0){
        $row=mysqli_fetch_array($result);
        session_start();
        $_SESSION['id']=$row['user_id'];
        $_SESSION['name']=$row['name'];

        header('Location: ../login_home.php');

     }
     else{
     	header('Location: ../login.php?err=InvalidUserNameOrPassword');
     }
}

?>