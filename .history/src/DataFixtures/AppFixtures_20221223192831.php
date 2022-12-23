<?php

namespace App\DataFixtures;

use Faker\Factory;
use App\Entity\User;
use Faker\Generator;
use App\Entity\Product;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AppFixtures extends Fixture
{
    /**
     * @var Generator
     */
    private Generator $faker;


    public function __construct()
    {
        $this->faker = Factory::create('fr_FR');
    }

    public function load(ObjectManager $manager): void
    {
        //
        for ($i = 0; $i < 50; $i++) {
            $product = new Product();
            $product->setName($this->faker->word())
                ->setDescription($this->faker->paragraph())
                ->setPrice($this->faker->randomFloat(2, 10, 100))
                ->setImage("https://baconmockup.com/640/360")
                ->setQuantity($this->faker->numberBetween(1, 100))
                ->setPromotion($this->faker->boolean());

            $manager->persist($product);
        }

        //ADMIN
        $admin = new User();
        $admin->setFullName('Administrateur de supamarket')
            ->setPseudo('admin')
            ->setEmail('supermarket@supermarket.com')
            ->setRoles(['ROLE_USER', 'ROLE_ADMIN'])
            ->setPlainPassword('supermarket');

        $manager->persist($admin);

        //USERS

        for ($i = 0; $i < 10; $i++) {
            $user = new User();
            $user->setFullName($this->faker->name())
                ->setPseudo($this->faker->firstName())
                ->setEmail($this->faker->email())
                ->setRoles(['ROLE_USER'])
                ->setPlainPassword('password');

            $manager->persist($user);
        }

        $manager->flush();
    }
}
