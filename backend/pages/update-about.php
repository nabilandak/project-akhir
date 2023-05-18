<?php 
    if (empty($_GET['id']))
    {
        header ('location: view-background.php');
        exit();
    }

    require 'proses/koneksi.php';
    $id = $_GET['id'];

    $result = mysqli_query($koneksi, "SELECT * FROM about WHERE id = '$id'");
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
    <form method="post" enctype="multipart/form-data" action="proses-background/proses-about.php">
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
                    <label for="deskripsi" class="form-label">deskripsi</label>
                    <input name="deskripsi" type="text" class="form-control" id="deskripsi" aria-describedby="emailHelp"
                        required value="<?= $data['deskripsi'];?>">
                    <div id="deskripsi" class="form-text">Masukan judul anda!</div>

                </div>

                <div class="mb-3">
                    <label for="keterangan" class="form-label">keterangan</label>
                    <input name="keterangan" type="text" class="form-control" id="keterangan" aria-describedby="emailHelp"
                        required value="<?= $data['keterangan'];?>">
                    <div id="keterangan" class="form-text">Masukan keterangan anda!</div>

                </div>

                <div class="mb-3">
                    <label for="point" class="form-label">point</label>
                    <input name="point" type="text" class="form-control" id="point" aria-describedby="emailHelp"
                        required value="<?= $data['point'];?>">
                    <div id="point" class="form-text">Masukan point anda!</div>

                </div>

                <div class="mb-3">
                    <label for="foto" class="form-label">Background</label>
                    <img class="form-control col-3" src='img/<?= $data ['foto']; ?>' alt='' width="100px"
                        style="outline: none;" id="img-preview">
                    <input type='file' id='img-preview' name='foto' class="form-label mt-3" value="<?= $data['foto'];?>">
                    <input type='hidden' id='img-preview' name='fotolama' value="<?= $data['foto'];?>">
                </div>

                <script>
                    function prviewImg(event) {
                        var img = document.getElementById('img-preview');
                        img.src = URL.createObjectURL(event.target.files[0]);
                    }
                </script>

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
