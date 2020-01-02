<?php
declare(strict_types=1);

namespace AuditorFramework\Module\CamLandingGenerator\Application\Command\CreateCamUnit;

use GuzzleHttp\Exception\GuzzleException;
use TheCodeFighters\Bundle\AuditorFramework\Common\Types\Application\CommandBus\Command;
use TheCodeFighters\Bundle\AuditorFramework\Common\Types\Application\CommandBus\CommandHandler;
use TheCodeFighters\Bundle\AuditorFramework\Common\Types\Domain\WriteModelRepository;
use AuditorFramework\Module\CamLandingGenerator\Domain\CamUnit;
use AuditorFramework\Module\CamLandingGenerator\Domain\CamUnitContentAdapter;
use AuditorFramework\Module\CamLandingGenerator\Domain\VO\CamUnitId;

class CreateCamUnitHandler implements CommandHandler
{
    /**
     * @var WriteModelRepository
     */
    private $writeModelRepository;

    /**
     * @var CamUnitContentAdapter
     */
    private $camContentAdapter;


    public function __construct(
        WriteModelRepository $writeModelRepository,
        CamUnitContentAdapter $camContentAdapter
    ) {

        $this->writeModelRepository = $writeModelRepository;
        $this->camContentAdapter = $camContentAdapter;
    }

    /**
     * @param Command|CreateCamUnitCommand $command
     * @throws GuzzleException
     */
    public function __invoke(Command $command): void
    {
        $camUnit = CamUnit::create(
            new CamUnitId($command->id()),
            $this->camContentAdapter->camContents()
        );

        $this->writeModelRepository->save([$camUnit]);
    }
}
