<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ChatonController extends AbstractController
{
    public function index()
    {
        return $this->render('chaton.html.twig');
    }
}