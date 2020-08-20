<?php

namespace App\Controller;

use App\Entity\Categorie;
use App\Entity\FormationSearch;
use App\Repository\CategorieRepository;
use App\Repository\FormationRepository;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CategorieController extends CommonController
{
    /**
     * @var CategorieRepository
     */
    private $repositoryCatgorie;

    /**
     * @var FormationRepository
     */
    private $repositoryFormation;

    /**
     * CategorieController constructor.
     * @param CategorieRepository $repositoryCategorie
     * @param FormationRepository $repositoryFormation
     * @param EntityManagerInterface $em
     */
    public function __construct(CategorieRepository $repositoryCategorie, FormationRepository $repositoryFormation, EntityManagerInterface $em)
    {
        parent::__construct($em);
        $this->repositoryCatgorie = $repositoryCategorie;
        $this->repositoryFormation=$repositoryFormation;
    }

    /**
     * @Route ("/categories" , name = "categorie.route")
     * @param PaginatorInterface $paginator
     * @param Request $request
     * @return Response
     */
    public function index(PaginatorInterface $paginator, Request $request): Response
    {
        //création du système de pagination
        $categories=parent::systemePagination($paginator,$request,$this->repositoryCatgorie->findAll());
        // Fin

        //ce qui est retourné : le menu courent les categories et le formulaire de recherche
        return $this->render('pages/Categorie/categorie.html.twig', [
            'current_menu' => 'categories',
            'categories' => $categories,
        ]);
        // Fin
    }


    /**
     * methode qui renvoie à la page spécifique de la formation
     * @Route("/categorie/{slug}-{id}",name="categorie.show",requirements={"slug": "[a-z0-9\-]*"})
     * @param Categorie $categorie
     * @param string $slug
     * @param PaginatorInterface $paginator
     * @param Request $request
     * @return Response
     */
    public function show (Categorie $categorie,string $slug,PaginatorInterface $paginator,Request $request) :Response
    {
        // Initialisation de l'objet 'formulaire de récherche' qui permet de filtrer les formations
        $search = new FormationSearch();
        $form=parent::systemeFiltre($request,$search);
        // Fin

        //création du système de pagination
        $formation=parent::systemePagination($paginator,$request,$this->repositoryFormation->findAviableQueryParCategorie($search,$categorie->getId()));
        // Fin


        return $this->render('pages/Categorie/show.html.twig',[
            'formations'  =>$formation,
            'categorie'   =>$categorie,
            'current_menu'=>'categories',
            'form'        => $form->createView()
        ]);
    }


}