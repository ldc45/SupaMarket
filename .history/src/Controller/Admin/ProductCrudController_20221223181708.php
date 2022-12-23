<?php

namespace App\Controller\Admin;

use App\Entity\Product;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\MoneyField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class ProductCrudController extends AbstractCrudController
{
    public const P

    public static function getEntityFqcn(): string
    {
        return Product::class;
    }


    // public function configureFields(string $pageName): iterable
    // {
    //     return [
    //         IdField::new('id'),
    //         TextField::new('name'),
    //         TextEditorField::new('description'),
    //         NumberField::new('price')
    //                        ->setNumDecimals(2)
    //                        ->setCurrency('EUR'),
    //         ImageField::new('image'),
    //         DateTimeField::new('createdAt')-->hideOnForm(),
    //         NumberField::new('quantity'),
    //         BooleanField::new('promotion'),
    //     ];
    // }
}
