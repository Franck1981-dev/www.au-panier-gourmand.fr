<?php

namespace App\Controller;

use App\Entity\Cart;
use App\Entity\Product;
use App\Entity\Category;
use App\Entity\Shipping;
use App\Form\CartType;
use App\Form\ProductType;
use App\Form\CategoryType;
use App\Repository\CartRepository;
use App\Repository\ProductRepository;
use App\Repository\CategoryRepository;
use App\Repository\ShippingRepository;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;


/**
 * @Route("/cart")
 */
class CartController extends AbstractController
{
    /**
     * @Route("/", name="cart_index", methods={"GET"})
     */
    public function index(SessionInterface $session, ProductRepository $productRepository)
    {
        $cart = $session->get("panier", []);

        // On "fabrique" les données
        $dataCart = [];
        $total = 0;

        foreach($cart as $id => $quantity){
            $product = $productRepository->find($id);
            $dataCart[] = [
                "product" => $product,
                "quantity" => $quantity
            ];
            $total += $product->getPrice() * $quantity;
        }

        return $this->render('cart/index.html.twig', compact("dataCart", "total"));
    }

    /**
     * @Route("/add/{id}", name="cart_add")
     */
    public function add(Product $product, SessionInterface $session)
    {
        // On récupère le panier actuel
        $cart = $session->get("panier", []);
        $id = $product->getId();

        if(!empty($cart[$id])){
            $cart[$id]++;
        }else{
            $cart[$id] = 1;
        }

        // On sauvegarde dans la session
        $session->set("panier", $cart);

        return $this->redirectToRoute("cart_index");
    }

    /**
     * @Route("/remove/{id}", name="cart_remove")
     */
    public function remove(Product $product, SessionInterface $session)
    {
        // On récupère le panier actuel
        $cart = $session->get("panier", []);
        $id = $product->getId();

        if(!empty($cart[$id])){
            if($cart[$id] > 1){
                $cart[$id]--;
            }else{
                unset($cart[$id]);
            }
        }

        // On sauvegarde dans la session
        $session->set("panier", $cart);

        return $this->redirectToRoute("cart_index");
    }

    /**
     * @Route("/delete/{id}", name="cart_delete")
     */
    public function delete(Product $product, SessionInterface $session)
    {
        // On récupère le panier actuel
        $cart = $session->get("panier", []);
        $id = $product->getId();

        if(!empty($cart[$id])){
            unset($cart[$id]);
        }

        // On sauvegarde dans la session
        $session->set("panier", $cart);

        return $this->redirectToRoute("cart_index");
    }

    /**
     * @Route("/deleteAll", name="cart_delete_all")
     */
    public function deleteAll(SessionInterface $session)
    {
        $session->remove("panier");

        return $this->redirectToRoute("cart_index");
    }
}