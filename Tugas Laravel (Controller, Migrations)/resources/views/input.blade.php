@extends('templates.index')
@section('content')
<br>
<fieldset style="width: 50%; margin: auto;">
    <legend>Form Tambah Data </legend>
    
    <form action="simpan.php" method="post">
        <p>
            Nama Lengkap<br />
            <input type="text" name="nama" required />
        </p>
        
        <p>
            Jenis Kelamin<br />
            <input type="radio" name="jenis_kelamin" value="Laki-Laki" id="laki-laki" /><label for="laki-laki">Laki-Laki</label>
            <input type="radio" name="jenis_kelamin" value="Perempuan" id="perempuan" /><label for="perempuan">Perempuan</label>
        </p>
        
        <p>
            Alamat Lengkap<br />
            <textarea name="alamat" cols="50" required></textarea>
        </p>
        
        <p>
            NIM<br />
            <input type="text" name="nim" required />
        </p>
        
        <p>
            <input type="submit" value="Simpan" />
            <input type="reset" value="Reset" onclick="return confirm('hapus data yang telah diinput?')">
        </p>
    </form>
        <center><a href="{{URL('beranda')}}" font="calibri">&Lt; Beranda</a></center>
</fieldset>
<br>

@stop