<?php

namespace App\Controller\Admin;

use EasyCorp\Bundle\EasyAdminBundle\Config\Assets;
use App\Entity\Cart;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use Symfony\Component\HttpFoundation\Request;
use EasyCorp\Bundle\EasyAdminBundle\Field\Field;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;

class CartCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Cart::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->hideOnForm()->hideOnIndex(), 
            DateTimeField::new('date', 'Date'),           
            Field::new('paymentStatus', 'Règlement'),
            NumberField::new('productNumber', 'Nombre de produits'),
            NumberField::new('quantity', 'Quantité'),
            NumberField::new('total', 'Total'),
        ];
    }

    public function configureAssets(Assets $assets): Assets
    {
        return $assets
            ->addCssFile('build/admin.css')
        ;
    } 

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
        ->setPageTitle('index', 'Panier')
        ->setPageTitle('edit', 'Panier')
        ->setPageTitle('new', 'Panier')
        ->setPageTitle('detail', 'Panier');
    }

    public function configureActions(Actions $actions): Actions
    {
        return $actions         
            ->remove(Crud::PAGE_EDIT, Action::SAVE_AND_CONTINUE)
            ->remove(Crud::PAGE_NEW, Action::SAVE_AND_ADD_ANOTHER)
            ->add(Crud::PAGE_NEW, Action::INDEX, function (Action $actions) {
                return $actions->setLabel('edit', 'Editer');
                })
            ->update(Crud::PAGE_INDEX, Action::NEW, function (Action $actions) {
                return $actions->setLabel('Créer Panier');
                })
            ->update(Crud::PAGE_INDEX, Action::EDIT, function (Action $actions) {
                return $actions->setLabel('Editer Panier');
                })
            ->update(Crud::PAGE_INDEX, Action::DELETE, function (Action $actions) {
                return $actions->setLabel('Supprimer Panier');
                })
            ->update(Crud::PAGE_NEW, Action::INDEX, function (Action $actions) {
                return $actions->setLabel('Retour à la liste');
                })
            ->update(Crud::PAGE_NEW, Action::SAVE_AND_RETURN, function (Action $actions) {
                return $actions->setLabel('Créer');
                })
            ;
    }
}
