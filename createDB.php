<?php
	$namaHost = "localhost";
	$username = "root";
	$password = "";
	
	$connect = mysqli_connect($namaHost, $username, $password);
	
	if($connect){
		echo "Koneksi dengan MYSQL berhasil <br>";
	}
	else{
		echo "Koneksi dengan MYSQL gagal".mysqli_connect_error();
	}
	
	$sql = "CREATE DATABASE prakwebdb";
	if (mysqli_query($connect, $sql)){
		echo "Database berhasil dibuat";
	}
	else{
		echo "Database gagal dibuat <br>".mysqli_error($connect);
	}
	
	mysqli_close($connect);
		
?>
