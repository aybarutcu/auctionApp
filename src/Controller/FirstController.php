<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FirstController extends AbstractController {
    /**
     * @Route("/", name="index")
     * @return Response
     */
    public function index(Request $request){

        $name= $request->get("name");
        return $this->render("index/index.html.twig",["name"=>1]);
    }
}