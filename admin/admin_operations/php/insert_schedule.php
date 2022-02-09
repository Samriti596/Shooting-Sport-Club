<?php
 session_start();
if(isset($_POST['schedule'])){

$gname=$_POST['g_name'];
$teama=$_POST['team_a'];
$teamb=$_POST['team_b'];
$place=$_POST['place'];
$mdate=$_POST['m_date'];
$mtime=$_POST['m_time'];


  include('connection_db.php');

   $sql="INSERT INTO schedule(game_name,groupA_team_name,groupB_team_name,place,  s_date,s_time)VALUES('$gname','$teama','$teamb','$place','$mdate','$mtime')";
  $data=mysqli_query($con,$sql);
  if($data){
  	echo '<script type="text/javascript">'; 
echo 'alert("Schedule added successfully");'; 
echo 'window.location.href = "../add_scheduel.php";';
echo '</script>'; 
  }
  else{
  	echo '<script type="text/javascript">'; 
echo 'alert("Error.. Please check detail");'; 
echo 'window.location.href = "../add_scheduel.php";';
echo '</script>'; 
  	
  }

}



?>