<?php

namespace Tests\Unit;

use Tests\TestCase;



class ClientTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_the_user_can_see_test_page()
    {
        //visibilidad de página
        $response=$this->get("/");
        $response->assertSeeText("Laravel");
        $response->assertStatus(200);

    }
}
