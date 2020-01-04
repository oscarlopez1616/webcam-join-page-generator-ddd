<?php
declare(strict_types=1);

namespace WebCamScrapper\Module\CamLandingGenerator\Infrastructure\CamUnitContentPort;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use WebCamScrapper\Module\CamLandingGenerator\Domain\CamUnitContentAdapter;
use WebCamScrapper\Module\CamLandingGenerator\Domain\VO\CamUnitContent;
use stdClass;
use function Lambdish\Phunctional\map;

class CumLouderPort implements CamUnitContentAdapter
{
    /**
     * @var Client
     */
    private $client;

    /**
     * @var string
     */
    private $baseUrl;


    public function __construct(
        Client $client,
        string $baseUrl
    ) {
        $this->client = $client;
        $this->baseUrl = $baseUrl;
    }

    /**
     * @return CamUnitContent[]
     *
     * @throws GuzzleException
     */
    public function camContents(): array
    {
        return $this->createCamUnitContentDto(
            (string)$this->client->request(
                'GET',
                $this->baseUrl,
                [
                    'headers' => [
                        'content-type' => "application/json"
                    ]
                ]
            )->getBody()
        );
    }

    /**
     * @param string $clientResponse
     * @return CamUnitContent[]
     */
    private function createCamUnitContentDto(string $clientResponse): array
    {
        $camUnitsContentArr = json_decode($clientResponse);

        return map(
            function (stdClass $camUnitContent): CamUnitContent {
                return CamUnitContent::createFromCamUnitContentDto(
                    new CamUnitContentDto(
                        $camUnitContent->wbmerTwitter,
                        (int)$camUnitContent->wbmerId,
                        $camUnitContent->wbmerNick,
                        $camUnitContent->wbmerPermalink,
                        (bool)$camUnitContent->wbmerOnline,
                        $camUnitContent->wbmerBirthdate,
                        (int)$camUnitContent->wbmerHeight,
                        $camUnitContent->wbmerCountry,
                        (bool)$camUnitContent->wbmerSystem,
                        $camUnitContent->wbmerSystemId,
                        [
                            $camUnitContent->wbmerThumb1,
                            $camUnitContent->wbmerThumb2,
                            $camUnitContent->wbmerThumb3,
                            $camUnitContent->wbmerThumb4,
                        ],
                        (bool)$camUnitContent->wbmerActive,
                        (bool)$camUnitContent->wbmerLive,
                        (bool)$camUnitContent->wbmerNew,
                        (bool)$camUnitContent->wbmerBanned,
                        $camUnitContent->wbmerRanking,
                        $camUnitContent->wbmerLastLogin,
                        $camUnitContent->wbmerRegister,
                        (bool)$camUnitContent->wbmerPHd,
                        (bool)$camUnitContent->wbmerPAudio,
                        $camUnitContent->wbmerDtRate,
                        $camUnitContent->wbmerEspSwf,
                        $camUnitContent->wbmerVideos,
                        (float)$camUnitContent->wbmerPositionOnline,
                        (float)$camUnitContent->wbmerPosition,
                        $camUnitContent->languages
                    )
                );
            }
            ,
            $camUnitsContentArr
        );

    }

}
