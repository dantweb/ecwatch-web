<?php

namespace Dantweb\EcwServer\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DataControllerTest extends WebTestCase
{
    public function testGetData(): void
    {
        $client = static::createClient();
        $client->request('GET', '/data');

        $response = $client->getResponse();
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertJson($response->getContent());
    }
}
