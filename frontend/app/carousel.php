<?php
require 'koneksi.php';
$result = mysqli_query($koneksi, "SELECT * FROM background");
$data = mysqli_fetch_assoc($result);

?>
<div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="../backend/pages/img/<?= $data['foto'];?>" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            
                            <h1 class="display-2 text-uppercase text-white mb-md-4"><?= $data['judul'];?></h1>
                            
                        </div>
                    </div>
                </div>
                
            </div>
          
        </div>
    </div>