<?php
declare(strict_types=1);

namespace AuditorFramework\Module\CamLandingGenerator\Application\Query\FindJoinPageByAffiliateUrl;

use TheCodeFighters\Bundle\AuditorFramework\Common\Types\Application\QueryBus\Query;
use TheCodeFighters\Bundle\AuditorFramework\Common\Types\Application\QueryBus\QueryHandler;
use AuditorFramework\Module\CamLandingGenerator\Domain\ReadModel\AffiliateReadModelRepository;
use AuditorFramework\Module\CamLandingGenerator\Domain\ReadModel\CamUnitReadModelRepository;
use AuditorFramework\Module\CamLandingGenerator\Domain\VO\WebUrl;
use Psr\Cache\CacheItemPoolInterface;
use Psr\Cache\InvalidArgumentException as InvalidArgumentExceptionAlias;
use React\Promise\Deferred;

class FindJoinPageByAffiliateUrlHandler implements QueryHandler
{
    /**
     * @var AffiliateReadModelRepository
     */
    private $affiliateReadModelRepository;

    /**
     * @var CamUnitReadModelRepository
     */
    private $camUnitReadModelRepository;
    /**
     * @var JoinPageAssembler
     */
    private $joinPageAssembler;
    /**
     * @var CacheItemPoolInterface
     */
    private $cache;


    public function __construct(
        AffiliateReadModelRepository $affiliateReadModelRepository,
        CamUnitReadModelRepository $camUnitReadModelRepository,
        JoinPageAssembler $joinPageAssembler,
        CacheItemPoolInterface $cache
    ) {
        $this->affiliateReadModelRepository = $affiliateReadModelRepository;
        $this->camUnitReadModelRepository = $camUnitReadModelRepository;
        $this->joinPageAssembler = $joinPageAssembler;
        $this->cache = $cache;
    }

    /**
     * @param Query|FindJoinPageByAffiliateUrlQuery $query
     * @param Deferred $deferred
     * @throws InvalidArgumentExceptionAlias
     */
    public function __invoke(Query $query, Deferred $deferred): void
    {
        $affiliateId = new WebUrl($query->affiliateUrl());

        $affiliateIdUrlEncoded = urlencode($affiliateId->value());
        $cacheKey = $affiliateIdUrlEncoded.$query->page();



        if ($this->cache->getItem($cacheKey)->isHit()) {
            $queryResult = $this->cache->getItem($cacheKey)->get();
        } else {
            $messageCached = $this->cache->getItem($cacheKey);

            $affiliate = $this->affiliateReadModelRepository->findOrFailAffiliateById(
                $affiliateId
            );

            $camUnit = $this->camUnitReadModelRepository->findOrNewestCamUnit();

            $queryResult = $this->joinPageAssembler->toDto(
                $affiliate,
                $camUnit,
                $query->page()
            );

            $messageCached->set($queryResult);
            $this->cache->save($messageCached);
        }

        $deferred->resolve($queryResult);
    }
}
