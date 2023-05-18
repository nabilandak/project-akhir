<?php 
    if (empty($_GET['id']))
    {
        header ('location: view-background.php');
        exit();
    }

    require 'proses/koneksi.php';
    $id = $_GET['id'];

    $result = mysqli_query($koneksi, "SELECT * FROM background WHERE id = '$id'");
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
    <form method="post" enctype="multipart/form-data" action="proses-background/update-background.php">
        <div class="row">
            <input type='hidden' id='' name='id' value="<?= $data['id']; ?>">

            <div class="col-12 mt-5">
                <div class="mb-3">
                    <label for="judul" class="form-label">judul</label>
                    <input name="judul" type="text" class="form-control" id="judul" aria-describedby="emailHelp"
                        required value="<?= $data['judul'];?>">
                    <div id="judul" class="form-text">Masukan judul anda!</div>

                </div>

                <div class="mb-3">
                    <label for="foto" class="form-label">Background</label>
                    <img class="form-control col-3" src='img/<?= $data ['foto']; ?>' alt='' width="100px"
                        style="outline: none;" id="img-preview">
                    <input type='file' id='foto' name='foto' class="form-label mt-3" value="<?= $data['foto'];?>">
                    <input type='hidden' id='' name='fotolama' value="<?= $data['foto'];?>">
                </div>

                <script>
                    function prviewImg(event) {
                        var img = document.getElementById('img-preview');
                        img.src = URL.createObjectURL(event.target.files[0]);
                    }
                </script>

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