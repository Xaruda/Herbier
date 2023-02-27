<?php

namespace App\Controller;

use App\Entity\Lieu;
use App\Form\LieuType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MenuController extends AbstractController
{
    /**
     * @Route("/", name="app_home")
     */
    public function index(ManagerRegistry $doctrine, Request $request): Response
    {
        $lieu=new Lieu();
        $form=$this->createForm(LieuType::class, $lieu);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){
            $em=$doctrine->getManager();
            $em->persist($lieu);

            $em->flush();

        }

        return $this->render('menu/index.html.twig', [
            'lieu'=>$lieu,
            'formulaire'=>$form->createView()
        ]);
    }
}
