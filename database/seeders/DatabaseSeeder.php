<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Lang;
use App\Models\Text;

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
        Text::create([
            'lang' => 'EN',
            'key' => 'register_success',
            'text' => 'registration completed successfully',
        ]);
        Text::create([
            'lang' => 'RU',
            'key' => 'register_success',
            'text' => 'регистрация прошла успешно',
        ]);
        Text::create([
            'lang' => 'AR',
            'key' => 'register_success',
            'text' => 'اكتمل التسجيل بنجاح',
        ]);
        Text::create([
            'lang' => 'EN',
            'key' => 'enter_site',
            'text' => 'enter the site',
        ]);
        Text::create([
            'lang' => 'RU',
            'key' => 'enter_site',
            'text' => 'войти на сайт',
        ]);
        Text::create([
            'lang' => 'AR',
            'key' => 'enter_site',
            'text' => 'أدخل الموقع',
        ]);
    }
}
