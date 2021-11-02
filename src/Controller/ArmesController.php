<?php

namespace App\Controller;

use App\Entity\Arme;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ArmesController extends AbstractController
{
    #[Route('/armes', name: 'armes')]
    public function index(): Response
    {
      Arme::createWeapon();
        return $this->render('armes/all.html.twig', [
            'armes' => Arme::$armes,
        ]);
    }
    #[Route('/armes/{name}', name: 'show_arme')]
    public function arme($name): Response
    {
      Arme::createWeapon();
      $arme = Arme::getArmeParNom($name);
        return $this->render('armes/arme.html.twig', [
            'arme' => $arme,
        ]);
    }
}
