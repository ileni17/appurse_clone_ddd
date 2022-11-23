<?php

declare(strict_types=1);

namespace App\Infrastructure\Driven\Persistence\Doctrine\Repository;

use App\Application\Repository\App\AppInformationWriteRepository;
use App\Domain\App\AppInformation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;

/** @extends \Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository<AppInformation> */
final class DoctrineAppInformationWriteRepository extends ServiceEntityRepository implements AppInformationWriteRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AppInformation::class);
    }

    public function save(AppInformation $appInformation): void
    {
        $this->_em->persist($appInformation);
        $this->_em->flush();
    }
}
