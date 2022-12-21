<?php

namespace App\DataFixtures;

use App\Entity\Product;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Faker\Factory::create('fr_FR');

        for ($i = 0; $i < 50; $i++) {
            $product = new Product();
            $product->setName($faker->sentence())
                ->setDescription($faker->paragraph())
                ->setPrice($faker->imageUrl(640, 480, 'animals', true);)
                ->setImage($faker->)
                ->setCreatedAt($faker->)
                ->setQuantity($faker->)
                ->setPromotion($faker->)
        }

        $manager->persist($product);

        $manager->flush();
    }
}
