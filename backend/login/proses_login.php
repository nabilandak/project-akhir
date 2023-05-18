<?php
session_start();
$koneksi = mysqli_connect("localhost", "root", "", "tugas_akhir");

if (empty($_POST['username']) || empty($_POST['password'])) {
?>
<script>
    alert('maaf harap isi data terlebih data');
    window.location.assign('index.php');
</script>
<?php
}

$username = mysqli_real_escape_string($koneksi, $_POST['username']);
$pass = mysqli_real_escape_string($koneksi, $_POST['password']);


$cek = mysqli_query($koneksi, " SELECT * FROM login_admin
                WHERE username = '$username' AND password = '$pass'");


if (mysqli_num_rows($cek) == 1) {

    $data = mysqli_fetch_assoc($cek);

    $_SESSION['login'] = [$data['username'], $data['password']];
    $_SESSION['username'] = $data['username'];
    $_SESSION['password'] = $data['password'];
    $_SESSION['berhasiladmin'] = true;
    ?>
<script>
    window.location.assign('../pages/dashboard.php');
</script>
<?php

} else {
    $_SESSION['gagaladmin'] = true;
        ?>
<script>
    window.location.assign('../index.php');
</script>
<?php
    }
?>