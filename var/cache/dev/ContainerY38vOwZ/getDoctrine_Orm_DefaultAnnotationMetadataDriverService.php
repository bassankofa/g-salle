<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'doctrine.orm.default_annotation_metadata_driver' shared service.

include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/Mapping/Driver/MappingDriver.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/Mapping/Driver/AnnotationDriver.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/Driver/AnnotationDriver.php';

return $this->privates['doctrine.orm.default_annotation_metadata_driver'] = new \Doctrine\ORM\Mapping\Driver\AnnotationDriver(($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService()), [0 => (\dirname(__DIR__, 4).'/src/Entity'), 1 => (\dirname(__DIR__, 4).'/vendor/gedmo/doctrine-extensions/lib/Gedmo/Translatable/Entity'), 2 => (\dirname(__DIR__, 4).'/vendor/gedmo/doctrine-extensions/lib/Gedmo/Translator/Entity'), 3 => (\dirname(__DIR__, 4).'/vendor/gedmo/doctrine-extensions/lib/Gedmo/Loggable/Entity'), 4 => (\dirname(__DIR__, 4).'/vendor/gedmo/doctrine-extensions/lib/Gedmo/Tree/Entity'), 5 => (\dirname(__DIR__, 4).'/vendor/toiba/fullcalendar-bundle/Entity')]);
