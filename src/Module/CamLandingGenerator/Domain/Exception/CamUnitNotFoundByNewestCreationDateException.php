<?php

namespace AuditorFramework\Module\CamLandingGenerator\Domain\Exception;

use TheCodeFighters\Bundle\AuditorFramework\Common\Types\Domain\Exception\DomainEntityNotFoundByIdException;
use AuditorFramework\Module\CamLandingGenerator\Domain\CamUnit;

class CamUnitNotFoundByNewestCreationDateException extends DomainEntityNotFoundByIdException
{
    protected function entityNamespace(): string
    {
        return CamUnit::class;
    }
}
