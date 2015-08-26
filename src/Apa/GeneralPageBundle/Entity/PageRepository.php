<?php

namespace Apa\GeneralPageBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * PageRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class PageRepository extends EntityRepository
{
    public function getPage($title)
    {    
        $qb = $this->createQueryBuilder('p')
             ->where('p.title = :title')
             ->setParameter('title', $title);

        return $qb->getQuery()
                  ->getResult();
    }
}
