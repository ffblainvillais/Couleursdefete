<?php

namespace ArticleBundle\Service;

use Doctrine\ORM\EntityManagerInterface;

use ArticleBundle\Entity\Article;

class ArticleService{

    protected $em;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->em = $entityManager;
    }

    /**
     * Return Article from this id
     *
     * @param int $id
     * @return mixed
     */
    public function getArticleById($id)
    {
        return $this->em->getRepository(Article::class)->findOneById($id);
    }



}