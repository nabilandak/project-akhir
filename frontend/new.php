// Array untuk data dummy
$nama_depan = array("Adam", "Budi", "Charlie", "Dian", "Eva", "Fajar", "Gina", "Hendro", "Indah", "Joni");
$nama_belakang = array("Abdullah", "Bachtiar", "Cahyono", "Dewi", "Effendi", "Firdaus", "Guntur", "Hadi", "Indri", "Juwita");
$email_domain = array("gmail.com", "yahoo.com", "hotmail.com", "outlook.com", "aol.com");
$pekerjaan = array("Guru", "Dokter", "Programmer", "Desainer", "Penulis", "Wartawan", "Pengusaha", "Akuntan", "Arsitek", "Pilot");
$perusahaan = array("PT Amanah Sejahtera", "CV Surya Mandiri", "UD Barokah Jaya", "PT Jaya Abadi", "PT Berkah Bersama");
$jurusan_kuliah = array("Teknik Informatika", "Sistem Informasi", "Manajemen", "Akuntansi", "Psikologi", "Hukum", "Kedokteran", "Arsitektur", "Teknik Sipil", "Komunikasi");
$universitas = array("Universitas Indonesia", "Institut Teknologi Bandung", "Universitas Gadjah Mada", "Universitas Airlangga", "Universitas Diponegoro");
$motto = array("Keep learning, keep growing", "Success is a journey, not a destination", "Never give up", "Dream big, work hard, stay focused");

// Generate data dummy
for ($i = 1; $i <= 100; $i++) {
    // Generate NISN
    $nisn = rand(1000000000, 9999999999);

    // Generate nama lengkap
    $nama = $nama_depan[array_rand($nama_depan)] . " " . $nama_belakang[array_rand($nama_belakang)];

    // Generate email
    $email = strtolower(str_replace(" ", ".", $nama)) . "@" . $email_domain[array_rand($email_domain)];

    // Generate alamat
    $alamat = "Jalan " . rand(1, 50) . ", Kelurahan " . $nama_depan[array_rand($nama_depan)] . ", Kecamatan " . $nama_belakang[array_rand($nama_belakang)];

    // Generate pekerjaan dan nama perusahaan
    if ($i % 2 == 0) {
        $pekerjaan_random = $pekerjaan[array_rand($pekerjaan)];
        $perusahaan_random = $perusahaan[array_rand($perusahaan)];
    } else {
        $pekerjaan_random = "";
        $perusahaan_random = "";
    }

    // Generate jurusan kuliah dan nama universitas
    if ($i % 3 == 0) {
        $jurusan_random = $jurusan_kuliah[array_rand($jurusan_kuliah)];
        $universitas_random = $universitas[array_rand($universitas)];
    }

    
else {
$jurusan_random = "";
$universitas_random = "";
}
}