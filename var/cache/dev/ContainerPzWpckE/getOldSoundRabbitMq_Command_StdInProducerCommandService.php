<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'old_sound_rabbit_mq.command.std_in_producer_command' shared service.

include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ContainerAwareInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/php-amqplib/rabbitmq-bundle/Command/BaseRabbitMqCommand.php';
include_once \dirname(__DIR__, 4).'/vendor/php-amqplib/rabbitmq-bundle/Command/StdInProducerCommand.php';

$this->privates['old_sound_rabbit_mq.command.std_in_producer_command'] = $instance = new \OldSound\RabbitMqBundle\Command\StdInProducerCommand();

$instance->setName('rabbitmq:stdin-producer');

return $instance;
