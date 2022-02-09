<?php

if(isset($_GET['pid'])){

  $pid=$_GET['pid'];

  include('connection_db.php');
  $sql="DELETE FROM player_detail WHERE p_id=$pid";
  $data=mysqli_query($con,$sql);
  if($data){
  	echo '<script type="text/javascript">'; 
 
echo 'window.location.href = "../player_detail.php";';
echo '</script>'; 
  }
  else{
  	echo"failed";
  }

}



?>