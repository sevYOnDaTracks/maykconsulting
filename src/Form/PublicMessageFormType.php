<?php

namespace App\Form;

use App\Entity\PublicMessage;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PublicMessageFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('senderName'  , TextType::class, ['label' => false ])
            ->add('senderEmail', EmailType::class, [
           
                'attr' => [
                    'class' => 'form-control',
                ],
    
                'label' => false,
            ])
            ->add('senderMessage' , TextType::class, ['label' => false ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => PublicMessage::class,
        ]);
    }
}
