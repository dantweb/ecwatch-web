<?php

namespace Dantweb\EcwServer\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class UserControllerTest extends WebTestCase
{
    public function testGetUserData(): void
    {
        $client = static::createClient();
        $client->request('GET', '/user');

        $response = $client->getResponse();
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertJson($response->getContent());
    }
}
