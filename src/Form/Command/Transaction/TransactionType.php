<?php

/*
 * This file is part of the Altruisto software.
 *
 * (c) Jakub Szcześniak <jakub.szczesniak@altruisto.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Form\Command\Transaction;

use App\Entity\Cause\Cause;
use App\Entity\Partner\Partner;
use App\Entity\User\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Currency;
use Symfony\Component\Validator\Constraints\Date;
use Symfony\Component\Validator\Constraints\GreaterThanOrEqual;
use Symfony\Component\Validator\Constraints\NotBlank;

/**
 * Class TransactionType
 */
class TransactionType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array                $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('external_id', TextType::class, [
                'constraints' => [
                    new NotBlank(),
                ],
            ])
            ->add('status', ChoiceType::class, [
                'constraints' => [
                ],
                'choices' => [
                    0 => 'pending',
                    1 => 'finished',
                ]
            ])
            ->add('commission_amount', NumberType::class, [
                'constraints' => [
                    new NotBlank(),
                    new GreaterThanOrEqual(0),
                ],
            ])
            ->add('commission_currency', TextType::class, [
                'constraints' => [
                    new NotBlank(),
                    new Currency()
                ],
            ])
            ->add('sale_amount', NumberType::class, [
                'constraints' => [
                    new NotBlank(),
                    new GreaterThanOrEqual(0),
                ],
            ])
            ->add('sale_currency', TextType::class, [
                'constraints' => [
                    new NotBlank(),
                    new Currency()
                ],
            ])
            ->add('customer_country_code', TextType::class, [
                'constraints' => [
                ],
            ])
            ->add('tracker', TextType::class, [
                'constraints' => [
                ],
            ])
            ->add('referredBy', TextType::class, [
                'constraints' => [
                ],
            ])
            ->add('network', ChoiceType::class, [
                'constraints' => [
                ],
                'choices' => [
                    0 => 'cj',
                    1 => 'awin',
                    2 => 'ebay',
                    3 => 'booking',
                    4 => 'linkshare'
                ]
            ])
            ->add('transaction_date', DateType::class, [
                'constraints' => [
                    new Date()
                ],
            ])
            ->add('cause', EntityType::class, [
                'constraints' => [
                    new NotBlank()
                ],
                'class' => Cause::class,
            ])
            ->add('user', EntityType::class, [
                'class' => User::class,
                'constraints' => [
                ],
            ])
            ->add('partner', EntityType::class, [
                'class' => Partner::class,
                'constraints' => [
                    new NotBlank()
                ],
            ])
        ;
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
//            'data_class' => Transaction::class
        ));
    }
}
