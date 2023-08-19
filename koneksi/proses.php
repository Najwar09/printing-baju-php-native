<?php
include 'koneksi.php';

// login
if ($_GET['id'] == 'login') {
    $user = $_POST['user'];
	$pass = $_POST['pass'];

	$query = "SELECT * FROM login WHERE username = '$user'";
	$hasil = mysqli_query($connection, $query);
	$isi = mysqli_fetch_assoc($hasil);


	if (mysqli_num_rows($hasil) == 1) {
        
        if (password_verify($pass, $isi['password'])) {
            session_start();
			$_SESSION['user'] = $isi;
			if ($isi['level'] == 'admin') {
                echo '<script>alert("Login Sukses");window.location="../admin/index.php";</script>';
			}
		} else {

			echo '<script>alert("gagal login!");window.location="../index.php";</script>';
		}
                
	} else {
		echo '<script>alert("gagal login!");window.location="../index.php";</script>';
	}
}





?>