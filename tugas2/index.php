<!DOCTYPE HTML>
<html>
<HEAD>
	<title>KULIAH WEB2</title>
</HEAD>
<link rel="stylesheet" type="text/css" href="style.css">
<body>
<div class="container">
	<header>
		<h1>CRUD Operation</h1>
	</header>
	<nav>
		<ul>
			<li><b>MENU</b></li>
			<li><a href="#">Menu 1</a></li>
			<li><a href="#">Menu 2</a></li>
			<li><a href="#">Menu 3</a></li>
		</ul>
	</nav>
	<article>
<?php
include("koneksi.php");
$sql = 'SELECT * FROM biodata';
		
$query = mysqli_query($conn, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}
echo '		<table border="1" width="75%" align="center">
			<tr>
				<th colspan=3><a href="tambah.php"><button type="submit">+ TAMBAH</button></a></th>
			</tr>
			<tr>
				<td align=center><b>Nama</b></td>
				<td align=center><b>Nim</b></td>
				<td align=center><b>Alamat</b></td>
			</tr>';

while ($row = mysqli_fetch_row($query))
{
	echo '<tr>
			<td>'.$row[0].'</td>
			<td>'.$row[1].'</td>
			<td>'.$row[2].'</td>
		</tr>';
}
echo '
                           
		</table>
	</article>
	<footer>Dede Yusuf - 14.111.120</footer>
</div>
</body>
</html>';

mysqli_free_result($query);

mysqli_close($conn);