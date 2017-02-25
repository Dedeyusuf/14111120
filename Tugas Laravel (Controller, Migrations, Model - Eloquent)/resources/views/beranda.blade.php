@extends('templates.index')
@section('content')
<div class="container">
    <nav>
        <ul>
            <li><b>MENU</b></li>
            <li><a href="#">Menu 1</a></li>
            <li><a href="#">Menu 2</a></li>
            <li id="logout"><a href="{{URL('/')}}">Logout</a></li>
        </ul>
    </nav>
</div>

<br>
<center><a href="{{URL('input')}}"><button type="button">Tambah Data</button></a></center>
<br>

<table border="1">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
            <th>NIM</th>
            <th>Pilihan</th>
        </tr>
    </thead>
<tbody>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td align="center">
                <a href="{{URL('edit')}}">Edit</a>
                &nbsp;&nbsp;
                <a href="#" onclick="return confirm('Anda yakin akan menghapus data?')">Hapus</a>
            </td>
        </tr>
    </tbody>
</table>

@stop