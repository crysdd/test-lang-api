<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Lang;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Lang::create([
            'code' => 'EN',
            'name' => 'English',
        ]);
        Lang::create([
            'code' => 'RU',
            'name' => 'Russian',
        ]);
        Lang::create([
            'code' => 'AR',
            'name' => 'Arabic',
        ]);
    }
}
