<?php

$host 		= 'localhost';
$username 	= 'root';
$password	= '';
$database	= 'akademik';

if(mysql_connect($host,$username,$password)){
	if(mysql_select_db($database)){
		//exit("Berahasil konek dan masuk ke server database $database");
	}
	else{
		exit("Database $database tidak ditemukan");
	}
}
else{
	exit("Koneksi server database gagal");
}









