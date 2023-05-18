<?php 
	
	require 'koneksi.php';

	if (empty($_GET['hai']))
	{
		header('location: ../view.php');
	}

	$nisn = $_GET['hai'];
	$data = mysqli_query($koneksi, "SELECT foto FROM alumni WHERE nisn ='$nisn' ");
	$row = mysqli_fetch_assoc($data);
	$foto = $row['foto'];
	unlink("../img/$foto");
	$query = mysqli_query($koneksi, "DELETE FROM alumni WHERE nisn = '$nisn'");

	if ( $query )
	{
		$_SESSION['pesan'] = ["data berhasil dihapus", 200];

		?>
		<script>
			window.location.assign('../view.php');
		</script>
		<?php
	} else {
		
		$_SESSION['pesan'] = ["data gagal dihapus", 400];

		?>
		<script>
			window.location.assign('../view.php');
		</script>
		<?php
	}
?>