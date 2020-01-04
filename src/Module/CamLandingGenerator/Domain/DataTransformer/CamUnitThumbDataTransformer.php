<?php
declare(strict_types=1);

namespace WebCamScrapper\Module\CamLandingGenerator\Domain\DataTransformer;

use WebCamScrapper\Module\CamLandingGenerator\Domain\VO\CamUnitThumb;
use WebCamScrapper\Module\CamLandingGenerator\Domain\VO\WbmerThumb;
use function Lambdish\Phunctional\map;

class CamUnitThumbDataTransformer
{

    public static function transform(CamUnitThumb $camUnitThumb): string
    {
        return json_encode(
            [
                'wbmer_thumb_big' => $camUnitThumb->wbmerThumbBig()->value(),
                'wbmer_thumb' =>
                    map(
                        function (WbmerThumb $wbmerThumb): string {
                            return $wbmerThumb->value();
                        }
                        ,
                        $camUnitThumb->wbmerThumbs()

                    )

            ]
        );
    }

    public static function reverseTransform(string $camUnitThumb): CamUnitThumb
    {
        $camUnitThumbScalarArr = json_decode($camUnitThumb, true);

        return new CamUnitThumb(
            new WbmerThumb($camUnitThumbScalarArr['wbmer_thumb_big']),
            map(
                function (string $wbmerThumb): WbmerThumb {
                    return new WbmerThumb($wbmerThumb);
                }
                ,
                $camUnitThumbScalarArr['wbmer_thumb']
            )
        );
    }
}
