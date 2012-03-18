<?php

namespace SinkIt\GameBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class GameController extends Controller {
    
    public function createAction() {
        return $this->render('SinkItGameBundle:Game:create.html.twig');
    }
}
