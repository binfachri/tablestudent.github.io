
<?php 

 include 'koneksi.php';

 $database = 'db_appsiswa';

//kita masukkan database ke koneksi
 $koneksi = new mysqli($server, $username, $password, $database);

//query untuk membuat table bar
 $sql = "CREATE TABLE tb_kelas(
   id_kelas INT AUTO_INCREMENT PRIMARY KEY,
   nama_kelas VARCHAR (20) NOT NULL,
   keterangan_kelas VARCHAR (20) NOT NULL
 )";

// eksekusi query
 if ($koneksi->query($sql)=== TRUE) {
 	echo "Berhasil membuat table baru";
 } else {
 	echo "Gagal membuat table baru. Pesan error ". $koneksi->error;
 }


 $koneksi->close();


?>