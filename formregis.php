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
		<input type="submit" name="log" value="Login">
		

		</pre>
	</form>



	<?php 
	session_start();
		require_once('koneksi.php');
		if (isset($_POST['log'])) {
			$user=$_POST['username'];
			$pass=$_POST['password'];
			$option = array('cost' =>4 );
			$hashpassword= password_hash ($pass,PASSWORD_BCRYPT,$option);
			$query=$conn->query("SELECT * FROM user where username='$user'");
			$data= $query->fetch_array();
			if (password_verify($pass, $data['pass'])) {
				$_SESSION['typeuser']= $data['typeuser'];
				$_SESSION['username']= $data['username'];
				if ($_SESSION['typeuser']=='admin') {
					# code...
					header("location:admin/index.php");
				}else {
					header("location :user/index.php");
					
				}
				
			}
		}



	 ?>

	  <br>
	 <a href="formlogin.php">REGISTrasi</a>
</body>
</html>