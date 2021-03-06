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
    public function getLastNumber(){
        $qb = $this->_em->createQueryBuilder();
        $qb->select('MAX(c.number) as lastNumber')
            ->from('ApaStoryBundle:Chapter', 'c');

        return $qb->getQuery()->getSingleResult();
    }
}
