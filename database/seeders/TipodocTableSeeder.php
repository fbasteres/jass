<?php

namespace Database\Seeders;
use App\Models\default\TipoDocId;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class TipodocTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TipoDocId::create([
            'name'=> 'DNI',
        ]);
    }
}
