<?php
	include "koneksi.php";
	
	$target_path = "uploads/";
	$id = $_GET['id'];
	$nama = $_GET['name'];
	$harga = $_GET['price'];

	$target_path = $target_path . basename($_FILES['foto'], ['name']);
					$tmp_name = $_FILES['foto']['tmp_name'];
	
	$sql="INSERT INTO product(id, product_name, harga)
			VALUES('$id', '$nama', '$harga', '$target_path', '$target_path')";
		
	if (mysqli_query($connect, $sql)){
		echo "Data berhasil ditambahkan";
	}
	else{
		echo "Data gagal ditambahkan <br>".mysqli_error($connect);
	}
	
	mysqli_close($connect);
		
?>