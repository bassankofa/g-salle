<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'console.command.form_debug' shared service.

include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/form/Command/DebugCommand.php';

$this->privates['console.command.form_debug'] = $instance = new \Symfony\Component\Form\Command\DebugCommand(($this->privates['form.registry'] ?? $this->load('getForm_RegistryService.php')), [0 => 'Symfony\\Component\\Form\\Extension\\Core\\Type', 1 => 'App\\Form', 2 => 'Symfony\\Bridge\\Doctrine\\Form\\Type'], [0 => 'App\\Form\\ImprimerPeriodeType', 1 => 'App\\Form\\RoomType', 2 => 'App\\Form\\TypeReservationType', 3 => 'App\\Form\\UnavailabilityAdminType', 4 => 'App\\Form\\UnavailabilityEditAdminType', 5 => 'App\\Form\\UnavailabilityEditType', 6 => 'App\\Form\\UnavailabilityType', 7 => 'App\\Form\\UserAdminType', 8 => 'App\\Form\\UserPasswordChangeType', 9 => 'App\\Form\\UserType', 10 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType', 11 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType', 12 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType', 13 => 'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType'], [0 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TransformationFailureExtension', 1 => 'Symfony\\Component\\Form\\Extension\\HttpFoundation\\Type\\FormTypeHttpFoundationExtension', 2 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\FormTypeValidatorExtension', 3 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\RepeatedTypeValidatorExtension', 4 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\SubmitTypeValidatorExtension', 5 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\UploadValidatorExtension', 6 => 'Symfony\\Component\\Form\\Extension\\Csrf\\Type\\FormTypeCsrfExtension', 7 => 'Symfony\\Component\\Form\\Extension\\DataCollector\\Type\\DataCollectorTypeExtension'], [0 => 'Symfony\\Component\\Form\\Extension\\Validator\\ValidatorTypeGuesser', 1 => 'Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser'], ($this->privates['debug.file_link_formatter'] ?? $this->getDebug_FileLinkFormatterService()));

$instance->setName('debug:form');

return $instance;
