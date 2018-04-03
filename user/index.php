<?php 
	session_start();
	if (isset($_SESSION['username'])) {
		# code...
		if ($_SESSION['typeuser']== 'user') {
			# code...
		
	

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>DASBOARD ADMIN</title>
</head>
<body>
	<?php 
		
		echo "LOGIN sebagai :".$_SESSION['username'];
	 ?>
<br>
	 <a href="logout.php">LOG OUT</a>



</body>
</html>
<?php 
	} else{
	header("location: ../formregis.php");
		
	}

}else {
	header("location: ../formregis.php");
}
 ?>
