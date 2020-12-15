<html>
<head>
	<title>Data Product</title>
	<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
	<a href="insertFrom.html"> Tambah Data </a>
	<table>
		<tr>
			<th> Id </th>
			<th> Nama Produk </th>
			<th> Harga </th>
			<th> Aksi </th>
		</tr>
			<?php 
				include "koneksi.php";

				$query = "SELECT * FROM product";
				$result = mysqli_query($connect, $query);

				if(mysqli_num_rows($result)>0){
					while ($row = mysqli_fetch_array($result)){

			?>
			<tr>
				<td> <?php echo $row["id"] ?></td>
			 	<td> <?php echo $row["product_name"] ?></td>
			 	<td> <img class="foto" src="><?php echo $row["lokasi"] ?>"></td>
			 	<td> <?php echo $row["nama_foto"] ?></</td>
			 	<td> <?php echo $row["harga"] ?></td>
			 	<td>
			 		<a href="editForm.php?id=<?php echo $row['id']; ?>"> Edit &nbsp; </a>
			 		<a href="hapus.php?id=<?php echo $row['id']; ?>"> Hapus </a>
			 	</td>	
			<?php 
					}
				}
				else{
					echo "0 result";
				}
			 ?>		
			</tr>	 
	</table>
</body>
</html>