<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'App\EventListener\FullCalendarListener' shared autowired service.

include_once \dirname(__DIR__, 4).'/src/EventListener/FullCalendarListener.php';

return $this->privates['App\\EventListener\\FullCalendarListener'] = new \App\EventListener\FullCalendarListener(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($this->services['doctrine.orm.default_entity_manager'] ?? $this->load('getDoctrine_Orm_DefaultEntityManagerService.php')), ($this->services['router'] ?? $this->getRouterService()));
