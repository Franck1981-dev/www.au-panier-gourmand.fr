<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Category;
use App\Entity\Cgv;
use App\Entity\Cart;
use App\Entity\Contact;
use App\Entity\Product;
use App\Entity\DataProtection;
use App\Repository\CategoryRepository;
use App\Repository\CartRepository;
use App\Repository\CgvRepository;
use App\Repository\ContactRepository;
use App\Repository\ProductRepository;
use App\Repository\DataProtectionRepository;




class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(Request $request,CategoryRepository $categoryRepository, ProductRepository $productRepository): Response
    {
        return $this->render('default/index.html.twig', [
            'category' => $categoryRepository->findAll(),
            'product' => $productRepository->findAll(),
        ]);
    }

    /**
     * @Route("/cgv", name="cgv")
     */
    public function cgv(Request $request, CgvRepository $cgvRepository): Response
    {
        return $this->render('default/cgv.html.twig', [
            'cgv' => $cgvRepository->findAll(),
        ]);
    }

    /**
     * @Route("/protection-des-donnes", name="dataprotection")
     */
    public function dataprotection(Request $request, DataProtectionRepository $dataprotectionRepository): Response
    {
        return $this->render('default/dataprotection.html.twig', [
            'dataprotection' => $dataprotectionRepository->findAll(),
        ]);
    }

    /**
     * @Route("/contact", name="contact")
     */
    public function contact(Request $request, ContactRepository $contactRepository): Response
    {
        return $this->render('default/contact.html.twig', [
            'contact' => $contactRepository->findAll(),
        ]);
    }
}
