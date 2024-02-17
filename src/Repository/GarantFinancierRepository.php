<?php

namespace App\Repository;

use App\Entity\GarantFinancier;
use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<GarantFinancier>
 *
 * @method GarantFinancier|null find($id, $lockMode = null, $lockVersion = null)
 * @method GarantFinancier|null findOneBy(array $criteria, array $orderBy = null)
 * @method GarantFinancier[]    findAll()
 * @method GarantFinancier[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GarantFinancierRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, GarantFinancier::class);
    }


    public function save(GarantFinancier $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }


    public function findGarantByUser(User $user): ?GarantFinancier
    {
        return $this->findOneBy(['user' => $user]);
    }

    public function countDossiersWithStatus(int $status): int
    {
        return $this->createQueryBuilder('g')
            ->select('COUNT(g.id)')
            ->where('g.statutDemande = :status')
            ->setParameter('status', $status)
            ->getQuery()
            ->getSingleScalarResult();
    }

    public function findByStatut(int $statut): array
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.statutDemande = :statut')
            ->setParameter('statut', $statut)
            ->orderBy('g.dateDemande', 'ASC')
            ->getQuery()
            ->getResult();
    }

    public function remove(GarantFinancier $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

}
