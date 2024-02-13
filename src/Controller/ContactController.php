<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Repository\ContactRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ContactController extends AbstractController
{
    /**
     * @Route("/contact", name="contacts", methods={"GET"})
     */
    public function listeContact(ContactRepository $repo): Response
    {
        /*$manager=$this->getDoctrine()->getManager();
        $repo=$manager->getRepository(Contact::class);*/
        $contacts=$repo->findAll();
        //dump($contacts);
        return $this->render('contact/listeContacts.html.twig', [
            /*'controller_name' => 'ContactController',*/
            'lesContacts'=>$contacts,
        ]);
    }

    /**
     * @Route("/contact/{id}", name="ficheContact", methods={"GET"}))
     */
    public function ficheContact($id, ContactRepository $repo): Response
    {
        $contact=$repo->find($id);
        return $this->render('contact/ficheContact.html.twig', [
            'leContact'=>$contact,
        ]);
    }

}
