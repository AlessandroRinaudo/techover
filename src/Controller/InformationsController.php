<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class InformationsController extends AbstractController
{
    /**
     * @Route("/informations", name="informations")
     */
    public function index()
    {
        return $this->render('pages/informations.html.twig', [
            'current_menu'=>'informations',
            'controller_name' => 'InformationsController',
        ]);
    }
}
