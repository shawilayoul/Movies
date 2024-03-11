<?php

namespace App\DataFixtures;

use App\Entity\Actor;
use App\Entity\Movie;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        $movie1 = new Movie();
        $movie1->setTitle("first movies");
        $movie1->setReleaseYear(1992);
        $movie1->setDescription("good movie to watch");
        $movie1->setImagePath("https://images.pexels.com/photos/2726126/pexels-photo-2726126.jpeg?auto=compress&cs=tinysrgb&w=600");
        $manager->persist($movie1);

        $movie2 = new Movie();
        $movie2->setTitle("Second movies");
        $movie2->setReleaseYear(2002);
        $movie2->setDescription("good movie to watch for 2002");
        $movie2->setImagePath("https://images.pexels.com/photos/2726126/pexels-photo-2726126.jpeg?auto=compress&cs=tinysrgb&w=600");
        $manager->persist($movie2);

        $movie3 = new Movie();
        $movie3->setTitle("Third movies");
        $movie3->setReleaseYear(1995);
        $movie3->setDescription("nice movie to watch for 1995");
        $movie3->setImagePath("https://images.pexels.com/photos/2726126/pexels-photo-2726126.jpeg?auto=compress&cs=tinysrgb&w=600");
        $manager->persist($movie3);
        // creating actor object
        $actor1 = new Actor();
        $actor1->setName("shawil");
        $manager->persist($actor1);

        $actor2 = new Actor();
        $actor2->setName("Mousa");
        $manager->persist($actor2);
        $actor3 = new Actor();
        $actor3->setName("Ali");
        $manager->persist($actor3);
        $manager->flush();
    }
}
