<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Mahasiswa;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $mahasiswas = [
            ['npm' => 'G1021096', 'nama' => 'Rivaldi Ramadhan', 'jurusan' => 'Teknik Informatika', 'semester' => '6'],
            ['npm' => 'G1021097', 'nama' => 'Adi Setiawan', 'jurusan' => 'Sistem Informasi', 'semester' => '5'],
            ['npm' => 'G1021098', 'nama' => 'Citra Kirana', 'jurusan' => 'Manajemen Informatika', 'semester' => '4'],
            ['npm' => 'G1021099', 'nama' => 'Denesya Rezky Santitama', 'jurusan' => 'Hukum', 'semester' => '7'],
            
        ];
    
        foreach ($mahasiswas as $mahasiswa) {
            Mahasiswa::create($mahasiswa);
        }
    }
    
}
