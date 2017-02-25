<?php
use App\Mahasiswa;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'ViewController@index');
Route::get('beranda', 'ViewController@beranda');
Route::get('input', 'ViewController@input');
Route::get('edit', 'ViewController@v_edit');

Route::get('/input', function(){
	$mahasiswa = new Mahasiswa;
	$mahasiswa -> nama = "Roni Hamdani";
	$mahasiswa -> jenis_kelamin = "Laki-Laki";
	$mahasiswa -> alamat = "Cimahi";
	$mahasiswa -> nim = "14111156";
	$mahasiswa -> save(); });

Route::get('/edit', function(){
	$mahasiswa = Mahasiswa::find(1);
	$mahasiswa -> nama = "Ronny Ken";
	$mahasiswa -> jenis_kelamin = "Laki-Laki";
	$mahasiswa -> alamat = "Cimahi";
	$mahasiswa -> nim = "14111156";
	$mahasiswa -> save(); });

Route::get('/hapus', function(){
	$mahasiswa = Mahasiswa::find(1);
	$mahasiswa -> delete(); });

Route::get('/tampil', function(){
	$mahasiswa =Mahasiswa::all();
	foreach ($mahasiswa as $mhs)
	{
		echo "<b>Nama</b> : ";
		echo $mhs->nama;
		echo "<br><b>Jenis Kelamin</b> : ";
		echo $mhs->jenis_kelamin;
		echo "<br><b>Alamat</b> : ";
		echo $mhs->alamat;
		echo "<br><b>NIM</b> : ";
		echo $mhs->nim;
		echo "<br><br>";
	}
});