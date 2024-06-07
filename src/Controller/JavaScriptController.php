<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;



class JavaScriptController extends AbstractController
{
    #[Route('/javascript', name: 'app_jscript')]
    public function index($name = false): Response
    {
        return $this->render('jscript/index.html.twig', [
            'name' => $name,
        ]);
    }
   

}
