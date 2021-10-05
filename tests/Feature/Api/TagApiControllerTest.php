<?php

namespace Tests\Feature\Api;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class TagApiControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_tag_registration()
    {
        $tagData = [
            "name" => 'Javascript'
        ];

        $this->json('POST', 'api/tag', $tagData, ['Accept' => 'application/json'])
            ->assertStatus(200);

        $this->assertDatabaseHas('tags', ['name' => 'Javascript']);
    }
}
