<?php

if(isset($_GET['uid'])){

  $uid=$_GET['uid'];

  include('connection_db.php');
  $sql="DELETE FROM users WHERE user_id=$uid";
  $data=mysqli_query($con,$sql);
  if($data){
  	echo '<script type="text/javascript">'; 
 
echo 'window.location.href = "../user_viewprofile.php";';
echo '</script>'; 
  }
  else{
  	echo"failed";
  }

}



?>