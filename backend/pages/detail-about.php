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
                            $result = mysqli_query($koneksi, "SELECT * FROM about ");
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
                                    <th>Keterangan</th>
                                    <th class="text-justify"><?=$data['keterangan'];?></th>
                                </tr>
                                <tr>
                                    <th>Foto</th>
                                    <th><img src='img/<?=$data['foto'];?>' width="200" alt=''></th>
                                </tr>
                                <tr>
                                    <th>Point</th>
                                    <th class="text-justify ">
                                        <?php
                                       $row = explode(",", $data['point']);
                                       $totalRow = count($row);
                                       $i = 0;
                                       
                                       while ($i < $totalRow) {
                                         echo $no++ . "." . $row[$i] . "<br>";
                                         $i++;
                                       }
                                       
                                        ?>

                                    </th>
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