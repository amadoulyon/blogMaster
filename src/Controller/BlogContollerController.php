<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;



class BlogContollerController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index()
    {
        return new Response('<h1>Page d\'accueil du blog </h1>');
    }

    /**
     * @Route("/add", name="add")
     */
     public function add()
    {
    	return new Response('<h1>Ajouter un article</h1>');
    }

    /**
     * @Route("/show/{url}", name="show")
     */
    public function show($url)
    {
    	return new Response('<h1>Lire l\'article ' .$url. '</h1>');
    }

    /**
     * @Route("/edit/{id}", name="edit")
     */
    public function edit($id)
    {
    	return new Response('<h1>Modifier l\'article ' .$id. '</h1>');
    }

    
    public function remove($id)
    {
    	return new Response('<h1>Supprimer l\'article ' .$id. '</h1>');
    }
}
