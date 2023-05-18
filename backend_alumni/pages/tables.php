<?php
require 'proses/koneksi.php';


if (empty($_GET['hai'])) {
    header('location: user.php');
}

$nisn = $_GET['hai'];
$result = mysqli_query($conn, "SELECT * FROM alumni WHERE nisn = '$nisn'");
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
    <form method="post" enctype="multipart/form-data" action="proses/update.php">
        <div class="row">
            <div class="col-4">
                <div class="content mt-5">
                    <div class="mb-4">
                        <label for="nisn" class="form-label">Nisn</label>
                        <input name="nisn" type="number" class="form-control bg-white" id="nisn" aria-describedby="emailHelp" value="<?= $data['nisn']; ?>" readonly required>
                    </div>

                    <div class="mb-4">
                        <label for="nama" class="form-label">Nama</label>
                        <input name="nama" type="text" class="form-control bg-white" id="nama" aria-describedby="emailHelp" value="<?= $data['nama_lengkap']; ?>" required>
                    </div>

                    <div class="mb-4">
                        <label for="email" class="form-label">Email</label>
                        <input name="email" type="email" class="form-control bg-white" id="email" aria-describedby="emailHelp" value="<?= $data['email']; ?>" required>
                    </div>

                    <div class="mb-4">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input name="password" type="password" class="form-control bg-white" id="exampleInputPassword1" value="<?= $data['password']; ?>" required>
                    </div>

                </div>
            </div>
            <div class="col">
                <div class="content mt-5">
                    <div class="mb-4">
                        <label for="angkatan" class="form-label">Angkatan</label>
                        <input name="angkatan" type="number" maxlength="4" minlength="4" min="2010" max="2050" class="form-control bg-white" id="angkatan" aria-describedby="emailHelp" value="<?= $data['angkatan']; ?>" readonly required>
                    </div>
                </div>

                <div class="mb-4">
                    <label for="pekerjaan" class="form-label">Pekerjaan</label>
                    <input name="pekerjaan" type="text" class="form-control bg-white" id="pekerjaan" aria-describedby="emailHelp" value="<?= $data['pekerjaan']; ?>" required>
                </div>

                <div class="mb-4">
                    <label for="perusahaan" class="form-label">Perusahaan</label>
                    <input name="perusahaan" type="text" class="form-control bg-white" id="perusahaan" aria-describedby="emailHelp" value="<?= $data['nama_perusahaan']; ?>" required>
                </div>

                <div class="mb-4">
                    <label for="prodi" class="form-label">Prodi</label>
                    <input name="prodi" type="text" class="form-control bg-white" id="prodi" aria-describedby="emailHelp" value="<?= $data['prodi']; ?>" required>
                </div>

            </div>

            <div class="col">
                <div class="content mt-5">
                    <div class="mb-4">
                        <label for="nama_universitas" class="form-label">Nama Universitas</label>
                        <input name="universitas" type="text" class="form-control bg-white" id="nama_universitas" aria-describedby="emailHelp" value="<?= $data['nama_universitas']; ?>" required>
                    </div>

                    <div class="mb-4">
                        <label for="moto" class="form-label">Moto</label>
                        <input name="motto" type="text" class="form-control bg-white" id="moto" aria-describedby="emailHelp" value="<?= $data['motto']; ?>" required>
                    </div>

                    <div class="mb-4">
                        <label for="no_hp" class="form-label">Nomor Handphone</label>
                        <input name="no_hp" type="number" class="form-control bg-white" id="no_hp" aria-describedby="emailHelp" value="<?= $data['no_hp']; ?>" required>
                    </div>

                    <div class="mb-4">
                        <label for="foto" class="form-label">Foto</label>
                        
                        <input name="fotolama" type="hidden" class="form-control bg-white" id="foto" aria-describedby="emailHelp" value="<?= $data['foto']; ?>">
                        <input name="foto" type="file" class="form-control bg-white" id="foto" aria-describedby="emailHelp">
                        <!-- <img class="form-control bg-white col-3" src='../../backend/examples/img/<?= $data ['foto']; ?>' alt='' width="100px"
                        style="outline: none;" id="img-preview">                        -->
                    </div>
                    <script>
                        function prviewImg(event){
                            var img = document.getElementById('img-preview');
                            img.src = URL.createObjectURL(event.target.files[0]);
                        }
                    </script>
                </div>

            </div>
            <div class="col-8">
                <div class="mb-4">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input name="alamat" type="text" class="form-control bg-white" id="alamat" aria-describedby="emailHelp" value="<?= $data['alamat']; ?>" required>
                </div>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>

        </div>
    </form>
</div>


<!-- End Content -->

<!-- Footer -->
<?php include '../app/footer.php'; ?>
<!-- End Footer -->
