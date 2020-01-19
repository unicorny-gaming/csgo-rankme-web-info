<?php
// src/Controller/SiteController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use App\Entity\Rankme;

class DefaultController extends AbstractController
{
    public function index()
    {
        $users = $this->getDoctrine()
          ->getRepository(Rankme::class)
          // ->findAll([
          //   ['score' => 'DESC']
          // ]);
          ->findBy(
            [],
            ['score' => 'DESC']
          );

        return $this->render('default/index.html.twig', [
          'users' => $users,
        ]);
    }
}
