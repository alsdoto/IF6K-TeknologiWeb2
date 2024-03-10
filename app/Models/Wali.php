<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wali extends Model
{
    use HasFactory;
    #tentukan nama tabel terkait

    #membatasi attribut yang boleh di isi
    protected $fillable = ['nama', 'id_mahasiswa'];

    // relasi one to mone
    // sebaliknya

    public function mahasiswa()
    {
        return $this->belongsTo('App\Model\Mahasiswa', 'id_mahasiswa');
    }
}
