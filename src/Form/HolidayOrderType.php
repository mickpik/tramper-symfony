<?php

namespace App\Form;

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
                    'min' => 0
                ]
            ])
            ->add('fishSoup_05', IntegerType::class, [
                'required' => false,
                'attr' => [
                    'placeholder' => 'Aantal',
                    'min' => 0
                ]
            ])
            ->add('lobsterSoup', IntegerType::class, [
                'required' => false,
                'attr' => [
                    'placeholder' => 'Aantal',
                    'min' => 0
                ]
            ])
            ->add('fishDish', IntegerType::class, [
                'required' => false,
                'attr' => [
                    'placeholder' => 'Aantal',
                    'min' => 0
                ]
            ])
            ->add('fishDish_4', IntegerType::class, [
                'required' => false,
                'attr' => [
                    'placeholder' => 'Aantal',
                    'min' => 4
                ]
            ])
            ->add('meatDish', IntegerType::class, [
                'required' => false,
                'attr' => [
                    'placeholder' => 'Aantal',
                    'min' => 0
                ]
            ])
            ->add('meatDish_4', IntegerType::class, [
                'required' => false,
                'attr' => [
                    'placeholder' => 'Aantal',
                    'min' => 4
                ]
            ])
            ->add('gourmet', IntegerType::class, [
                'required' => false,
                'attr' => [
                    'placeholder' => 'Aantal',
                    'min' => 0
                ]
            ])
            ->add('gourmet_4', IntegerType::class, [
                'required' => false,
                'attr' => [
                    'placeholder' => 'Aantal',
                    'min' => 4
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
                'choices' => [
                    'Za 22 december - Agrimarkt Goes (8.00 - 17.00)' => 'za_agri',
                    'Za 22 december - Standplaats Heinkenszand (8.00 - 12.30)' => 'za_hkz',
                    'Ma 24 december - Werkplaats Kapelle (16.00 - 17.00)' => 'ma_kpl',
                    'Di 25 december - Werkplaats Kapelle (12.00 - 13.00)' => 'di_kpl',
                    'Wo 26 december - Werkplaats Kapelle (12.00 - 13.00)' => 'wo_kpl',
                    'Za 29 december - Agrimarkt Goes (8.00 - 17.00)' => 'za_agri',
                    'Za 29 december - Standplaats Heinkenszand (8.00 - 12.30)' => 'za_hkz',
                    'Ma 31 december - Werkplaats Kapelle (13.00 - 14.00)' => 'ma_31_kpl'
                ],
            ])
            ;
    }
}
