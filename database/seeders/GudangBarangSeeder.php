<?php

namespace Database\Seeders;

use App\Models\GudangBarang;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GudangBarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        GudangBarang::factory(13)->create();
    }
}
