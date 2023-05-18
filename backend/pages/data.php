<?php 
    include '../app/header.php';
    include '../app/navbar.php';
    include '../app/sidebar.php';
?>
<!-- End Navbar -->
<div class="panel-header">
    <div class="header text-center">
        <h2 class="title">DETAIL DATA ALUMNI</h2>

    </div>
</div>
<div class="content">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Detail Data</h4>
                </div>
                <div class="card-body">
                    <div class="col-12">
                        <div class="content mt-5">
                            <div class="mb-3">
                                <label for="nisn" class="form-label">Nisn</label>
                                <input name="nisn" type="number" class="form-control" id="nisn"
                                    aria-describedby="emailHelp">
                                <div id="nisn" class="form-text">Masukan nomor NISN anda!</div>
                            </div>

                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama</label>
                                <input name="nama" type="text" class="form-control" id="nama"
                                    aria-describedby="emailHelp">
                                <div id="nama" class="form-text">Masukan nama anda!</div>
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input name="email" type="email" class="form-control" id="email"
                                    aria-describedby="emailHelp">
                                <div id="email" class="form-text">Masukan email anda!</div>
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                <input name="password" type="password" class="form-control" id="exampleInputPassword1">
                                <div id="password" class="form-text">Masukan password anda!</div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Detail Data</h4>
                </div>
                <div class="card-body">
                    <div class="col-12">
                        <div class="content mt-5">
                            <div class="mb-3">
                                <label for="angkatan" class="form-label">Angkatan</label>
                                <input name="angkatan" type="number" class="form-control" id="angkatan"
                                    aria-describedby="emailHelp">
                                <div id="angkatan" class="form-text">Masukan angkatan anda!</div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="pekerjaan" class="form-label">Pekerjaan</label>
                            <input name="pekerjaan" type="text" class="form-control" id="pekerjaan"
                                aria-describedby="emailHelp">
                            <div id="pekerjaan" class="form-text">Masukan pekerjaan anda!</div>
                        </div>

                        <div class="mb-3">
                            <label for="perusahaan" class="form-label">Perusahaan</label>
                            <input name="nama_perusahaan" type="text" class="form-control" id="perusahaan"
                                aria-describedby="emailHelp">
                            <div id="perusahaan" class="form-text">Masukan perusahaan anda!</div>
                        </div>

                        <div class="mb-3">
                            <label for="prodi" class="form-label">Prodi</label>
                            <input name="prodi" type="text" class="form-control" id="prodi"
                                aria-describedby="emailHelp">
                            <div id="prodi" class="form-text">Masukan prodi anda!</div>
                        </div>

                    </div>
                </div>
            </div>
        </div>



        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="places-buttons">
                        <div class="row">

                        </div>
                        <div class="row">
                            <div class="col-lg-8 ml-auto mr-auto">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="content mt-5">
                                            <div class="mb-3">
                                                <label for="nama_universitas" class="form-label">Nama
                                                    Universitas</label>
                                                <input type="text" class="form-control" id="nama_universitas"
                                                    aria-describedby="emailHelp">
                                                <div id="nama_universitas" class="form-text">Masukan
                                                    nama_universitas anda!</div>
                                            </div>

                                            <div class="mb-3">
                                                <label for="moto" class="form-label">Moto</label>
                                                <input type="text" class="form-control" id="moto"
                                                    aria-describedby="emailHelp">
                                                <div id="moto" class="form-text">Masukan moto anda!</div>
                                            </div>

                                            <div class="mb-3">
                                                <label for="no_hp" class="form-label">Nomor
                                                    Handphone</label>
                                                <input type="number" class="form-control" id="no_hp"
                                                    aria-describedby="emailHelp" required>
                                                <div id="no_hp" class="form-text">Masukan nomor handphone
                                                    anda!</div>
                                            </div>

                                            <div class="mb-3">
                                                <label for="foto" class="form-label">Foto</label>
                                                <input type="file" class="form-control" id="foto"
                                                    aria-describedby="emailHelp">
                                                <div id="foto" class="form-text">Masukan foto anda!
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label for="alamat" class="form-label">Alamat</label>
                                            <input type="text" class="form-control" id="alamat"
                                                aria-describedby="emailHelp">
                                            <div id="alamat" class="form-text">Masukan alamat anda!</div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include '../app/footer.php'; ?>