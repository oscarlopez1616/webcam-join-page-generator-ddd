<?php

namespace AuditorFramework\Module\CamLandingGenerator\Domain\Exception;

use TheCodeFighters\Bundle\AuditorFramework\Common\Types\Domain\Exception\DomainEntityNotFoundByIdException;
use AuditorFramework\Module\CamLandingGenerator\Domain\Affiliate;
use AuditorFramework\Module\Financial\Domain\Loan\Loan;

class AffiliateNotFoundByIdException extends DomainEntityNotFoundByIdException
{
    protected function entityNamespace(): string
    {
        return Affiliate::class;
    }
}
