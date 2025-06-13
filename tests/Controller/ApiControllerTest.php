<?php

declare(strict_types=1);

namespace Dantweb\EcwServer\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ApiControllerTest extends WebTestCase
{
    public function testGetApi(): void
    {
        $client = static::createClient();
        $client->request('GET', '/api/test');

        $response = $client->getResponse();
        $this->assertEquals(200, $response->getStatusCode());
        $content = $response->getContent();
        $this->assertJson($content);
        $data = json_decode($content, true);
        $this->assertSame('GET', $data['method']);
    }

    public function testPostApi(): void
    {
        $client = static::createClient();
        $postData = ['key' => 'value'];
        $client->request('POST', '/api/test', $postData);

        $response = $client->getResponse();
        $this->assertEquals(200, $response->getStatusCode());
        $content = $response->getContent();
        $this->assertJson($content);
        $data = json_decode($content, true);
        $this->assertSame('POST', $data['method']);
        $this->assertEquals($postData, $data['data']);
    }
}
