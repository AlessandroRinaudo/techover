<?php

namespace App\Controller;

use App\Entity\FormationSearch;
use App\Repository\FormationRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends CommonController
{
    /**
     * @Route ("/" , name = "home")
     * @param PaginatorInterface $paginator
     * @param FormationRepository $repositoryFormation
     * @param Request $request
     * @return Response
     */
    public function index (PaginatorInterface $paginator,FormationRepository $repositoryFormation, Request $request):Response
    {
        // Initialisation de l'objet 'formulaire de récherche' qui permet de filtrer les formations
        $search = new FormationSearch();
        $form=parent::systemeFiltre($request,$search);
        // Fin

        if($search->getLangueUtilisateur()||$search->getCategoriePrefere()||$search->getMaxLevel()||$search->getMaxNote())
        {
            //création du système de pagination
            $formations=parent::systemePagination($paginator,$request,$repositoryFormation->findAllAviableQueryLesMieuxNotees($search));
            // Fin

            //ce qui est retourné : le menu courent les formations et le formulaire de filtre
            return $this->render('pages/formation.html.twig',[
                'current_menu'=>'formations',
                'formations'  => $formations,
                'form'        => $form->createView()
            ]);
            // Fin
        }


        $formations =$repositoryFormation->findFirstFormations();
        $formationsMieuxNotees =$repositoryFormation->findBestNotesFormations();
        return $this->render('pages/home.html.twig',[
            'current_menu'=>'homepage',
            'formations' => $formations,
            'formationsMieuxNotees'=>$formationsMieuxNotees,
            'form'        => $form->createView()
        ]);
    }

}
