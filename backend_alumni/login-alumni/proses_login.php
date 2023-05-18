<?php
session_start();
$koneksi = mysqli_connect("localhost", "root", "", "tugas_akhir");

if (empty($_POST['nisn']) || empty($_POST['password'])) {
?>
<script>
    alert('maaf harap isi data terlebih data');
    window.location.assign('index.php');
</script>
<?php
}

$nisn = mysqli_real_escape_string($koneksi, $_POST['nisn']);
$pass = md5(mysqli_real_escape_string($koneksi, $_POST['password']));


$cek = mysqli_query($koneksi, " SELECT * FROM alumni
                WHERE nisn = '$nisn' ");


if (mysqli_num_rows($cek) == 1) {
    $data = mysqli_fetch_assoc($cek);
    $password = $data['password'];
    if ($pass === $password){
        $_SESSION['login'] = [$data['nisn'], $data['password']];
        $_SESSION['nisn'] = $data['nisn'];
        $_SESSION['password'] = $data['password'];
        $_SESSION['berhasil'] = true;
        ?>
        <script>
            window.location.assign('../pages/user.php');
        </script>
    <?php
    } else {
        $_SESSION['gagal'] = true;
        ?>
        <script>
            window.location.assign('index.php');
        </script>
        <?php
    }


} else {
    $_SESSION['gagal'] = true;
        ?>
<script>
    window.location.assign('../index.php');
</script>
<?php
    }
?>