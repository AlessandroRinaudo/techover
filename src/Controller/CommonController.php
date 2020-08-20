<?php

namespace App\Controller;

use App\Form\FormationSearchType;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\Pagination\PaginationInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\HttpFoundation\Request;

class CommonController extends AbstractController
{
    /**
     * em:entity manager
     * @var EntityManagerInterface
     */
    private $em;

    /**
     * CommonController constructor.
     * @param EntityManagerInterface $em
     */

    public function __construct(EntityManagerInterface $em)
    {
        $this->em=$em;
    }

    /**
     * @param PaginatorInterface $paginator
     * @param Request $request
     * @param $requeteSQL : la requete qui demande soit les formations soit les catégorie
     * @return PaginationInterface
     */

    public function systemePagination(PaginatorInterface $paginator, Request $request,$requeteSQL)
    {
        return $paginator->paginate(
            $requeteSQL,
            $request->query->getInt('page', 1),12);
    }

    /**
     * @param Request $request
     * @param $fomulaireDeFiltre : formulaire de filtre choisi selon la page à filtrer
     * @return FormInterface
     * Cette méthode permet de créer un système de filtre en lui passant de paramètres
     */
    public function systemeFiltre(Request $request, $fomulaireDeFiltre)
    {
        return $this->createForm(FormationSearchType::class,$fomulaireDeFiltre)->handleRequest($request);
    }















}