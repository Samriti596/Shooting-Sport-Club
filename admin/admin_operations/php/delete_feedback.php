<?php

if(isset($_GET['fid'])){

  $fid=$_GET['fid'];

  include('connection_db.php');
  $sql="DELETE FROM feedback WHERE f_id=$fid";
  $data=mysqli_query($con,$sql);
  if($data){
  	echo '<script type="text/javascript">'; 
 
echo 'window.location.href = "../view_feedback.php";';
echo '</script>'; 
  }
  else{
  	echo"failed";
  }

}



?>