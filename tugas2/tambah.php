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
	<form name="input" method="POST" action="proses_tambah.php">
		<table border="0" width="50%" align="center">
			<tr>
				<td><b>Tambah Data</b></td>
			</tr>
			<tr>
				<td><input type="text" name="nim" maxlenght="10" placeholder="NIM"></input></td>
			</tr>
			<tr>
				<td><input type="text" name="nama" maxlenght="50" placeholder="Nama"></input></td>
			</tr>
			<tr>
				<td><input type="text" name="alamat" maxlenght="50" placeholder="Alamat"></input></td>
			</tr>
			<tr>
				
				<td colspan="3"><input name="submit" type="submit" value="SIMPAN"></input><input type="reset" value="BATAL"></input></td>
			</tr>
		</table>
	</form>
	</article>
	<footer>Dede Yusuf - 14.111.120</footer>
</div>
</body>
</html>