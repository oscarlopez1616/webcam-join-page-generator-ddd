<?php

declare(strict_types=1);

namespace AuditorFramework\Module\CamLandingGenerator\Application\Query\FindJoinPageByAffiliateUrl;

class CamUnitContentWithAffiliateDataDto
{
    /**
     * @var string
     */
    private $wbmerTwitter;

    /**
     * @var int
     */
    private $wbmerId;

    /**
     * @var string
     */
    private $wbmerNick;

    /**
     * @var string
     */
    private $wbmerPermalink;

    /**
     * @var bool
     */
    private $wbmerOnline;

    /**
     * @var string
     */
    private $wbmerBirthdate;

    /**
     * @var int
     */
    private $wbmerHeight;

    /**
     * @var string
     */
    private $wbmerCountry;

    /**
     * @var bool
     */
    private $wbmerSystem;

    /**
     * @var string
     */
    private $wbmerSystemId;

    /**
     * @var string
     */
    private $camUnitThumbBig;

    /**
     * @var string[]
     */
    private $camUnitThumb;

    /**
     * @var bool
     */
    private $wbmerActive;

    /**
     * @var bool
     */
    private $wbmerLive;

    /**
     * @var bool
     */
    private $wbmerNew;

    /**
     * @var bool
     */
    private $wbmerBanned;

    /**
     * @var string
     */
    private $wbmerRanking;

    /**
     * @var string
     */
    private $wbmerLastLogin;

    /**
     * @var string
     */
    private $wbmerRegister;

    /**
     * @var bool
     */
    private $wbmerPHd;

    /**
     * @var bool
     */
    private $wbmerPAudio;

    /**
     * @var string
     */
    private $wbmerDtRate;

    /**
     * @var string|null
     */
    private $wbmerEspSwf;

    /**
     * @var string
     */
    private $wbmerVideos;

    /**
     * @var float
     */
    private $wbmerPositionOnline;

    /**
     * @var float
     */
    private $wbmerPosition;

    /**
     * @var string
     */
    private $languages;

    /**
     * @var string
     */
    private $affiliateId;

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
        string $wbmerTwitter,
        int $wbmerId,
        string $wbmerNick,
        string $wbmerPermalink,
        bool $wbmerOnline,
        string $wbmerBirthdate,
        int $wbmerHeight,
        string $wbmerCountry,
        bool $wbmerSystem,
        string $wbmerSystemId,
        string $camUnitThumbBig,
        array $camUnitThumb,
        bool $wbmerActive,
        bool $wbmerLive,
        bool $wbmerNew,
        bool $wbmerBanned,
        string $wbmerRanking,
        string $wbmerLastLogin,
        string $wbmerRegister,
        bool $wbmerPHd,
        bool $wbmerPAudio,
        string $wbmerDtRate,
        ?string $wbmerEspSwf,
        string $wbmerVideos,
        float $wbmerPositionOnline,
        float $wbmerPosition,
        string $languages,
        string $affiliateId,
        string $affiliateName,
        string $cumLouderNatTrackingCode,
        string $cumLouderWebCamsTrackingCode,
        string $cssPath,
        string $analyticsCode
    ) {
        $this->wbmerTwitter = $wbmerTwitter;
        $this->wbmerId = $wbmerId;
        $this->wbmerNick = $wbmerNick;
        $this->wbmerPermalink = $wbmerPermalink;
        $this->wbmerOnline = $wbmerOnline;
        $this->wbmerBirthdate = $wbmerBirthdate;
        $this->wbmerHeight = $wbmerHeight;
        $this->wbmerCountry = $wbmerCountry;
        $this->wbmerSystem = $wbmerSystem;
        $this->wbmerSystemId = $wbmerSystemId;
        $this->camUnitThumbBig = $camUnitThumbBig;
        $this->camUnitThumb = $camUnitThumb;
        $this->wbmerActive = $wbmerActive;
        $this->wbmerLive = $wbmerLive;
        $this->wbmerNew = $wbmerNew;
        $this->wbmerBanned = $wbmerBanned;
        $this->wbmerRanking = $wbmerRanking;
        $this->wbmerLastLogin = $wbmerLastLogin;
        $this->wbmerRegister = $wbmerRegister;
        $this->wbmerPHd = $wbmerPHd;
        $this->wbmerPAudio = $wbmerPAudio;
        $this->wbmerDtRate = $wbmerDtRate;
        $this->wbmerEspSwf = $wbmerEspSwf;
        $this->wbmerVideos = $wbmerVideos;
        $this->wbmerPositionOnline = $wbmerPositionOnline;
        $this->wbmerPosition = $wbmerPosition;
        $this->languages = $languages;
        $this->affiliateId = $affiliateId;
        $this->affiliateName = $affiliateName;
        $this->cumLouderNatTrackingCode = $cumLouderNatTrackingCode;
        $this->cumLouderWebCamsTrackingCode = $cumLouderWebCamsTrackingCode;
        $this->cssPath = $cssPath;
        $this->analyticsCode = $analyticsCode;
    }

    public function wbmerTwitter(): string
    {
        return $this->wbmerTwitter;
    }

    public function wbmerId(): int
    {
        return $this->wbmerId;
    }

    public function wbmerNick(): string
    {
        return $this->wbmerNick;
    }

    public function wbmerPermalink(): string
    {
        return $this->wbmerPermalink;
    }

    public function wbmerOnline(): bool
    {
        return $this->wbmerOnline;
    }

    public function wbmerBirthdate(): string
    {
        return $this->wbmerBirthdate;
    }

    public function wbmerHeight(): int
    {
        return $this->wbmerHeight;
    }

    public function wbmerCountry(): string
    {
        return $this->wbmerCountry;
    }

    public function wbmerSystem(): bool
    {
        return $this->wbmerSystem;
    }

    public function wbmerSystemId(): string
    {
        return $this->wbmerSystemId;
    }

    public function camUnitThumbBig(): string
    {
        return $this->camUnitThumbBig;
    }

    public function camUnitThumb(): array
    {
        return $this->camUnitThumb;
    }

    public function wbmerActive(): bool
    {
        return $this->wbmerActive;
    }

    public function wbmerLive(): bool
    {
        return $this->wbmerLive;
    }

    public function wbmerNew(): bool
    {
        return $this->wbmerNew;
    }

    public function wbmerBanned(): bool
    {
        return $this->wbmerBanned;
    }

    public function wbmerRanking(): string
    {
        return $this->wbmerRanking;
    }

    public function wbmerLastLogin(): string
    {
        return $this->wbmerLastLogin;
    }

    public function wbmerRegister(): string
    {
        return $this->wbmerRegister;
    }

    public function wbmerPHd(): bool
    {
        return $this->wbmerPHd;
    }

    public function wbmerPAudio(): bool
    {
        return $this->wbmerPAudio;
    }

    public function wbmerDtRate(): string
    {
        return $this->wbmerDtRate;
    }

    public function wbmerEspSwf(): ?string
    {
        return $this->wbmerEspSwf;
    }

    public function wbmerVideos(): string
    {
        return $this->wbmerVideos;
    }

    public function wbmerPositionOnline(): float
    {
        return $this->wbmerPositionOnline;
    }

    public function wbmerPosition(): float
    {
        return $this->wbmerPosition;
    }

    public function languages(): string
    {
        return $this->languages;
    }

    public function affiliateId(): string
    {
        return $this->affiliateId;
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
