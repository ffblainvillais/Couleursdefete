<?php

namespace ClientBundle\Service;

use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;

use ClientBundle\Entity\Client;
use ClientBundle\Form\ClientType;
use ClientBundle\Form\ContactClientType;


class CustomerService {

    protected $em;
    protected $paginator;

    public function __construct(EntityManagerInterface $entityManager, PaginatorInterface $paginator)
    {
        $this->em           = $entityManager;
        $this->paginator    = $paginator;
        return $this;
    }

    /**
     * Return paginate customers
     *
     * @param $request
     * @return \Knp\Component\Pager\Pagination\PaginationInterface
     */
    public function getPaginateCustomers($request)
    {
        $customerRepository = $this->em->getRepository('ClientBundle:Client');

        $query = $customerRepository->createQueryBuilder("c")
            ->orderBy("c.id",'DESC')
            ->getQuery();

        $clients  = $this->paginator->paginate($query,$request->query->get('page', 1),5);

        return $clients;
    }

    /**
     * Return Customer with lastname
     *
     * @param string $lastName
     * @return Client|null|object
     */
    public function getCustomerByLastName($lastName)
    {
        $customer = $this->em->getRepository(Client::class)->findOneBy(['nom' => $lastName]);

        return $customer;
    }

    /**
     * Create customer with array of info
     *
     * @param array $customerInfo
     * @return Client
     */
    public function add($customerInfo)
    {
        $customer = new Client();

        $customer->setPrenom($customerInfo['prenom']);
        $customer->setNom($customerInfo['nom']);
        $customer->setMail($customerInfo['mail']);
        $customer->setAdresse($customerInfo['adresse']);

        $this->em->persist($customer);
        $this->em->flush();
        
        return $customer;
    }


}