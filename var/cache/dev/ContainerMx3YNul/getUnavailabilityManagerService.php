<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'App\Service\UnavailabilityManager' shared autowired service.

include_once \dirname(__DIR__, 4).'/src/Service/UnavailabilityManager.php';

return $this->privates['App\\Service\\UnavailabilityManager'] = new \App\Service\UnavailabilityManager(($this->services['doctrine.orm.default_entity_manager'] ?? $this->load('getDoctrine_Orm_DefaultEntityManagerService.php')));