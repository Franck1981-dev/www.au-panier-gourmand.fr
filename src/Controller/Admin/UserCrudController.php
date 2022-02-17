<?php

namespace App\Controller\Admin;

use App\Entity\User;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\Field;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\EmailField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AvatarField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Config\Assets;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;



class UserCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return User::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->hideOnForm()->hideOnIndex()
            ->addCssClass('adminuser'),
            TextField::new('firstname', 'Prénom'),
            TextField::new('lastname', 'Nom'),            
            EmailField::new('Email', 'Email'),
            TextField::new('password', 'Mot de passe')->hideOnIndex(),
            TextField::new('address', 'Adresse'),
            TextField::new('city', 'Ville'),
            Field::new('zipcode', 'Code postal'),
            BooleanField::new('isVerified', 'Est-il vérifié ?'),
        ];
    }
    
    public function configureCrud(Crud $crud): Crud
    {
        return $crud
        ->setPageTitle('index', 'Utilisateurs')
        ->setPageTitle('edit', 'Utilisateurs')
        ->setPageTitle('new', 'Utilisateurs')
        ->setPageTitle('detail', 'Utilisateurs')
        ;
    }
    public function configureAssets(Assets $assets): Assets
    {
        return $assets
            ->addCssFile('build/admin.css')
        ;
    } 

    public function configureActions(Actions $actions): Actions
    {
        return $actions
        ->add(Crud::PAGE_NEW, Action::INDEX)
        ->update(Crud::PAGE_INDEX, Action::NEW, function (Action $actions) {
            return $actions->setLabel('Créer Utilisateur');
            })
        ->update(Crud::PAGE_INDEX, Action::EDIT, function (Action $actions) {
                return $actions->setLabel('Editer Utilisateur');
                })
        ->update(Crud::PAGE_INDEX, Action::DELETE, function (Action $actions) {
                return $actions->setLabel('Supprimer Utilisateur');
                })
        ->update(Crud::PAGE_EDIT, Action::SAVE_AND_CONTINUE, function (Action $actions) {
            return $actions->setLabel('Sauvegarder et continuer');
            })
        ->update(Crud::PAGE_EDIT, Action::SAVE_AND_RETURN, function (Action $actions) {
                return $actions->setLabel('Sauvegarder les modifications');
                })
        ->update(Crud::PAGE_NEW, Action::SAVE_AND_RETURN, function (Action $actions) {
                return $actions->setLabel('Créer');
                })
        ->update(Crud::PAGE_NEW, Action::SAVE_AND_ADD_ANOTHER, function (Action $actions) {
                return $actions->setLabel('Sauvegarder et ajouter un autre');
                })
        ->update(Crud::PAGE_NEW, Action::INDEX, function (Action $actions) {
                return $actions->setLabel('Retour à la liste');
                })
        ->update(Crud::PAGE_DETAIL, Action::INDEX, function (Action $actions) {
                return $actions->setLabel('Retour à la liste');
                })
        ->update(Crud::PAGE_DETAIL, Action::DELETE, function (Action $actions) {
                return $actions->setLabel('Supprimer');
                })
        ->update(Crud::PAGE_DETAIL, Action::EDIT, function (Action $actions) {
                return $actions->setLabel('Editer');
                });
    }
}
