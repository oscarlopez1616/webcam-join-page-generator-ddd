<?php
declare(strict_types=1);

namespace WebCamScrapper\Module\CamLandingGenerator\Domain\VO;

use TheCodeFighters\Bundle\AuditorFramework\Common\Types\Domain\ValueObject;
use function Lambdish\Phunctional\map;

class CamUnitThumb extends ValueObject
{
    /**
     * @var WbmerThumb
     */
    private $wbmerThumbBig;

    /**
     * @var WbmerThumb[]
     */
    private $wbmerThumbs;

    /**
     * CamUnitThumb constructor.
     * @param WbmerThumb $wbmerThumbBig
     * @param WbmerThumb[] $wbmerThumbs
     */
    public function __construct(
        WbmerThumb $wbmerThumbBig,
        array $wbmerThumbs
    ) {
        $this->guard($wbmerThumbs);
        $this->wbmerThumbBig = $wbmerThumbBig;
        $this->wbmerThumbs = $wbmerThumbs;
    }

    /**
     * @param string[] $wbmerThumbs
     * @return CamUnitThumb
     */
    public static function createFromScalarArray(
        array $wbmerThumbs
    ): self {

        $wbmerThumbBig = $wbmerThumbs[3];
        unset($wbmerThumbs[3]);

        return new self(
            new WbmerThumb($wbmerThumbBig),
            map(
                function (string $wbmerThumb): WbmerThumb {
                    return new WbmerThumb($wbmerThumb);
                }
                ,
                $wbmerThumbs
            )
        );
    }


    /**
     * @param WbmerThumb[] $wbmerThumbs
     */
    private function guard(array $wbmerThumbs): void
    {
    }

    public function wbmerThumbBig(): WbmerThumb
    {
        return $this->wbmerThumbBig;
    }

    /**
     * @return WbmerThumb[]
     */
    public function wbmerThumbs(): array
    {
        return $this->wbmerThumbs;
    }

    protected function equalValues(ValueObject $o): bool
    {
        // TODO: Implement equalValues() method.
    }

}
