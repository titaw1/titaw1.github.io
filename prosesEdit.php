<?php 
	include "koneksi.php";

	$target_path = "uploads/";
	$id = $_GET['id'];
	$nama = $_GET['name'];
	$harga = $_GET['price'];

	$target_path = $target_path . basename($_FILES['foto']['name']);
	$tmp_name = $_FILES['foto']['tmp_name'];

	$query = "UPDATE product SET product_name='$nama', harga='$harga' WHERE id='$id'";
	$result = mysqli_query($connect,$query);

	if($result){
		echo "Berhasil update data";
		if(move_uploaded_file($_FILES['foto']['tmp_name'], $target_path)){
			echo "The file ".basename($_FILES['foto'],['name'] . " has been uploaded <br>");
		}else{
			echo "There was an error uploading the file, please try again";
		}
 ?>
 	<a href="homeCRUD.php"> Lihat data </a>
<?php
	}
	else{
		echo "Gagal update data" . mysqli_error($connect);
	} 
?>