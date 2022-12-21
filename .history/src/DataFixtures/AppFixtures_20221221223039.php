<?php

namespace App\DataFixtures;

use Faker\Factory;
use App\Entity\Product;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AppFixtures extends Fixture
{
    private Generator $faker;
    public function __construct()
    {
        $this->faker = Factory::create('fr_FR');
    }
    public function load(ObjectManager $manager): void
    {

        for ($i = 0; $i < 50; $i++) {
            $product = new Product();
            $product->setName(->word())
                ->setDescription(->paragraph())
                ->setPrice(->randomFloat(2, 10, 100))
                ->setImage(->imageUrl(640, 480, 'animals', true))
                ->setCreatedAt(->dateTimeBetween('- 6 months'))
                ->setQuantity(->numberBetween(1, 100))
                ->setPromotion(->boolean());

            $manager->persist($product);
        }

        $manager->flush();
    }
}
