<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use App\Models\Mahasiswa;
use App\Models\Wali;
use App\Models\Hobi;
use App\Models\Dosen;

use Illuminate\Database\Seeder;

class RelasiSeeder extends Seeder
{
    public function run()
    {
        DB::table('mahasiswas')->delete();
        DB::table('walis')->delete();
        DB::table('dosens')->delete(); 

        #siapkan seeder hobi disini
        DB::table('hobis')->delete();
        DB::table('mahasiswa_hobi')->delete();

        // Buat sample 3 mahasiswa
        $dosen = Dosen::create(array( 
            'nama' => 'Eko',
            'nipd' => '1234567890',
        ));

        $ani = Mahasiswa::create(array(
            'nama' => 'Ani',
            'nim' => 'D015015072',
            'id_dosen' => $dosen->id,
        ));

        $budi = Mahasiswa::create(array(
            'nama' => 'Budi',
            'nim' => 'D015015088',
            'id_dosen' => $dosen->id,
        ));

        $nia = Mahasiswa::create(array(
            'nama' => 'Nia',
            'nim' => 'D015015078',
            'id_dosen' => $dosen->id,
        ));

        #isi tabel hobi
        $menulis = Hobi::create(array('hobi' => 'Menulis'));
        $baca_buku = Hobi::create(array('hobi' => 'Baca Buku'));

        #hubungkan mahasiswa dengan hobinya masing2
        $ani->hobi()->attach($menulis->id);
        $budi->hobi()->attach($baca_buku->id);
        $nia->hobi()->attach($menulis->id);

        // Informasi ketika Mahasiswa diisi
        $this->command->info('Mahasiswa telah diisi!');

        // Menciptakan wali masing-masing mahasiswa
        Wali::create(array(
            'nama' => 'Henny A',
            'id_mahasiswa' => $ani->id,
        ));

        Wali::create(array(
            'nama' => 'Andi S',
            'id_mahasiswa' => $budi->id,
        ));

        Wali::create(array(
            'nama' => 'Viki D',
            'id_mahasiswa' => $nia->id,
        ));
        
        $this->command->info('Data Mahasiswa dosen dan Wali telah diisi!');
    }
}
