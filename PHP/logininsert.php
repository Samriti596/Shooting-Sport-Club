<?php
if(isset($_POST['btn_login'])){
    
     $uemail=addslashes($_POST['name']);
     $upass=addslashes($_POST['pass']);

     include("connection_db.php");
     $sql="SELECT user_id FROM users WHERE user_email='$uemail' AND user_password='$upass'";
     $result=mysqli_query($con,$sql);
     $data=mysqli_num_rows($result);
     if($data>0){
        $row=mysqli_fetch_array($result);
        session_start();
        $_SESSION['id']=$row['user_id'];
        
        
        header('Location: ../index1.php');

     }
     else{
          echo '<script type="text/javascript">';
          echo 'alert("Invalid username or password");'; 
          echo 'window.location.href = "../login.php";';

echo '</script>'; 
     }
}

?>