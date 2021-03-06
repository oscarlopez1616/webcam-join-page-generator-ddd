<?php
declare(strict_types=1);

namespace WebCamScrapper\Module\CamLandingGenerator\Domain\ReadModel;

interface CamUnitProjector
{
    public function init(): void;
    public function isInitialized(): bool;
    public function reset(): void;
    public function delete(): void;
    public function insert(array $data);
    public function update(array $data, array $id);
}
