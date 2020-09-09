<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /** @test */
    public function it_should_display_homepage()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    /** @test */
    public function it_should_throw_422_on_incorrect_image_dimension()
    {
        $response = $this->get('/foo');

        $response->assertStatus(422);
    }

    /** @test */
    public function it_should_throw_422_on_incorrect_image_dimensions()
    {
        $response = $this->get('/foo/bar');

        $response->assertStatus(422);
    }

    /** @test */
    public function it_should_return_a_correct_image_format()
    {
        $response = $this->get('/400/500');

        $size = getimagesize($response->getFile());

        $this->assertEquals('400', $size[0]);
        $this->assertEquals('500', $size[1]);
    }
}
