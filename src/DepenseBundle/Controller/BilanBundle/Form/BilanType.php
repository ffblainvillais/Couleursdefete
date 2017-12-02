<?php

namespace BilanBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use CommandeBundle\Entity\AnneeRepository;
use ArticleBundle\Entity\ArticleRepository;


class BilanType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('annee', EntityType::class,  array (
                'label' => 'Annee',
                'class' => 'CommandeBundle:Annee',
                'query_builder' => function(AnneeRepository $ar)
                    {
                        return $ar->getAnnees();
                    },
            ))
                            
                            
                            
            ->add('submit', SubmitType::class, array('label' => 'Valider', 'attr' => array('class' => 'btn btn-primary')))
            ->getForm()
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            
        ));
    }
}
