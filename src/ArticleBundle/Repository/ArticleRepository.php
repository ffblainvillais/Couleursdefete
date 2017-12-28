<?php

namespace ArticleBundle\Repository;

use Doctrine\ORM\EntityRepository;
use ArticleBundle\Entity\Article;
use ArticleBundle\Entity\Lot;

class ArticleRepository extends EntityRepository
{
    /**
     * Return query for paginate Orders
     *
     * @return \Doctrine\ORM\Query
     */
    public function getArticlesForPaginate()
    {
        $qb = $this->getEntityManager()->createQueryBuilder();

        $query = $qb
            ->select('a')
            ->from(Article::class, 'a')
            ->orderBy("LOWER(a.libelle)",'ASC')
            ->getQuery();

        return $query;
    }

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