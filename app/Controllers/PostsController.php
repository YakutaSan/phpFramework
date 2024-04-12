<?php

namespace App\Controllers;
use Somecode\Framework\Http\Response;

class PostsController
{
    public function show(int $id): Response
    {
        $content = "<h1>Post Nomer - $id</h1>";

        return new Response($content);
    }
}