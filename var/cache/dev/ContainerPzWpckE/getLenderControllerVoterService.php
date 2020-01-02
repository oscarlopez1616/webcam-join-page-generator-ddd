<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'debug.security.voter.TheCodeFighters\Bundle\AuditorFramework\Common\Module\SecurityAndAcl\Domain\Api\LenderControllerVoter' shared service.

include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authorization/Voter/VoterInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authorization/Voter/TraceableVoter.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authorization/Voter/Voter.php';
include_once \dirname(__DIR__, 4).'/vendor/oscarlopez1616/auditor-framework/src/Common/Module/SecurityAndAcl/Domain/Api/ControllerVoter.php';
include_once \dirname(__DIR__, 4).'/vendor/oscarlopez1616/auditor-framework/src/Common/Module/SecurityAndAcl/Domain/Api/LenderControllerVoter.php';

return $this->privates['debug.security.voter.TheCodeFighters\\Bundle\\AuditorFramework\\Common\\Module\\SecurityAndAcl\\Domain\\Api\\LenderControllerVoter'] = new \Symfony\Component\Security\Core\Authorization\Voter\TraceableVoter(new \TheCodeFighters\Bundle\AuditorFramework\Common\Module\SecurityAndAcl\Domain\Api\LenderControllerVoter(), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));
