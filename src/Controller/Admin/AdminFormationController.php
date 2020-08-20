<?php
namespace App\Controller\Admin;

use App\Entity\Formation;
use App\Form\FormationType;
use App\Repository\FormationRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class AdminFormationController extends AbstractController
{
    /**
     * @var FormationRepository
     */
    private $repository;
    /**
     * @var EntityManagerInterface
     */
    private $em;

    public function __construct(FormationRepository $repository,EntityManagerInterface $em)
    {
        $this->repository=$repository;
        $this->em = $em;
    }

    /**
     * @Route("/admin", name="admin.formation.index")
     * @return Response
     */
    public function index()
    {
        $formations= $this->repository->findAll();
        return $this->render('admin/formation/index.html.twig',compact('formations'));
    }

    /**
     * affiche cette page si la methode est get ou post
     * @Route("/admin/formation/{id}",name="admin.formation.edit",methods="GET|POST")
     * @param Formation $formation
     * @param Request $request
     * @return Response
     * Méthode qui permet de modifier les formations manuellement dans le cas la start-up le désire
     */
    public function edit (Formation $formation, Request $request)
    {
        $form=$this->createForm(FormationType::class,$formation);
        $form->handleRequest($request); //gerer la requete SQL

        if($form->isSubmitted() &&$form->isValid())
        {
            $this->em->flush();
            $this->addFlash('success','Vous avez modifié la formation'); //message pour garantir le fonctionnement de la modification
            return $this->redirectToRoute('admin.formation.index');
        }
        return $this->render('admin/formation/edit.html.twig',[
            'formation' => $formation,
            'form'=>$form->createView()
        ]);
    }

    /**
     * Affiche cette page si la methode est 'DELETE'
     * @Route("/admin/formation/{id}",name="admin.formation.delete",methods ="DELETE")
     * @param Formation $formation
     * @param Request $request : requete SQL
     * @return RedirectResponse
     * Méthode qui permet de supprimer les formations manuellement dans le cas la start-up le désire

     */
    public function delete (Formation $formation ,Request $request)
    {
        if($this->isCsrfTokenValid('delete'.$formation->getId(),$request->get('_token')))
        {
            $this->em->remove($formation);
            $this->em->flush();
        }
        return $this->redirectToRoute('admin.formation.index');
    }

}
