<?php

namespace App\Form;


use App\Entity\Unavailability;
use App\Entity\User;
use App\Entity\TypeReservation;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

use Symfony\Component\Form\FormBuilderInterface;

class UnavailabilityEditAdminType extends UnavailabilityEditType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $users = $this->userRepository->findActiveUsers();
        $typereservations = $this->typereservationRepository->findAllType();


        parent::buildForm($builder, $options);

        $builder
            /*->add('type', ChoiceType::class, [
                'label' => 'Type de réservation',
                'choices' => [
                    'Réunion' => Unavailability::REUNION,
                    'Autre' => Unavailability::AUTRE
                ],
                'expanded' => false,
                'multiple' => false
            ])*/

            ->add('etat', ChoiceType::class, [
                'label' => 'Etat',
                'choices' => [
                    'Attente' =>"attent",
                    'Valider' => "valider"
                ],
                'expanded' => false,
                'multiple' => false
            ])
            ->add('type_reservation', EntityType::class, [
                    'label' => 'Type de réservation ' ,
                    'class' => TypeReservation::class,
                    'choices' => $typereservations,
                    'choice_label' => function(TypeReservation $typereservation) {return $typereservation->getName();},
                    'expanded' => false,
                    'multiple' => false,
            ])
            ->add('organiser', EntityType::class, [
                'label' => 'Organisateur',
                'class' => User::class,
                'choices' => $users,
                'choice_label' => function(User $user) {return $user->getFirstName().' '.$user->getLastName();},
                'expanded' => false,
                'multiple' => false,
            ]);
    }
}
