<?php
include("koneksi.php");

if( isset($_POST['username']) && isset($_POST['password']) ){
	$user = $_POST['username'];
	$pass = md5($_POST['password']);
	
	$queryStr = "SELECT * FROM admin WHERE username='$user' and password='$pass'";

	$ada = mysql_num_rows(mysql_query($queryStr));
	
	if($ada>0){
		$data = mysql_fetch_array(mysql_query($queryStr));
		session_start();
		$_SESSION['isLoginAkademik']=true;
		$_SESSION['id_user']=$data['id_user'];
		echo'
			<script>
				alert("Anda telah berhasil login!");
				window.location="./index.php";
			</script>
		';
	}
	else{
		echo'
			<script>
				alert("Username dan Password tidak cocok!");
				window.location="./login.php";
			</script>
		';
	}
}
else{
	echo'
	<script>
		alert("Anda dilarang mengakses halaman ini!");
		window.location="./login.php";
	</script>
	';
}