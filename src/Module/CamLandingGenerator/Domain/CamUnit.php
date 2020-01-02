<?php
declare(strict_types=1);

namespace AuditorFramework\Module\CamLandingGenerator\Domain;

use AuditorFramework\Module\CamLandingGenerator\Domain\Event\CamUnitWasCreatedEvent;
use AuditorFramework\Module\CamLandingGenerator\Domain\VO\CamUnitContent;
use AuditorFramework\Module\CamLandingGenerator\Domain\VO\CamUnitId;
use Doctrine\ORM\PersistentCollection;
use TheCodeFighters\Bundle\AuditorFramework\Common\Types\Domain\AggregateRoot;

class CamUnit extends AggregateRoot
{
    /**
     * @var CamUnitContent[]
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

    protected function getChildEntities(): array
    {
        return [];
    }

    public function id(): CamUnitId
    {
        /** @noinspection PhpIncompatibleReturnTypeInspection */
        return $this->id;
    }

    public function camUnitsContent(): array
    {
        if(get_class($this->camUnitsContent) === PersistentCollection::class){
            return $this->camUnitsContent->toArray();
        }
        return $this->camUnitsContent;
    }

}
