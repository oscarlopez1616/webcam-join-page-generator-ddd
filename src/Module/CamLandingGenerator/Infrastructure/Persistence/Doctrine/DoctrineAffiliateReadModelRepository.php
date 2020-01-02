<?php
declare(strict_types=1);

namespace AuditorFramework\Module\CamLandingGenerator\Infrastructure\Persistence\Doctrine;

use Doctrine\ORM\EntityManager;
use AuditorFramework\Module\CamLandingGenerator\Domain\Affiliate;
use AuditorFramework\Module\CamLandingGenerator\Domain\Exception\AffiliateNotFoundByIdException;
use AuditorFramework\Module\CamLandingGenerator\Domain\ReadModel\AffiliateReadModelRepository;
use AuditorFramework\Module\CamLandingGenerator\Domain\VO\WebUrl;

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
