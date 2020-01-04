<?php

declare(strict_types=1);

namespace WebCamScrapper\Module\CamLandingGenerator\Application\Query\FindJoinPageByAffiliateUrl;

use WebCamScrapper\Module\CamLandingGenerator\Domain\Affiliate;
use WebCamScrapper\Module\CamLandingGenerator\Domain\CamUnit;
use WebCamScrapper\Module\CamLandingGenerator\Domain\VO\CamUnitContent;
use WebCamScrapper\Module\CamLandingGenerator\Domain\VO\WbmerThumb;
use function Lambdish\Phunctional\map;

class JoinPageAssembler
{
    private const AMOUNT_CAMS_PER_JOIN_PAGE = 36;

    public function toDto(
        Affiliate $affiliate,
        CamUnit $camUnit,
        int $page
    ): JoinPageDto {

        $camUnitContentWithAffiliateDataDtos = map(
            function (CamUnitContent $camUnitContent) use ($affiliate): CamUnitContentWithAffiliateDataDto {
                return new CamUnitContentWithAffiliateDataDto(
                    $camUnitContent->wbmerTwitter()->value(),
                    $camUnitContent->wbmerId()->value(),
                    $camUnitContent->wbmerNick()->value(),
                    $camUnitContent->wbmerPermalink()->value(),
                    $camUnitContent->wbmerOnline(),
                    $camUnitContent->wbmerBirthdate()->format('Y-m-d'),
                    $camUnitContent->wbmerHeight()->value(),
                    $camUnitContent->wbmerCountry()->value(),
                    $camUnitContent->wbmerSystem(),
                    $camUnitContent->wbmerSystemId()->value(),
                    $camUnitContent->camUnitThumb()->wbmerThumbBig()->value(),
                    map(
                        function (WbmerThumb $wbmerThumb): string {
                            return $wbmerThumb->value();
                        }
                        ,
                        $camUnitContent->camUnitThumb()->wbmerThumbs()
                    ),
                    $camUnitContent->wbmerActive(),
                    $camUnitContent->wbmerLive(),
                    $camUnitContent->wbmerNew(),
                    $camUnitContent->wbmerBanned(),
                    $camUnitContent->wbmerRanking()->value(),
                    $camUnitContent->wbmerLastLogin()->format('Y-m-d H:i:s'),
                    $camUnitContent->wbmerRegister()->format('Y-m-d'),
                    $camUnitContent->wbmerPHd(),
                    $camUnitContent->wbmerPAudio(),
                    $camUnitContent->wbmerDtRate()->value(),
                    $camUnitContent->wbmerEspSwf()->value(),
                    $camUnitContent->wbmerVideos()->value(),
                    $camUnitContent->wbmerPositionOnline(),
                    $camUnitContent->wbmerPosition(),
                    $camUnitContent->languages()->value(),
                    $affiliate->id()->value(),
                    $affiliate->affiliateName()->value(),
                    $affiliate->cumLouderNatTrackingCode()->value(),
                    $affiliate->cumLouderWebCamsTrackingCode()->value(),
                    $affiliate->cssPath()->value(),
                    $affiliate->analyticsCode()->value()
                );
            }
            ,
            $camUnit->camUnitsContent($page,self::AMOUNT_CAMS_PER_JOIN_PAGE)
        );

        return new JoinPageDto(
            array_values($camUnitContentWithAffiliateDataDtos)
        );
    }
}
