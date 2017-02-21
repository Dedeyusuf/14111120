@extends('templates.index')
@section('content')
<br>
<fieldset style="width: 50%; margin: auto;">
    <legend>Form Edit Data</legend>
    
    <form action="update.php" method="post">
        <input type="hidden" name="id" value="" />
        <p>
            Nama Lengkap<br />
            <input type="text" name="nama" required value=""/>
        </p>
        
        <p>
            Jenis Kelamin<br />
            <input type="radio" name="jenis_kelamin" value="Laki-Laki" id="laki-laki" checked /><label for="laki-laki">Laki-Laki</label>
            <input type="radio" name="jenis_kelamin" value="Perempuan" id="perempuan" checked /><label for="perempuan">Perempuan</label>
        </p>
        
        <p>
            Alamat Lengkap<br />
            <textarea name="alamat" cols="50" required></textarea>
        </p>
        
        <p>
            NIM<br />
            <input type="text" name="nim" required value="" />
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