<?php
if(isset($_POST['submit'])){
	$rate=$_POST['view'];
	$usubject=$_POST['comments'];
	$uname=$_POST['name'];
	$uemail=$_POST['email'];
	$number=$_POST['num'];
	

	$con=mysqli_connect("localhost","root","","sportclub");
	$sql="INSERT INTO feedback(view,comments,name,email,num) VALUES('$rate','$usubject','$uname','$uemail','$number')";

	$result=mysqli_query($con,$sql);
	if ($result){
		 header('Location:../feedback.php');
		 echo "your feedback is submitted..";
	}
	else{
		 header('Location:index1.php');
	}
	
}
?>