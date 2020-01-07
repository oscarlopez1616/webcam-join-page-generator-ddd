<?php
declare(strict_types=1);

namespace WebCamScrapper\Module\CamLandingGenerator\Application\Command\KeepUpdatedCamUnitById;


use TheCodeFighters\Bundle\AuditorFramework\Common\Types\Application\CommandBus\Command;
use WebCamScrapper\Module\CamLandingGenerator\Domain\VO\CamUnitId;

final class CreateCamUnitCommand implements Command
{
    /**
     * @var string
     */
    private $id;

    /**
     * CreateCamUnitCommand constructor.
     * @param string $id
     */
    public function __construct(string $id)
    {
        $this->id = $id;
    }

    public function id(): string
    {
        return $this->id;
    }

}
