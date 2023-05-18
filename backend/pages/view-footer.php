<?php 
     include '../app/header.php';
     include '../app/navbar.php';
     include '../app/sidebar.php';

     require 'proses/koneksi.php';
?>
<div class="panel-header panel-header-sm">
</div>
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"> <a href='tables.php' class="btn btn-primary">Tambah Data</a></h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                                <th>No</th>
                                <th>Judul</th>
                                <th>Email</th>
                                <th>Instagram</th>
                                <th>Actions</th>
                            </thead>
                            <?php 
                            $no = 1;
                            $result = mysqli_query($koneksi, "SELECT * FROM footer ");
                            foreach ($result as $data):
                            ?>
                            <tbody>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= $data['judul']; ?></td>
                                    <td><?= $data['email']; ?></td>
                                    <td><?= $data['instagram']; ?></td>
                                    
                                    <td class="text-left">
                                       <a href='update-footer.php?id=<?= $data['id']?>' class="btn btn-dark">edit</a>
                                       <a href='detail-footer.php?id=<?= $data['id']?>' class="btn btn-primary">Details</a>
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