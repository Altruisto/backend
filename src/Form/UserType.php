<?php

/*
 * This file is part of the Altruisto software.
 *
 * (c) Jakub Szcześniak <jakub.szczesniak@altruisto.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Form;

use App\Entity\User\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\CurrencyType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Security\Core\Encoder\BCryptPasswordEncoder;
use Symfony\Component\Validator\Constraints\Currency;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Email;

/**
 * Class UserType
 */
class UserType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array                $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('username', EmailType::class, [
                'constraints' => [
                    new NotBlank(),
                    new Email(),
                    new Length([
                        'min' => 5,
                        'max' => 100,
                    ]),
                ],
            ])
            ->add('password', PasswordType::class, [
                'constraints' => [
                    new NotBlank(),
                    new Length([
                        'min' => 8,
                        'max' => BCryptPasswordEncoder::MAX_PASSWORD_LENGTH,
                    ]),
                ],
            ])
            ->add('currency', CurrencyType::class, [
                'constraints' => [
                    new NotBlank(),
                ],
            ])
            ->add('accept_terms', CheckboxType::class, [
                'mapped' => false,
                'constraints' => [
                    new NotBlank(),
                ]
            ])
            ->add('referred_by', TextType::class, [
                'constraints' => [
                ]
            ])
            ->add('installation_id', TextType::class, [
                'mapped' => false,
                'constraints' => [
                ]
            ])
        ;
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => User::class,
        ));
    }
}
