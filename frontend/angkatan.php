<?php
include 'app/header.php';
include 'app/navbar.php';

$angkatan = $_GET['angkatan'];
require 'koneksi.php';
$result = mysqli_query($koneksi, "SELECT * FROM alumni WHERE angkatan = '$angkatan'");



?>

            
        <div class="container-fluid py-6 px-5">
        <div class="text-center mx-auto mb-5" style="max-width: 600px;">
        <h1 class="display-5 text-uppercase mb-4">KAMI ADALAH ALUMNI <span class="text-primary">SMKN 3 BANJAR</span></h1>
        </div>
        <div class="row g-5">
            <?php
                     $no = 1;
                     while ($row = mysqli_fetch_assoc($result)) {
                        ?>

            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="row g-0">
                    <div class="col-10" style="min-height: 300px;">
                        <div class="position-relative h-100">
                            <a href='detail-alumni.php?hai=<?= $row['nisn']?>'>
                                <img class="position-absolute w-100 h-100" src="../backend/pages/img/<?= $row['foto']; ?>" style="object-fit: cover;">
                            </a>
                        </div>
                    </div>
                    
                    <div class="col-10">
                        <div class="bg-light p-4">
                            <a href='detail-alumni.php?hai=<?=$row['nisn'];?>'>
                                <h4 class="text-uppercase"><?= $row['nama_lengkap']; ?></h4>
                            </a>
                            <span><?= $row['motto']; ?></span>
                            <br>
                            <span><?= $row['angkatan']; ?></span>
                        </div>
                    </div>
                    
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
        </div>
    </div>

    <?php include 'app/footer.php'; ?>