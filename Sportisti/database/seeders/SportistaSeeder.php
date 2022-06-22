<?php

namespace Database\Seeders;

use App\Models\Sportista;
use Illuminate\Database\Seeder;

class SportistaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Sportista::factory()->count(20)->create();
    }
}
