<?php
declare(strict_types=1);

namespace AuditorFramework\Module\CamLandingGenerator\Domain\VO;

use TheCodeFighters\Bundle\AuditorFramework\Common\Types\Domain\Id;
use TheCodeFighters\Bundle\AuditorFramework\Common\Types\Domain\ValueObject;

class WebUrl extends Id
{

    public function __construct(
        string $value
    ) {
        $this->guard($value);
        parent::__construct($value);
    }


    private function guard(string $value): void
    {
    }
}
