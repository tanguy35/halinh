<?php

namespace App\Form;

use App\Entity\Commentaires;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CommentaireFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('pseudo', TextType::class, ['attr'=>['class'=>'form-control']])
            ->add('email', EmailType::class, ['attr'=>['class'=>'form-control']])
            ->add('contenu', TextareaType::class, [
                'attr'=>['class'=>'form-control'],
                'label' =>'Commentaire(Min 15 caractères)'
            ])
            ->add('rgpd', CheckboxType::class)
            ->add('parentid', HiddenType::class, [
                'mapped' => false
            ])

            ->add("Envoyer", SubmitType::class, ['attr'=>['class'=>'btn-primary']])


        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Commentaires::class,
            'csrf_protection' => true,
            // the name of the hidden HTML field that stores the token
            'csrf_field_name' => '_token',
            // an arbitrary string used to generate the value of the token
            // using a different string for each form improves its security
            'csrf_token_id'   => 'commentaires_item',
        ]);
    }
}