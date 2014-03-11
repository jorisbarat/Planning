<?php

namespace Iut\PlanningBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class UtilisateurControllerTest extends WebTestCase
{
    public function testAdd ()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'show');
    }

    public function testShow/id ()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/show/id ');
    }

}
