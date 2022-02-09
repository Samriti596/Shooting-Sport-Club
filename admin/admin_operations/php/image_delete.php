<?php

if(isset($_GET['id'])){

  $imgid=$_GET['id'];
 

  include('connection_db.php');
   $del="SELECT image_name, img_id FROM galery WHERE img_id='$imgid'";
   $query=mysqli_query($con,$del);
    $row=mysqli_fetch_array($query);
        $id=$row['img_id'];
   if(unlink("../images/galery/".$row['image_name'])){
  $sql="DELETE FROM galery WHERE $id=$imgid";
  $data=mysqli_query($con,$sql);
  if($data){
  	echo '<script type="text/javascript">'; 
 
echo 'window.location.href = "../view_image.php";';
echo '</script>'; 
  }

  else{
  	echo"failed";
  }
  
 }
 else{
  echo"unlink not working";
 }
 }
 




?>