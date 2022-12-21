<?php

namespace App\DataFixtures;

use App\Entity\Product;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $product = new Product();
        $product->setName($faker->sentence);
for ($i=0; $i < ; $i++) { 
    # code...
}

        $manager->persist($product);

        $manager->flush();
    }
}
 
