<?php

declare(strict_types=1);

namespace WebCamScrapper\Module\CamLandingGenerator\Application\Query\FindJoinPageByAffiliateUrl;

class JoinPageDto
{
    /**
     * @var CamUnitContentWithAffiliateDataDto[]
     */
    private $camUnitContentWithAffiliateDataDto;

    /**
     * @param CamUnitContentWithAffiliateDataDto[] $camUnitContentWithAffiliateDataDto
     */
    public function __construct(
        array $camUnitContentWithAffiliateDataDto
    ) {
        $this->camUnitContentWithAffiliateDataDto = $camUnitContentWithAffiliateDataDto;
    }

    /**
     * @return CamUnitContentWithAffiliateDataDto[]
     */
    public function camUnitContentWithAffiliateDataDto(): array
    {
        return $this->camUnitContentWithAffiliateDataDto;
    }

}
