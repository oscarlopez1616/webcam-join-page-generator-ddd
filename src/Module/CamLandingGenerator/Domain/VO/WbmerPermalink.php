<?php
declare(strict_types=1);

namespace WebCamScrapper\Module\CamLandingGenerator\Domain\VO;

use TheCodeFighters\Bundle\AuditorFramework\Common\Types\Domain\ValueObject;

class WbmerPermalink extends ValueObject
{
    /**
     * @var string
     */
    private $value;


    public function __construct(
        string $value
    ) {
        $this->guard($value);
        $this->value = $value;
    }



    private function guard(string $value): void
    {
    }

    public function value(): string
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
