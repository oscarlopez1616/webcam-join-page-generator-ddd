<?php
declare(strict_types=1);

namespace WebCamScrapper\Module\CamLandingGenerator\Domain\DataTransformer;

use DateTime;
use WebCamScrapper\Module\CamLandingGenerator\Domain\VO\CamUnitContent;
use WebCamScrapper\Module\CamLandingGenerator\Domain\VO\Country;
use WebCamScrapper\Module\CamLandingGenerator\Domain\VO\Languages;
use WebCamScrapper\Module\CamLandingGenerator\Domain\VO\Natural;
use WebCamScrapper\Module\CamLandingGenerator\Domain\VO\WbmerDtRate;
use WebCamScrapper\Module\CamLandingGenerator\Domain\VO\WbmerEspSwf;
use WebCamScrapper\Module\CamLandingGenerator\Domain\VO\WbmerNick;
use WebCamScrapper\Module\CamLandingGenerator\Domain\VO\WbmerPermalink;
use WebCamScrapper\Module\CamLandingGenerator\Domain\VO\WbmerRanking;
use WebCamScrapper\Module\CamLandingGenerator\Domain\VO\WbmerSystemId;
use WebCamScrapper\Module\CamLandingGenerator\Domain\VO\WbmerTwitter;
use WebCamScrapper\Module\CamLandingGenerator\Domain\VO\WbmerVideos;

class CamUnitContentDataTransformer
{

    public static function transform(CamUnitContent $camUnitContent): array
    {
        return [
            'wbmer_twitter_value' => $camUnitContent->wbmerTwitter()->value(),
            'wbmer_id_value' => $camUnitContent->wbmerId()->value(),
            'wbmer_nick_value' => $camUnitContent->wbmerNick()->value(),
            'wbmer_permalink_value' => $camUnitContent->wbmerPermalink()->value(),
            'wbmer_online' => (int)$camUnitContent->wbmerOnline(),
            'wbmer_birthdate' => $camUnitContent->wbmerBirthdate()->format("Y-m-d H:i:s"),
            'wbmer_height_value' => $camUnitContent->wbmerHeight()->value(),
            'wbmer_country_value' => $camUnitContent->wbmerCountry()->value(),
            'wbmer_system' => $camUnitContent->wbmerSystem(),
            'wbmer_system_id_value' => $camUnitContent->wbmerSystemId()->value(),
            'cam_unit_thumb' => CamUnitThumbDataTransformer::transform($camUnitContent->camUnitThumb()),
            'wbmer_active' => (int)$camUnitContent->wbmerActive(),
            'wbmer_live' => (int)$camUnitContent->wbmerLive(),
            'wbmer_new' => (int)$camUnitContent->wbmerNew(),
            'wbmer_banned' => (int)$camUnitContent->wbmerBanned(),
            'wbmer_ranking_value' => $camUnitContent->wbmerRanking()->value(),
            'wbmer_last_login' => $camUnitContent->wbmerLastLogin()->format("Y-m-d H:i:s"),
            'wbmer_register' => $camUnitContent->wbmerRegister()->format("Y-m-d H:i:s"),
            'wbmer_phd' => (int)$camUnitContent->wbmerPHd(),
            'wbmer_paudio' => (int)$camUnitContent->wbmerPAudio(),
            'wbmer_dt_rate_value' => $camUnitContent->wbmerDtRate()->value(),
            'wbmer_esp_swf_value' => is_null($camUnitContent->wbmerEspSwf())
                ? null
                : $camUnitContent->wbmerEspSwf()
                    ->value(),
            'wbmer_videos_value' => $camUnitContent->wbmerVideos()->value(),
            'wbmer_position_online' => $camUnitContent->wbmerPosition(),
            'wbmer_position' => $camUnitContent->wbmerPosition(),
            'languages_value' => $camUnitContent->languages()->value()
        ];
    }

    public static function reverseTransform(array $camUnitContentScalar): CamUnitContent
    {

        return new CamUnitContent(
            new WbmerTwitter($camUnitContentScalar['wbmer_twitter_value']),
            new Natural($camUnitContentScalar['wbmer_id_value']),
            new WbmerNick($camUnitContentScalar['wbmer_nick_value']),
            new WbmerPermalink($camUnitContentScalar['wbmer_permalink_value']),
            (boolean)$camUnitContentScalar['wbmer_online'],
            DateTime::createFromFormat(
                "Y-m-d H:i:s",
                $camUnitContentScalar['wbmer_birthdate']
            ),
            new Natural($camUnitContentScalar['wbmer_height_value']),
            new Country($camUnitContentScalar['wbmer_country_value']),
            $camUnitContentScalar['wbmer_system'],
            new WbmerSystemId($camUnitContentScalar['wbmer_system_id_value']),
            CamUnitThumbDataTransformer::reverseTransform($camUnitContentScalar['cam_unit_thumb']),
            (boolean)$camUnitContentScalar['wbmer_active'],
            (boolean)$camUnitContentScalar['wbmer_live'],
            (boolean)$camUnitContentScalar['wbmer_new'],
            (boolean)$camUnitContentScalar['wbmer_banned'],
            new WbmerRanking($camUnitContentScalar['wbmer_ranking_value']),
            DateTime::createFromFormat(
                "Y-m-d H:i:s",
                $camUnitContentScalar['wbmer_last_login']
            ),
            DateTime::createFromFormat(
                "Y-m-d H:i:s",
                $camUnitContentScalar['wbmer_register']
            ),
            (boolean)$camUnitContentScalar['wbmer_phd'],
            (boolean)$camUnitContentScalar['wbmer_paudio'],
            new WbmerDtRate($camUnitContentScalar['wbmer_dt_rate_value']),
            new WbmerEspSwf($camUnitContentScalar['wbmer_esp_swf_value']),
            new WbmerVideos($camUnitContentScalar['wbmer_videos_value']),
            $camUnitContentScalar['wbmer_position_online'],
            $camUnitContentScalar['wbmer_position'],
            new Languages(
                $camUnitContentScalar['languages_value']
            )
        );
    }
}
