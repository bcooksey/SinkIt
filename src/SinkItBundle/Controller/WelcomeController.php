<?php

namespace SinkItBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class WelcomeController extends Controller {

    /**
     * @Route("/", name="_sinkit")
     * @Template()
     */
    public function indexAction() {
        return $this->render('SinkItBundle:Welcome:index.html.twig');
    }
}

?>
