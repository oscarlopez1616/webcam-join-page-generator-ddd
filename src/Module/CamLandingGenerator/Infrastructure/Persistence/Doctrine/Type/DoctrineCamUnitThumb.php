<?php

declare(strict_types=1);

namespace AuditorFramework\Module\CamLandingGenerator\Infrastructure\Persistence\Doctrine\Type;

use Doctrine\DBAL\Platforms\AbstractPlatform;
use Doctrine\DBAL\Types\JsonType;
use AuditorFramework\Module\CamLandingGenerator\Domain\DataTransformer\CamUnitThumbDataTransformer;
use AuditorFramework\Module\CamLandingGenerator\Domain\VO\CamUnitThumb;

class DoctrineCamUnitThumb extends JsonType
{

    public function className(): string
    {
        return CamUnitThumb::class;
    }

    public function convertToPHPValue($value, AbstractPlatform $platform): CamUnitThumb
    {
        return CamUnitThumbDataTransformer::reverseTransform($value);
    }

    /**
     * @param CamUnitThumb $value
     * @param AbstractPlatform $platform
     * @return string
     */
    public function convertToDatabaseValue($value, AbstractPlatform $platform): string
    {
        return CamUnitThumbDataTransformer::transform($value);
    }

    public function requiresSQLCommentHint(AbstractPlatform $platform)
    {
        return true;
    }
}

