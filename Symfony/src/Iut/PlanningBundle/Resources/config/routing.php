<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('iut_planning_homepage', new Route('/hello/{name}', array(
    '_controller' => 'IutPlanningBundle:Default:index',
)));

return $collection;
