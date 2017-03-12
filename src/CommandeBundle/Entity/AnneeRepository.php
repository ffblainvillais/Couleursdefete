<?php
namespace CommandeBundle\Entity;
 
use Doctrine\ORM\EntityRepository;
 
/**
 * Annee Repository
 */
class AnneeRepository extends EntityRepository
{
     
    public function getAnnees()
    {
        $qb = $this->createQueryBuilder('a')
            ->orderBy('a.id', 'ASC');
 
        return $qb;
    }
}