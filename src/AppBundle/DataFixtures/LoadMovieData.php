<?php
namespace AppBundle\DataFixtures;

use AppBundle\Entity\Movie;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;/**
 * Created by PhpStorm.
 * User: Omar
 * Date: 26/11/2018
 * Time: 16:02
 */
class LoadMovieData extends Fixture
{

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $movie=new Movie();
        $movie->setTitle('hunger games');
        $movie->setTime(189);
        $movie->setYear(2018);
        $movie->setDescription('Amazing film !! ');
        $manager->persist($movie);
        $movie=new Movie();
        $movie->setTitle('hunger games');
        $movie->setTime(189);
        $movie->setYear(2018);
        $movie->setDescription('Amazing film !! ');
        $manager->persist($movie);

        $manager->flush();

    }
}