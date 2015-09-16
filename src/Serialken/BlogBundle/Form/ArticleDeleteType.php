<?php

namespace Serialken\BlogBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ArticleDeleteType extends ArticleType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        //appel du form parent ArticleType qui va recreer tous les champs
        parent::buildForm($builder, $options);
        //on supprime ceux qui ne nous interesssent pas
        $builder->remove('date')
                ->remove('file');
    }
    
   

    /**
     * @return string
     */
    public function getName()
    {
        return 'serialken_blogbundle_articledeletetype';
    }
}
