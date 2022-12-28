<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Matakuliah>
 */
class MatakuliahFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $namamatkul = [
        'Algoritma dan Pemrograman',
        'Struktur Data',
        'Basis Data',
        'Pemrograman Berorientasi Objek',
        'Jaringan Komputer',
        'Pemrograman Berbasis Web',
        'Sistem Operasi',
        'Pemrograman Berbasis Mobile',
        'Data Mining',
        'Framework Pemrograman Web',
        'Machine Learning',
        'Pengolahan Citra Digital',
        'Pemrograman Berbasis Mobile',
        'Pengolahan Citra Digital',
        'Pengenalan Algoritma dan Pemrograman',
        'Pengenalan Basis Data',
        'Algoritma dan Struktur Data',
        'Statistika dan Probabilitas',
        'Fisika Dasar',
        'Sistem Informasi Akuntansi dan Keuangan',
        'Jaringan dan Keamanan Sistem',
        'Pemrograman Perangkat Bergerak',
        'Komputasi Awan',
        'Pemrograman Animasi dan Multimedia'];
        return [
            'kode_mk' => fake()->numerify('IF###'),
            'nama_mk' => fake()->randomElement($namamatkul),
            'sks' => fake()->randomFloat(0,1,4),
            'nama_dosen' => fake()->name
            //
        ];
    }
}
