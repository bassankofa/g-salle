<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'templating.locator' shared service.

@trigger_error('The "templating.locator" service is deprecated since Symfony 4.3 and will be removed in 5.0.', E_USER_DEPRECATED);

include_once \dirname(__DIR__, 4).'/vendor/symfony/config/FileLocatorInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/config/FileLocator.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Config/FileLocator.php';

return $this->privates['templating.locator'] = new \Symfony\Bundle\FrameworkBundle\Templating\Loader\TemplateLocator(($this->privates['file_locator'] ?? ($this->privates['file_locator'] = new \Symfony\Component\HttpKernel\Config\FileLocator(($this->services['kernel'] ?? $this->get('kernel', 1)), (\dirname(__DIR__, 4).'/src/Resources'), [0 => (\dirname(__DIR__, 4).'/src')]))), $this->targetDir.'');
