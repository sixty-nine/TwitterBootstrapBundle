<?php

namespace LazyGuy\TwitterBootstrapBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction()
    {
        return $this->render('LazyGuyTwitterBootstrapBundle:Default:index.html.twig');
    }
}
