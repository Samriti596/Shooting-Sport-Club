<?php

if(isset($_GET['eid'])){

  $tid=$_GET['eid'];

  include('connection_db.php');
  $sql="DELETE FROM tournament WHERE t_id=$tid";
  $data=mysqli_query($con,$sql);
  if($data){
  	echo '<script type="text/javascript">'; 
 
echo 'window.location.href = "../view_tournament.php";';
echo '</script>'; 
  }
  else{
  	echo"failed";
  }

}



?>