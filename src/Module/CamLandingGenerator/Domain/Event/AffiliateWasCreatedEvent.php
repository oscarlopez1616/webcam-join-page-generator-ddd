<?php
declare(strict_types=1);

namespace AuditorFramework\Module\CamLandingGenerator\Domain\Event;

use TheCodeFighters\Bundle\AuditorFramework\Common\Types\Domain\Event\Event;
use AuditorFramework\Module\CamLandingGenerator\Domain\VO\AffiliateName;
use AuditorFramework\Module\CamLandingGenerator\Domain\VO\GAnalytycsCode;
use AuditorFramework\Module\CamLandingGenerator\Domain\VO\NatTrackingCode;
use AuditorFramework\Module\CamLandingGenerator\Domain\VO\Path;
use AuditorFramework\Module\CamLandingGenerator\Domain\VO\WebUrl;

class AffiliateWasCreatedEvent extends Event
{
    /**
     * @var AffiliateName
     */
    private $affiliateName;

    /**
     * @var NatTrackingCode
     */
    private $cumLouderNatTrackingCode;

    /**
     * @var NatTrackingCode
     */
    private $cumLouderWebCamsTrackingCode;

    /**
     * @var Path
     */
    private $cssPath;

    /**
     * @var GAnalytycsCode
     */
    private $analyticsCode;


    public function __construct(
        WebUrl $id,
        AffiliateName $affiliateName,
        NatTrackingCode $cumLouderNatTrackingCode,
        NatTrackingCode $cumLouderWebCamsTrackingCode,
        Path $cssPath,
        GAnalytycsCode $analyticsCode
    ) {
        $this->affiliateName = $affiliateName;
        $this->cumLouderNatTrackingCode = $cumLouderNatTrackingCode;
        $this->cumLouderWebCamsTrackingCode = $cumLouderWebCamsTrackingCode;
        $this->cssPath = $cssPath;
        $this->analyticsCode = $analyticsCode;
        parent::__construct($id);
    }


    protected function getIdClass(): string
    {
        return WebUrl::class;
    }

    protected function internalUnSerialize(): void
    {
        $payload = $this->payload();

        $this->affiliateName = new AffiliateName($payload['affiliate_name_value']);
        $this->cumLouderNatTrackingCode = new NatTrackingCode($payload['cum_louder_nat_tracking_code_value']);
        $this->cumLouderWebCamsTrackingCode = new NatTrackingCode($payload['cum_louder_web_cams_tracking_code_value']);
        $this->cssPath = new Path($payload['css_path_value']);
        $this->analyticsCode = new GAnalytycsCode($payload['analytics_code_value']);
    }

    public function internalSerialize(): array
    {
        return [
            'affiliate_name_value' => $this->affiliateName()->value(),
            'cum_louder_nat_tracking_code_value' => $this->cumLouderNatTrackingCode()->value(),
            'cum_louder_web_cams_tracking_code_value' => $this->cumLouderWebCamsTrackingCode()->value(),
            'css_path_value' => $this->cssPath()->value(),
            'analytics_code_value' => $this->analyticsCode()->value(),
        ];


    }

    public function affiliateName(): AffiliateName
    {
        return $this->affiliateName;
    }

    public function cumLouderNatTrackingCode(): NatTrackingCode
    {
        return $this->cumLouderNatTrackingCode;
    }

    public function cumLouderWebCamsTrackingCode(): NatTrackingCode
    {
        return $this->cumLouderWebCamsTrackingCode;
    }

    public function cssPath(): Path
    {
        return $this->cssPath;
    }

    public function analyticsCode(): GAnalytycsCode
    {
        return $this->analyticsCode;
    }

}
