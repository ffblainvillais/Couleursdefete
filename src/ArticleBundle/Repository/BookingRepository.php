<?php

namespace ArticleBundle\Repository;

use Doctrine\ORM\EntityRepository;
use ArticleBundle\Entity\Reservation;

class BookingRepository extends EntityRepository
{
    /**
     * Return query for paginate Lots
     *
     * @return \Doctrine\ORM\Query
     */
    public function getBookingsForPaginate()
    {
        $dateDuJour = date("Y-m-d");

        $qb = $this->getEntityManager()->createQueryBuilder();

        $query = $qb
            ->select('r')
            ->from(Reservation::class, 'r')
            ->orderBy("LOWER(r.date)",'ASC')
            ->where("r.date > :dateDuJour")
            ->getQuery();

        $query->setParameter("dateDuJour", $dateDuJour);

        return $query;
    }

    public function getExcesReservation()
    {
        $dateDuJour = date("Y-m-d");

        $qb = $this->getEntityManager()->createQueryBuilder();

        $query = $qb
            ->select('r')
            ->from(Reservation::class, 'r')
            ->leftJoin('r.article', 'a')
            ->orderBy("LOWER(r.date)",'ASC')
            ->where("r.date > :dateDuJour")
            ->andWhere("r.quantite > a.quantite")
            ->getQuery();

        $query->setParameter("dateDuJour", $dateDuJour);

        return $query->getResult();
    }

}