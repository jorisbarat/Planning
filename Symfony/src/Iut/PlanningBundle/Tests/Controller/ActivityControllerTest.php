<?php

namespace Iut\PlanningBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ActivityControllerTest extends WebTestCase
{
    public function testIutplanningbundle:saisie()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/IutPlanningBundle:saisie');
    }

    public function testIutplanningbundle:affichagetsactivity()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/IutPlanningBundle:affichageTsActivity');
    }

    public function testIutplanningbundle:affichagetsjour()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/IutPlanningBundle:affichageTsJour');
    }

    public function testSuppresion()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/suppresion');
    }

    public function testModification()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/modification');
    }

}
