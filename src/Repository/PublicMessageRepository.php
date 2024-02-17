<?php

namespace App\Repository;

use App\Entity\PublicMessage;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PublicMessage>
 *
 * @method PublicMessage|null find($id, $lockMode = null, $lockVersion = null)
 * @method PublicMessage|null findOneBy(array $criteria, array $orderBy = null)
 * @method PublicMessage[]    findAll()
 * @method PublicMessage[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PublicMessageRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PublicMessage::class);
    }
    public function save(PublicMessage $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(PublicMessage $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }
}
