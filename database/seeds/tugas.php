<?php

use Illuminate\Database\Seeder;

class tugas extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          $a=[
            ['nis'=>'16171012','nama_siswa'=>'sandika erlangga','alamat'=>'cibaduyut','tempat_lahir'=>'bandung','cita_cita'=>'vokalis','tanggal_lahir'=>'2001-06-26','hobi'=>'olahraga','foto'=>'a.jpg' ]
        ];
        DB::table('sandikas')->insert($a);
    
    }
}
