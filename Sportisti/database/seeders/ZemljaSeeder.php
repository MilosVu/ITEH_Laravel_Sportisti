<?php

namespace Database\Seeders;

use App\Models\Zemlja;
use Illuminate\Database\Seeder;

class ZemljaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Zemlja::factory()->count(12)->create();
    }
}
