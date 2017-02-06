<?php

$db_host = 'localhost';
$db_user = 'root'; 
$db_pass = '';
$db_name = 'mahasiswa'; 
$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
	die ('Gagal terhubung MySQL: ' . mysqli_connect_error());	
}

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];

$sql = "INSERT INTO `biodata` (nim, nama, alamat) VALUES ('$nim', '$nama', '$alamat')";
if (mysqli_query($conn, $sql)) {
	header("location:index.php");
}
	else {
		echo "error".$sql.mysqli_error($conn);
}

?>