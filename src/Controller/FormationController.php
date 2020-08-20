<?php

namespace App\Controller;

use App\Entity\Formation;
use App\Entity\FormationSearch;
use App\Repository\FormationRepository;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FormationController extends CommonController
{
    /**
     * @var FormationRepository
     */
    private $repositoryFormation;

    /**
     * FormationController constructor.
     * @param FormationRepository $repositoryFormation
     * @param EntityManagerInterface $em
     */
    public function __construct(FormationRepository $repositoryFormation, EntityManagerInterface $em)
    {
        parent::__construct($em);
        $this->repositoryFormation=$repositoryFormation;

    }

    /**
     * @Route ("/formations" , name = "formation.route")
     * @param PaginatorInterface $paginator
     * @param Request $request
     * @return Response
     */
    public function index (PaginatorInterface $paginator,Request $request):Response
    {
        // Initialisation de l'objet 'formulaire de récherche' qui permet de filtrer les formations
        $search = new FormationSearch();
        $form=parent::systemeFiltre($request,$search);
        // Fin

        //création du système de pagination
        $formations=parent::systemePagination($paginator,$request,$this->repositoryFormation->findAllAviableQueryLesMieuxNotees($search));
        // Fin

        //ce qui est retourné : le menu courent les formations et le formulaire de filtre
        return $this->render('pages/formation.html.twig',[
            'current_menu'=>'formations',
            'formations'  => $formations,
            'form'        => $form->createView()
        ]);
        // Fin
    }

    /**
     * methode qui renvoie à la page spécifique de la formation
     * @Route("/formations/{slug}-{id}",name="formation.show",requirements={"slug": "[a-z0-9\-]*"})
     * @param Formation $formation
     * @param string $slug
     * @return Response
     */
    public function show (Formation $formation,string $slug) :Response
    {

        // bout de code qui permet de rédiriger une lien tapé au hasard à une formation existente
        if($formation->getSlug()!== $slug)
        {
            return $this->redirectToRoute('formation.show',[
                'id'=> $formation->getId(),
                'slug'=>$formation->getSlug()
            ],301);
        }
        //fin


        return $this->render('pages/show.html.twig',[
            'formation'=>$formation,
            'current_menu'=>'formations'
        ]);
    }
}
