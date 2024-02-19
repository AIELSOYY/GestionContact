<?php

namespace App\Controller;

use App\Entity\Categorie;
use App\Repository\CategorieRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CategorieController extends AbstractController
{
    /**
     * @Route("/categorie", name="categories", methods={"GET"})
     */
    public function listeCategorie(CategorieRepository $repo): Response
    {
        $categories=$repo->findAll();
        return $this->render('categorie/listeCategorie.html.twig', [
            //'controller_name' => 'CategorieController',
            'lesCategories'=>$categories,
        ]);
    }

    /**
     * @Route("/categorie/{id}", name="ficheCategorie", methods={"GET"}))
     */
    public function ficheCategorie($id, CategorieRepository $repo): Response
    {
        $categorie=$repo->find($id);
        $contact=$categorie->getContacts();
        return $this->render('categorie/ficheCategorie.html.twig', [
            'laCategorie'=>$categorie,
            'lesContacts'=>$contact,
        ]);
    }
}
