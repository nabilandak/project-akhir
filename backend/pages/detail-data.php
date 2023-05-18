<?php 
    require 'proses/koneksi.php';

    if (empty($_GET['hai']))
    {
        header('location: view.php');
    }
    include '../app/header.php';
    include '../app/navbar.php';
    include '../app/sidebar.php';

    $nisn = $_GET['hai'];
    $result = mysqli_query($koneksi, "SELECT * FROM alumni WHERE nisn = '$nisn' ");
    $data = mysqli_fetch_assoc($result);
?>

<div class="panel-header">
    <div class="header text-center">
        <h2 class="title">UPDATE DATA ALUMNI</h2>

    </div>
</div>
<div class="content">
    <form method="post" action="proses/update.php" enctype="multipart/form-data">

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
                                    <input type='hidden' id='' name='nisnasli' value="<?= $data['nisn']; ?>">
                                    <label for="nisn" class="form-label">Nisn</label>
                                    <input name="nisn" value="<?= $data['nisn']; ?>" type="text" class="form-control" id="nisn" aria-describedby="emailHelp" required>
                                </div>

                                <div class="mb-3">
                                    <label for="nama" class="form-label">Nama</label>
                                    <input name="nama" value="<?= $data['nama_lengkap']; ?>" type="text"
                                        class="form-control" id="nama" aria-describedby="emailHelp" required>

                                </div>

                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input name="email" value="<?= $data['email']; ?>" type="email" class="form-control"
                                        id="email" aria-describedby="emailHelp" required>

                                </div>

                                <div class="mb-3">
                                    <label for="no_hp" class="form-label">Nomor
                                        Handphone</label>
                                    <input name="no_hp" value="<?= $data['no_hp']; ?>" type="text"
                                        class="form-control" id="no_hp" aria-describedby="emailHelp" required>

                                </div>

                                <div class="mb-3">
                                    <label for="angkatan" class="form-label">Angkatan</label>
                                    <input name="angkatan" value="<?= $data['angkatan']; ?>" type="text"
                                        class="form-control" id="angkatan" aria-describedby="emailHelp" required>

                                </div>

                                <div class="mb-3 mx-auto">
                                    <label for="gambar" class="form-label">Foto</label>


                                    <img class="form-control col-3" src='img/<?= $data ['foto']; ?>' alt=''
                                        width="100px" style="outline: none;" id="img-preview">
                                    <input type='file' id='foto' name='foto' class="form-label mt-3" value="<?= $data['foto'];?>">
                                    <input type='hidden' id='' name='fotolama' value="<?= $data['foto'];?>">


                                </div>
                                <script>
                                    function prviewImg(event){
                                        var img = document.getElementById('img-preview');
                                        img.src = URL.createObjectURL(event.target.files[0]);
                                    }
                                </script>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Update Data</h4>
                    </div>
                    <div class="card-body">
                        <div class="col-12">
                            <div class="content mt-5">

                                <div class="mb-3">
                                    <label for="nama_universitas" class="form-label">Nama
                                        Universitas</label>
                                    <input name="nama_universitas" value="<?= $data['nama_universitas']; ?>" type="text"
                                        class="form-control" id="nama_universitas" aria-describedby="emailHelp">

                                </div>

                            </div>

                            <div class="mb-3">
                                <label for="prodi" class="form-label">Prodi</label>
                                <input name="prodi" value="<?= $data['prodi']; ?>" type="text" class="form-control"
                                    id="prodi" aria-describedby="emailHelp">

                            </div>



                            <div class="mb-3">
                                <label for="perusahaan" class="form-label">Perusahaan</label>
                                <input name="perusahaan" value="<?= $data ['nama_perusahaan']; ?>" type="text"
                                    class="form-control" id="perusahaan">

                            </div>

                            <div class="mb-3">
                                <label for="pekerjaan" class="form-label">Pekerjaan</label>
                                <input name="pekerjaan" value="<?= $data['pekerjaan']; ?>" type="text"
                                    class="form-control" id="pekerjaan" aria-describedby="emailHelp">

                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label">password</label>
                                <input name="password" value="<?= $data['password']; ?>" type="password"
                                    class="form-control" id="password" aria-describedby="emailHelp" required>

                            </div>

                            <div class="mb-3">
                                <label for="moto" class="form-label">Moto</label>
                                <input name="motto" value="<?= $data['motto']; ?>" type="text" class="form-control"
                                    id="moto" aria-describedby="emailHelp" required>

                            </div>

                            <div class="mb-3">
                                <label for="alamat" class="form-label">Alamat</label>
                                <input name="alamat" value="<?= $data['alamat']; ?>" type="text" class="form-control"
                                    id="alamat" aria-describedby="emailHelp" required>
                            </div>
                            `
                            <div class="mb-3">
                                <button class="btn btn-primary">Update</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </form>
</div>
<?php include '../app/footer.php'; ?>