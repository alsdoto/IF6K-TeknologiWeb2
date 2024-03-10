<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Mahasiswa;
use App\Models\Wali;

class RelasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        //
        DB::table('mahasiswas')->delete();
        DB::table('walis')->delete();

        //seeder dosen untuk relasi selanjutnya

        //kita akan membuat 3 orang mahasiswa sebagai sempel

        $alma = Mahasiswa::create(array(
            'nama' => 'Alma',
            'nim' => 'D112111013'
        ));

        $sulaiman = Mahasiswa::create(array(
            'nama' => 'Sulaiman',
            'nim' => 'D112111014'
        ));

        $almasulaiman = Mahasiswa::create(array(
            'nama' => 'AlmaSulaiman',
            'nim' => 'D112111015'
        ));

        #informasi ketika mahasiswa telah di isi
        $this->command->info('Mahasiswa telah diisi!');

        //disini kita akan menggunakan ketiga variabel yang kita
        //deklarasikan diatas yaitu alma, sulaiman, almasulaiman
        // dengan cara mengambil id dari masing masing variabel yang baru saja diisi

        #ciptakan wali $alma
        Wali::create(array(
            'nama' => 'Henny A alma',
            'id_mahasiswa' => $alma->id,
        ));

        #ciptakan wali $sulaiman
        Wali::create(array(
            'nama' => 'Henny B sulaiman',
            'id_mahasiswa' => $sulaiman->id,
        ));

        #ciptakan wali $almasulaiman
        Wali::create(array(
            'nama' => 'Henny C almasulaiman',
            'id_mahasiswa' => $almasulaiman->id,
        ));

        #informasi ketika semua telah diisi
        $this->command->info('Data mahasiswa dan wali telah diisi!');
    }
}
