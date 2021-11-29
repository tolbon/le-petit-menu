<?php

namespace App\DataFixtures;

use App\Entity\Allergy;
use App\Entity\Menu;
use App\Entity\Restaurant;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class RestaurantFixtures extends Fixture implements DependentFixtureInterface
{

    public const RU_DIJON = 'RU_DIJON';
    public const CRECHE = 'CRECHE_CAMUSAT';

    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);

        $creche = new Restaurant();
        $creche->setName('Creche Camusat')
            ->setDescription('Creche de Camusat')
            ->setCurrency('EUR')
            ->setActivate(true)
            ->setAdmin($this->getReference(UserFixtures::ADMIN_RESTAU))
            ->setUrlSlug('creche_camusat');

        $this->addReference(self::CRECHE, $creche);
        $manager->persist($creche);

        $ru_dijon = new Restaurant();
        $ru_dijon->setName('Restaurant Universitaire de Dijon')
            ->setDescription('')
            ->setCurrency('EUR')
            ->setActivate(true)
            ->setAdmin($this->getReference(UserFixtures::ADMIN_RESTAU))
            ->setUrlSlug('ru_dijon');
        $this->addReference(self::RU_DIJON, $ru_dijon);
        $manager->persist($ru_dijon);

        $manager->flush();
    }


    public function getDependencies()
    {
        return [
            AllergyFixtures::class,
            DietFixtures::class,
            UserFixtures::class,
        ];
    }
}
