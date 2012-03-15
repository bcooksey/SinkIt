<?php

namespace SinkIt\GameBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction($name)
    {
        return $this->render('SinkItGameBundle:Default:index.html.twig', array('name' => $name));
    }
}
