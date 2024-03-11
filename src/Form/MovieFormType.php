<?php

namespace App\Form;

use App\Entity\Movie;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType as TypeDate;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType as TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MovieFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add(
                'title',
                TextType::class,
                [
                    'attr' => array(
                        'class' => 'bg-transparent block border-b-2 w-full h-20 text-6xl outline-none',
                        'placeholder' => 'Enter title....'
                    ),
                    'label' => false
                ]
            )
            ->add('release_year', IntegerType::class, [
                'attr' => array(
                    'class' => 'bg-transparent block border-b-2 w-full h-20 text-6xl outline-none',
                    'placeholder' => 'Enter release year'
                ),
            ])
            ->add('description', TextType::class, [
                'attr' => array(
                    'class' => 'bg-transparent block border-b-2 w-full h-20 text-6xl outline-none',
                    'placeholder' => 'Enter description'
                ),
                'label' => false
            ])
            ->add('image_path', FileType::class, [
                'attr' => array(
                    'class' => 'py-10',
                    'data_class' => null,
                    'required' => false
                ),
                'label' => false
            ])
            ->add('save', SubmitType::class, [
                'attr' => array(
                    'class' => 'uppercase mt-15 bg-blue-500 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl '
                ),
                'label' => 'Create Task'
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Movie::class,
        ]);
    }
}
