<?php

namespace App\Form;

use App\Enum\ProductEnum;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\NotBlank;

class HolidayOrderType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('fishSoup_1', IntegerType::class, [
                'required' => false,
                'attr' => [
                    'placeholder' => 'Aantal',
                    'min' => 0,
                    'class' => 'd-inline-block'
                ]
            ])
            ->add('fishSoup_05', IntegerType::class, [
                'required' => false,
                'attr' => [
                    'placeholder' => 'Aantal',
                    'min' => 0,
                    'class' => 'd-inline-block'
                ]
            ])
            ->add('lobsterSoup', IntegerType::class, [
                'required' => false,
                'attr' => [
                    'placeholder' => 'Aantal',
                    'min' => 0,
                    'class' => 'd-inline-block'
                ]
            ])
            ->add('fishDish', IntegerType::class, [
                'required' => false,
                'attr' => [
                    'placeholder' => 'Aantal',
                    'min' => 0,
                    'class' => 'd-inline-block'
                ]
            ])
            ->add('fishDish_4', IntegerType::class, [
                'required' => false,
                'attr' => [
                    'placeholder' => 'Aantal',
                    'min' => 4,
                    'class' => 'd-inline-block'
                ]
            ])
            ->add('meatDish', IntegerType::class, [
                'required' => false,
                'attr' => [
                    'placeholder' => 'Aantal',
                    'min' => 0,
                    'class' => 'd-inline-block'
                ]
            ])
            ->add('meatDish_4', IntegerType::class, [
                'required' => false,
                'attr' => [
                    'placeholder' => 'Aantal',
                    'min' => 4,
                    'class' => 'd-inline-block'
                ]
            ])
            ->add('gourmet', IntegerType::class, [
                'required' => false,
                'attr' => [
                    'placeholder' => 'Aantal',
                    'min' => 0,
                    'class' => 'd-inline-block'
                ]
            ])
            ->add('gourmet_4', IntegerType::class, [
                'required' => false,
                'attr' => [
                    'placeholder' => 'Aantal',
                    'min' => 4,
                    'class' => 'd-inline-block'
                ]
            ])
            ->add('name', TextType::class, [
                'label' => 'Uw naam',
                'constraints' => [
                    new NotBlank(),
                ]
            ])
            ->add('email', EmailType::class, [
                'label' => 'Emailadres',
                'constraints' => [
                    new NotBlank(),
                    new Email()
                ]
            ])
            ->add('phone', TextType::class, [
                'label' => 'Telefoonnummer',
                'constraints' => [
                    new NotBlank(),
                ],
            ])
            ->add('postal', TextType::class, [
                'label' => 'Postcode',
                'constraints' => [
                    new NotBlank(),
                ],
            ])
            ->add('city', TextType::class, [
                'label' => 'Woonplaats',
                'constraints' => [
                    new NotBlank(),
                ],
            ])
            ->add('street', TextType::class, [
                'label' => 'Straat',
                'constraints' => [
                    new NotBlank(),
                ],
            ])
            ->add('number', TextType::class, [
                'label' => 'Huisnummer',
                'constraints' => [
                    new NotBlank(),
                ],
            ])
            ->add('pickup', ChoiceType::class, [
                'label' => 'Afhaallocatie',
                'constraints' => [
                    new NotBlank(),
                ],
                'choices' => ProductEnum::getPickupMoments(),
            ])
            ;
    }
}
