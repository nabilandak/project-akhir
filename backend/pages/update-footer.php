<?php 
    if (empty($_GET['id']))
    {
        header ('location: view-footer.php');
        exit();
    }

    require 'proses/koneksi.php';
    $id = $_GET['id'];

    $result = mysqli_query($koneksi, "SELECT * FROM footer WHERE id = '$id'");
    $data = mysqli_fetch_assoc($result);

    include '../app/header.php';
    include '../app/sidebar.php';
    include '../app/navbar.php';
?>
<!-- End Navbar -->
<div class="panel-header panel-header-sm">
</div>
<!-- Content -->
<div class="container">
    <form method="post" enctype="multipart/form-data" action="proses-background/proses-footer.php">
        <div class="row">
            <input type='hidden' id='' name='id' value="<?= $data['id']; ?>">

            <div class="col-12 mt-5">
                <div class="mb-3">
                    <label for="judul" class="form-label">judul</label>
                    <input name="judul" type="text" class="form-control" id="judul" aria-describedby="emailHelp"
                         value="<?= $data['judul'];?>" required autocomplete="off" autofocus>
                    <div id="judul" class="form-text">Masukan judul anda!</div>

                </div>

                <div class="mb-3">
                    <label for="deskripsi" class="form-label">deskripsi</label>
                    <input name="deskripsi" type="text" class="form-control" id="deskripsi" aria-describedby="emailHelp"
                        value="<?= $data['deskripsi'];?>" required autocomplete="off" autofocus>
                    <div id="deskripsi" class="form-text">Masukan judul anda!</div>

                </div>

                <div class="mb-3">
                    <label for="alamat" class="form-label">alamat</label>
                    <input name="alamat" type="text" class="form-control" id="alamat" aria-describedby="emailHelp"
                         value="<?= $data['alamat'];?>" required autocomplete="off" autofocus>
                    <div id="alamat" class="form-text">Masukan alamat anda!</div>

                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">email</label>
                    <input name="email" type="text" class="form-control" id="email" aria-describedby="emailHelp"
                         value="<?= $data['email'];?>" required autocomplete="off" autofocus>
                    <div id="email" class="form-text">Masukan email anda!</div>

                </div>

                <div class="mb-3">
                    <label for="instagram" class="form-label">instagram</label>
                    <input name="instagram" type="text" class="form-control" id="instagram" aria-describedby="emailHelp"
                         value="<?= $data['instagram'];?>" required autocomplete="off" autofocus>
                    <div id="instagram" class="form-text">Masukan instagram anda!</div>

                </div>

                <div class="mb-3">
                    <label for="no_hp" class="form-label">Number Handphone</label>
                    <input name="no_hp" type="number" class="form-control" id="no_hp" aria-describedby="emailHelp"
                         value="<?= $data['no_hp'];?>" required autocomplete="off" autofocus>
                    <div id="no_hp" class="form-text">Masukan no hp anda!</div>

                </div>

                

                <!-- <div class="mb-3">
                    <img src='' alt='' class="form-control">

                </div> -->
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>

        </div>
    </form>
</div>


<!-- End Content -->

<!-- Footer -->
<?php include '../app/footer.php'; ?>
<!-- End Footer -->
</div>
</div>
</body>
<!--   Core JS Files   -->
<script src="../assets/js/core/jquery.min.js"></script>
<script src="../assets/js/core/popper.min.js"></script>
<script src="../assets/js/core/bootstrap.min.js"></script>
<script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Chart JS -->
<script src="../assets/js/plugins/chartjs.min.js"></script>
<!--  Notifications Plugin    -->
<script src="../assets/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
<script src="../assets/js/now-ui-dashboard.js?v=1.0.1"></script>
<!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
<script src="../assets/demo/demo.js"></script>

</html>