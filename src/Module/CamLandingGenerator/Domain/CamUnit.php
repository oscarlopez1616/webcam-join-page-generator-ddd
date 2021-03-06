<?php
declare(strict_types=1);

namespace WebCamScrapper\Module\CamLandingGenerator\Domain;

use Doctrine\ORM\PersistentCollection;
use TheCodeFighters\Bundle\AuditorFramework\Common\Types\Domain\AggregateRoot;
use WebCamScrapper\Module\CamLandingGenerator\Domain\Event\CamUnitWasCreatedEvent;
use WebCamScrapper\Module\CamLandingGenerator\Domain\Event\CamUnitWasUpdatedEvent;
use WebCamScrapper\Module\CamLandingGenerator\Domain\VO\CamUnitContent;
use WebCamScrapper\Module\CamLandingGenerator\Domain\VO\CamUnitId;

class CamUnit extends AggregateRoot
{
    /**
     * @var CamUnitContent[]|PersistentCollection
     */
    private $camUnitsContent;

    /**
     * @param CamUnitId $id
     * @param CamUnitContent[] $camUnitsContent
     * @return CamUnit
     */
    public static function create(
        CamUnitId $id,
        array $camUnitsContent
    ): self {

        $camUnitAggregateRoot = new self();

        $camUnitAggregateRoot->recordThat(
            new CamUnitWasCreatedEvent(
                $id,
                $camUnitsContent
            )
        );

        return $camUnitAggregateRoot;

    }

    /** @noinspection PhpUnused */
    public function applyCamUnitWasCreatedEvent(CamUnitWasCreatedEvent $event)
    {
        $this->id = $event->id();
        $this->createdAt = $event->createdAt();
        $this->updatedAt = $event->updatedAt();
        $this->camUnitsContent = $event->camUnitsContent();
    }

    /**
     * @param CamUnitContent[] $camUnitsContent
     */
    public function updateAggregate( array $camUnitsContent){
        $this->recordThat(
            new CamUnitWasUpdatedEvent(
                $this->id(),
                $camUnitsContent
            )
        );
    }

    /** @noinspection PhpUnused */
    public function applyCamUnitWasUpdatedEvent(CamUnitWasUpdatedEvent $event)
    {
        $this->updatedAt = $event->updatedAt();
        $this->camUnitsContent = $event->camUnitsContent();
    }



    protected function getChildEntities(): array
    {
        return [];
    }

    public function id(): CamUnitId
    {
        /** @noinspection PhpIncompatibleReturnTypeInspection */
        return $this->id;
    }

    public function camUnitsContent( int $offset=0, int $limit=36): array
    {
        if(get_class($this->camUnitsContent) === PersistentCollection::class){
            return $this->camUnitsContent->slice($offset*$limit,$limit);
        }
        return $this->camUnitsContent;
    }

}
