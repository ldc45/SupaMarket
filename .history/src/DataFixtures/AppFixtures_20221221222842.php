<?php

namespace App\DataFixtures;

use Faker\Factory;
use App\Entity\Product;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AppFixtures extends Fixture
{
    private Generator
    public function load(ObjectManager $manager): void
    {
        $this->$faker = Factory::create('fr_FR');

        for ($i = 0; $i < 50; $i++) {
            $product = new Product();
            $product->setName($faker->word())
                ->setDescription($faker->paragraph())
                ->setPrice($faker->randomFloat(2, 10, 100))
                ->setImage($faker->imageUrl(640, 480, 'animals', true))
                ->setCreatedAt($faker->dateTimeBetween('- 6 months'))
                ->setQuantity($faker->numberBetween(1, 100))
                ->setPromotion($faker->boolean());

            $manager->persist($product);
        }

        $manager->flush();
    }
}
