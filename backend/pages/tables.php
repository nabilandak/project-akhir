<?php 
    include '../app/header.php';
    include '../app/sidebar.php';
    include '../app/navbar.php';
?>
<!-- End Navbar -->
<div class="panel-header panel-header-sm">
</div>
<!-- Content -->
<div class="container">
    <form method="post" enctype="multipart/form-data" action="proses/proses_tambah.php">
        <div class="row">
            <div class="col-4">
                <div class="content mt-5">
                    <div class="mb-3">
                        <label for="nisn" class="form-label">Nisn</label>
                        <input name="nisn" type="number" class="form-control" id="nisn" aria-describedby="emailHelp" required>
                        <div id="nisn" class="form-text">Masukan nomor NISN anda!</div>
                    </div>

                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input name="nama" type="text" class="form-control" id="nama" aria-describedby="emailHelp" required>
                        <div id="nama" class="form-text">Masukan nama anda!</div>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp" required>
                        <div id="email" class="form-text">Masukan email anda!</div>
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input name="password" type="password" class="form-control" id="exampleInputPassword1" required>
                        <div id="password" class="form-text">Masukan password anda!</div>
                    </div>

                </div>
            </div>
            <div class="col">
                <div class="content mt-5">
                    <div class="mb-3">
                        <label for="angkatan" class="form-label">Angkatan</label>
                        <input name="angkatan" type="number" class="form-control" id="angkatan" aria-describedby="emailHelp" required>
                        <div id="angkatan" class="form-text">Masukan angkatan anda!</div>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="pekerjaan" class="form-label">Pekerjaan</label>
                    <input name="pekerjaan" type="text" class="form-control" id="pekerjaan" aria-describedby="emailHelp">
                    <div id="pekerjaan" class="form-text">Masukan pekerjaan anda!</div>
                </div>

                <div class="mb-3">
                    <label for="perusahaan" class="form-label">Perusahaan</label>
                    <input name="perusahaan" type="text" class="form-control" id="perusahaan" aria-describedby="emailHelp">
                    <div id="perusahaan" class="form-text">Masukan perusahaan anda!</div>
                </div>

                <div class="mb-3">
                    <label for="prodi" class="form-label">Prodi</label>
                    <input name="prodi" type="text" class="form-control" id="prodi" aria-describedby="emailHelp">
                    <div id="prodi" class="form-text">Masukan prodi anda!</div>
                </div>

            </div>
            <div class="col">
                <div class="content mt-5">
                    <div class="mb-3">
                        <label for="nama_universitas" class="form-label">Nama Universitas</label>
                        <input name="universitas" type="text" class="form-control" id="nama_universitas" aria-describedby="emailHelp">
                        <div id="nama_universitas" class="form-text">Masukan nama_universitas anda!</div>
                    </div>

                    <div class="mb-3">
                        <label for="moto" class="form-label">Moto</label>
                        <input name="motto" type="text" class="form-control" id="moto" aria-describedby="emailHelp" required>
                        <div id="moto" class="form-text">Masukan moto anda!</div>
                    </div>

                    <div class="mb-3">
                        <label for="no_hp" class="form-label">Nomor Handphone</label>
                        <input name="no_hp" type="number" class="form-control" id="no_hp" aria-describedby="emailHelp" required>
                        <div id="no_hp" class="form-text">Masukan nomor handphone anda!</div>
                    </div>

                    <div class="mb-3">
                        <label for="foto" class="form-label">Foto</label>
                        <input name="gambar" type="file" class="form-control" id="foto" aria-describedby="emailHelp" required>
                        <div id="foto" class="form-text">Masukan foto anda!</div>
                    </div>

                </div>

            </div>
            <div class="col-12">
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input name="alamat" type="text" class="form-control" id="alamat" aria-describedby="emailHelp" required>
                    <div id="alamat" class="form-text">Masukan alamat anda!</div>

                </div>
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