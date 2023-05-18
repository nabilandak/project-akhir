<?php
include '../app/header.php';
include '../app/sidebar.php';
require 'proses/koneksi.php';

$angkatan = isset($_GET['angkatan']) ? $_GET['angkatan'] : '';
$nisn = isset($_SESSION['nisn']) ? $_SESSION['nisn'] : '';
$password = isset($_SESSION['password']) ? $_SESSION['password'] : '';

$result = mysqli_query($conn, "SELECT * FROM alumni WHERE angkatan = '$angkatan'");
?>

<!-- Navbar -->
<?php include '../app/navbar.php'; ?>
<!-- End Navbar -->
<div class="panel-header panel-header-sm"></div>
<div class="content">
    
    <div class="row">
    <div class="card">
    <div class="card-body text" style="text-align: center;">
    <h1 class="text-primary"><b>KAMI ADALAH ANGKATAN <?= $angkatan; ?></b></h1>
</div>

    </div>
        <?php while ($data = mysqli_fetch_assoc($result)) : ?>
            <div class="col-md-4">
                <div class="card card-user">
                    <div class="image">
                        <img src="../assets/img/bg5.jpg" alt="...">
                    </div>
                    <div class="card-body">
                        <div class="author">
                            <a href="#">
                                <img class="avatar border-gray" src="../../backend/examples/img/<?= $data['foto']; ?>"
                                    width="100" height="100">
                                <h5 class="title"><?= $data['nama_lengkap']; ?></h5>
                            </a>
                            <p class="ml-4 text-center">Pekerjaan: <?= $data['pekerjaan']; ?></p>
                            <p class="ml-4 text-center">Perusahaan: <?= $data['nama_perusahaan']; ?></p>
                            <p class="ml-4 text-center">Prodi: <?= $data['prodi']; ?></p>
                            <p class="ml-4 text-center">Universitas: <?= $data['nama_universitas']; ?></p>
                        </div>
                        <hr class="border border-warning">
                        <div class="button-container">
                            <p><?= $data['motto']; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
</div>
<?php include '../app/footer.php'; ?>
