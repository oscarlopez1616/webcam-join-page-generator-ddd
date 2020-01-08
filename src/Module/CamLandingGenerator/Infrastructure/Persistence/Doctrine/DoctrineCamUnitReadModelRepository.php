<?php
declare(strict_types=1);

namespace WebCamScrapper\Module\CamLandingGenerator\Infrastructure\Persistence\Doctrine;

use WebCamScrapper\Module\CamLandingGenerator\Domain\CamUnit;
use WebCamScrapper\Module\CamLandingGenerator\Domain\Exception\CamUnitNotFoundByNewestCreationDateException;
use WebCamScrapper\Module\CamLandingGenerator\Domain\ReadModel\CamUnitReadModelRepository;
use Doctrine\ORM\EntityManager;
use Exception;

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

    public function findOrFailNewestCamUnit(): CamUnit
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
