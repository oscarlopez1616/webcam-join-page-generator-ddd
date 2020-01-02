<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'prooph_event_store.projection_read_models_locator' shared service.

return $this->privates['prooph_event_store.projection_read_models_locator'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'cam_landing_generator_affiliate_projection' => ['privates', 'AuditorFramework\\Module\\CamLandingGenerator\\Infrastructure\\Persistence\\Projection\\MysqlAffiliateProjector', 'getMysqlAffiliateProjectorService.php', true],
    'cam_landing_generator_affiliate_projection_manager' => ['privates', 'AuditorFramework\\Module\\CamLandingGenerator\\Infrastructure\\Persistence\\Projection\\MysqlAffiliateProjector', 'getMysqlAffiliateProjectorService.php', true],
    'cam_landing_generator_cam_unit_projection' => ['privates', 'AuditorFramework\\Module\\CamLandingGenerator\\Infrastructure\\Persistence\\Projection\\MysqlCamUnitProjector', 'getMysqlCamUnitProjectorService.php', true],
    'cam_landing_generator_cam_unit_projection_manager' => ['privates', 'AuditorFramework\\Module\\CamLandingGenerator\\Infrastructure\\Persistence\\Projection\\MysqlCamUnitProjector', 'getMysqlCamUnitProjectorService.php', true],
    'security_and_acl_password_recovery_projection' => ['privates', 'TheCodeFighters\\Bundle\\AuditorFramework\\Common\\Module\\SecurityAndAcl\\Infrastructure\\Persistence\\Projection\\MysqlPasswordRecoveryReadModel', 'getMysqlPasswordRecoveryReadModelService.php', true],
    'security_and_acl_password_recovery_projection_manager' => ['privates', 'TheCodeFighters\\Bundle\\AuditorFramework\\Common\\Module\\SecurityAndAcl\\Infrastructure\\Persistence\\Projection\\MysqlPasswordRecoveryReadModel', 'getMysqlPasswordRecoveryReadModelService.php', true],
    'security_and_acl_user_projection' => ['privates', 'TheCodeFighters\\Bundle\\AuditorFramework\\Common\\Module\\SecurityAndAcl\\Infrastructure\\Persistence\\Projection\\MysqlUserReadModel', 'getMysqlUserReadModelService.php', true],
    'security_and_acl_user_projection_manager' => ['privates', 'TheCodeFighters\\Bundle\\AuditorFramework\\Common\\Module\\SecurityAndAcl\\Infrastructure\\Persistence\\Projection\\MysqlUserReadModel', 'getMysqlUserReadModelService.php', true],
], [
    'cam_landing_generator_affiliate_projection' => '?',
    'cam_landing_generator_affiliate_projection_manager' => '?',
    'cam_landing_generator_cam_unit_projection' => '?',
    'cam_landing_generator_cam_unit_projection_manager' => '?',
    'security_and_acl_password_recovery_projection' => '?',
    'security_and_acl_password_recovery_projection_manager' => '?',
    'security_and_acl_user_projection' => '?',
    'security_and_acl_user_projection_manager' => '?',
]);
