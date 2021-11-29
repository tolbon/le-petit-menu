<?php

namespace App\DataFixtures;

use App\Entity\Diet;
use App\Entity\Meal;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class MealFixtures extends Fixture
{
    public const PETIT_DEJEUNER = 'Full breakfast';
    public const MIDI = 'lunch';
    public const GOUTER = 'lunch hour';
    public const DINNER = 'dinner';

    public function load(ObjectManager $manager)
    {
        $a = new Meal();
        $a->setName('Petit Dejeuner');
        $manager->persist($a);
        $this->addReference(self::PETIT_DEJEUNER, $a);

        $b = new Meal();
        $b->setName('Repas du Midi');
        $manager->persist($b);
        $this->addReference(self::MIDI, $b);

        $c = new Meal();
        $c->setName('Gouter');
        $manager->persist($c);
        $this->addReference(self::GOUTER, $c);

        $d = new Meal();
        $d->setName('Dinner');
        $manager->persist($d);
        $this->addReference(self::DINNER, $d);

        $manager->flush();
    }
}