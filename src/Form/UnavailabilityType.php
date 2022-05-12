<?php

namespace App\Form;

use App\Entity\Unavailability;
use App\Entity\User;
use App\Repository\UserRepository;
use App\Entity\TypeReservation;
use App\Repository\TypeReservationRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;

class UnavailabilityType extends AbstractType
{
    protected $userRepository;
    protected $typereservationRepository;

    /**
     * UnavailabilityType constructor.
     * @param $userRepository
     * @param $typereservationRepository
     */
    public function __construct(UserRepository $userRepository,TypeReservationRepository $typereservationRepository)
    {
        $this->userRepository = $userRepository;
        $this->typereservationRepository = $typereservationRepository;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $users = $this->userRepository->findActiveUsersExceptCurrent();

        $builder
            ->add('object', TextType::class, [
                'label' => 'Objet'
            ])
            ->add('entite', TextType::class, [
                'label' => 'Entite'
            ])
            ->add('etat', HiddenType::class, [
                'data' => 'attente'
            ])
            
            ->add('guests', EntityType::class, [
                'label' => 'Invités',
                'class' => User::class,
                'choices' => $users,
                'choice_label' => function(User $user) {return $user->getFirstName().' '.$user->getLastName();},
                'multiple' => true
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Unavailability::class,
        ]);
    }
}
