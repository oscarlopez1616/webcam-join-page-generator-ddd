<?php
declare(strict_types=1);

namespace AuditorFramework\Module\CamLandingGenerator\Domain\VO;

use TheCodeFighters\Bundle\AuditorFramework\Common\Types\Domain\ValueObject;

class Natural extends ValueObject
{
    /**
     * @var int
     */
    private $value;


    public function __construct(
        int $value
    ) {
        $this->guard($value);
        $this->value = $value;
    }



    private function guard(int $value): void
    {
    }

    public function value(): int
    {
        return $this->value;
    }

    /**
     * @param ValueObject|self $o
     *
     * @return bool
     */
    protected function equalValues(ValueObject $o): bool
    {
        return $this->value() === $o->value();
    }
}
