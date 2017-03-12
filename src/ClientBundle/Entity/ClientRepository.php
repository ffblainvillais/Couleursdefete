<?php
namespace ClientBundle\Entity;
 
use Doctrine\ORM\EntityRepository;
 
/**
 * Client Repository
 */
class ClientRepository extends EntityRepository
{
     
    public function getClients($user)
    {
        $qb = $this->createQueryBuilder('c')
            ->where('c.utilisateur = :user')
            ->setParameter('user', $user)
            ->orderBy('c.nom', 'ASC');
 
        return $qb;
    }
}