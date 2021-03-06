<?php

namespace App\Form;

use App\Entity\Argument;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ArgumentType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('side', ChoiceType::class, [
                'choices'  => [
                    'Pro' => true,
                    'Con' => false,
                    'Neutral' => false
                ]
            ])
            ->add('text')
            ->add('parent')
            ->add('language')
            ->add('translation')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Argument::class,
        ]);
    }
}
