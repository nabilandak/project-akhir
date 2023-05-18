<?php
session_start();
require 'koneksi.php';

// if (empty($_GET['nisn']))
// {
// 	header ('location: ../edit.php');
// 	exit();
// }

// $hapus_foto = mysqli_query($koneksi, "SELECT * FROM alumni");

$nisn = mysqli_real_escape_string($conn, $_POST['nisn']);
$nama = mysqli_real_escape_string($conn, $_POST['nama']);
$email = htmlspecialchars(mysqli_real_escape_string($conn, $_POST['email']));
$alamat = htmlspecialchars(mysqli_real_escape_string($conn, $_POST['alamat']));
$pekerjaan = htmlspecialchars(mysqli_real_escape_string($conn, $_POST['pekerjaan']));
$nama_perusahaan = htmlspecialchars($_POST['perusahaan']);
$motto = htmlspecialchars($_POST['motto']);
$password = htmlspecialchars(mysqli_real_escape_string($conn, $_POST['password']));
$angkatan = htmlspecialchars($_POST['angkatan']);
$prodi = htmlspecialchars($_POST['prodi']);
$nama_uni = htmlspecialchars($_POST['universitas']);
$no_hp = mysqli_real_escape_string($conn, $_POST['no_hp']);




$fotoL = $_POST['fotolama'];

if ($_FILES['foto']['error'] == 4) {
    // tidak ada file foto yang diupload
    $foto = $fotoL;
} else {
    // ada file foto yang diupload
    if ($fotoL == NULL) {
        $foto = $_FILES['foto']['name'];
        $error = $_FILES['foto']['error'];
        $tmp_name = $_FILES['foto']['tmp_name'];

        move_uploaded_file($tmp_name, "../../../backend/pages/img/$foto");
    } else {
        unlink("../img/$fotoL");
        $foto = $_FILES['foto']['name'];
        $error = $_FILES['foto']['error'];
        $tmp_name = $_FILES['foto']['tmp_name'];

        move_uploaded_file($tmp_name, "../../../backend/pages/img/$foto");
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
				password = '$password', 
				angkatan = '$angkatan', 
				prodi = '$prodi', 
				nama_universitas = '$nama_uni', 
				no_hp = '$no_hp'

			WHERE nisn = '$nisn' ";

$query = mysqli_query($conn, $data);


if($query){ 

	$_SESSION['update'] = true;
	
	header('location: ../user.php');
}else{ 
	$_SESSION['tidak'] = true;
	header('location:../tables.php');
}