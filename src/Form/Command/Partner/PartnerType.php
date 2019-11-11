<?php

/*
 * This file is part of the Altruisto software.
 *
 * (c) Jakub Szcześniak <jakub.szczesniak@altruisto.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Form\Command\Partner;

use App\Entity\Partner\Category;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\GreaterThan;
use Symfony\Component\Validator\Constraints\GreaterThanOrEqual;
use Symfony\Component\Validator\Constraints\NotBlank;

/**
 * Class PartnerType
 */
class PartnerType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array                $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, [
                'constraints' => [
                    new NotBlank(),
                ],
            ])
            ->add('logo_url', TextType::class, [
                'constraints' => [
                    new NotBlank(),
                ],
            ])
            ->add('domain', TextType::class, [
                'constraints' => [
                    new NotBlank(),
                ],
            ])
            ->add('checkoutUrlPartial', TextType::class, [
                'constraints' => [
                ],
            ])
            ->add('cookieExpirationTime', NumberType::class, [
                'constraints' => [
                    new NotBlank(),
                    new GreaterThanOrEqual(0),
                ],
            ])
            ->add('donation', NumberType::class, [
                'constraints' => [
                    new NotBlank(),
                    new GreaterThan(0),
                ],
            ])
            ->add('affiliationNetworkName', TextType::class, [
                'constraints' => [
                    new NotBlank(),
                ],
            ])
            ->add('externalAffiliationId', TextType::class, [
                'constraints' => [
                    new NotBlank(),
                ],
            ])
            ->add('excludedSubdomains', CollectionType::class, [
                'entry_type' => ExcludedSubdomainType::class,
                'constraints' => [
                    new NotBlank(),
                ],
                'allow_add' => true,
                'allow_delete' => true,
            ])
            ->add('excludedPages', CollectionType::class, [
                'entry_type' => ExcludedPageType::class,
                'constraints' => [
                    new NotBlank(),
                ],
                'allow_add' => true,
                'allow_delete' => true,
            ])
            ->add('category', EntityType::class, [
                'constraints' => [
                    new NotBlank()
                ],
                'class' => Category::class,
            ])
        ;
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
        ]);
    }
}
