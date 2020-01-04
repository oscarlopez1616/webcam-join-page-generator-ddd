<?php
declare(strict_types=1);

namespace WebCamScrapper\Module\CamLandingGenerator\Infrastructure\Persistence\Doctrine\Type;

use TheCodeFighters\Bundle\AuditorFramework\Common\Types\Infrastructure\Persistence\Doctrine\Type\DoctrineId;
use WebCamScrapper\Module\CamLandingGenerator\Domain\VO\CamUnitId;

class DoctrineCamUnitId extends DoctrineId
{
    public function className(): string
    {
        return CamUnitId::class;
    }
}
