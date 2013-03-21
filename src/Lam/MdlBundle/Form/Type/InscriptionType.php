<?php
namespace Lam\MdlBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;
use Lam\MdlBundle\Entity\Inscription;

class InscriptionType extends AbstractType
{ 
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder->add('id', 'text', array('label' => 'Identifiant : '))
                ->add('nom', 'text', array('label' => 'Nom : '))
                ->add('prenom', 'text', array('label' => 'Prénom : '));
    }
    
    public function getName()
    {
        return 'Lam_MdlBundle_InscriptionType';
    }
}
?>