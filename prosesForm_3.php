<?php 
	if(isset($_GET['email']) AND isset($_GET['password'])){
		$nama=$_GET['email'];
		$email=$_GET['password'];
		$isi_form="&email=$email&password=$password";
	}
	else{
		header("Location:signup.html?error=variabel_belum_diset");
	}
	
	if(empty($email)){
		header("Location:signup.html?error=email_kosong".$isi_form);
	}
	else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
		header("Location:signup.html?error=email_invalid".$isi_form);
	}
	else{
		echo "Email: $email <br> Password: $password";
	}
?>