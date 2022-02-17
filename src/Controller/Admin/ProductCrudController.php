<?php

namespace App\Controller\Admin;

use App\Entity\Product;
use App\Entity\Category;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AvatarField;
use EasyCorp\Bundle\EasyAdminBundle\Field\EmailField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\Field;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TelephoneField;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\Assets;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use Symfony\Component\HttpFoundation\Request;


class ProductCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Product::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->hideOnForm()->hideOnIndex(),
            AssociationField::new('category', 'Catégorie'),
            Field::new('name', 'Nom'),
            TextEditorField::new('description', 'Description'),
            AvatarField::new('image', 'Image'),
            NumberField::new('price', 'Prix (€)'),
            NumberField::new('stock', 'Stock'),
        ];
    }
    

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
        ->setPageTitle('index', 'Produit')
        ->setPageTitle('edit', 'Produit')
        ->setPageTitle('new', 'Produit')
        ->setPageTitle('detail', 'Produit')
        ;
    }

    public function configureActions(Actions $actions): Actions
    {
        return $actions
            ->add(Crud::PAGE_EDIT, Action::SAVE_AND_ADD_ANOTHER)
            ->add(Crud::PAGE_INDEX, Action::DETAIL)
            ->update(Crud::PAGE_INDEX, Action::NEW, function (Action $actions) {
                return $actions->setLabel('Créer Produit');
                })
            ->update(Crud::PAGE_INDEX, Action::EDIT, function (Action $actions) {
                return $actions->setLabel('Editer Produit');
                })
            ->update(Crud::PAGE_INDEX, Action::DELETE, function (Action $actions) {
                return $actions->setLabel('Supprimer Produit');
                })
            ->update(Crud::PAGE_NEW, Action::SAVE_AND_RETURN, function (Action $actions) {
                return $actions->setLabel('Créer');
                })
            ->update(Crud::PAGE_NEW, Action::SAVE_AND_ADD_ANOTHER, function (Action $actions) {
                return $actions->setLabel('Sauvegarder et ajouter un autre');
                })
            ->update(Crud::PAGE_INDEX, Action::DETAIL, function (Action $actions) {
                return $actions->setLabel('Voir contenu');
                })
            ->update(Crud::PAGE_DETAIL, Action::DELETE, function (Action $actions) {
                return $actions->setLabel('Supprimer');
                })
            ->update(Crud::PAGE_DETAIL, Action::INDEX, function (Action $actions) {
                return $actions->setLabel('Retour à la liste');
                })
            ->update(Crud::PAGE_DETAIL, Action::EDIT, function (Action $actions) {
                return $actions->setLabel('Editer');
                })
            ->update(Crud::PAGE_EDIT, Action::SAVE_AND_ADD_ANOTHER, function (Action $actions) {
                return $actions->setLabel('Sauvegarder et ajouter un autre');
                })
            ->update(Crud::PAGE_EDIT, Action::SAVE_AND_CONTINUE, function (Action $actions) {
                return $actions->setLabel('Sauvegarder et continuer');
                })
            ->update(Crud::PAGE_EDIT, Action::SAVE_AND_RETURN, function (Action $actions) {
                return $actions->setLabel('Sauvegarder les modifications');
                });
    }

    public function configureAssets(Assets $assets): Assets
    {
        return $assets
            ->addCssFile('build/admin.css')
        ;
    } 
}
