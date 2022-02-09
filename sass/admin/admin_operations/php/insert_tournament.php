<?php
 session_start();
if(isset($_POST['g_reg'])){

$gname=$_POST['g_name'];
$gtype=$_POST['g_type'];
$player=$_POST['p_player'];
$tplayer=$_POST['t_player'];
$place=$_POST['place'];
$sdate=$_POST['str_date'];
$edate=$_POST['end_date'];
$efees=$_POST['e_fees'];
$wprice=$_POST['w_price'];

  include('connection_db.php');

   $sql="INSERT INTO tournament(game_name,game_type,player_size,total_player,place,start_date,end_date,entry_fees,wining_price)VALUES('$gname','$gtype','$player','$tplayer','$place','$sdate','$edate','$efees','$wprice')";
  $data=mysqli_query($con,$sql);
  if($data){
  	echo '<script type="text/javascript">'; 
echo 'alert("Tournament added successfully");'; 
echo 'window.location.href = "../add_tournament.php";';
echo '</script>'; 
  }
  else{
  	echo '<script type="text/javascript">'; 
echo 'alert("Error.. Please check detail");'; 
echo 'window.location.href = "../add_tournament.php";';
echo '</script>'; 
  	
  }

}



?>