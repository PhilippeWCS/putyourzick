<?php

namespace WCS\putyourzickBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class PlaylistControllerTest extends WebTestCase
{
    public function testAdd()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/addplaylist');
    }

    public function testEdit()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/editplaylist');
    }

    public function testGet()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/getplaylist');
    }

    public function testDelete()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/deleteplaylist');
    }

}
