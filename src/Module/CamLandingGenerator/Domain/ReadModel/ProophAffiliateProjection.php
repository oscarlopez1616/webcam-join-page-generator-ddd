<?php

namespace AuditorFramework\Module\CamLandingGenerator\Domain\ReadModel;

use AuditorFramework\Module\CamLandingGenerator\Domain\Event\AffiliateWasCreatedEvent;
use AuditorFramework\Module\Financial\Infrastructure\Persistence\Projection\MysqlLoanReadModel;
use Prooph\Bundle\EventStore\Projection\ReadModelProjection;
use Prooph\EventStore\Projection\ReadModelProjector;

/**
 * @method readModel()
 */
class ProophAffiliateProjection implements ReadModelProjection
{
    public function project(ReadModelProjector $projector): ReadModelProjector
    {
        $projector->fromStream('auditor_framework_event_stream')
            ->when(
                [
                    AffiliateWasCreatedEvent::class => function ($state, AffiliateWasCreatedEvent $event) {
                        /** @var MysqlLoanReadModel $readModel */
                        $this->readModel()->stack(
                            'insert',
                            array_merge(
                                [
                                'id' => $event->aggregateId(),
                                'play_head' => $event->metadata()['_aggregate_version'],
                                'created_at' => $event->createdAt()->format('Y-m-d H:i:s'),
                                'updated_at' => $event->updatedAt()->format('Y-m-d H:i:s')
                            ]
                                ,
                                $event->internalSerialize()
                            )
                        );
                        return $state;
                    }
                ]
            );
        return $projector;
    }
}
