<?php

namespace App\DataFixtures;

use App\Entity\Category;
use App\Entity\Diet;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class CategoryFixtures extends Fixture implements DependentFixtureInterface
{
    public function getDependencies()
    {
        return [
            RestaurantFixtures::class,
        ];
    }


    public const CRECHE_SUP_18_MONTH = '+18Mois';
    public const CRECHE_LESS_18_MONTH = '-18Mois';
    public const ALL = 'ALL';

    public function load(ObjectManager $manager)
    {
        $creche = $this->getReference(RestaurantFixtures::CRECHE);
        $ru_dijon = $this->getReference(RestaurantFixtures::RU_DIJON);

        $creche_sup_18_month = new Category();
        $creche_sup_18_month->setName('+18 Mois');
        $creche_sup_18_month->setDescription('Enfant de plus de 18 Mois');
        $creche_sup_18_month->setRestaurant($creche);
        $manager->persist($creche_sup_18_month);
        $this->addReference(self::CRECHE_SUP_18_MONTH, $creche_sup_18_month);

        $creche_less_18_month = new Category();
        $creche_less_18_month->setName('-18 Mois');
        $creche_less_18_month->setDescription('Enfant de moins de 18 Mois');
        $creche_less_18_month->setRestaurant($creche);
        $manager->persist($creche_less_18_month);
        $this->addReference(self::CRECHE_LESS_18_MONTH, $creche_less_18_month);

        $all = new Category();
        $all->setName('Tous');
        $all->setDescription('Pas de catégories');
        $all->setRestaurant($ru_dijon);
        $manager->persist($all);
        $this->addReference(self::ALL, $all);

        $manager->flush();
    }

}