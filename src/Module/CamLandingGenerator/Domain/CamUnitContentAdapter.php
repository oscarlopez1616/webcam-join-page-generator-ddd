<?php
declare(strict_types=1);

namespace AuditorFramework\Module\CamLandingGenerator\Domain;

use GuzzleHttp\Exception\GuzzleException;
use AuditorFramework\Module\CamLandingGenerator\Domain\VO\CamUnitContent;

interface CamUnitContentAdapter
{

    /**
     * @return CamUnitContent[]
     *
     * @throws GuzzleException
     */
    public function camContents(): array;

}
