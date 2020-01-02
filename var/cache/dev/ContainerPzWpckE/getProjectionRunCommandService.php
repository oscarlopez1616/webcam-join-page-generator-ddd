<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'Prooph\Bundle\EventStore\Command\ProjectionRunCommand' shared autowired service.

include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
include_once \dirname(__DIR__, 4).'/vendor/prooph/event-store-symfony-bundle/src/Command/FormatsOutput.php';
include_once \dirname(__DIR__, 4).'/vendor/prooph/event-store-symfony-bundle/src/Command/AbstractProjectionCommand.php';
include_once \dirname(__DIR__, 4).'/vendor/prooph/event-store-symfony-bundle/src/Command/ProjectionRunCommand.php';

$this->services['Prooph\\Bundle\\EventStore\\Command\\ProjectionRunCommand'] = $instance = new \Prooph\Bundle\EventStore\Command\ProjectionRunCommand(($this->privates['prooph_event_store.projection_manager_for_projections_locator'] ?? $this->load('getProophEventStore_ProjectionManagerForProjectionsLocatorService.php')), ($this->privates['prooph_event_store.projections_locator'] ?? $this->load('getProophEventStore_ProjectionsLocatorService.php')), ($this->privates['prooph_event_store.projection_read_models_locator'] ?? $this->load('getProophEventStore_ProjectionReadModelsLocatorService.php')));

$instance->setName('event-store:projection:run');

return $instance;
