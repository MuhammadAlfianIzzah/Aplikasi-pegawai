<?php

namespace Database\Seeders;

use App\Models\Golongan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GolonganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('golongans')->insert(
            [
                [
                    "kode" => "IV/e",
                    'nama' => "Pembina"
                ],
                [
                    "kode" => "IV/a",
                    'nama' => "Penata"
                ]
            ]
        );
    }
}
