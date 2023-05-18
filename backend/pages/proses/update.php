<?php 
	require 'koneksi.php'; 
	session_start();
	// if (empty($_GET['nisn']))
	// {
	// 	header ('location: ../edit.php');
	// 	exit();
	// }

	// $hapus_foto = mysqli_query($koneksi, "SELECT * FROM alumni");
	$nisnasli = $_POST['nisnasli'];
	$nisn = $_POST['nisn'];
	$nama = mysqli_real_escape_string($koneksi, $_POST['nama']);
	$email = htmlspecialchars( mysqli_real_escape_string ( $koneksi, $_POST['email']));
	$alamat = htmlspecialchars(mysqli_real_escape_string($koneksi, $_POST['alamat']));
	$pekerjaan = htmlspecialchars(mysqli_real_escape_string($koneksi, $_POST['pekerjaan']));
	$nama_perusahaan = htmlspecialchars($_POST['perusahaan']);
	$motto = htmlspecialchars($_POST['motto']);
	$password =  $_POST['password'];
	$angkatan = $_POST['angkatan'];
	$prodi = htmlspecialchars($_POST['prodi']);
	$nama_uni = htmlspecialchars( $_POST['nama_universitas'] );
	$no_hp =  $_POST['no_hp'];

	// $gambarlama = $_POST['gambar'];

	// if ( $_FILES['gambar']['error'] === 4 )
	// {
	// 	$gambar = $gambarlama;
	// } else {
	// 	unlink("../img/$gambarlama");
	// 	$gambar = upload();
	// 	if (!$gambar)
	// 	{
	// 		return false;
	// 	}
	// }


	$fotoL = $_POST['fotolama'];

	if ($_FILES['foto']['error'] == 4) {
		// tidak ada file foto yang diupload
		$foto = $fotoL;
	} else {
		// ada file foto yang diupload
		if ($fotoL == NULL)
		{
			$foto = $_FILES['foto']['name'];
			$error = $_FILES['foto']['error'];
			$tmp_name = $_FILES['foto']['tmp_name'];
		
			move_uploaded_file($tmp_name, "../img/$foto");
			
		} else {
			unlink("../img/$fotoL");
			$foto = $_FILES['foto']['name'];
			$error = $_FILES['foto']['error'];
			$tmp_name = $_FILES['foto']['tmp_name'];
		
			move_uploaded_file($tmp_name, "../img/$foto");
		}
	}

	
	$password_hash = md5($password);
	
		
	$data = "UPDATE alumni SET 

				nisn = '$nisn',
				nama_lengkap = '$nama', 
				email = '$email', 
				alamat = '$alamat', 
				pekerjaan = '$pekerjaan', 
				nama_perusahaan = '$nama_perusahaan', 
				motto = '$motto', 
				foto = '$foto', 
				password = '$password_hash', 
				angkatan = '$angkatan', 
				prodi = '$prodi', 
				nama_universitas = '$nama_uni', 
				no_hp = '$no_hp'

			WHERE nisn = '$nisnasli' ";
			
	$query = mysqli_query($koneksi, $data);

	if ($query)
	{
		$_SESSION['pesan'] = ["data berhasil diubah", 200];
		?>
		<script>
			window.location.assign('../view.php');
		</script>
		<?php
	} else {
		$_SESSION['pesan'] = ["data gagal diubah", 400];
		?>
		<script>
			window.location.assign('../detail-data.php');
		</script>
		<?php
	}
?>