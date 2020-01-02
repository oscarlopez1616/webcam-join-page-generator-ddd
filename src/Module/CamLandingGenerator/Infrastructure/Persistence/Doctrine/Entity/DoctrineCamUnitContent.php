<?php
declare(strict_types=1);

namespace AuditorFramework\Module\CamLandingGenerator\Infrastructure\Persistence\Doctrine\Entity;

use TheCodeFighters\Bundle\AuditorFramework\Common\Types\Domain\Uuid;
use AuditorFramework\Module\CamLandingGenerator\Domain\VO\CamUnitContent;

class DoctrineCamUnitContent extends CamUnitContent
{
    /**
     * @var Uuid
     */
    private $id;
}
