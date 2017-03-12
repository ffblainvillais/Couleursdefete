<?php
namespace ActionBundle\Entity;
 
use Doctrine\ORM\EntityRepository;
 
/**
 * Action Repository
 */
class ActionRepository extends EntityRepository
{
     
    public function getArticleDisponibleStock($user)
    {

        $qb = $this->createQueryBuilder('a')
            ->where('a.quantite > :limite AND a.utilisateur = :user')
            ->setParameter('limite', 0)
            ->setParameter('user', $user)
            ->orderBy('a.libelle', 'ASC');
 
        return $qb;
         
    }
    
    
    public function getAction(){
        
        $qb = $this->createQueryBuilder('a');
            

 
        return $qb;
    }
}