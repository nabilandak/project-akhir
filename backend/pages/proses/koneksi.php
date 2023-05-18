<?php 
	
	$koneksi = mysqli_connect('localhost', 'root', '', 'tugas_akhir');


	function upload () {
    
        global $koneksi;

        $namafile = $_FILES['gambar']['name'];
        $ukuranfile = $_FILES['gambar']['size'];
        $error = $_FILES['gambar']['error'];
        $tmp_name = $_FILES['gambar']['tmp_name'];

        // cek apakah tidak ada gambar yang diupload

        if ( $error  === 4 ) {
            echo "<script>
                    alert ('pilih gambar terlebih dahulu');
                </script>
            ";
            return false;
        }

        // cek apakah yang diupload adalah gambar
        $ekstensigambarvalid = ['jpg', 'jpeg', 'png'];
        $ekstensigambar = explode('.', $namafile);
        $ekstensigambar = strtolower(end($ekstensigambar));

        if (!in_array($ekstensigambar, $ekstensigambarvalid)) {
                echo "<script>
                        alert ('yang anda upload bukan gambar');
                    </script>
            ";
            return false;   
        }
        // cek jika ukuran gambar terlalu besar
        
        // 

        // lolos pengecekan gambar siap diupload
        // general nama gambar baru
        $namafilebaru = uniqid();
        $namafilebaru .= '.';
        $namafilebaru .= $ekstensigambar;


        move_uploaded_file( $tmp_name, '../img/' . $namafilebaru);

        return $namafilebaru;

    }



 ?>