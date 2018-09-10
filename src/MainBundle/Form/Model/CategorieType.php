<?php

namespace MainBundle\Form\Model;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class CategorieType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $class='input';
      
        $builder->add('libelle',TextType::class,array(
            'label' => ' ',   'attr'  => array('class' =>$class,'placeholder'=>'Categorie' )

        ));
        $builder->add($options['action'],SubmitType::class,array(
            'attr'  => array('label'=>"valider",'class' =>'button is-success is-rounded')
        ));
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'MainBundle\Entity\Model\Categorie'
        ));
        $resolver->setRequired(array(
            'action'
        ));

    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'mainbundle_model_categorie';
    }


}
