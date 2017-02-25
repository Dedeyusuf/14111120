<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table='tbmahasiswa';
    protected $fillable=['nama','jenis_kelamin','alamat','nim'];
}
