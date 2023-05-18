<?php 
    include 'proses/koneksi.php';  
    include '../app/header.php';
    include '../app/navbar.php';
    include '../app/sidebar.php';
?>
<!-- End Navbar -->
<div class="panel-header panel-header-sm"></div>
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card bg-gray">
                <div class="row">
                    <!-- <div class="card-header ml-5 mt-5 mb-3">
                      
                    </div> -->
                    <div class="col-md-4">
                        <div class="card ">
                            <div class="card-header">
                                <h4 class="title">Bekerja</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <!-- <div class="col-md-4">
                                        <div class="card">
                                            <div class="card-body">
                                                <h1>
                                                <i class="now-ui-icons business_briefcase-24"></i>
                                                </h1>
                                            </div>
                                        </div>
                                    </div> -->
                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <?php
                                                $result = mysqli_query($koneksi, "SELECT COUNT(*) as total FROM alumni WHERE pekerjaan <> ''");
                                                $data = mysqli_fetch_assoc($result);
                                                $kerja = $data['total'];
                                            ?>
                                                <h1><?= $kerja; ?></h1>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="title">Belum Bekerja</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <?php
                                                    $result = mysqli_query($koneksi, "SELECT COUNT(*) as total FROM alumni WHERE pekerjaan = ''");
                                                    $dat = mysqli_fetch_assoc($result);
                                                    $nganggur = $dat['total'];
                                                ?>
                                                <h1><?= $nganggur; ?></h1>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card ">
                            <div class="card-header">
                                <h4 class="title">Kuliah</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <?php
                                                    $result = mysqli_query($koneksi, "SELECT COUNT(*) as total FROM alumni WHERE prodi <> ''");
                                                    $data = mysqli_fetch_assoc($result);
                                                    $kuliah = $data['total'];
                                                    ?>

                                                <h1><?= $kuliah; ?></h1>
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
</div>
<!-- <?php include '../app/footer.php'; ?> -->

<!-- <footer class="footer">
    <div class="container-fluid">
        <nav>
            <ul>
                <li>
                    <a href="https://www.creative-tim.com">
                        Creative Tim
                    </a>
                </li>
                <li>
                    <a href="http://presentation.creative-tim.com">
                        About Us
                    </a>
                </li>
                <li>
                    <a href="http://blog.creative-tim.com">
                        Blog
                    </a>
                </li>
            </ul>
        </nav>
        <div class="copyright">
            &copy;
            <script>
                document.write(new Date().getFullYear())
            </script>, Designed by
            <a href="https://www.invisionapp.com" target="_blank">Invision</a>. Coded by
            <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>.
        </div>
    </div>
</footer> -->

<footer class="footer">
    <div class="container-fluid">
        <nav>
            <ul>
                <li>
                    <a href="https://www.creative-tim.com">
                        Creative Tim
                    </a>
                </li>
                <li>
                    <a href="http://presentation.creative-tim.com">
                        About Us
                    </a>
                </li>
                <li>
                    <a href="http://blog.creative-tim.com">
                        Blog
                    </a>
                </li>
            </ul>
        </nav>
        <div class="copyright">
            &copy;
            <script>
                document.write(new Date().getFullYear())
            </script>, Designed by
            <a href="https://www.invisionapp.com" target="_blank">Invision</a>. Coded by
            <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>.
        </div>
    </div>
</footer>

</div>
</div>
</body>
<!--   Core JS Files   -->
<script src="../sweet/sweetalert2@11.js"></script>
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
<!-- <script>
    $(document).ready(function () {
        // Javascript method's body can be found in assets/js/demos.js
        demo.initGoogleMaps();
    });
</script> -->

<script>
    $(document).ready(function () {

        <?php

        if (isset($_SESSION['berhasiladmin'])) {
            ?>
            swal.fire({

                    title: 'Succes',
                    text: 'Anda Berhasil Login',
                    icon: 'success',
                    confirmButtonText: 'Ok'
                }).then(() => {

                })
                 <?php
            unset($_SESSION['berhasiladmin']);
        } 
        ?>
    });
</script>

</html>