<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class ArticleController
{

    public function rentflatpage()
    {
        return new Response('rent flat page');
    }
}

?>