<?php

if(isset($_GET['insid'])){

  $del=$_GET['insid'];

  include('connection_db.php');
  $sql="DELETE FROM insurance WHERE insurance_id=$del";
  $data=mysqli_query($con,$sql);
  if($data){
  	header('Location: ../check_insurance.php?deleted');
  }
  else{
  	echo"failed";
  }

}



?>