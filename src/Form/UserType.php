<?php

namespace App\Form;
use App\Form\Users;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextTypeType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\FormTypeInterface;

class UserType extends AbstractType {


    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
          //  ->add('username', TextType::class)
           // ->add('last_name', TextType::class,[
           //     'mapped' => true,
         //   ])
            ->add('email', EmailType::class)
            ->add('password', RepeatedType::class,[
                'type' =>PasswordType::class
            ])
          //  ->add('last_name', TextType::class)
            ->add('submit', SubmitType::class, [
                'attr' =>[
                    'class'=> 'btn btn-success pull-right'
                ]
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => \App\Entity\Users::class
        ]);
    }

}