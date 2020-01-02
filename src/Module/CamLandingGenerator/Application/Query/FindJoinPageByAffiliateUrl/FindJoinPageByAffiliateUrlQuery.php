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


    public function __construct(string $affiliateUrl)
    {
        $this->affiliateUrl = $affiliateUrl;
    }

    public function affiliateUrl(): string
    {
        return $this->affiliateUrl;
    }

}
