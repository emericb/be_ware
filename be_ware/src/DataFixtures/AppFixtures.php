<?php

// src/DataFixtures/AppFixtures.php
namespace App\DataFixtures;

use App\Entity\Material;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // create 20 products! Bam!
        for ($i = 0; $i < 20; $i++) {
            $product = new Material();
            $product->setName(''.$i);
            $product->setPrice(mt_rand(10, 100));
            $product->setQuantity(mt_rand(10, 30));
            $product->setCreatedAt(new \DateTime('24-06-2020'));
            $manager->persist($product);
        }

        $manager->flush();
    }
}
