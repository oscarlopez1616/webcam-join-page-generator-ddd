<?php
declare(strict_types=1);

namespace WebCamScrapper\Module\CamLandingGenerator\Domain\ReadModel;

use WebCamScrapper\Module\CamLandingGenerator\Domain\Affiliate;
use WebCamScrapper\Module\CamLandingGenerator\Domain\VO\WebUrl;

interface AffiliateReadModelRepository
{
    public function findOrFailAffiliateById(WebUrl $webUrl): Affiliate;
}
