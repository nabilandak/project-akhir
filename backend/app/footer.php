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

        if ($pesan != [] && $pesan != null) {
            if ($pesan[1] == 200) {
                echo "
                    swal.fire({

                        title: 'success',
                        text: '".$pesan[0]."',
                        icon: 'success',
                        confirmButtonText: 'okei'
                    }).then(() => {

                    })
                ";
            } else if ($pesan[1] == 400) {
                echo "
                    swal.fire({

                        title: 'gagal',
                        text: '".$pesan[0]."',
                        icon: 'error',
                        confirmButtonText: 'okei'
                    }).then(() => {

                    })
                ";
            }
            
            unset($_SESSION['pesan']);
            $pesan = null;
        } 
        ?>
    });
</script>


</html>