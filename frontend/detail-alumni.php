 
<?php 
    include 'app/header.php';
    include 'app/navbar.php';
    
    require "koneksi.php";
    $nisn=$_GET['hai'];
    $query = "SELECT * FROM alumni WHERE nisn = '$nisn'";
    $result = mysqli_query($koneksi, $query) or die(mysqli_error($koneksi));
    $row = mysqli_fetch_assoc($result)
    
       
?>

<div class="container-fluid py-6 px-5">
        <div class="row g-5">
            <div class="col-lg-7">
                <h1 class="display-5 text-uppercase mb-4"><span class="text-primary"><?= $row['nama_lengkap']; ?></span></h1>
                <h4 class="text-uppercase mb-3 text-body"><?= $row['motto']; ?></h4>
                
                <div class="row gx-5 py-2">
                    <div class="col-sm-6 mb-2">
                        <p class="fw-bold mb-2"><span class="text-primary">NISN: </span><?= $row['nisn']; ?></p>
                        <p class="fw-bold mb-2"><span class="text-primary">Email: </span><?= $row['email']; ?></p>
                        <p class="fw-bold mb-2"><span class="text-primary">Pekerjaan: </span><?= $row['pekerjaan']; ?></p>
                        <p class="fw-bold mb-2"><span class="text-primary">Nama Perusahaan: </span><?= $row['nama_perusahaan']; ?></p>
                    </div>
                    <div class="col-sm-6 mb-2">
                        <p class="fw-bold mb-2"><span class="text-primary">Prodi: </span><?= $row['prodi']; ?></p>
                        <p class="fw-bold mb-2"><span class="text-primary">Universitas: </span><?= $row['nama_universitas']; ?></p>
                        <p class="fw-bold mb-2"><span class="text-primary">Angkatan: </span><?= $row['angkatan']; ?></p>
                        <p class="fw-bold mb-2"><span class="text-primary">Alamat: </span><?= $row['alamat']; ?></p>
                    </div>
                </div>
                
                
            </div>
            <div class="col-lg-5 pb-5" style="min-height: 400px;">
                <div class="position-relative bg-dark-radial h-100 ms-5">
                    <img class="position-absolute w-100 h-100 mt-5 ms-n5" src="../backend/pages/img/<?= $row['foto']; ?>" style="object-fit: cover;">
                </div>
            </div>
        </div>
    </div>

    
    

    <!-- Footer Start -->
    <?php include 'app/footer.php'; ?>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>