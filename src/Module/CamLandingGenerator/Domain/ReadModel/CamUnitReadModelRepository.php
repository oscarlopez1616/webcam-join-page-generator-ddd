<?php
declare(strict_types=1);

namespace AuditorFramework\Module\CamLandingGenerator\Domain\ReadModel;

use AuditorFramework\Module\CamLandingGenerator\Domain\CamUnit;

interface CamUnitReadModelRepository
{
    public function findOrNewestCamUnit(): CamUnit;
}
