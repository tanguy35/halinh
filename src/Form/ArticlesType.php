<?php

namespace App\Form;

use App\Entity\Categories;
use App\Entity\Articles;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;


class ArticlesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('titre', TextType::class, ['label' =>'Titre'])
            ->add('categories', EntityType::class, ['class'=>Categories::class, 'choice_label'=>'nom'])
            ->add('content', CKEditorType::class)
            ->add('imageFile', FileType::class, ['data_class'=>null,'required'=>false])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Articles::class,
        ]);
    }
}
