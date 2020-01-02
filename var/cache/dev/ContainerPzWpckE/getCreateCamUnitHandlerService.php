<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'AuditorFramework\Module\CamLandingGenerator\Application\Command\CreateCamUnit\CreateCamUnitHandler' shared autowired service.

include_once \dirname(__DIR__, 4).'/vendor/oscarlopez1616/auditor-framework/src/Common/Types/Application/CommandBus/CommandHandler.php';
include_once \dirname(__DIR__, 4).'/src/Module/CamLandingGenerator/Application/Command/CreateCamUnit/CreateCamUnitHandler.php';
include_once \dirname(__DIR__, 4).'/src/Module/CamLandingGenerator/Domain/CamUnitContentAdapter.php';
include_once \dirname(__DIR__, 4).'/src/Module/CamLandingGenerator/Infrastructure/CamUnitContentPort/CumLouderPort.php';
include_once \dirname(__DIR__, 4).'/vendor/guzzlehttp/guzzle/src/ClientInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/guzzlehttp/guzzle/src/Client.php';

return $this->privates['AuditorFramework\\Module\\CamLandingGenerator\\Application\\Command\\CreateCamUnit\\CreateCamUnitHandler'] = new \AuditorFramework\Module\CamLandingGenerator\Application\Command\CreateCamUnit\CreateCamUnitHandler(($this->services['TheCodeFighters\\Bundle\\AuditorFramework\\Common\\Types\\Infrastructure\\Persistence\\EventStore\\ProophWriteModelRepository'] ?? $this->load('getProophWriteModelRepositoryService.php')), new \AuditorFramework\Module\CamLandingGenerator\Infrastructure\CamUnitContentPort\CumLouderPort(new \GuzzleHttp\Client(), $this->getEnv('CAM_CONTENT_PORT_URL')));
