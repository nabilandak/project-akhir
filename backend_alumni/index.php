<?php
	session_start();
	if(isset($_SESSION['login'])){
		header('location: pages/user.php');
	}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Login V16</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="login-alumni/images/icons/favicon.ico" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login-alumni/vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login-alumni/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login-alumni/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login-alumni/vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login-alumni/vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login-alumni/vendor/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login-alumni/vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login-alumni/vendor/daterangepicker/daterangepicker.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login-alumni/fonts/css/util.css">
	<link rel="stylesheet" type="text/css" href="login-alumni/fonts/css/main.css">
	<!--===============================================================================================-->

	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" id="theme-styles"/>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
	<link rel='stylesheet' href='login-alumni/sweet/animate.min.css'>
	<link rel='stylesheet' href='login-alumni/sweet/sweetalert2.min.css'>
</head>

<body>

<div class="limiter">
        <div class="container-login100" style="background-image: url('../img/orange1.jpg');">
            <div class="wrap-login100 p-t-30 p-b-50">
                <span class="login100-form-title p-b-41">
                    Account Alumni
                </span>
                <form class="login100-form validate-form p-b-33 p-t-5" method="post" action="login-alumni/proses_login.php">
                    <div class="wrap-input100 validate-input" data-validate="Enter nisn">
                        <input class="input100" type="number" placeholder="NISN" name="nisn">
                        <span class="focus-input100" data-placeholder="&#xe82a;"></span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Enter password">
                        <input class="input100" type="password" name="password" placeholder="Password">
                        <span class="focus-input100" data-placeholder="&#xe80f;"></span>
                    </div>
                    <div class="container-login100-form-btn m-t-32">
						<button class="btn btn-warning">Login</button>
                        
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <div id="dropDownSelect1"></div>

    <script src="login-alumni/vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="login-alumni/vendor/animsition/js/animsition.min.js"></script>
	<!--===============================================================================================-->
	<script src="login-alumni/vendor/bootstrap/js/popper.js"></script>
	<script src="login-alumni/vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="login-alumni/vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->
	<script src="login-alumni/vendor/daterangepicker/moment.min.js"></script>
	<script src="login-alumni/vendor/daterangepicker/daterangepicker.js"></script>
	<!--===============================================================================================-->
	<script src="login-alumni/vendor/countdowntime/countdowntime.js"></script>
	<!--===============================================================================================-->
	<script src="login-alumni/js/main.js"></script>

	<script src="login-alumni/sweet/sweetalert2@11.js"></script>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

<script>
    $(document).ready(function(){
    
        <?php
            
            if (isset($_SESSION['gagal'])){
        ?>
            swal.fire({

                title: 'Opss...!',
                text: 'Anda Gagal Login',
                icon: 'error',
                confirmButtonText: 'Ok'
            }).then(() =>{

            })
        <?php
            unset($_SESSION['gagal']);
        }
        ?>
    });
</script>

</body>

</html>