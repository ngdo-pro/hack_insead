<?php
namespace CabBundle\DataFixtures\ORM;


use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\FixtureInterface;
use CabBundle\Entity\Places;

class LoadPlacesData implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $place = new Places();
        $place->setName('Fontainebleau');

        $place1 = new Places();
        $place1->setName('Charles De Gaulle');

        $place2 = new Places();
        $place2->setName('Orly');

        $manager->persist($place);
        $manager->persist($place1);
        $manager->persist($place2);
        $manager->flush();
    }
    public function getOrder()
    {
    return 15;
    }
}