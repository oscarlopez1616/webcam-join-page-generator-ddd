<?php
declare(strict_types=1);

namespace AuditorFramework\Module\CamLandingGenerator\Domain;

use TheCodeFighters\Bundle\AuditorFramework\Common\Types\Domain\AggregateRoot;
use AuditorFramework\Module\CamLandingGenerator\Domain\Event\AffiliateWasCreatedEvent;
use AuditorFramework\Module\CamLandingGenerator\Domain\VO\AffiliateName;
use AuditorFramework\Module\CamLandingGenerator\Domain\VO\GAnalytycsCode;
use AuditorFramework\Module\CamLandingGenerator\Domain\VO\NatTrackingCode;
use AuditorFramework\Module\CamLandingGenerator\Domain\VO\Path;
use AuditorFramework\Module\CamLandingGenerator\Domain\VO\WebUrl;

class Affiliate extends AggregateRoot
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


    public static function create(
        WebUrl $id,
        AffiliateName $affiliateName,
        NatTrackingCode $cumLouderNatTrackingCode,
        NatTrackingCode $cumLouderWebCamsTrackingCode,
        Path $cssPath,
        GAnalytycsCode $analyticsCode
    ): self {

        $affiliate = new self();

        $affiliate->recordThat(
            new AffiliateWasCreatedEvent(
                $id,
                $affiliateName,
                $cumLouderNatTrackingCode,
                $cumLouderWebCamsTrackingCode,
                $cssPath,
                $analyticsCode
            )
        );

        return $affiliate;

    }

    /** @noinspection PhpUnused */
    public function applyAffiliateWasCreatedEvent(AffiliateWasCreatedEvent $event)
    {
        $this->id = $event->id();
        $this->createdAt = $event->createdAt();
        $this->updatedAt = $event->updatedAt();
        $this->affiliateName = $event->affiliateName();
        $this->cumLouderNatTrackingCode = $event->cumLouderNatTrackingCode();
        $this->cumLouderWebCamsTrackingCode = $event->cumLouderWebCamsTrackingCode();
        $this->cssPath = $event->cssPath();
        $this->analyticsCode = $event->analyticsCode();
    }

    protected function getChildEntities(): array
    {
        return [];
    }

    public function id(): WebUrl
    {
        /** @noinspection PhpIncompatibleReturnTypeInspection */
        return $this->id;
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
