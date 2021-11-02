<?php

namespace App\Controller;

use App\Entity\Personnage;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PooController extends AbstractController
{
    #[Route('/', name: 'poo')]
    public function index(): Response
    {
        return $this->render('poo/index.html.twig', [
            'controller_name' => 'PooController',
        ]);
    }
    #[Route('/poo', name: 'persos')]
    public function persos(): Response
    {
      Personnage::createPerson();
        return $this->render('poo/persos.html.twig', [
           "personnages" =>Personnage::$personnes
      
        ]);
    }
}
