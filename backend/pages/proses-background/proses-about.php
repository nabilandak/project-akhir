<?php 
	
	require '../proses/koneksi.php'; 

	$id = $_POST['id'];
	$judul = $_POST['judul'];
    $deskripsi = $_POST['deskripsi'];
    $keterangan = $_POST['keterangan'];
    $point = $_POST['point'];

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

	$data = "UPDATE about SET  judul = '$judul', deskripsi = '$deskripsi', foto = '$foto', keterangan = '$keterangan', point = '$point' WHERE id = '$id' ";
			
	$query = mysqli_query($koneksi, $data);
	session_start();
	if ($query== true){
		$_SESSION['berhasil'] = "Data berhasil diedit";
		echo "<script>
			window.location.href = '../view-about.php';
		</script>";
		
	} else {
		$_SESSION['gagal'] = "Data gagal diedit";
	?>
	<script>
		window.location.href = '../detail-data.php';
	</script>
	<?php
		}
	?>