<?php
namespace ClientBundle\Entity;
 
use Doctrine\ORM\EntityRepository;
 
/**
 * Client Repository
 */
class ClientRepository extends EntityRepository
{
     
    public function getClients()
    {
        $qb = $this->createQueryBuilder('c')
            ->orderBy('c.nom', 'ASC');
 
        return $qb;
    }
}