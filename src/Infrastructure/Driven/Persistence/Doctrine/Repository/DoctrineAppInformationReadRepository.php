<?php

declare(strict_types=1);

namespace App\Infrastructure\Driven\Persistence\Doctrine\Repository;

use App\Application\Repository\App\AppInformationReadRepository;
use App\Domain\App\AppInformation;
use App\Domain\App\AppInformationId;
use App\Domain\App\Exception\AppInformationNotFoundException;
use App\Domain\App\VO\Identificator;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Validator\Constraints\Ulid;

/** @extends \Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository<AppInformation> */
final class DoctrineAppInformationReadRepository extends ServiceEntityRepository implements AppInformationReadRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AppInformation::class);
    }

    public function get(AppInformationId $id): AppInformation
    {
        /** @var null|AppInformation $appInformation */
        $appInformation = $this->find((string) $id);

        if (null === $appInformation) {
            throw AppInformationNotFoundException::withId((string) $id);
        }

        return $appInformation;
    }

    public function nextId(): AppInformationId
    {
        return AppInformationId::fromString((string) new Ulid());
    }

    public function findByIdentificator(Identificator $identificator): ?AppInformation
    {
        return $this->findOneBy(['app.identificator' => (string) $identificator]);
    }
}
