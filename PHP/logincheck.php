<?php
	session_start();
	if (!isset($_SESSION['id'])) {
		
        echo '<script type="text/javascript">'; 
echo 'alert("Invalid Session");'; 
echo 'window.location.href = "home.php";';
echo '</script>'; 

	}


?>