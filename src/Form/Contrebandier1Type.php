<?php

namespace App\Form;

use App\Entity\Contrebandier;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class Contrebandier1Type extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('prenom')
            ->add('nationnalite')
            ->add('age')
            ->add('sexe')
            ->add('metier')
            ->add('domicile')
            ->add('complice')
            ->add('nb')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Contrebandier::class,
        ]);
    }
}
