<?php
declare(strict_types=1);

namespace AuditorFramework\Module\CamLandingGenerator\Infrastructure\Persistence\Doctrine;

use Doctrine\ORM\EntityManager;
use Exception;
use AuditorFramework\Module\CamLandingGenerator\Domain\CamUnit;
use AuditorFramework\Module\CamLandingGenerator\Domain\Exception\CamUnitNotFoundByNewestCreationDateException;
use AuditorFramework\Module\CamLandingGenerator\Domain\ReadModel\CamUnitReadModelRepository;

class DoctrineCamUnitReadModelRepository implements CamUnitReadModelRepository
{
    /**
     * @var EntityManager
     */
    private $entityManager;

    public function __construct(EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function findOrNewestCamUnit(): CamUnit
    {

        $query = $this->entityManager
            ->getRepository(CamUnit::class)
            ->createQueryBuilder('camUnit')
            ->select(  )
            ->orderBy('camUnit.createdAt', 'DESC');

        try {
            $camUnit = $query->getQuery()->getResult()[0];
        }catch (Exception $e){
            throw new CamUnitNotFoundByNewestCreationDateException();
        }

        if (!$camUnit instanceof CamUnit) {
            throw new CamUnitNotFoundByNewestCreationDateException();
        }
        return $camUnit;
    }
}
