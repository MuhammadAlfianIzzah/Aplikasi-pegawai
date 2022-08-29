<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UnitKerjaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('unit_kerjas')->insert(
            [
                [
                    "nama" => "Unitkerja 1",
                    'tempat_tugas' => "kendari"
                ],
                [
                    "nama" => "Unitkerja 1",
                    'tempat_tugas' => "jakarta"
                ]
            ]
        );
    }
}
