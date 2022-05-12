<?php

namespace App\Form;

use App\Entity\Unavailability;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\AbstractType;


class ImprimerPeriodeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);

        $builder
            ->add('startDate', DateType::class, [
                'label' => 'Début',
                'widget' => 'single_text',
                'attr' => [
                    'onchange' => "dateDebut(this.value)"
                ]
            ])
            ->add('endDate', DateType::class, [
                'label' => 'Fin',
                'widget' => 'single_text',
                'attr' => [
                    'onchange' => "dateFin(this.value)"
                ]
            ])
        ;
    }

}
