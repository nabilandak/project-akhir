
<?php 
      include '../app/header.php';
      include '../app/sidebar.php';
      include '../app/navbar.php';

     include 'proses/koneksi.php';
?>
<div class="panel-header panel-header-sm">
</div>
<div class="content">

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
            
                    <h4 class="card-title"> <a href='#' class="btn btn-primary">DATA TAMPILAN</a></h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                                <th>No</th>
                                <th>Judul</th>
                                <th>Foto</th>
                               
                      
                                <th>Actions</th>
                            </thead>


                            <?php 
                            $no = 1;
                            $result = mysqli_query($koneksi, "SELECT * FROM about  ");
                            foreach ($result as $data):
                            ?>
                            <tbody>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= $data['judul']; ?></td>
                                    <td><img src='img/<?= $data['foto']; ?>' alt='' width="100"></td>
                                 
                                    <td class="text-left">
                                       <a href='update-about.php?id=<?= $data['id']?>' class="btn btn-dark">edit</a>
                                       <a href='detail-about.php?id=<?= $data['id']?>' class="btn btn-primary">Details</a>
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

<?php include '../app/footer.php'; ?>