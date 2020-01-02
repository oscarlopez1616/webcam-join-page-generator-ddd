<?php
declare(strict_types=1);

namespace AuditorFramework\Module\CamLandingGenerator\Application\Command\CreateAffiliate;


use TheCodeFighters\Bundle\AuditorFramework\Common\Types\Application\CommandBus\Command;

final class CreateAffiliateCommand implements Command
{
    /**
     * @var string
     */
    private $affiliateUrl;

    /**
     * @var string
     */
    private $affiliateName;

    /**
     * @var string
     */
    private $cumLouderNatTrackingCode;

    /**
     * @var string
     */
    private $cumLouderWebCamsTrackingCode;

    /**
     * @var string
     */
    private $cssPath;

    /**
     * @var string
     */
    private $analyticsCode;

    public function __construct(
        string $affiliateUrl,
        string $affiliateName,
        string $cumLouderNatTrackingCode,
        string $cumLouderWebCamsTrackingCode,
        string $cssPath,
        string $analyticsCode
    ) {
        $this->affiliateUrl = $affiliateUrl;
        $this->affiliateName = $affiliateName;
        $this->cumLouderNatTrackingCode = $cumLouderNatTrackingCode;
        $this->cumLouderWebCamsTrackingCode = $cumLouderWebCamsTrackingCode;
        $this->cssPath = $cssPath;
        $this->analyticsCode = $analyticsCode;
    }

    public function affiliateUrl(): string
    {
        return $this->affiliateUrl;
    }

    public function affiliateName(): string
    {
        return $this->affiliateName;
    }

    public function cumLouderNatTrackingCode(): string
    {
        return $this->cumLouderNatTrackingCode;
    }

    public function cumLouderWebCamsTrackingCode(): string
    {
        return $this->cumLouderWebCamsTrackingCode;
    }

    public function cssPath(): string
    {
        return $this->cssPath;
    }

    public function analyticsCode(): string
    {
        return $this->analyticsCode;
    }


}
