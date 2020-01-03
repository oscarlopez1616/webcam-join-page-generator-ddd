<?php
declare(strict_types=1);

namespace AuditorFramework\Module\CamLandingGenerator\Application\Query\FindJoinPageByAffiliateUrl;


use TheCodeFighters\Bundle\AuditorFramework\Common\Types\Application\QueryBus\Query;

final class FindJoinPageByAffiliateUrlQuery implements Query
{
    /**
     * @var string
     */
    private $affiliateUrl;

    /**
     * @var int
     */
    private $page;

    /**
     * FindJoinPageByAffiliateUrlQuery constructor.
     * @param string $affiliateUrl
     * @param int $page
     */
    public function __construct(string $affiliateUrl, int $page)
    {
        $this->affiliateUrl = $affiliateUrl;
        $this->page = $page;
    }

    public function affiliateUrl(): string
    {
        return $this->affiliateUrl;
    }

    public function page(): int
    {
        return $this->page;
    }

}
