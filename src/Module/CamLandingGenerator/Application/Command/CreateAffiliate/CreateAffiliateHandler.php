<?php
declare(strict_types=1);

namespace WebCamScrapper\Module\CamLandingGenerator\Application\Command\CreateAffiliate;

use TheCodeFighters\Bundle\AuditorFramework\Common\Types\Application\CommandBus\Command;
use TheCodeFighters\Bundle\AuditorFramework\Common\Types\Application\CommandBus\CommandHandler;
use TheCodeFighters\Bundle\AuditorFramework\Common\Types\Domain\WriteModelRepository;
use WebCamScrapper\Module\CamLandingGenerator\Domain\Affiliate;
use WebCamScrapper\Module\CamLandingGenerator\Domain\VO\AffiliateName;
use WebCamScrapper\Module\CamLandingGenerator\Domain\VO\GAnalytycsCode;
use WebCamScrapper\Module\CamLandingGenerator\Domain\VO\NatTrackingCode;
use WebCamScrapper\Module\CamLandingGenerator\Domain\VO\Path;
use WebCamScrapper\Module\CamLandingGenerator\Domain\VO\WebUrl;

class CreateAffiliateHandler implements CommandHandler
{
    /**
     * @var WriteModelRepository
     */
    private $writeModelRepository;


    public function __construct(
        WriteModelRepository $writeModelRepository
    ) {

        $this->writeModelRepository = $writeModelRepository;
    }

    /**
     * @param Command|CreateAffiliateCommand $command
     */
    public function __invoke(Command $command): void
    {
        $camUnit = Affiliate::create(
            new WebUrl($command->affiliateUrl()),
            new AffiliateName($command->affiliateName()),
            new NatTrackingCode($command->cumLouderNatTrackingCode()),
            new NatTrackingCode($command->cumLouderWebCamsTrackingCode()),
            new Path($command->cssPath()),
            new GAnalytycsCode($command->analyticsCode())
        );

        $this->writeModelRepository->save([$camUnit]);
    }
}
