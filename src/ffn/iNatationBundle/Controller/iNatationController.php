<?php

namespace ffn\iNatationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class iNatationController extends Controller
{
    public function accueilAction()
    {
        return $this->render('@ffniNatation/Default/accueil.html.twig');
    }
}
