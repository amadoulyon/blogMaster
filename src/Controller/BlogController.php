<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;



class BlogController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index():Response
    {
        return $this->render('blog/index.html.twig');
    }

    /**
     * @Route("/add", name="add")
     */
     public function add()
    {
    	return $this->render('blog/add.html.twig');
    }

    /**
     * @Route("/show/{url}", name="show")
     */
    public function show($url):Response
    {
    	return $this->render('blog/show.html.twig',[ 'slug' => $url]);
    }

    /**
     * @Route("/edit/{id}", name="edit")
     */
    public function edit($id)
    {
        return $this->render('blog/edit.html.twig',[ 'id' => $id]);
    }

    /**
     * @Route("/remove/{id}", name="remove")
     */
    public function remove($id)
    {
    	return new Response('<h1>Supprimer l\'article ' .$id. '</h1>');
    }
}
