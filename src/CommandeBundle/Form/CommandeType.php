<?php

namespace CommandeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use ClientBundle\Entity\ClientRepository;


class CommandeType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        //recupère la variable transmise en attribut
        $this->user =  $options['attr']['user'];
        
        $builder
            ->add('libelle', TextType::class, array('label' => 'Nom commande'))
            ->add('client', EntityType::class,  array (
                'label' => 'Client',
                'class' => 'ClientBundle:Client',
                'query_builder' => function(ClientRepository $cr)
                    {
                        return $cr->getClients();
                    },
            ))
            ->add('partenaire', EntityType::class, array(
                'class' => 'PartenaireBundle:Partenaire',
                'label' => 'Partenaire', 
                'placeholder' => 'Pas de partenaire',
                'empty_data'  => null,
                'required' => false
            ))
            ->add('typeEvenement', TextType::class, array('label' => 'Type d\'evenement'))
            ->add('dateEvenement', DateType::class, array('label' => 'Date evenement'))
            
                    
            ->add('submit', SubmitType::class, array('label' => 'Valider', 'attr' => array('class' => 'btn btn-primary' )))
            ->getForm()
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'CommandeBundle\Entity\Commande'
        ));
    }
}
