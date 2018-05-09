<?php

namespace ffn\iNatationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('@ffniNatation/Default/index.html.twig');
    }
}
