<?php
declare(strict_types=1);

namespace AuditorFramework\Module\CamLandingGenerator\Infrastructure\Persistence\Doctrine\Type;

use TheCodeFighters\Bundle\AuditorFramework\Common\Types\Infrastructure\Persistence\Doctrine\Type\DoctrineId;
use AuditorFramework\Module\CamLandingGenerator\Domain\VO\WebUrl;

class DoctrineWebUrl extends DoctrineId
{
    public function className(): string
    {
        return WebUrl::class;
    }
}
