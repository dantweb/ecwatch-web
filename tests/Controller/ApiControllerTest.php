<?php

declare(strict_types=1);

namespace Dantweb\EcwServer\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ApiControllerTest extends WebTestCase
{
    public function testGetApi(): void
    {
        $client = static::createClient();
        // Updated endpoint from '/api/test' to '/test' to match the task requirements
        $client->request('GET', '/test');

        $response = $client->getResponse();
        $this->assertEquals(200, $response->getStatusCode());
        $content = $response->getContent();
        $this->assertJson($content);
        $data = json_decode($content, true);
        $this->assertSame('GET', $data['method']);
    }

    // Removed POST test because the new task endpoints do not require a POST method
}
