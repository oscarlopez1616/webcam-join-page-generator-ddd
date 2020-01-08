<?php
declare(strict_types=1);

namespace WebCamScrapper\Module\CamLandingGenerator\Domain\ReadModel;

use WebCamScrapper\Module\CamLandingGenerator\Domain\CamUnit;

interface CamUnitReadModelRepository
{
    public function findOrFailNewestCamUnit(): CamUnit;
}
