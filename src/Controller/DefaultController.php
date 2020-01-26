<?php
// src/Controller/SiteController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

use App\Entity\Rankme;

class DefaultController extends AbstractController
{
    /**
      * @Route("/", name="index", methods={"GET"})
      */
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

    /**
      * @Route("/user/{id}", name="user_info", methods={"GET"})
      */
    public function user(int $id)
    {
      $user = $this->getDoctrine()
        ->getRepository(Rankme::class)
        ->find($id);

      if (!$user) {
        throw new NotFoundHttpException("User not found");
      }

      return $this->render('default/user.html.twig', [
        'user' => $user,
      ]);
    }
}
