<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'AuditorFramework\Module\CamLandingGenerator\Infrastructure\Ui\Http\Rest\Controller\AffiliateController' shared autowired service.

include_once \dirname(__DIR__, 4).'/src/Module/CamLandingGenerator/Infrastructure/Ui/Http/Rest/Controller/AffiliateController.php';

return $this->services['AuditorFramework\\Module\\CamLandingGenerator\\Infrastructure\\Ui\\Http\\Rest\\Controller\\AffiliateController'] = new \AuditorFramework\Module\CamLandingGenerator\Infrastructure\Ui\Http\Rest\Controller\AffiliateController(($this->privates['TheCodeFighters\\Bundle\\AuditorFramework\\Common\\Types\\Application\\CommandBus'] ?? $this->load('getCommandBusService.php')), ($this->privates['TheCodeFighters\\Bundle\\AuditorFramework\\Common\\Types\\Application\\QueryBus'] ?? $this->load('getQueryBusService.php')), ($this->services['jms_serializer'] ?? $this->load('getJmsSerializerService.php')));
