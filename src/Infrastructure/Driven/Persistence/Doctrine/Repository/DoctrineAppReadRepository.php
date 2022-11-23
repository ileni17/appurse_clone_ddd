<?php

declare(strict_types=1);

namespace App\Infrastructure\Driven\Persistence\Doctrine\Repository;

use App\Application\Repository\App\AppReadRepository;
use App\Domain\App\Exception\AppNotFoundException;
use App\Domain\App\App;
use App\Domain\App\AppId;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Uid\Ulid;

/**
 * @extends ServiceEntityRepository<App>
 */
class DoctrineAppReadRepository extends ServiceEntityRepository implements AppReadRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, App::class);
    }

    public function get(AppId $id): App
    {
        /** @var null|App $entity */
        $entity = $this->find((string) $id);

        if (null === $entity) {
            throw new AppNotFoundException();
        }

        return $entity;
    }

    public function nextId(): AppId
    {
        return AppId::fromString((string) Ulid::generate());
    }
}
