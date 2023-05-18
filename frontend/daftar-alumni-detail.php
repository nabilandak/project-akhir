<?php 
    include 'app/header.php';
    include 'app/navbar.php';
    require_once 'koneksi.php';
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['cari'])) {
        $value = $_POST['value'];
        $query = "SELECT * FROM alumni WHERE
        nisn LIKE '%$value%' OR
        nama_lengkap LIKE '%$value%' OR
        angkatan LIKE '%$value%' ";
    } else {
        $query = "SELECT * FROM alumni";
    }
    $result = mysqli_query($koneksi, $query) or die(mysqli_error($koneksi));
?>

<div class="container-fluid py-6 px-5">
    <div class="text-center mx-auto mb-5" style="max-width: 600px;">
        <h1 class="display-5 text-uppercase mb-4">KAMI ADALAH ALUMNI <span class="text-primary">SMKN 3 BANJAR</span>
        </h1>
    </div>
    <div class="row g-5">
        <form method="post" action="">
            <div class="input-group no-border">
                <input type="text" name="value" class="form-control" placeholder="Search...">
                <span class="input-group-addon">
                    <button type="submit" name="cari" style="border: none" class="btn btn-warning">
                    <i class="bi bi-search"></i>
                    </button>
                </span>
            </div>
        </form>
        <?php
            $no = 1;
            while ($row = mysqli_fetch_assoc($result)) {
        ?>
        <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="row g-0">
                <div class="col-10" style="min-height: 300px;">
                    <div class="position-relative h-100">
                        <a href='detail-alumni.php?hai=<?= $row['nisn']?>'>
                            <img class="position-absolute w-100 h-100"
                                src="../backend/pages/img/<?= $row['foto']; ?>" style="object-fit: cover;">
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

<?php include 'app/footer.php'; ?>
