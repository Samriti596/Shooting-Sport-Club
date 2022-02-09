<?php
 
if(isset($_POST['t_update'])){
	$tid=$_POST['uid'];
 $gname=$_POST['g_name'];
 $gtype=$_POST['g_type'];
 $player=$_POST['p_player'];
 $tplayer=$_POST['t_player'];
 $place=$_POST['place'];
 $sdate=$_POST['str_date'];
 $edate=$_POST['end_date'];
 $efees=$_POST['e_fees'];
 $wprice=$_POST['w_price'];

   include("connection_db.php");

    $sql="UPDATE tournament SET game_name='$gname', game_type='$gtype', player_size='$player', total_player='$tplayer', start_date='$sdate', end_date='$edate', place='$place', entry_fees='$efees', wining_price='$wprice' WHERE t_id='$tid'";
    $data=mysqli_query($con,$sql);
    if($data){
    	echo '<script type="text/javascript">'; 
echo 'alert("Tournament updated successfully");'; 
echo 'window.location.href = "../view_tournament.php";';
echo '</script>'; 
    }
   else{
   	echo '<script type="text/javascript">'; 
echo 'alert("Error.. not updated");'; 
echo 'window.location.href = "../update_tournament.php";';
echo '</script>'; 
   }
}

?>