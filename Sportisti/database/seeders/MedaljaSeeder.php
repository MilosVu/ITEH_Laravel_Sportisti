<?php

namespace Database\Seeders;

use App\Models\Medalja;
use Illuminate\Database\Seeder;

class MedaljaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Medalja::factory()->count(20)->create();
    }
}
