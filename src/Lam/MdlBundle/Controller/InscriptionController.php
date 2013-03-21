<?php

namespace Lam\MdlBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class InscriptionController extends Controller
{    
    public function indexAction()
    {
        
        return $this->render('LamMdlBundle:Inscription:inscription.html.twig');
    }
}
