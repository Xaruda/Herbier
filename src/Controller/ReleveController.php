<?php

namespace App\Controller;

use App\Entity\Releve;
use App\Form\ReleveType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ReleveController extends AbstractController
{
    /**
     * @Route("/releve/ajouter", name="releve_form")
     */
    public function index(ManagerRegistry $doctrine, Request $request): Response
    {

        $releve = new Releve();

        $ajout = $this->createForm(ReleveType::class, $releve);

        return $this->render('releve/index.html.twig', [
            'controller_name' => 'ReleveController',
        ]);
    }
}
