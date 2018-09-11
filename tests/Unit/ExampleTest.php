<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $this->assertTrue(true);
    }

    public function testHome()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function testComplaintsCreate()
    {
        $response = $this->get('/complaints/create');

        $response->assertStatus(200);
    }
}
