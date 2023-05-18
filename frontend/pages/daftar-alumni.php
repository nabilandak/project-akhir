


    <!-- Team Start -->
    <div class="container-fluid py-6 px-5">
        <div class="text-center mx-auto mb-5" style="max-width: 600px;">
            <h1 class="display-5 text-uppercase mb-4">KAMI ADALAH ALUMNI <span class="text-primary">SMKN 3 BANJAR</span></h1>
        </div>
        <div class="row g-5">
            <?php
                     require "koneksi.php";
                     $query = "SELECT * FROM alumni LIMIT 0,4"; // Batasan jumlah baris data diubah menjadi 10
                     $result = mysqli_query($koneksi, $query) or die(mysqli_error($koneksi));
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
        <div class="text-center mx-auto mb-5" style="max-width: 600px;">
        <a href="daftar-alumni-detail.php" class="btn btn-primary py-md-3 px-md-5 mt-4">VIEW MORE</a>
        </div>
    </div>
    <!-- Team End -->
    

   

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

</body>

</html>