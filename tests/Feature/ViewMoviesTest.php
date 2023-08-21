<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;

use Illuminate\Support\Facades\Http;
use Tests\TestCase;

class ViewMoviesTest extends TestCase
{
    /**
     * A basic test example.
     */
    // public function test_the_application_returns_a_successful_response(): void
    // {
    //     $response = $this->get('/');

    //     $response->assertStatus(200);
    // }

    public function the_main_page_shows_correct_info(){
        Http::fake();

        $response =$this-> get('/movies');

        $response-> assertSuccessful();
        $response->assertSee('Popular Movies');
    }
}
