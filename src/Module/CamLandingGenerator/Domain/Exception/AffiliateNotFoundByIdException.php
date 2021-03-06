<?php

namespace WebCamScrapper\Module\CamLandingGenerator\Domain\Exception;

use TheCodeFighters\Bundle\AuditorFramework\Common\Types\Domain\Exception\DomainEntityNotFoundByIdException;
use WebCamScrapper\Module\CamLandingGenerator\Domain\Affiliate;

class AffiliateNotFoundByIdException extends DomainEntityNotFoundByIdException
{
    protected function entityNamespace(): string
    {
        return Affiliate::class;
    }
}
