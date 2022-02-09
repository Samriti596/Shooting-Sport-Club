<?php

if(isset($_GET['tid'])){

  $tid=$_GET['tid'];

  include('connection_db.php');
  $sql="DELETE FROM team_detail WHERE team_id=$tid";
  $data=mysqli_query($con,$sql);
  if($data){
  	echo '<script type="text/javascript">'; 
 
echo 'window.location.href = "../team_details.php";';
echo '</script>'; 
  }
  else{
  	echo"failed";
  }

}



?>