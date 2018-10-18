<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class ArticleController extends AbstractController
{

    /**
     * @Route("/")
     */

    public function homepage(){

        return $this->render('article/home.html.twig');
    }

    /**
     * @Route("/about")
     */
    public function about(){

        return $this->render('article/about.html.twig');
    }

    /**
     * @Route("/contact")
     */
    public function contact(){

        return $this->render('article/contact.html.twig');
    }


    /**
     * @Route("/posts/{nameart}")
     */
    public function show($nameart){

        $comments = [
            'El iphone es lo mejor',
            'Al fin puedo descargar juegos de AR!!!',
            'Yujuuuuu!! Apple me ha regalado un iphone Xs-Max'
        ];

        return $this->render('article/show.html.twig',[
            'title'=>ucwords(str_replace('-', ' ', $nameart)),
            'comments'=>$comments
        ]);

    }

}