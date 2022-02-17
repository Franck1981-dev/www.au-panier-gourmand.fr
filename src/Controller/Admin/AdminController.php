<?php

namespace App\Controller\Admin;

use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use App\Entity\Cart;
use App\Entity\Category;
use App\Entity\Cgv;
use App\Entity\Contact;
use App\Entity\DataProtection;
use App\Entity\Product;
use App\Entity\Order;
use App\Entity\Shipping;
use App\Entity\User;
use EasyCorp\Bundle\EasyAdminBundle\Config\Assets;


class AdminController extends AbstractDashboardController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        $users = $this->getDoctrine()->getRepository(User::class)->count([]); 
        return $this->render('admin/dashboard.html.twig',[
            'users' => $users,]);
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Au Panier Gourmand')
            ->renderContentMaximized();
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToRoute('Retour au site', 'fa fa-home', 'home');
        yield MenuItem::section('Gestion');
        yield MenuItem::linkToCrud('Panier', 'fas fa-shopping-cart', Cart::class);
        yield MenuItem::linkToCrud('Catégorie', 'fas fa-list', Category::class);
        yield MenuItem::linkToCrud('Produit', 'fas fa-barcode', Product::class);
        yield MenuItem::linkToCrud('Commande', 'fas fa-file-invoice-dollar', Order::class);
        yield MenuItem::linkToCrud('Livraison', 'fas fa-map-marked-alt', Shipping::class);
        yield MenuItem::linkToCrud('Utilisateurs', 'fas fa-users', User::class);
        yield MenuItem::linkToCrud('Contact', 'fas fa-headset', Contact::class);
        yield MenuItem::linkToCrud('Conditions générales de ventes', 'fas fa-file-alt', Cgv::class);
        yield MenuItem::linkToCrud('Protection des données', 'fas fa-user-shield', DataProtection::class);
        yield MenuItem::section('Déconnexion');
        yield MenuItem::linkToLogout('Déconnexion', 'fa fa-sign-out');
    }
    
    public function configureAssets(): Assets
    {
        return Assets::new()->addCssFile('css/admin.css');
    }

    /**
     * @Route("/logout", name="app_logout", methods={"GET"})
     */
    public function logout(): void
    {
         // controller can be blank: it will never be executed!
         throw new \Exception('Don\'t forget to activate logout in security.yaml');
    }
}
