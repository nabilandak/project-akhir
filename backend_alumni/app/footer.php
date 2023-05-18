<footer class="footer">
    <div class="container-fluid">
        <nav>
            
        </nav>
        <div class="copyright">
            &copy;
            <script>
                document.write(new Date().getFullYear())
            </script>, Designed by
            <a href="" target="_blank">ALUMNI SMKN 3 BANJAR</a>.
           
        </div>
    </div>
</footer>
</div>
</div>
</body>


<script>
    // Mendapatkan semua elemen <li> di dalam elemen dengan id "nav-list"
    var liElements = document.getElementById("nav-list").getElementsByTagName("li");

    // Mengiterasi semua elemen <li> dan menambahkan event listener untuk mengaktifkan kelas "aktif" pada klik
    for (var i = 0; i < liElements.length; i++) {
        liElements[i].addEventListener("click", function() {
            // Menghapus kelas "aktif" dari semua elemen <li> sebelumnya
            for (var j = 0; j < liElements.length; j++) {
                liElements[j].classList.remove("active");
            }
            // Menambahkan kelas "aktif" pada elemen <li> yang diklik
            this.classList.add("active");
        });
    }
</script>

<script>
    $(document).ready(function() {
        <?php
        //pengecekan session
        if (isset($_SESSION['update'])) {

        ?>
            swal({
                title: "Data anda berhasil ditambahkan",
                text: "",
                icon: "success",
                button: "oke",
            });

        <?php
            //unset
            unset($_SESSION['update']);
        }
        ?>
    });
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
    $(document).ready(function() {
        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();
    });
</script>

<script>
    $(document).ready(function(){
    
        <?php
            
            if (isset($_SESSION['tidak'])){
        ?>
            swal.fire({

                title: 'Success',
                text: 'Selamat Datang',
                icon: 'success',
                confirmButtonText: 'Ok'
            }).then(() =>{

            })
        <?php
            unset($_SESSION['tidak']);
        }
        ?>
    });
</script>
</html>