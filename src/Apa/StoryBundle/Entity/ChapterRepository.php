<?php

namespace Apa\StoryBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * ChapterRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ChapterRepository extends EntityRepository
{
    public function getIdByOrder($order)
    {    
        $qb = $this->_em->createQueryBuilder();
        $qb->select('c.id')
           ->from('ApaStoryBundle:Chapter', 'c')
           ->orderBy('c.id', $order);
           
        return $qb->getQuery()
                ->setMaxResults(1)
                ->getResult();
    }
}