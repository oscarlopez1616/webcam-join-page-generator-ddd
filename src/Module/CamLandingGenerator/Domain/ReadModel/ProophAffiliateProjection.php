<?php

namespace WebCamScrapper\Module\CamLandingGenerator\Domain\ReadModel;

use Prooph\Bundle\EventStore\Projection\ReadModelProjection;
use Prooph\EventStore\Projection\ReadModelProjector;
use WebCamScrapper\Module\CamLandingGenerator\Domain\Event\AffiliateWasCreatedEvent;
use WebCamScrapper\Module\CamLandingGenerator\Infrastructure\Persistence\Projection\MysqlAffiliateProjector;

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
                        /** @var MysqlAffiliateProjector $readModel */
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
