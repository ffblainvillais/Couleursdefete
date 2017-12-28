<?php

namespace CommandeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use ArticleBundle\Repository\ArticleRepository;
use CommandeBundle\Entity\Action;

class AjoutArticleCommandeType extends AbstractType
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

            ->add('article', EntityType::class,  array (
                'label' => 'Article',
                'class' => 'ArticleBundle:Article',
                'query_builder' => function(ArticleRepository $ar)
                    {
                        return $ar->getArticleDisponibleStock();
                    },
            ))
                            
            ->add('quantite', IntegerType::class)
                            
            ->add('action', EntityType::class, array('class' => Action::class,'choice_label' => 'libelle'))

     
                            
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
