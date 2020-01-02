<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'doctrine.dbal.event_store_connection' shared service.

include_once \dirname(__DIR__, 4).'/vendor/doctrine/dbal/lib/Doctrine/DBAL/Logging/LoggerChain.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/doctrine-bridge/Logger/DbalLogger.php';

$a = new \Doctrine\DBAL\Configuration();

$b = new \Doctrine\DBAL\Logging\LoggerChain();

$c = new \Symfony\Bridge\Monolog\Logger('doctrine');
$c->pushProcessor(($this->privates['debug.log_processor'] ?? $this->getDebug_LogProcessorService()));
$c->pushHandler(($this->privates['monolog.handler.application'] ?? $this->getMonolog_Handler_ApplicationService()));
$c->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));
\Symfony\Bundle\FrameworkBundle\DependencyInjection\Compiler\AddDebugLogProcessorPass::configureLogger($c);

$b->addLogger(new \Symfony\Bridge\Doctrine\Logger\DbalLogger($c, ($this->privates['debug.stopwatch'] ?? ($this->privates['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true)))));
$b->addLogger(($this->privates['doctrine.dbal.logger.profiling.event_store'] ?? ($this->privates['doctrine.dbal.logger.profiling.event_store'] = new \Doctrine\DBAL\Logging\DebugStack())));

$a->setSQLLogger($b);
$d = new \Symfony\Bridge\Doctrine\ContainerAwareEventManager(($this->privates['.service_locator.bpvU51K'] ?? $this->get_ServiceLocator_BpvU51KService()));
$d->addEventListener([0 => 'loadClassMetadata'], 'doctrine.orm.default_listeners.attach_entity_listeners');

return $this->services['doctrine.dbal.event_store_connection'] = ($this->privates['doctrine.dbal.connection_factory'] ?? $this->getDoctrine_Dbal_ConnectionFactoryService())->createConnection(['dbname' => $this->getEnv('resolve:EVENT_STORE_DATABASE_NAME'), 'host' => $this->getEnv('resolve:EVENT_STORE_DATABASE_HOST'), 'port' => $this->getEnv('resolve:EVENT_STORE_DATABASE_PORT'), 'user' => $this->getEnv('resolve:EVENT_STORE_DATABASE_USER'), 'password' => $this->getEnv('resolve:EVENT_STORE_DATABASE_PASSWORD'), 'driver' => 'pdo_mysql', 'charset' => 'utf8mb4', 'driverOptions' => [], 'serverVersion' => '5.7', 'defaultTableOptions' => ['charset' => 'utf8mb4', 'collate' => 'utf8mb4_unicode_ci']], $a, $d, []);
