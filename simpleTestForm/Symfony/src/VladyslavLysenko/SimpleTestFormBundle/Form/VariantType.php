<?php

namespace VladyslavLysenko\SimpleTestFormBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class VariantType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('description','textarea')
            ->add('quantityOfPoints')
            ->add('question')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'VladyslavLysenko\SimpleTestFormBundle\Entity\Variant'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'vladyslavlysenko_simpletestformbundle_variant';
    }
}
