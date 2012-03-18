<?php

namespace SinkIt\GameBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class GameControllerTest extends WebTestCase
{
    public function testCreate()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/game/create');

        $this->assertEquals(1, $crawler->filter('html:contains("Made the game!")')->count());
    }
}
