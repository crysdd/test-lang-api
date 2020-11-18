<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class LangsTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testLangsList()
    {
        $response = $this->get(route('langs'));

        $response->assertStatus(200);
        $response->assertJsonFragment([
            'code' => 'EN',
            'name' => 'English',
        ]);
        $response->assertJsonFragment([
            'code' => 'AR',
            'name' => 'Arabic',
        ]);
        $response->assertJsonFragment([
            'code' => 'RU',
            'name' => 'Russian',
        ]);
    }

    /**
     * Test all languages
     *
     * @return void
     */
    public function testAllTexts()
    {
        $response = $this->get(route('all_texts'));
        $response->assertStatus(200);
        $response->assertJsonFragment([
            'lang' => "EN",
            'key' => "register_success",
            'text' => "registration completed successfully",
        ]);
        $response->assertJsonFragment([
            'lang' => "AR",
            'key' => "enter_site",
            'text' => "أدخل الموقع",
        ]);
    }
    /**
     * Test current lang
     *
     * @return void
     */
    public function testTextsLang()
    {
        $response = $this->get(route('texts_lang', ['en']));
        $response->assertStatus(200);
        $response->assertJsonFragment([
            'lang' => "EN",
            'key' => "register_success",
            'text' => "registration completed successfully",
        ]);

    }
}
