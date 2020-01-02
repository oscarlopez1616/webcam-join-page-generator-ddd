<?php
declare(strict_types=1);

namespace AuditorFramework\Module\CamLandingGenerator\Domain\ReadModel;

interface AffiliateProjector
{
    public function init(): void;
    public function isInitialized(): bool;
    public function reset(): void;
    public function delete(): void;
    public function insert(array $data);
    public function update(array $data, array $id);
}
