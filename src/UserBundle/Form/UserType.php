<?php

namespace UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

class UserType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $class='input  is-rounded  x_input';
           $builder->add( 'username',TextType::class,
                        array(
                              'label' => ' ',   'attr'  => array('class' =>$class,'placeholder'=>'Nom' )
                             )
                    );
        $builder->add( 'prenom',TextType::class,
                        array(
                              'label' => ' ',   'attr'  => array('class' =>$class,'placeholder'=>'Prenom' )
                             )
                    );
                    
        $builder->add( 'matricule',TextType::class,
                        array(
                              'label' => ' ',   'attr'  => array('class' =>$class,'placeholder'=>'Matricule' )
                             )
                    );
        $builder->add( 'fonction',TextType::class,
                        array(
                              'label' => ' ',   'attr'  => array('class' =>$class,'placeholder'=>'Fonction' )
                             )
                    );
          $builder->add( 'password',PasswordType::class,
                        array(
                              'label' => ' ',   'attr'  => array('class' =>$class,'placeholder'=>'Mot de pass' )
                             )
                    );
        $builder->add( 'Nom',PasswordType::class,
                        array(
                              'label' => ' ',   'attr'  => array('class' =>$class,'placeholder'=>'Retaper le mot de pass' )
                             )
                    );
         $builder->add( 'Valider',SubmitType::class,
                        array(
                                'attr'  => array('label'=>"valider",'class' =>'input button is-success is-rounded')
                             )
                    ); 
                // ->add('password',TextType::class)
                // ->add('salt',TextType::class);
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'UserBundle\Entity\User'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'userbundle_user';
    }


}
