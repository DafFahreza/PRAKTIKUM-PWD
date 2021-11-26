<?php 
	session_start();
	include "../koneksi.php";
	$id_user = $_POST['id_user'];
	$pass = md5($_POST['paswd']);
	$sql = "SELECT * FROM users WHERE id_user='$id_user' AND password='$pass'";

	if ($_POST["captcha_code"]==$_SESSION["captcha_code"]) {
		// code...

	$login=mysqli_query($con,$sql);

	$ketemu=mysqli_num_rows($login);
	$r=mysqli_fetch_array($login);
	if ($ketemu >0) {
		// code...
		$_SESSION['iduser']=$r['id_user'];
		$_SESSION['passuser']=$r['password'];
	echo "USER BERHASIL LOGIN<br>";
	echo "id user=",$_SESSION['iduser'],"<br>";
	echo "password=",$_SESSION['passuser'],"<br>";
	}
	else{
		echo"<center>Login gagl! username &password tidak benar<br>";
		echo "<a href=form_login.php><b>ULANG LAGI</br></a></center>";
	}
	mysql_close($con);
	}
	else{
		echo "<center>Login gagal! Captcha tidak sesuia<br>";
		echo "<a href=form_login.php><b>ULANG LAGI</br></a></center>";
	}

 ?>