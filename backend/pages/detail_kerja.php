<?php 
    include 'proses/koneksi.php';  
    include '../app/header.php';
    include '../app/navbar.php';
    include '../app/sidebar.php';

    $result = mysqli_query($koneksi, "SELECT * FROM pekerjaan <>");

?>
<!-- End Navbar -->
<div class="panel-header panel-header-sm"></div>
<div class="content">
    <div class="row">
        <?php while($data = mysqli_fetch_assoc($result)) { ?>
        <div class="col-md-4">
            <div class="card card-user">

                <div class="card-body">
                    <div class="author">
                        
                        <a href="#">
                            <img class="avatar border-gray" src="img/<?= $data['foto']; ?>" alt="...">
                            <h5 class="title"><?= $data['nama_lengkap']; ?></h5>
                        </a>
                        <p class="description">
                            <?= $data['pekerjaan'];?><br>
                            <?= $data['email'];?><br>
                            <?= $data['no_hp'];?>
                        </p>
                    </div>
                    <p class="description text-center">

                    </p>
                </div>
                <hr>
                <div class="button-container">
                    <p class="description text-center">
                       
                        "<?= $data['motto'];?>"
                    </p>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</div>
<?php include '../app/footer.php'; ?>
