<?php

namespace App\DataFixtures;

use App\Entity\Allergy;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AllergyFixtures extends Fixture
{
    public const peanut = 'peanut';
    public const celery = 'celery';
    public const shellfish = 'shellfish';
    public const nut = 'nut';
    public const gluten = 'gluten';
    public const lactose = 'lactose';
    public const lupine = 'lupine';
    public const mollusc = 'mollusc';
    public const mustard = 'mustard';
    public const egg = 'egg';
    public const fish = 'fish';
    public const sesame = 'sesame';
    public const soy = 'soy';
    public const sulphites = 'sulphites';

    public function load(ObjectManager $manager)
    {
        $tAllergies = [
            'peanut',
            'celery',
            'shellfish',
            'nut',
            'gluten',
            'lactose',
            'lupine',
            'mollusc',
            'mustard',
            'egg',
            'fish',
            'sesame',
            'soy',
            'sulphites',
        ];

        $peanut = new Allergy();
        $peanut->setName('peanut')
            ->setDescription('');
        $this->addReference(self::peanut, $peanut);
        $manager->persist($peanut);

        $celery = new Allergy();
        $celery->setName('celery')
            ->setDescription('');
        $this->addReference(self::celery, $celery);
        $manager->persist($celery);

        $shellfish = new Allergy();
        $shellfish->setName('shellfish')
            ->setDescription('');
        $this->addReference(self::shellfish, $shellfish);
        $manager->persist($shellfish);

        $nut = new Allergy();
        $nut->setName('nut')
            ->setDescription('');
        $this->addReference(self::nut, $nut);
        $manager->persist($nut);

        $gluten = new Allergy();
        $gluten->setName('gluten')
            ->setDescription('');
        $this->addReference(self::gluten, $gluten);
        $manager->persist($gluten);

        $lactose = new Allergy();
        $lactose->setName('lactose')
            ->setDescription('');
        $this->addReference(self::lactose, $lactose);
        $manager->persist($lactose);

        $lupine = new Allergy();
        $lupine->setName('lupine')
            ->setDescription('');
        $this->addReference(self::lupine, $lupine);
        $manager->persist($lupine);

        $mollusc = new Allergy();
        $mollusc->setName('mollusc')
            ->setDescription('');
        $this->addReference(self::mollusc, $mollusc);
        $manager->persist($mollusc);

        $mustard = new Allergy();
        $mustard->setName('mustard')
            ->setDescription('');
        $this->addReference(self::mustard, $mustard);
        $manager->persist($mustard);

        $egg = new Allergy();
        $egg->setName('egg')
            ->setDescription('');
        $this->addReference(self::egg, $egg);
        $manager->persist($egg);

        $fish = new Allergy();
        $fish->setName('fish')
            ->setDescription('');
        $this->addReference(self::fish, $fish);
        $manager->persist($fish);

        $sesame = new Allergy();
        $sesame->setName('sesame')
            ->setDescription('');
        $this->addReference(self::sesame, $sesame);
        $manager->persist($sesame);

        $soy = new Allergy();
        $soy->setName('soy')
            ->setDescription('');
        $this->addReference(self::soy, $soy);
        $manager->persist($soy);

        $sulphites = new Allergy();
        $sulphites->setName('sulphites')
            ->setDescription('');
        $this->addReference(self::sulphites, $sulphites);
        $manager->persist($sulphites);
        
        $manager->flush();
    }
}
