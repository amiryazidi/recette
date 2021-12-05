<?php

namespace App\Controller\Admin;

use App\Entity\Type;
use App\Form\TypeType;
use Doctrine\ORM\EntityManager;
use App\Repository\TypeRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class TypeController extends AbstractController
{
    /**
     * @Route("/admin/type", name="admin_types")
     */
    public function index(TypeRepository $repo): Response
    {
        $types = $repo->findAll();
        return $this->render('admin/type/adminType.html.twig',[
        "types" => $types
        ]);
    }

        /**
     * @Route("/admin/type/create", name="ajout_types")
     * @Route("/admin/type/{id}", name="modif_types" , methods="POST|GET")
     */
    public function ajoutEtModif(Type $type =null, Request $request,EntityManagerInterface $em): Response
    {
        if (!$type){
            $type= new Type();
        }

        $form = $this->createForm(TypeType::class, $type);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $em->persist($type);
            $em->flush();
            $this->addFlash('success', "l'action a été bien realisée");
            return $this->redirectToRoute("admin_types");
        }
        return $this->render('admin/type/ajoutEtModif.html.twig',[
        "type" => $type,
        "form" => $form->createView()
        ]);
    }

    /**
     * @Route("/admin/type/{id}", name="sup_types", methods="delete")
     */
    public function suppression(Type $type , EntityManagerInterface $em, Request $request): Response
    {
        if($this->isCsrfTokenValid('SUP'.$type->getId(), $request->get('_token'))){
            $em->remove($type);
            $em->flush();
            $this->addFlash('success', "l'action a été bien realisée");
            return $this->redirectToRoute("admin_types");

        }
    }

}
