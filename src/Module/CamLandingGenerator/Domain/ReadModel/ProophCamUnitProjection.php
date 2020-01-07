<?php

namespace WebCamScrapper\Module\CamLandingGenerator\Domain\ReadModel;

use Prooph\Bundle\EventStore\Projection\ReadModelProjection;
use Prooph\EventStore\Projection\ReadModelProjector;
use WebCamScrapper\Module\CamLandingGenerator\Domain\Event\CamUnitWasCreatedEvent;
use WebCamScrapper\Module\CamLandingGenerator\Domain\Event\CamUnitWasUpdatedEvent;
use WebCamScrapper\Module\Financial\Infrastructure\Persistence\Projection\MysqlLoanReadModel;

/**
 * @method readModel()
 */
class ProophCamUnitProjection implements ReadModelProjection
{
    public function project(ReadModelProjector $projector): ReadModelProjector
    {
        $projector->fromStream('auditor_framework_event_stream')
            ->when(
                [
                    CamUnitWasCreatedEvent::class => function ($state, CamUnitWasCreatedEvent $event) {
                        /** @var MysqlLoanReadModel $readModel */
                        $this->readModel()->stack(
                            'insert',
                            [
                                'id' => $event->aggregateId(),
                                'play_head' => $event->metadata()['_aggregate_version'],
                                'created_at' => $event->createdAt()->format('Y-m-d H:i:s'),
                                'updated_at' => $event->updatedAt()->format('Y-m-d H:i:s'),
                                $event->internalSerialize()
                            ]
                        );
                        return $state;
                    },
                    CamUnitWasUpdatedEvent::class => function ($state, CamUnitWasUpdatedEvent $event) {
                        /** @var MysqlLoanReadModel $readModel */
                        $this->readModel()->stack(
                            'update',
                            [
                                'id' => $event->aggregateId(),
                                'play_head' => $event->metadata()['_aggregate_version'],
                                'updated_at' => $event->updatedAt()->format('Y-m-d H:i:s'),
                                $event->internalSerialize()
                            ],
                            [
                                'id' => $event->aggregateId()
                            ]
                        );
                        return $state;
                    }
                ]
            );
        return $projector;
    }
}
