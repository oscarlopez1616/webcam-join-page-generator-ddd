<?php
declare(strict_types=1);

namespace AuditorFramework\Module\CamLandingGenerator\Domain\VO;

class AffiliateName extends SimpleValueObject
{
    public function __construct(string $value)
    {
        parent::__construct($value);
    }

    protected function guard(string $value): void
    {
    }
}
