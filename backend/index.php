<?php
session_start();
	if(isset($_SESSION['login'])){
		header('location: pages/dashboard.php');
	}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Login V16</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="login/images/icons/favicon.ico" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/vendor/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/vendor/daterangepicker/daterangepicker.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/css/util.css">
	<link rel="stylesheet" type="text/css" href="login/css/main.css">
	<!--===============================================================================================-->

	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" id="theme-styles"/>

	<link rel='stylesheet' href='sweet/animate.min.css'>
	<link rel='stylesheet' href='sweet/sweetalert2.min.css'>
</head>

<body>

<div class="limiter">
        <div class="container-login100" style="background-image: url('../img/orange.jpg');">
            <div class="wrap-login100 p-t-30 p-b-50">
                <span class="login100-form-title p-b-41">
                    Account Login
                </span>
                <form class="login100-form validate-form p-b-33 p-t-5" method="post" action="login/proses_login.php">
                    <div class="wrap-input100 validate-input" data-validate="Enter username">
                        <input class="input100" type="text" placeholder="username" name="username" required autocomplete="off">
                        <span class="focus-input100" data-placeholder="&#xe82a;"></span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate="Enter password">
                        <input class="input100" type="password" name="password" placeholder="Password" required autocomplete="off">
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

    <script src="login/vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="login/vendor/animsition/js/animsition.min.js"></script>
	<!--===============================================================================================-->
	<script src="login/vendor/bootstrap/js/popper.js"></script>
	<script src="login/vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="login/vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->
	<script src="login/vendor/daterangepicker/moment.min.js"></script>
	<script src="login/vendor/daterangepicker/daterangepicker.js"></script>
	<!--===============================================================================================-->
	<script src="login/vendor/countdowntime/countdowntime.js"></script>
	<!--===============================================================================================-->
	<script src="login/js/main.js"></script>

	<script src="sweet/sweetalert2@11.js"></script>

<script>
    $(document).ready(function(){
    
        <?php
            
            if (isset($_SESSION['gagaladmin'])){
        ?>
            swal.fire({

                title: 'Opss...!',
                text: 'Anda Gagal Login',
                icon: 'error',
                confirmButtonText: 'Ok'
            }).then(() =>{

            })
        <?php
            unset($_SESSION['gagaladmin']);
        }
        ?>
    });
</script>

<script>
    $(document).ready(function(){
    
        <?php
            
            if (isset($_SESSION['logout'])){
        ?>
            swal.fire({

                title: 'Opss...!',
                text: 'Anda Gagal Login',
                icon: 'error',
                confirmButtonText: 'Ok'
            }).then(() =>{

            })
        <?php
            unset($_SESSION['logout']);
        }
        ?>
    });
</script>
</body>

</html>