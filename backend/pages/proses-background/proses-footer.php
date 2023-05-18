<?php 

	session_start();
	require '../proses/koneksi.php'; 

	$id =  $_POST['id'];
	$judul = htmlspecialchars(mysqli_escape_string($koneksi, $_POST['judul'])) ;
    $deskripsi = htmlspecialchars(mysqli_escape_string($koneksi, $_POST['deskripsi']));
    $alamat = htmlspecialchars(mysqli_escape_string($koneksi, $_POST['alamat']));
    $instagram =htmlspecialchars(mysqli_escape_string($koneksi, $_POST['instagram']));
    $email = htmlspecialchars(mysqli_escape_string($koneksi, $_POST['email']));
    $no_hp = mysqli_escape_string($koneksi, $_POST['no_hp']);

	$data = "UPDATE footer SET  judul = '$judul', alamat = '$alamat', deskripsi = '$deskripsi', email = '$email', no_hp = '$no_hp', instagram = '$instagram' WHERE id = '$id' ";
			
	$query = mysqli_query($koneksi, $data);

	if ($query)
	{
		$_SESSION['berhasil'] = "Data berhasil diedit";

		?>
		<script>
			window.location.assign('../view-footer.php');
		</script>
		<?php
	} else {

		$_SESSION['gagal'] = "Data gagal diedit";

		?>
		<script>
			window.location.assign('../detail-footer.php');
		</script>
		<?php
	}
?>