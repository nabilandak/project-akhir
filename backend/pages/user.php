<?php 
    require 'proses/koneksi.php';
    include '../app/header.php';
    include '../app/sidebar.php';
    include '../app/navbar.php';

    $nisn = $_GET['hai'];
    $result = mysqli_query($koneksi, "SELECT * FROM alumni WHERE nisn = '$nisn'");
    $data = mysqli_fetch_assoc($result);
 ?>
<div class="panel-header panel-header-sm">
</div>
<div class="content">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h5 class="title">Edit Profile</h5>
                </div>
                <div class="card-body">
                    <form>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="nisn" class="form-label">Nisn</label>
                                    <input name="nisn" value="<?= $data['nisn']; ?>" type="number" class="form-control"
                                        id="nisn" aria-describedby="emailHelp" readonly>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 pr-1">
                                <div class="form-group">
                                    <label for="nama" class="form-label">Nama</label>
                                    <input name="nama" value="<?= $data['nama_lengkap']; ?>" type="text"
                                        class="form-control" id="nama" aria-describedby="emailHelp" readonly>
                                </div>
                            </div>
                            <div class="col-md-6 pl-1">
                                <div class="form-group">
                                    <label for="email" class="form-label">Email</label>
                                    <input name="email" value="<?= $data['email']; ?>" type="email" class="form-control"
                                        id="email" aria-describedby="emailHelp" readonly>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 pr-1">
                                <div class="form-group">
                                    <label for="nomor_hp" class="form-label">Nomor Hp</label>
                                    <input name="no_hp" value="<?= $data['no_hp']; ?>" type="number"
                                        class="form-control" id="nomor_hp" aria-describedby="emailHelp" readonly>
                                </div>
                            </div>
                            <div class="col-md-6 pl-1">
                                <div class="form-group">
                                    <label for="angkatan" class="form-label">Angkatan</label>
                                    <input name="angkatan" value="<?= $data['angkatan']; ?>" type="number"
                                        class="form-control" id="angkatan" aria-describedby="angkatanHelp" readonly>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 pr-1">
                                <div class="form-group">
                                    <label for="pekerjaan" class="form-label">Pekerjaan</label>
                                    <input name="pekerjaan" value="<?= $data['pekerjaan']; ?>" type="text"
                                        class="form-control" id="pekerjaan" aria-describedby="emailHelp" readonly>
                                </div>
                            </div>
                            <div class="col-md-6 pl-1">
                                <div class="form-group">
                                    <label for="perusahaan" class="form-label">Perusahaan</label>
                                    <input name="nama_perusahaan" value="<?= $data['nama_perusahaan']; ?>" type="text"
                                        class="form-control" id="perusahaan" aria-describedby="emailHelp" readonly>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 pr-1">
                                <div class="form-group">
                                    <label for="nama_universitas" class="form-label">Nama Universitas</label>
                                    <input name="nama_universitas" value="<?= $data['nama_universitas']; ?>" type="text"
                                        class="form-control" id="nama_universitas" aria-describedby="emailHelp"
                                        readonly>
                                </div>
                            </div>
                            <div class="col-md-6 pl-1">
                                <div class="form-group">
                                    <label for="prodi" class="form-label">Prodi</label>
                                    <input name="prodi" value="<?= $data['prodi']; ?>" type="text" class="form-control"
                                        id="prodi" aria-describedby="emailHelp" readonly>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Address</label>
                                    <input name="alamat" value="<?= $data['alamat']; ?>" type="text"
                                        class="form-control" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="moto" class="form-label">Moto</label>
                                    <textarea rows="4" cols="80" class="form-control" name="motto" readonly
                                        value="<?= $data['motto']; ?>"><?= $data['motto']; ?></textarea>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
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
                        <!-- "Lamborghini Mercy
                        <br> Your chick she so thirsty
                        <br> I'm in that two seat Lambo" -->
                        "<?= $data['motto'];?>"
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include '../app/footer.php'; ?>