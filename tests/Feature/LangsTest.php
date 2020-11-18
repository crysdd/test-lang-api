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
}
