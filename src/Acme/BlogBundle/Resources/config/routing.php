<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('acme_blog_homepage', new Route('/hello/{name}', array(
    '_controller' => 'AcmeBlogBundle:Default:index',
)));

return $collection;
