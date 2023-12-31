<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class HotelType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('address')
            ->add('etoile')
            ->add('etat',ChoiceType::class, [
                'choices'  => [
                    'Disponible' => 'Disponible',
                    'non Disponible' => 'non Disponible',

                ],

            ])
            ->add('nbrChambre')
            ->add('image',FileType::class, array('data_class' => null))
            ->add('description',TextareaType::class)
            ->add('Submit',SubmitType::class)



        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
