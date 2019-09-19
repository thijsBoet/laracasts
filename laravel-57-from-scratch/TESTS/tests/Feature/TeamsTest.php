<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class TeamsTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function guests_may_not_create_teams()
    {
        $this->post('/teams')->assertRedirect('/login');
    }

    /** @test */
    public function a_user_can_create_a_team()
    {   
        // Given im a user who is logged in
        $this->actingAs(factory('App\User')->create());

        $attributes = ['name' => 'Acme'];
        // When they hit the endpoint /teams to create a new team, while passing the necessary data,
        $this->post('teams', $attributes);

        // There should be a new team in the database
        $this->assertDatabaseHas('teams', $attributes);
    }

}
