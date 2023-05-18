<?php 
	require 'koneksi.php'; 
	session_start();

	$nisn = $_POST['nisn'];
	$nama = $_POST['nama'];
	$email = htmlspecialchars(mysqli_real_escape_string($koneksi, $_POST['email']));
	$alamat = htmlspecialchars(mysqli_real_escape_string($koneksi, $_POST['alamat']));
	$pekerjaan = htmlspecialchars(mysqli_real_escape_string($koneksi, $_POST['pekerjaan']));
	$nama_perusahaan = htmlspecialchars(mysqli_real_escape_string($koneksi, $_POST['perusahaan']));
	$motto = htmlspecialchars(mysqli_real_escape_string($koneksi, $_POST['motto']));
	$password = htmlspecialchars (mysqli_real_escape_string ($koneksi, $_POST['password']));
	$angkatan = htmlspecialchars(mysqli_real_escape_string($koneksi, $_POST['angkatan']));
	$prodi = htmlspecialchars(mysqli_real_escape_string($koneksi, $_POST['prodi']));
	$nama_uni = htmlspecialchars(mysqli_real_escape_string($koneksi, $_POST['universitas'] ));
	$no_hp = $_POST['no_hp'];

	$foto = upload();

	if (!$foto)
	{
		return false;
	}

	$password_hash = md5($password);

	$data = "INSERT INTO alumni 
			(
				nisn,
				nama_lengkap, 
				email, 
				alamat, 
				pekerjaan, 
				nama_perusahaan, 
				motto, 
				foto, 
				password, 
				angkatan, 
				prodi, 
				nama_universitas, 
				no_hp 
			)
	 		VALUES 
	 		(
	 			'$nisn', 
	 			'$nama', 
	 			'$email', 
	 			'$alamat', 
	 			'$pekerjaan', 
	 			'$nama_perusahaan', 
	 			'$motto', 
	 			'$foto', 
	 			'$password', 
	 			'$angkatan', 
	 			'$prodi', 
	 			'$nama_uni', 
	 			'$no_hp'
	 		)";
	 		
	$query = mysqli_query($koneksi, $data);

	if ($query)
	{
		$_SESSION['pesan'] = ["data berhasil ditambahkan", 200];
		?>
		<script>
			window.location.assign('../view.php');
		</script>
		<?php
	} else {
		$_SESSION['pesan'] = ["data gagal ditambahkan", 400];
		?>
		<script>
			window.location.assign('../data.php');
		</script>
		<?php
	}
?>

