<?php
if(isset($_POST['btn_log'])){
    
     $uemail=addslashes($_POST['username']);
     $upass=addslashes($_POST['password']);

     include("./admin_operations/php/connection_db.php");
     $sql="SELECT admin_id FROM admin_login WHERE admin_email='$uemail' AND password='$upass'";
     $result=mysqli_query($con,$sql);
     $data=mysqli_num_rows($result);
     if($data>0){
        $row=mysqli_fetch_array($result);
        session_start();
        $_SESSION['id']=$row['admin_id'];
        
         echo"<script> alert('login successful');</script>";
        header('Location: ./admin_operations/login_home.php');

     }
     else{
          echo '<script type="text/javascript">'; 
echo 'alert("Invalid username or password");'; 
echo 'window.location.href = "admin_login.html";';
echo '</script>'; 
     }
}

?>