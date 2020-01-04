<?php
declare(strict_types=1);

namespace WebCamScrapper\Module\CamLandingGenerator\Domain;

use GuzzleHttp\Exception\GuzzleException;
use WebCamScrapper\Module\CamLandingGenerator\Domain\VO\CamUnitContent;

interface CamUnitContentAdapter
{

    /**
     * @return CamUnitContent[]
     *
     * @throws GuzzleException
     */
    public function camContents(): array;

}
