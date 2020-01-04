<?php
declare(strict_types=1);

namespace WebCamScrapper\Module\CamLandingGenerator\Infrastructure\CamUnitContentPort;

final class CamUnitDto
{
    /**
     * @var CamUnitContentDto[]
     */
    private $camUnitContentDto;

    /**
     * CamUnitDto constructor.
     * @param CamUnitContentDto[] $camUnitContentDto
     */
    public function __construct(array $camUnitContentDto)
    {
        $this->camUnitContentDto = $camUnitContentDto;
    }

    /**
     * @return CamUnitContentDto[]
     */
    public function camUnitContentDto(): array
    {
        return $this->camUnitContentDto;
    }
}
