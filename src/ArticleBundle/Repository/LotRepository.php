<?php

namespace ArticleBundle\Repository;

use Doctrine\ORM\EntityRepository;
use ArticleBundle\Entity\Lot;

class LotRepository extends EntityRepository
{
    /**
     * Return query for paginate Lots
     *
     * @return \Doctrine\ORM\Query
     */
    public function getLotForPaginate()
    {
        $qb = $this->getEntityManager()->createQueryBuilder();

        $query = $qb
            ->select('l')
            ->from(Lot::class, 'l')
            ->orderBy("LOWER(l.libelle)",'ASC')
            ->getQuery();

        return $query;
    }

}