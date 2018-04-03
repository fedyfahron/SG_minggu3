<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<form method="POST" action="">
		<pre>
		
		username : <input type="text" name="username">
		password : <input type="password" name="password">
		<!--Pengguna : <select><option>Admin</option><option>pelanggan</option></select>-->
		
		<input type="submit" name="reg" value="Register">

		</pre>
	</form>



	<?php 
	session_start();
		require_once('koneksi.php');
		if (isset($_POST['reg'])) {
			$user=$_POST['username'];
			$pass=$_POST['password'];
			$option = array('cost' =>4 );
			$hashpassword= password_hash ($pass,PASSWORD_BCRYPT,$option);
			$query=$conn->query("INSERT into user (username,pass,typeuser) values ('$user','$hashpassword','user')");
			if ($query) {
				echo "REGISTRASI SUCCES";
			}else {
				echo "GAGAL";
			}
		}



	 ?>
	 <br>
	 <a href="formregis.php">LOGIN</a>
</body>
</html>