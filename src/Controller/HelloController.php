<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

use App\Service\MathService;
use Symfony\Component\Form\Extension\Core\Type\FormType;

class HelloController extends AbstractController
{
    #[Route('/hello/{name}', name: 'app_hello')]
    public function index($name = false): Response
    {
        return $this->render('hello/index.html.twig', [
            'name' => $name,
        ]);
    }

    #[Route('/suma/{valor1?}/{valor2?}', name: 'app_suma')]
    public function suma(MathService $math , $valor1=null, $valor2=null): Response
    {
        
        try {
            return new Response($math->suma($valor1, $valor2));
        } catch (\Throwable $th) {
            return new Response("Argumentos inválidos");
            
        }
    }

    #[Route('/users/new', name: 'app_user_new')]
    public function new(): Response
    {
        
         $user = new User();
         $user->setUsername('Jhonny');
         $user->setEmail('jhonny@hello.ph');

         $form = $this->createForm(UserType::class, $user);

         return $this->render('user/new.html.twig', [
            'form' => $form,
        ]);
    }

}
