<?php
if(isset($_POST['submit'])){
	$uname=$_POST['name'];
	$uemail=$_POST['email'];
	$upass=$_POST['pass'];
	$uage=$_POST['age'];
	$contact=$_POST['contact'];
	$regdate=$_POST['regdate'];
	
	$uadd=$_POST['address'];
	

	$con=mysqli_connect("localhost","root","","sportclub");
	$sql="INSERT INTO users(user_name,user_email,user_password,user_age,user_contact,register_date,user_address) VALUES('$uname','$uemail','$upass',$uage,'$contact','$regdate','$uadd')";

	$result=mysqli_query($con,$sql);
	if ($result){
		header('Location:../index1.php');
	}
	else{
		echo '<script type="text/javascript">';
          echo 'alert("Login Successfully");'; 
		 header('Location:../login.php');
		 echo '</script>'; 
	}
	
}
?>
