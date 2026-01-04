<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class BlogController extends AbstractController
{
    #[Route('/home', name: 'acceuil')]
    public function Home(): Response
    {
        return $this->render('Home/index.html.twig', [
            'controller_name' => 'Accueil',
        ]);
    }
    
    #[Route('/CV', name: 'mon_cv')]
    public function CV(): Response
    {
        return $this->render('CV/cv.html.twig', [
            'controller_name' => 'CV',
        ]);
    }
    
    #[Route('/Hobbies', name: 'mes_hobbies')]
    public function Hobbies(): Response
    {
        return $this->render('Hobbies/hobbies.html.twig', [
            'controller_name' => 'Hobbies',
        ]);
    }
    
    #[Route('/Contact', name: 'me_contacter')]
    public function Contact(): Response
    {
        return $this->render('Contact/contact.html.twig', [
            'controller_name' => 'Contact',
        ]);
    }
    
    #[Route('/Competences', name: 'mes_competences')]
    public function Competences(): Response
    {
        return $this->render('Competences/competences.html.twig', [
            'controller_name' => 'Competences',
        ]);
    }
    #[Route('/Competences/Administrer', name: 'administrer')]
    public function Administrer(): Response
    {
        return $this->render('Competences/Administrer/administrer.html.twig', [
            'controller_name' => 'Administrer',
        ]);
    }
    #[Route('/Competences/Connecter', name: 'connecter')]
    public function Connecter(): Response
    {
        return $this->render('Competences/Connecter/connecter.html.twig', [
            'controller_name' => 'Connecter',
        ]);
    }
    #[Route('/Competences/Programmer', name: 'programmer')]
    public function Programmer(): Response
    {
        return $this->render('Competences/Programmer/programmer.html.twig', [
            'controller_name' => 'Programmer',
        ]);
    }
    #[Route('/Hobbies/Activités', name: 'activites')]
    public function Activités(): Response
    {
        return $this->render('Hobbies/activites.html.twig', [
            'controller_name' => 'Activites',
        ]);
    }
    #[Route('/Hobbies/Passions', name: 'passions')]
    public function Passions(): Response
    {
        return $this->render('Hobbies/passions.html.twig', [
            'controller_name' => 'Passions',
        ]);
    }
    #[Route('/CV/Expériences', name: 'expériences')]
    public function Expériences(): Response
    {
        return $this->render('CV/experiences.html.twig', [
            'controller_name' => 'Experiences',
        ]);
    }
    #[Route('/CV/Diplômes', name: 'diplômes')]
    public function Diplômes(): Response
    {
        return $this->render('CV/diplomes.html.twig', [
            'controller_name' => 'Diplomes',
        ]);
    }

    #[Route('/CV/PDF', name: 'pdf')]
    public function PDF(): Response
    {
        return $this->render('CV/pdf.html.twig', [
            'controller_name' => 'Pdf',
        ]);
    }

}
