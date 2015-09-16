<?php

namespace Serialken\BlogBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormBuilder;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormEvent;


class ArticleType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre', 'text')
            ->add('contenu', 'textarea')
            ->add('image', new ImageType())
            /**
             * Rappel valable pour une collection
             * argument1: nom du champ ici categories
             * argument2: type du champ ici collection qui est une liste de quelques choses
             * argument3: tableau d'option du champ
             */
//            ->add('commentaires', 'entity', array(
//                'class' => 'SerialkenBlogBundle:Commentaire',
//                'property' => 'contenu'))
             ->add('categories', 'entity', array(
                 'class' => 'SerialkenBlogBundle:Categorie',
                 'property' => "nom",
                 'multiple' => true,
                 'expanded' => false))
             ->add('publication', 'checkbox', array('required' => false))
            ;
        // on recup la factory
        $factory = $builder->getFormFactory();
        
        //on ajoute une fonction qui nva ecouter le PRE_SET_DATA
        $builder->addEventListener(
                FormEvents::PRE_SET_DATA, // on definit levenement qui nou interesse
                function(FormEvent $event) use ($factory){ // on definit la fonction qui sera executer
                    $article =$event->getData();
                    if(null === $article){
                        return;
                    }

                     // si l'id de larticle existe on est en edition donc j'affiche pas la date
                     if($article->getId() !== null)
                     {
                         $event->getForm()->remove('image');
                         $event->getForm()->add(
                                 $factory->createNamed('image', new ImageType(), null, array('required' => false, 'auto_initialize' => false))
                                );
                     }
                }
                );
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Serialken\BlogBundle\Entity\Article'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'serialken_blogbundle_article';
    }
}
