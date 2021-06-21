<?php
// src/Controller/WildController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProgramController extends AbstractController
{
     [...]
     /**
     * @Route("/programs/list/{page}", name="program_list")
     */
     public function list(int $page): Response
     {
         return $this->render('program/list.html.twig', ['page' => $page]);
     }
}