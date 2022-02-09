<?php

if(isset($_GET['rid'])){

  $rid=$_GET['rid'];

  include('connection_db.php');
  $sql="DELETE FROM entry_register_tournament WHERE r_id=$rid";
  $data=mysqli_query($con,$sql);
  if($data){
  	echo '<script type="text/javascript">'; 
 
echo 'window.location.href = "../tournament_registration_detail.php";';
echo '</script>'; 
  }
  else{
  	echo"failed";
  }

}



?>