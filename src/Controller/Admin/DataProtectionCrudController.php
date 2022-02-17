<?php

namespace App\Controller\Admin;

use App\Entity\DataProtection;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Config\Assets;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Field\AvatarField;
use EasyCorp\Bundle\EasyAdminBundle\Field\EmailField;
use EasyCorp\Bundle\EasyAdminBundle\Field\Field;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TelephoneField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;

class DataProtectionCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return DataProtection::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->hideOnForm(),
            TextField::new('name', 'Nom'),
            TextEditorField::new('description', 'Description'),
        ];
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
        ->setPageTitle('index', 'Protection des données')
        ->setPageTitle('edit', 'Protection des données')
        ->setPageTitle('new', 'Protection des données')
        ->setPageTitle('detail', 'Protection des données')
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
            ->remove(Crud::PAGE_NEW, Action::SAVE_AND_ADD_ANOTHER)
            ->update(Crud::PAGE_INDEX, Action::NEW, function (Action $actions) {
                return $actions->setLabel('Créer Protection des données');
                })
            ->update(Crud::PAGE_INDEX, Action::EDIT, function (Action $actions) {
                return $actions->setLabel('Editer Protection des données');
                })
            ->update(Crud::PAGE_INDEX, Action::DELETE, function (Action $actions) {
                return $actions->setLabel('Supprimer Protection des données');
                })
            ->update(Crud::PAGE_NEW, Action::SAVE_AND_RETURN, function (Action $actions) {
                return $actions->setLabel('Créer');
                })
            ->update(Crud::PAGE_NEW, Action::INDEX, function (Action $actions) {
                return $actions->setLabel('Retour à la liste');
                })
            ->update(Crud::PAGE_EDIT, Action::SAVE_AND_CONTINUE, function (Action $actions) {
                return $actions->setLabel('Sauvegarder et continuer');
                })
            ->update(Crud::PAGE_EDIT, Action::SAVE_AND_RETURN, function (Action $actions) {
                return $actions->setLabel('Sauvegarder les modifications');
                });
    }
}
