<?php

namespace App\Controller\Admin;

use App\Entity\Category;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AvatarField;
use EasyCorp\Bundle\EasyAdminBundle\Field\EmailField;
use EasyCorp\Bundle\EasyAdminBundle\Field\Field;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TelephoneField;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\Assets;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;

class CategoryCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Category::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->hideOnForm(),
            Field::new('name', 'Catégorie'),
            AvatarField::new('image', 'Image'),
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
        ->setPageTitle('index', 'Catégorie')
        ->setPageTitle('edit', 'Catégorie')
        ->setPageTitle('new', 'Catégorie')
        ->setPageTitle('detail', 'Catégorie')
        ;
    }

    public function configureActions(Actions $actions): Actions
    {
        return $actions
            ->remove(Crud::PAGE_EDIT, Action::SAVE_AND_CONTINUE)
            ->remove(Crud::PAGE_NEW, Action::SAVE_AND_ADD_ANOTHER)
            ->add(Crud::PAGE_NEW, Action::INDEX)
            ->update(Crud::PAGE_INDEX, Action::NEW, function (Action $actions) {
                return $actions->setLabel('Créer Catégorie');
                })
            ->update(Crud::PAGE_INDEX, Action::EDIT, function (Action $actions) {
                return $actions->setLabel('Editer Catégorie');
                })
            ->update(Crud::PAGE_INDEX, Action::DELETE, function (Action $actions) {
                return $actions->setLabel('Supprimer Catégorie');
                })
            ->update(Crud::PAGE_NEW, Action::INDEX, function (Action $actions) {
                return $actions->setLabel('Retour à la liste');
                })
            ->update(Crud::PAGE_NEW, Action::SAVE_AND_RETURN, function (Action $actions) {
                return $actions->setLabel('Créer');
                })
            ->update(Crud::PAGE_EDIT, Action::SAVE_AND_RETURN, function (Action $actions) {
                return $actions->setLabel('Sauvegarder les modifications');
                
                });
    }
    
}