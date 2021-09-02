<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class ArticleController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function rentflatpage()
    {
        return new Response('rent flat page');
    }

    /**
     * @Route("/articles/{slug}")
     */
    public function show($slug)
    {
        $comments = [
            'Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos.', 
            'Mauris dolor felis, sagittis at, luctus sed, aliquam non, tellus. Nulla quis diam.', 
            'Curabitur ligula sapien, pulvinar a vestibulum quis, facilisis vel sapien.', 
            'Duis bibendum, lectus ut viverra rhoncus, dolor nunc faucibus libero, eget facilisis enim.'
        ];

        dump($comments);
        
        return $this->render('articles/show.html.twig', [
            'article' => sprintf(
                "%s", ucwords(str_replace('-', ' ', $slug))), 
            'comments' => $comments, 
        ]);
        /*
        return new Response(sprintf(
           "<b>future content about:</b> %s", 
           ucwords(str_replace('-', ' ', $slug))));
           */
    }

}

?>