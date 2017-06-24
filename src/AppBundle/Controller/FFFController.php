<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class FFFController {
    /**
     * @Route("/www")
     */
    public function indexAction() {
        return new Response('Index page');
    }
}