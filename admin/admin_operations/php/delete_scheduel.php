<?php

if(isset($_GET['sid'])){

  $sid=$_GET['sid'];

  include('connection_db.php');
  $sql="DELETE FROM schedule WHERE s_id=$sid";
  $data=mysqli_query($con,$sql);
  if($data){
  	echo '<script type="text/javascript">'; 
 
echo 'window.location.href = "../check_scheduel.php";';
echo '</script>'; 
  }
  else{
  	echo"failed";
  }

}



?>