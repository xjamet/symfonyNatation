<?php

namespace ffn\iNatationBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;


use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class JugeType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomJuge', TextType::class )
            ->add('idrole', EntityType::class, array(
                'class' => 'ffniNatationBundle:Role',
                'choice_label' => 'idrole'
            ))
            ->add('idutilisateur', EntityType::class, array(
                'class' => 'ffniNatationBundle:Utilisateur',
                'choice_label' => 'idutilisateur'
            ))
            ->add('save', SubmitType::class);
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ffn\iNatationBundle\Entity\Juge'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'ffn_inatationbundle_juge';
    }


}
