<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.v9OVCEf' shared service.

return $this->privates['.service_locator.v9OVCEf'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'emailManager' => ['privates', 'App\\Service\\EmailManager', 'getEmailManagerService.php', true],
    'mailer' => ['services', 'swiftmailer.mailer.default', 'getSwiftmailer_Mailer_DefaultService.php', true],
    'roomRepository' => ['privates', 'App\\Repository\\RoomRepository', 'getRoomRepositoryService.php', true],
    'unavailabilityRepository' => ['privates', 'App\\Repository\\UnavailabilityRepository', 'getUnavailabilityRepositoryService.php', true],
], [
    'emailManager' => 'App\\Service\\EmailManager',
    'mailer' => '?',
    'roomRepository' => 'App\\Repository\\RoomRepository',
    'unavailabilityRepository' => 'App\\Repository\\UnavailabilityRepository',
]);
