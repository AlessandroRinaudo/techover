<?php

namespace App\Form;


use App\Entity\Formation;
use App\Entity\FormationSearch;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FormationSearchType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     * Méthode qui instance les objet des différentes formulaires
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('maxNote',IntegerType::class,[
                'required' =>false,
                'label'=>false,
                'attr'=>[
                    'placeholder'=>'Note Minimale'
                ]
            ])

//            ->add('maxLevel',IntegerType::class,[
//                'required' =>false,
//                'label'=>false,
//                'attr'=>[
//                    'placeholder'=>'Niveau Minimale'
//                ]
//            ])

            ->add('maxLevel',ChoiceType::class,[
                'required' =>false,
                'label'=>false,
                'choices'=> $this->getChoicesLevel()

            ])

            ->add('langueUtilisateur',ChoiceType::class,[
                'required' =>false,
                'label'=>false,
                'choices'=> $this->getChoicesLangue()

            ])

            ->add('categoriePrefere',TextType::class,[
                'required' =>false,
                'label'=>false,
                'attr'=>[
                    'placeholder'=>'Rechercher par catégorie'
                ]
            ])
        ;
    }

    /**
     * @param OptionsResolver $resolver
     * Cette méthode nous permet de passer de la méthod utilisée POST(parametrée par defaut) à get
     * pour les formulaires de récherche
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => FormationSearch::class,
            'method'=>'get',
            'csrf_protection'=>false
        ]);
    }

    /**
     * @return string : la chaine de charactères vide nous permet d'avoir des liens propres
     */
    public function getBlockPrefix()
    {
        return '';
    }

    /**
     * Il prend uniquement les valeurs disponibles dans la constante
     * ici je propose de changer la constante langue par une connexion à une table Langue qui s'occupe de régrouper toutes les langues des différentes formations
     * @return array contenent les deux options
     */
    private function getChoicesLangue()
    {
        $choices = Formation::LANGUE;
        $output=[];
        foreach ($choices as $k=>$v)
        {
            $output[$v]=$k;
        }
        return $output;
    }

    private function getChoicesLevel()
    {
        $choices = Formation::LEVEL;
        $output=[];
        foreach ($choices as $k=>$v)
        {
            $output[$v]=$k;
        }
        return $output;
    }

}
