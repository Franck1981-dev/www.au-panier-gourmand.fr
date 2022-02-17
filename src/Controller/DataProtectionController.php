<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\DataProtection;

class DataProtectionController extends AbstractController
{
    /**
     * @Route("/data/protection", name="data_protection")
     */
    public function index(): Response
    {
        return $this->render('default/dataprotection.html.twig', [
            'controller_name' => 'DataProtectionController',
        ]);
    }
}
