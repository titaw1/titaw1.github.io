<!DOCTYPE HTML>
<html> 
	<head>
	</head>
	<body>
		<?php
			$tujuan = "Malang";
			
			echo "Mau main Kemana? ".$tujuan."<br>";
			echo "<br> Pesan:  ";
			
			switch($tujuan){
				case "Batu":
					echo "<b>Jangan lupa bawa jaket</b>";
					break;
				case "Bandung":
					echo "<b>Awas kalu belanja laper mata</b>";
					break;
				case "Bali":
					echo "<b>Pakai sunblock SPF 50</b>";
					break;
				default:
					echo "<b> Ya udah belajar aja</b>";			
			}
		?>
	</body>
</html>