<?php

namespace DepenseBundle\Service;

use Doctrine\ORM\EntityManagerInterface;

class SpentService {

    protected $em;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->em = $entityManager;
        return $this;
    }

}