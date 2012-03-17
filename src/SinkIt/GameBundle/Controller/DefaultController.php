<?php

namespace SinkIt\GameBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction()
    {
        return $this->render('SinkItGameBundle:Default:index.html.twig');
    }
}
