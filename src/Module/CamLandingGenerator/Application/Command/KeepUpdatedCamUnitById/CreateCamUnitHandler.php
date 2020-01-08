<?php
declare(strict_types=1);

namespace WebCamScrapper\Module\CamLandingGenerator\Application\Command\KeepUpdatedCamUnitById;

use GuzzleHttp\Exception\GuzzleException;
use TheCodeFighters\Bundle\AuditorFramework\Common\Types\Application\CommandBus\Command;
use TheCodeFighters\Bundle\AuditorFramework\Common\Types\Application\CommandBus\CommandHandler;
use TheCodeFighters\Bundle\AuditorFramework\Common\Types\Domain\WriteModelRepository;
use TheCodeFighters\Bundle\AuditorFramework\Common\Types\Infrastructure\Exception\AggregateRootNotFoundInEventStoreException;
use WebCamScrapper\Module\CamLandingGenerator\Domain\CamUnit;
use WebCamScrapper\Module\CamLandingGenerator\Domain\CamUnitContentAdapter;
use WebCamScrapper\Module\CamLandingGenerator\Domain\VO\CamUnitId;

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
        try {
            /**
             * @var CamUnit $camUnit
             */
            $camUnit = $this->writeModelRepository->findAggregateByAggregateId(
                new CamUnitId($command->id()),
                CamUnit::class
            );

            $camUnit->updateAggregate($this->camContentAdapter->camContents());

            $this->writeModelRepository->save([$camUnit]);
        } catch (AggregateRootNotFoundInEventStoreException $e) {
            $camUnit = CamUnit::create(
                new CamUnitId($command->id()),
                $this->camContentAdapter->camContents()
            );

            $this->writeModelRepository->save([$camUnit]);
        }
    }
}
