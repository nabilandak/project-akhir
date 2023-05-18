<?php
require 'koneksi.php';
$result = mysqli_query($koneksi, "SELECT * FROM footer");
$data = mysqli_fetch_assoc($result);

?>

<div class="footer container-fluid position-relative bg-dark bg-light-radial text-white-50 py-6 px-5">
    <div class="row ">
        <div class="col-lg-6 pe-lg-5 md-6">
            <a href="index.html" class="navbar-brand">
                <h1 class="m-0 display-4 text-uppercase text-white"><?= $data['judul']; ?></h1>
            </a>
            <p><?= $data['deskripsi']; ?></p>
            <p><i class="fa fa-map-marker-alt me-2"></i><?= $data['alamat']; ?></p>
            <p><i class="fa fa-phone-alt me-2"></i><?= $data['no_hp']; ?></p>
            <p><i class="fa fa-envelope me-2"></i><?= $data['email']; ?></p>
            <div class="d-flex justify-content-start mt-4">
                <a class="btn btn-lg btn-primary btn-lg-square rounded-0" href="<?= $data['instagram']; ?>"><i
                        class="fab fa-instagram"></i></a>
            </div>
        </div>
        <div class="col-lg-6 pe-lg-5 md-6">
            
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.020773861573!2d108.63257477438782!3d-7.351563292657272!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f7d197699ecd7%3A0x420255777005d790!2sSMK%20Negeri%203%20Banjar!5e0!3m2!1sid!2sid!4v1684382123221!5m2!1sid!2sid"
                width="700" height="400" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
            
        </div>

    </div>
    
        
       
    
</div>