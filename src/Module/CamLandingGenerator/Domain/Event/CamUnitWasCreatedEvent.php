<?php
declare(strict_types=1);

namespace WebCamScrapper\Module\CamLandingGenerator\Domain\Event;

use TheCodeFighters\Bundle\AuditorFramework\Common\Types\Domain\Event\Event;
use WebCamScrapper\Module\CamLandingGenerator\Domain\DataTransformer\CamUnitContentDataTransformer;
use WebCamScrapper\Module\CamLandingGenerator\Domain\VO\CamUnitContent;
use WebCamScrapper\Module\CamLandingGenerator\Domain\VO\CamUnitId;
use function Lambdish\Phunctional\map;

class CamUnitWasCreatedEvent extends Event
{
    /**
     * @var CamUnitContent[]
     */
    private $camUnitsContent;


    /**
     * CamUnitWasCreatedEvent constructor.
     * @param CamUnitId $id
     * @param CamUnitContent[] $camUnitsContent
     */
    public function __construct(
        CamUnitId $id,
        array $camUnitsContent
    ) {
        $this->camUnitsContent = $camUnitsContent;
        parent::__construct($id);
    }

    protected function getIdClass(): string
    {
        return CamUnitId::class;
    }

    protected function internalUnSerialize(): void
    {
        $payload = $this->payload();

        $this->camUnitsContent = map(
            function (array $camUnitContentScalar): CamUnitContent {
                return CamUnitContentDataTransformer::reverseTransform($camUnitContentScalar);
            }
            ,
            $payload['cam_units']
        );

    }

    public function internalSerialize(): array
    {
        $internalSerialize['cam_units'] = map(
            function (CamUnitContent $camUnitContent): array {
                return CamUnitContentDataTransformer::transform($camUnitContent);
            }
            ,
            $this->camUnitsContent
        );

        return $internalSerialize;
    }

    /**
     * @return CamUnitContent[]
     */
    public function camUnitsContent(): array
    {
        return $this->camUnitsContent;
    }
}
