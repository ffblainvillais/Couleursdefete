<?php

namespace CommandeBundle\Repository;

use Doctrine\ORM\EntityRepository;

class CommandeRepository extends EntityRepository
{

    /**
     * Return query for paginate Orders
     *
     * @return \Doctrine\ORM\Query
     */
    public function getOrdersForPaginate()
    {
        $query = $this->createQueryBuilder("c")
            ->orderBy("c.id",'DESC')
            ->where("c.archive = 0")
            ->getQuery();

        return $query;
    }

    /**
     * Return query for paginate archived Orders
     *
     * @return \Doctrine\ORM\Query
     */
    public function getArchivedOrdersForPaginate()
    {
        $query = $this->createQueryBuilder("c")
            ->orderBy("c.id",'DESC')
            ->where("c.archive = 1")
            ->getQuery();

        return $query;
    }

    /**
     * Returns Order Entity who has been payed or have acompte
     *
     * @param $year
     * @return array
     */
    public function getOrdersForBalanceSheet($year)
    {
        $query = $this->createQueryBuilder('c')
            ->orderBy('c.date', 'ASC')
            ->where('c.paye = 1 OR c.acompte is not null')
            ->andWhere('c.annee = :year')
            ->getQuery();

        $query->setParameter('year', $year);

        return $query->getResult();
    }

}