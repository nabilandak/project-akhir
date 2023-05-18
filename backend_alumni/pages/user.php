    

    <!-- Star Header -->
    <?php include '../app/header.php'; ?>
    <!-- End Header -->
    <!-- Star Sidebar -->
    <?php include '../app/sidebar.php'; ?>
    <!-- End Sidebar -->
    <!-- Star Navbar -->
    <?php include '../app/navbar.php'; ?>
    <?php

    
    require 'proses/koneksi.php';



    $nisn = $_SESSION['nisn'];
    $password = $_SESSION['password'];

    $result = mysqli_query($conn, "SELECT * FROM alumni where nisn = '$nisn' ");
    $data = mysqli_fetch_assoc($result);

    ?>
    <!-- End Navbar -->
    <div class="panel-header panel-header-sm">
    </div>
    <div class="content">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h5 class="title">DATA PRIBADI
                            <hr class="border border-warning border-3 opacity-75">
                        </h5>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="row">
                                
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Nisn</label>
                                        <input type="text" class="form-control bg-white" disabled=""
                                            value="<?= $data['nisn']; ?>" required>
                                        <!-- <img class="form-control bg-white col-3" src='../../backend/examples/img/<?= $data ['foto']; ?>' alt='' width="100px"
                        style="outline: none;" id="img-preview">                        -->


                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Nisn</label>
                                        <input type="text" class="form-control bg-white" disabled=""
                                            value="<?= $data['nisn']; ?>" required>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label>Nama</label>
                                        <input type="text" class="form-control bg-white" disabled=""
                                            value="<?= $data['nama_lengkap']; ?>" required>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email</label>
                                        <input type="email" class="form-control bg-white bg-white" disabled=""
                                            value="<?= $data['email']; ?>" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label>Nomer Hp</label>
                                        <input type="number" class="form-control bg-white" disabled=""
                                            value="<?= $data['no_hp']; ?>" required>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label>Angkatan</label>
                                        <input type="text" required class="form-control bg-white" disabled=""
                                            value="Angkatan Tahun :<?= $data['angkatan']; ?>">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label>Pekerjaan</label>
                                        <input type="text" required class="form-control bg-white" disabled=""
                                            value="<?= $data['pekerjaan']; ?>">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label>Perusahaan</label>
                                        <input type="text" required class="form-control bg-white" disabled=""
                                            value="<?= $data['nama_perusahaan']; ?>">
                                    </div>
                                </div>

                                <div class="col-6">
                                    <div class="form-group">
                                        <label>Nama Universitas</label>
                                        <input type="text" required class="form-control bg-white" disabled=""
                                            value="<?= $data['nama_universitas']; ?>">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label>Prodi</label>
                                        <input type="text" required class="form-control bg-white" disabled=""
                                            value="<?= $data['prodi']; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Address</label>
                                        <input type="text" required class="form-control bg-white" disabled=""
                                            value="<?= $data['alamat']; ?>">
                                    </div>
                                </div>
                            </div>
                            <hr class="border border-warning">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <!-- <label>Motto</label>
                                        <textarea rows="4" cols="80" class="form-control bg-white" placeholder="<?= $data['motto']; ?>" value="<?= $data['motto']; ?>"></textarea> -->

                                        <a href="tables.php?hai=<?= $data['nisn']; ?>" class="btn btn-primary"
                                            role="button" data-bs-toggle="button"
                                            >UPDATE</a>


                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-user">
                    <div class="image">
                        <img src="../assets/img//bg5.jpg" alt="...">
                    </div>
                    <div class="card-body">
                        <div class="author">
                           
                                <img class="avatar border-gray" src="../../backend/examples/img/<?= $data['foto'];?>">
                                <h5 class="title text-primary" ><?= $data['nama_lengkap']; ?></h5>
                           
                            <p class=" ml-4 text-center">
                                Pekerjaan : <?= $data['pekerjaan']; ?>
                            </p>
                             <p class=" ml-4 text-center">Perusahaan : <?= $data['nama_perusahaan']; ?></p>
                            <p class=" ml-4 text-center">Prodi : <?= $data['prodi']; ?></p>
                            <p class=" ml-4 text-center">Universitas : <?=$data['nama_universitas'];?></p>

                        </div>
                        <hr class="border border-warning">
                        <div class="button-container">                          
                            <p><?= $data['motto']; ?></p>
                        </div>                        
                    </div>
                </div>
                <div class="card-header h-4 bg-white">
                    <a href='detail-teman.php?angkatan=<?=$data['angkatan'] ?>'><h6 class="text-primary">Teman Angkatan Anda</h6></a>
                </div>
                <div class="v-scroll">
                    <?php 
                        $nama = $data['nama_lengkap'];
                        $angkatan = $data['angkatan'];
                        $result2 = mysqli_query($conn, "SELECT * FROM alumni WHERE angkatan = '$angkatan'  AND nama_lengkap != '$nama' LIMIT 10");
                        foreach ($result2 as $row):
                    ?>
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                            <div class="col-md-4 ">
                                <img src="../../backend/examples/img/<?=$row['foto'];?>" style="" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title "><?= $row['nama_lengkap'];?></h5>
                                  
                                    <p class="card-text mb-3">
                                        <i class="now-ui-icons business_briefcase-24"></i>      
                                        <?= $row['pekerjaan'];?><br> 
                                        <?= $row['nama_perusahaan'];?>
                                    </p>       
                                                     
                                    <p class="card-text">
                                        <i class="now-ui-icons education_hat"></i>
                                        <?= $row['prodi'];?><br>
                                        <?=$row['nama_universitas'];?>
                                    </p>                               
                                                               

                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <?php endforeach ?>

                </div>

            </div>
        </div>
    </div>


    <!-- Star Footer -->
    <footer class="footer">
        <div class="container-fluid">
            <nav>
                <ul>


                </ul>
            </nav>

        </div>
    </footer>
    </div>
    </div>


    <script>
        // Mendapatkan semua elemen <li> di dalam elemen dengan id "nav-list"
        var liElements = document.getElementById("nav-list").getElementsByTagName("li");

        // Mengiterasi semua elemen <li> dan menambahkan event listener untuk mengaktifkan kelas "aktif" pada klik
        for (var i = 0; i < liElements.length; i++) {
            liElements[i].addEventListener("click", function () {
                // Menghapus kelas "aktif" dari semua elemen <li> sebelumnya
                for (var j = 0; j < liElements.length; j++) {
                    liElements[j].classList.remove("active");
                }
                // Menambahkan kelas "aktif" pada elemen <li> yang diklik
                this.classList.add("active");
            });
        }
    </script>

    <script src="../sweet/sweetalert2@11.js"></script>


    <!--   Core JS Files   -->
    <script src="../assets/js/core/jquery.min.js"></script>
    <script src="../assets/js/core/popper.min.js"></script>
    <script src="../assets/js/core/bootstrap.min.js"></script>
    <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <!-- Chart JS -->
    <script src="../assets/js/plugins/chartjs.min.js"></script>
    <!--  Notifications Plugin    -->
    <script src="../assets/js/plugins/bootstrap-notify.js"></script>
    <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="../assets/js/now-ui-dashboard.js?v=1.0.1"></script>
    <!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
    <script src="../assets/demo/demo.js"></script>
    <script>
        $(document).ready(function () {
            // Javascript method's body can be found in assets/js/demos.js
            demo.initDashboardPageCharts();
        });
    </script>
    <script>
        $(document).ready(function () {

            <?php

            if (isset($_SESSION['berhasil'])) {
                ?>
                swal.fire({

                        title: 'Success',
                        text: 'Selamat Datang',
                        icon: 'success',
                        confirmButtonText: 'Ok'
                    }).then(() => {

                    }) 
                    <?php
                unset($_SESSION['berhasil']);
            } 
            ?>
        });
    </script>

    <script>
        $(document).ready(function () {

            <?php

            if (isset($_SESSION['update'])) {
                ?>
                swal.fire({

                        title: 'Success',
                        text: 'Selamat Data Telah Diubah',
                        icon: 'success',
                        confirmButtonText: 'Ok'
                    }).then(() => {

                    }) 
            <?php
                unset($_SESSION['update']);
            } 
            ?>
        });
    </script>
    </body>

    </html>
    <!-- End Footer -->