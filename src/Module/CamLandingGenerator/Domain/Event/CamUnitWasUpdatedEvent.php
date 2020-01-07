<?php
declare(strict_types=1);

namespace WebCamScrapper\Module\CamLandingGenerator\Domain\Event;

use WebCamScrapper\Module\CamLandingGenerator\Domain\VO\CamUnitContent;
use WebCamScrapper\Module\CamLandingGenerator\Domain\VO\CamUnitId;

class CamUnitWasUpdatedEvent extends CamUnitWasCreatedEvent
{
    /**
     * CamUnitWasCreatedEvent constructor.
     * @param CamUnitId $id
     * @param CamUnitContent[] $camUnitsContent
     */
    public function __construct(
        CamUnitId $id,
        array $camUnitsContent
    ) {
        parent::__construct($id,$camUnitsContent);
    }
}
