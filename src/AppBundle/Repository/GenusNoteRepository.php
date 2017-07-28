<?php

namespace AppBundle\Repository;


use AppBundle\Entity\Genus;
use Doctrine\ORM\EntityRepository;

class GenusNoteRepository extends EntityRepository {
    /**
     * @return Genus[]
     */
    public function findAllRecentNotesForGenus(Genus $genus) {
        return $this->createQueryBuilder('genus_note')
            ->andWhere('genus_note.genus = :genus') # SELECT * FROM genus_note WHERE genus_id = **
            ->setParameter('genus', $genus)
            ->andWhere('genus_note.createdAt > :recentDate')
            ->setParameter('recentDate', new \DateTime('-3 months'))
            ->getQuery()
            ->execute();
    }
}