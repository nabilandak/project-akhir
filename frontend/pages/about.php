<?php
 require_once 'koneksi.php';

 $result = mysqli_query($koneksi, "SELECT * FROM about");
 $data = mysqli_fetch_assoc($result);
 
?>
<div class="container-fluid py-6 px-5">
        <div class="row g-5">
            <div class="col-lg-7">
                <h1 class="display-5 text-uppercase mb-4">KAMI ADALAH ALUMNI <span class="text-primary"><?= $data['judul']; ?></span></h1>
                
                <p><?= $data['deskripsi']; ?></p>
                <div class="row gx-5 py-2">
                    <div class="col-sm-6 mb-2">
                        <?php 
                        $row = explode(",", $data['point']);
                        
                        ?>
                        <p class="fw-bold mb-2"><i class="fa fa-check text-primary me-3"></i><?= $row[0];?></p>
                        <p class="fw-bold mb-2"><i class="fa fa-check text-primary me-3"></i><?= $row[1];?></p>
                        <p class="fw-bold mb-2"><i class="fa fa-check text-primary me-3"></i><?= $row[2];?></p>
                       <?php ?>
                    </div>
                    <div class="col-sm-6 mb-2">
                        <p class="fw-bold mb-2"><i class="fa fa-check text-primary me-3"></i><?= $row[3];?></p>
                        <p class="fw-bold mb-2"><i class="fa fa-check text-primary me-3"></i><?= $row[4];?></p>
                        <p class="fw-bold mb-2"><i class="fa fa-check text-primary me-3"></i><?= $row[5];?></p>
                    </div>
                </div>
                <p class="mb-4"><?= $data['keterangan']; ?></p>
                
            </div>
            <div class="col-lg-5 pb-5" style="min-height: 400px;">
                <div class="position-relative bg-dark-radial h-100 ms-5">
                    <img class="position-absolute w-100 h-100 mt-5 ms-n5" src="../backend/pages/img/<?=$data['foto'];?>" style="object-fit: cover;">
                </div>
            </div>
        </div>
    </div>