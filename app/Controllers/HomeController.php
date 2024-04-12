<?php

namespace App\Controllers;
use Somecode\Framework\Controller\AbstractController;
use Somecode\Framework\Http\Response;

class HomeController extends AbstractController
{
    public function __construct(
    ){}

    public function index(): Response
    {
        dd($this->container->get('twig'));
        $content = '<h1>Glavnaya stranica</h1>';

        return new Response($content);
    }
}