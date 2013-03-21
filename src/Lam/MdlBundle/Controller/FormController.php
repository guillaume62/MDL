<?php
    
namespace Lam\MdlBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Lam\MdlBundle\Form\Type\InscriptionType;
use Lam\MdlBundle\Entity\Inscription;

class FormController extends Controller
{
    public function ajoutAction()
    {
        $uneInscription = new Inscription();
        $request = $this->getRequest();
        $form = $this->createForm(new InscriptionType(), $uneInscription);
        $mess = "";
        
        if ($request->getMethod() == "POST")
        {
            $form->bindRequest($request);
            
            if ($form->isValid())
            {
                $em = $this->getDoctrine()->getEntityManager();
                $em->persist($uneInscription);
                $em->flush();
                $mess = "La nouvelle inscription a bien été effectuée.";
                
                $form = $this->createForm(new InscriptionType(), new Inscription()); // Initialisation
                // return $this->redirect($this->generateUrl("route", array())); // For redirection
            }
        }
        
        return $this->container->get("templating")->renderResponse
        (
             "LamMdlBundle:Inscription:inscription.html.twig",
             array
             (
                 "form" => $form->createView(),
                 "message" => $mess                    
             )
         );
    }
}
