<?php
 
if(isset($_POST['schedule'])){
	$sid=$_POST['sid'];
 $gname=$_POST['g_name'];
 $teama=$_POST['team_a'];
 $teamb=$_POST['team_b'];
 $date=$_POST['m_date'];
 $time=$_POST['m_time'];
 $place=$_POST['place'];
 

   include("connection_db.php");

    $sql="UPDATE schedule SET game_name='$gname', groupA_team_name='$teama', groupB_team_name='$teamb', s_date='$date', s_time='$time', place='$place' WHERE s_id='$sid'";
    $data=mysqli_query($con,$sql);
    if($data){
    	echo '<script type="text/javascript">'; 
echo 'alert("Schedule updated successfully");'; 
echo 'window.location.href = "../check_scheduel.php";';
echo '</script>'; 
    }
   else{
   	echo '<script type="text/javascript">'; 
echo 'alert("Error.. not updated");'; 
echo 'window.location.href = "../update_scheduel.php";';
echo '</script>'; 
   }
}

?>