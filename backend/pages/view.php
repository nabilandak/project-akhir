<?php 
     include '../app/header.php';
     include '../app/navbar.php';
     include '../app/sidebar.php';
     
     require 'proses/koneksi.php';

     if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['cari'])) {
        $value = $_POST['value'];
        $result = mysqli_query($koneksi, "SELECT * FROM alumni WHERE
        nisn LIKE '%$value%' OR
        nama_lengkap LIKE '%$value%' OR
        angkatan LIKE '%$value%' ");
     } else {
        $result = mysqli_query($koneksi, "SELECT * FROM alumni");
     }
     
?>
<div class="panel-header panel-header-sm">
</div>
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card-header">
                            <h4 class="card-title"> <a href='tables.php' class="btn btn-primary">Tambah Data</a></h4>

                            <a href='view.php' >Kembali</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card-header mt-4">
                            <form method="post" action="">
                                <div class="input-group no-border">
                                    <input type="text" name="value" class="form-control" placeholder="Search...">
                                    <span class="input-group-addon">
                                       
                                        <button type="submit" name="cari" style="border: none" > 
                                            <i class="now-ui-icons ui-1_zoom-bold"></i>
                                        </button>
                                    </span>
                                   
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                                <th>No</th>
                                <th>Nama</th>
                                <th>NISN</th>
                                <th>Email</th>
                                <th>Angkatan</th>

                                <th>Actions</th>
                            </thead>
                            <?php 
                            $no = 1;
                            foreach ($result as $data):
                            ?>
                            <tbody>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= $data['nama_lengkap']; ?></td>
                                    <td><?= $data['nisn']; ?></td>
                                    <td><?= $data['email']; ?></td>
                                    <td><?= $data['angkatan']; ?></td>

                                    <td class="text-left">
                                        <a href='detail-data.php?hai=<?= $data['nisn']?>' class="btn btn-dark">edit</a>
                                        <a href='user.php?hai=<?= $data['nisn']?>' class="btn btn-primary">Details</a>
                                        <a href='proses/hapus.php?hai=<?= $data['nisn']?>'
                                            class="btn btn-dark">hapus</a>
                                    </td>
                                </tr>
                            </tbody>
                            <?php endforeach; ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<?php include '../app/footer.php';
