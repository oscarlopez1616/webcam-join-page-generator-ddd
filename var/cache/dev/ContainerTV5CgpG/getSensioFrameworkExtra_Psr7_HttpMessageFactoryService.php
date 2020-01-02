<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sensio_framework_extra.psr7.http_message_factory' shared service.

include_once \dirname(__DIR__, 4).'/vendor/symfony/psr-http-message-bridge/HttpMessageFactoryInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/psr-http-message-bridge/Factory/PsrHttpFactory.php';
include_once \dirname(__DIR__, 4).'/vendor/psr/http-factory/src/RequestFactoryInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/psr/http-factory/src/ResponseFactoryInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/psr/http-factory/src/ServerRequestFactoryInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/psr/http-factory/src/StreamFactoryInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/psr/http-factory/src/UploadedFileFactoryInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/psr/http-factory/src/UriFactoryInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/nyholm/psr7/src/Factory/Psr17Factory.php';

$a = ($this->privates['nyholm.psr7.psr17_factory'] ?? ($this->privates['nyholm.psr7.psr17_factory'] = new \Nyholm\Psr7\Factory\Psr17Factory()));

return $this->privates['sensio_framework_extra.psr7.http_message_factory'] = new \Symfony\Bridge\PsrHttpMessage\Factory\PsrHttpFactory($a, $a, $a, $a);
