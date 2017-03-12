<?php
namespace ArticleBundle\Entity;
 
use Doctrine\ORM\EntityRepository;
 
/**
 * Article Repository
 */
class ArticleRepository extends EntityRepository
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
    
    public function getArticleTries()
    {

        $qb = $this->createQueryBuilder('a')
            ->orderBy('a.libelle', 'ASC');
 
        return $qb;
         
    }
}