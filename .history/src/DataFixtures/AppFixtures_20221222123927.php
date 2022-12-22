<?php

namespace App\DataFixtures;

use Faker\Factory;
use Faker\Generator;
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
            $product->setName($this->faker->word())
                ->setDescription($this->faker->paragraph())
                ->setPrice($this->faker->randomFloat(2, 10, 100))
                ->setImage("https://via.placeholder.com/468x60?text=Visit+Blogging.com+Now C/O https://placeholder.com/")
                ->setQuantity($this->faker->numberBetween(1, 100))
                ->setPromotion($this->faker->boolean());

            $manager->persist($product);
        }

        $manager->flush();
    }
}
