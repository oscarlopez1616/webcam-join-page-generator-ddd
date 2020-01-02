<?php
declare(strict_types=1);

namespace AuditorFramework\Module\CamLandingGenerator\Domain\VO;

use DateTime;
use TheCodeFighters\Bundle\AuditorFramework\Common\Types\Domain\ValueObject;
use AuditorFramework\Module\CamLandingGenerator\Infrastructure\CamUnitContentPort\CamUnitContentDto;

class CamUnitContent extends ValueObject
{
    /**
     * @var WbmerTwitter
     */
    private $wbmerTwitter;

    /**
     * @var Natural
     */
    private $wbmerId;

    /**
     * @var WbmerNick
     */
    private $wbmerNick;

    /**
     * @var WbmerPermalink
     */
    private $wbmerPermalink;

    /**
     * @var bool
     */
    private $wbmerOnline;

    /**
     * @var DateTime
     */
    private $wbmerBirthdate;

    /**
     * @var Natural
     */
    private $wbmerHeight;

    /**
     * @var Country
     */
    private $wbmerCountry;

    /**
     * @var bool
     */
    private $wbmerSystem;

    /**
     * @var WbmerSystemId
     */
    private $wbmerSystemId;

    /**
     * @var CamUnitThumb
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
     * @var WbmerRanking
     */
    private $wbmerRanking;

    /**
     * @var DateTime
     */
    private $wbmerLastLogin;

    /**
     * @var DateTime
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
     * @var WbmerDtRate
     */
    private $wbmerDtRate;

    /**
     * @var WbmerEspSwf|null
     */
    private $wbmerEspSwf;

    /**
     * @var WbmerVideos
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
     * @var Languages
     */
    private $languages;

    public function __construct(
        WbmerTwitter $wbmerTwitter,
        Natural $wbmerId,
        WbmerNick $wbmerNick,
        WbmerPermalink $wbmerPermalink,
        bool $wbmerOnline,
        DateTime $wbmerBirthdate,
        Natural $wbmerHeight,
        Country $wbmerCountry,
        bool $wbmerSystem,
        WbmerSystemId $wbmerSystemId,
        CamUnitThumb $camUnitThumb,
        bool $wbmerActive,
        bool $wbmerLive,
        bool $wbmerNew,
        bool $wbmerBanned,
        WbmerRanking $wbmerRanking,
        DateTime $wbmerLastLogin,
        DateTime $wbmerRegister,
        bool $wbmerPHd,
        bool $wbmerPAudio,
        WbmerDtRate $wbmerDtRate,
        ?WbmerEspSwf $wbmerEspSwf,
        WbmerVideos $wbmerVideos,
        float $wbmerPositionOnline,
        float $wbmerPosition,
        Languages $languages
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
    }

    public static function createFromCamUnitContentDto(
        CamUnitContentDto $camUnitContentDto
    ): self
    {
        return new CamUnitContent(
            new WbmerTwitter($camUnitContentDto->wbmerTwitter()),
            new Natural($camUnitContentDto->wbmerId()),
            new WbmerNick($camUnitContentDto->wbmerNick()),
            new WbmerPermalink($camUnitContentDto->wbmerPermalink()),
            $camUnitContentDto->wbmerOnline(),
            DateTime::createFromFormat(
                'Y-m-d',
                $camUnitContentDto->wbmerBirthdate()
            ),
            new Natural($camUnitContentDto->wbmerHeight()),
            new Country($camUnitContentDto->wbmerCountry()),
            $camUnitContentDto->wbmerSystem(),
            new WbmerSystemId($camUnitContentDto->wbmerSystemId()),
            CamUnitThumb::createFromScalarArray($camUnitContentDto->camUnitThumb()),
            $camUnitContentDto->wbmerActive(),
            $camUnitContentDto->wbmerLive(),
            $camUnitContentDto->wbmerNew(),
            $camUnitContentDto->wbmerBanned(),
            new WbmerRanking($camUnitContentDto->wbmerRanking()),
            DateTime::createFromFormat(
                'Y-m-d H:i:s',
                $camUnitContentDto->wbmerLastLogin()
            ),
            DateTime::createFromFormat(
                'Y-m-d',
                $camUnitContentDto->wbmerRegister()
            ),
            $camUnitContentDto->wbmerPHd(),
            $camUnitContentDto->wbmerPAudio(),
            new WbmerDtRate($camUnitContentDto->wbmerDtRate()),
            is_null($camUnitContentDto->wbmerEspSwf()) ? null : new WbmerEspSwf($camUnitContentDto->wbmerEspSwf()),
            new WbmerVideos($camUnitContentDto->wbmerVideos()),
            $camUnitContentDto->wbmerPositionOnline(),
            $camUnitContentDto->wbmerPosition(),
            new Languages(
                $camUnitContentDto->languages()
            )
        );
    }


    private function guard(string $value): void
    {
    }

    public function wbmerTwitter(): WbmerTwitter
    {
        return $this->wbmerTwitter;
    }

    public function wbmerId(): Natural
    {
        return $this->wbmerId;
    }

    public function wbmerNick(): WbmerNick
    {
        return $this->wbmerNick;
    }

    public function wbmerPermalink(): WbmerPermalink
    {
        return $this->wbmerPermalink;
    }

    public function wbmerOnline(): bool
    {
        return $this->wbmerOnline;
    }

    public function wbmerBirthdate(): DateTime
    {
        return $this->wbmerBirthdate;
    }

    public function wbmerHeight(): Natural
    {
        return $this->wbmerHeight;
    }

    public function wbmerCountry(): Country
    {
        return $this->wbmerCountry;
    }

    public function wbmerSystem(): bool
    {
        return $this->wbmerSystem;
    }

    public function wbmerSystemId(): WbmerSystemId
    {
        return $this->wbmerSystemId;
    }

    public function camUnitThumb(): CamUnitThumb
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

    public function wbmerRanking(): WbmerRanking
    {
        return $this->wbmerRanking;
    }

    public function wbmerLastLogin(): DateTime
    {
        return $this->wbmerLastLogin;
    }

    public function wbmerRegister(): DateTime
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

    public function wbmerDtRate(): WbmerDtRate
    {
        return $this->wbmerDtRate;
    }

    public function wbmerEspSwf(): ?WbmerEspSwf
    {
        return $this->wbmerEspSwf;
    }

    public function wbmerVideos(): WbmerVideos
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

    public function languages(): Languages
    {
        return $this->languages;
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
