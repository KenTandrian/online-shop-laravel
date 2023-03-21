<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    //
    protected $table = 'nama_siswa';
    public $timestamps = false;
    protected $primaryKey = 'id_siswa';
}
