<?php

namespace Serhii\Bundle\TestBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class PortraitCrudType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add(
                'age',
                'text',
                [
                    'required' => true,
                    'label'    => 'serhii_test.portrait_crud.age'
                ]
            )
            ->add(
                'gender',
                ChoiceType::class,
                [
                    'choices'=>[
                        'male'   => 'Male',
                        'female' => 'Female'

                    ],
                    'required'    => true,
                    'label'       => 'serhii_test.portrait_crud.gender',
                ]
            )
            ->add(
                'position',
                'text',
                [
                    'required'    => true,
                    'label'       => 'serhii_test.portrait_crud.position',
                ]
            )
            ->add(
                'area',
                'text',
                [
                    'required'    => true,
                    'label'       => 'serhii_test.portrait_crud.area',
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
                'data_class'        => 'Serhii\Bundle\TestBundle\Entity\PortraitCrud',
            ]
        );
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'serhii_portrait_crud_form';
    }
}