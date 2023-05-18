<?php 
     include '../app/header.php';
     include '../app/sidebar.php';
     include '../app/navbar.php';

     require 'proses/koneksi.php';
?>
<div class="panel-header panel-header-sm">
</div>
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"> <a href='view-about.php' class="btn btn-primary">Kembali</a></h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <?php 
                            $no = 1;
                            $result = mysqli_query($koneksi, "SELECT * FROM footer ");
                            foreach ($result as $data):
                            ?>
                            <thead class="">

                                <tr>
                                    <th>Judul</th>
                                    <th class="text-justify" style="text-align:justify"><?=$data['judul'];?></th>
                                </tr>
                                <tr>
                                    <th>Deskripsi</th>
                                    <th class="text-justify"><?=$data['deskripsi'];?></th>
                                </tr>
                                <tr>
                                    <th>Alamat</th>
                                    <th class="text-justify"><?=$data['alamat'];?></th>
                                </tr>
                                <tr>
                                    <th>email</th>
                                    <th class="text-justify"><?=$data['email'];?></th>
                                </tr>
                                <tr>
                                    <th>instagram</th>
                                    <th class="text-justify"><?=$data['instagram'];?></th>
                                </tr>
                                <tr>
                                    <th>Number Phone</th>
                                    <th class="text-justify"><?=$data['no_hp'];?></th>
                                </tr>
                                

                               
                            </thead>


                            <?php endforeach; ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<?php include '../app/footer.php'; ?>