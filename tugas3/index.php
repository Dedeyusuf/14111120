<?php
include("connect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device=width, initial-scale=1">
	<title>CRUD</title>
	
	<link href="css/bootstrap.min.css" rel="stylesheet">


</head>

<body>
	<nav class="navbar navbar-default">
  		<div class="container">
    		<div class="navbar-header">
      		<a class="navbar-brand" href="#">Operasi CRUD</a>
    	</div>
    		<ul class="nav navbar-nav">
     			<li class="active"><a href="index.php">Master Data</a></li>
      			<li><a href="#">Menu 1</a></li>
     			 <li><a href="#">Menu 2</a></li>
     			 <li><a href="#">Menu 3</a></li>
   			</ul>
	</nav>

	<div class="container">
		<div class="content">
			<h4>Data Mahasiswa</h4>
			<hr />
			<?php
			if(isset($_GET['aksi']) == 'delete'){
				$nim = $_GET['nim'];
				$cek = mysqli_query($conn, "SELECT * FROM biodata WHERE nim='$nim'");
				if(mysqli_num_rows($cek) == 0){
					echo '<div class="alert alert-info alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Data tidak ditemukan.</div>';
				}else{
					$delete = mysqli_query($conn, "DELETE FROM biodata WHERE nim='$nim'");
					if($delete){
						echo '<div class="alert alert-primary alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Data berhasil dihapus.</div>';
					}else{
						echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Data gagal dihapus.</div>';
					}
				}
			}
			?>
		<table class="table table-striped table-hover">
			<a href="add.php" class="btn btn-link btn-sm">Tambah <span class="glyphicon glyphicon-plus-sign"></span></a>
			<tr>
				<td><b>No</b></td>
				<td><b>Nim</b></td>
				<td><b>Nama</b></td>
				<td><b>Alamat</b></td>
				<td><b>Aksi</b></td>
			</tr>
	<?php
	$sql = mysqli_query($conn, "SELECT * FROM biodata WHERE nim ");
	if(mysqli_num_rows($sql) == 0){
		echo '<tr><td colspan="5">Data Tidak Ada.</td></tr>';
	}else{
		$no = 1;
		while($row = mysqli_fetch_assoc($sql)){
	echo '<tr>
			<td>'.$no.'</td>
			<td>'.$row['nim'].'</td>
			<td>'.$row['nama'].'</td>
			<td>'.$row['alamat'].'</td>';

	echo  '<td>
			<a href="edit.php?nim='.$row['nim'].'" title="Edit Data" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
			<a href="index.php?aksi=delete&nim='.$row['nim'].'" title="Hapus Data" onclick="return confirm(\'Anda yakin akan menghapus data '.$row['nama'].'?\')" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
		</tr>';
		$no++;
		}
	}

?>
	</div>
		</div>
		</table>
		<div class="panel-footer">Dede Yusuf - 14.111.120</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	
</body>
</html>