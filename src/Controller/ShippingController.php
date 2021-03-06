<?php

namespace App\Controller;

use App\Entity\Shipping;
use App\Form\ShippingType;
use App\Repository\ShippingRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/shipping")
 */
class ShippingController extends AbstractController
{
    /**
     * @Route("/", name="shipping_index", methods={"GET"})
     */
    public function index(ShippingRepository $shippingRepository): Response
    {
        return $this->render('shipping/index.html.twig', [
            'shippings' => $shippingRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="shipping_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $shipping = new Shipping();
        $form = $this->createForm(ShippingType::class, $shipping);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($shipping);
            $entityManager->flush();

            return $this->redirectToRoute('shipping_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('shipping/new.html.twig', [
            'shipping' => $shipping,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="shipping_show", methods={"GET"})
     */
    public function show(Shipping $shipping): Response
    {
        return $this->render('shipping/show.html.twig', [
            'shipping' => $shipping,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="shipping_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Shipping $shipping, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ShippingType::class, $shipping);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('shipping_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('shipping/edit.html.twig', [
            'shipping' => $shipping,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="shipping_delete", methods={"POST"})
     */
    public function delete(Request $request, Shipping $shipping, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$shipping->getId(), $request->request->get('_token'))) {
            $entityManager->remove($shipping);
            $entityManager->flush();
        }

        return $this->redirectToRoute('shipping_index', [], Response::HTTP_SEE_OTHER);
    }
}
