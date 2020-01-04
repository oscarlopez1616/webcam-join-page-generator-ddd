<?php
declare(strict_types=1);

namespace WebCamScrapper\Module\CamLandingGenerator\Infrastructure\Persistence\Doctrine;

use Doctrine\ORM\EntityManager;
use WebCamScrapper\Module\CamLandingGenerator\Domain\Affiliate;
use WebCamScrapper\Module\CamLandingGenerator\Domain\Exception\AffiliateNotFoundByIdException;
use WebCamScrapper\Module\CamLandingGenerator\Domain\ReadModel\AffiliateReadModelRepository;
use WebCamScrapper\Module\CamLandingGenerator\Domain\VO\WebUrl;

class DoctrineAffiliateReadModelRepository implements AffiliateReadModelRepository
{
    /**
     * @var EntityManager
     */
    private $entityManager;

    public function __construct(EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function findOrFailAffiliateById(WebUrl $webUrl): Affiliate
    {
        $affiliate = $this->entityManager->getRepository(Affiliate::class)->findOneBy(array('id' => $webUrl));
        if (!$affiliate instanceof Affiliate) {
            throw new AffiliateNotFoundByIdException($webUrl);
        }
        return $affiliate;
    }
}
