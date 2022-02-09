<?php
 session_start();
if(isset($_POST['ins'])){

$img=$_FILES['image']['name'];
 # $tmp=$_FILES['image']['tmp_name'];


  include('connection_db.php');

   $sql="INSERT INTO galery(image_name)VALUES('$img')";
  $data=mysqli_query($con,$sql);
  if(move_uploaded_file($_FILES['image']['tmp_name'],"../images/galery/$img")){
  	echo '<script type="text/javascript">'; 
echo 'alert("image added successfully");'; 
echo 'window.location.href = "../insert_image.php";';
echo '</script>'; 
  }
  else{
  	echo '<script type="text/javascript">'; 
echo 'alert("Error.. Please check detail");'; 
echo 'window.location.href = "../insert_image.php";';
echo '</script>'; 
  	
  }

}



?>