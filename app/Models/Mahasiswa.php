<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    #tentukan nama tabel terkait

    #membatasi attribut yang boleh di isi
    protected $fillable = ['nama', 'nim'];

    // relasi one to many
    // buat function bernama wali, dimana model Mahasiswa memiliki relasi one to one
    // terhadap model Wali melalui id_mahasiswa

    public function wali()
    {
        return $this->hasOne('App\Models\Wali', 'id_mahasiswa');
    }
}
