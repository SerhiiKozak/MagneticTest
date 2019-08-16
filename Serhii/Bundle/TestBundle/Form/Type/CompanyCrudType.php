<?php

namespace Serhii\Bundle\TestBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CompanyCrudType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add(
                'budget',
                'text',
                [
                    'required' => true,
                    'label'    => 'serhii_test.company_crud.budget'
                ]
            )
            ->add(
                'trafic_goal',
                'text',
                [
                    'required'    => true,
                    'label'       => 'serhii_test.company_crud.trafic_goal',
                ]
            )
            ->add(
                'comment',
                'text',
                [
                    'required'    => true,
                    'label'       => 'serhii_test.company_crud.comment',
                ]
            )
            ->add(
                'start',
                'date',
                [
                    'required'    => true,
                    'label'       => 'serhii_test.company_crud.start',
                ]
            )
            ->add(
                'end',
                'date',
                [
                    'required'    => true,
                    'label'       => 'serhii_test.company_crud.end',
                ]
            )
            ->add(
                'landing_link',
                'text',
                [
                    'required'    => true,
                    'label'       => 'serhii_test.company_crud.landing_link',
                ]
            );
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(
            [
                'data_class'        => 'Serhii\Bundle\TestBundle\Entity\CompanyCrud',
            ]
        );
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'serhii_company_crud_form';
    }
}