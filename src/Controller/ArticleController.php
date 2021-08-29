<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController
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
       return new Response(sprintf(
           "future content about: %s", 
           ucwords(str_replace('-', ' ', $slug))));
    }

}

?>