<?php
declare(strict_types=1);

namespace AuditorFramework\Module\CamLandingGenerator\Domain\ReadModel;

use AuditorFramework\Module\CamLandingGenerator\Domain\Affiliate;
use AuditorFramework\Module\CamLandingGenerator\Domain\VO\WebUrl;

interface AffiliateReadModelRepository
{
    public function findOrFailAffiliateById(WebUrl $webUrl): Affiliate;
}
