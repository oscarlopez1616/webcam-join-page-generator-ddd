<?php
declare(strict_types=1);

namespace WebCamScrapper\Module\CamLandingGenerator\Domain;

use WebCamScrapper\Module\CamLandingGenerator\Domain\VO\CamUnitContent;

interface CamUnitContentAdapter
{

    /**
     * @return CamUnitContent[]
     */
    public function camContents(): array;

}
