<?php

namespace App\DataFixtures;

use App\Entity\Menu;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class MenuFixtures extends Fixture implements DependentFixtureInterface
{
    public const MENU_CRECHE_SUP18MONTH_24_11_2021 = 'MENU_CRECHE_SUP18MONTH_24_11_2021';
    public const MENU_CRECHE_SUP18MONTH_25_11_2021 = 'MENU_CRECHE_SUP18MONTH_25_11_2021';

    public const MENU_CRECHE_SUP18MONTH_GOUTER_24_11_2021 = 'MENU_CRECHE_SUP18MONTH_GOUTER_24_11_2021';
    public const MENU_CRECHE_SUP18MONTH_GOUTER_25_11_2021 = 'MENU_CRECHE_SUP18MONTH_GOUTER_25_11_2021';

    public const MENU_CRECHE_LESS18MONTH_24_11_2021 = 'MENU_CRECHE_LESS18MONTH_24_11_2021';
    public const MENU_CRECHE_LESS18MONTH_25_11_2021 = 'MENU_CRECHE_LESS18MONTH_25_11_2021';

    public const MENU_CRECHE_LESS18MONTH_GOUTER_24_11_2021 = 'MENU_CRECHE_LESS18MONTH_GOUTER_24_11_2021';
    public const MENU_CRECHE_LESS18MONTH_GOUTER_25_11_2021 = 'MENU_CRECHE_LESS18MONTH_GOUTER_25_11_2021';

    public const MENU_RU_24_11_2021 = 'MENU_RU_24_11_2021';
    public const MENU_RU_25_11_2021 = 'MENU_RU_25_11_2021';

    public function load(ObjectManager $manager)
    {
        $creche = $this->getReference(RestaurantFixtures::CRECHE);
        $ru_dijon = $this->getReference(RestaurantFixtures::RU_DIJON);

        $m = new Menu();
        $m->setName('Menu +18Mois 24')
            ->setDate(new \DateTimeImmutable('2021-11-24'))
            ->setRestaurant($creche)
            ->setCategory($this->getReference(CategoryFixtures::CRECHE_SUP_18_MONTH))
            ->setMeal($this->getReference(MealFixtures::MIDI))
            ->setDescription('Menu du 24/11/2021')
            ->setActivate(true)
            ->setUrlSlug('menu_20211124')
            ->setInsertDateAt(new \DateTimeImmutable('2021-11-24 14:18:49'));
        $this->addReference(self::MENU_CRECHE_SUP18MONTH_24_11_2021, $m);
        $manager->persist($m);

        $mgouter = new Menu();
        $mgouter->setName('Menu +18Mois 24 Gouter')
            ->setDate(new \DateTimeImmutable('2021-11-24'))
            ->setRestaurant($creche)
            ->setCategory($this->getReference(CategoryFixtures::CRECHE_SUP_18_MONTH))
            ->setMeal($this->getReference(MealFixtures::GOUTER))
            ->setDescription('Menu du 24/11/2021')
            ->setActivate(true)
            ->setUrlSlug('menu_gouter_20211124')
            ->setInsertDateAt(new \DateTimeImmutable('2021-11-24 14:18:49'));
        $this->addReference(self::MENU_CRECHE_SUP18MONTH_GOUTER_24_11_2021, $mgouter);
        $manager->persist($mgouter);

        $m1 = new Menu();
        $m1->setName('Menu +18Mois 25')
            ->setDate(new \DateTimeImmutable('2021-11-25'))
            ->setRestaurant($creche)
            ->setCategory($this->getReference(CategoryFixtures::CRECHE_SUP_18_MONTH))
            ->setMeal($this->getReference(MealFixtures::MIDI))
            ->setDescription('Menu du 25/11/2021')
            ->setActivate(true)
            ->setUrlSlug('menu_20211125')
            ->setInsertDateAt(new \DateTimeImmutable('2021-11-24 14:18:49'));
        $this->addReference(self::MENU_CRECHE_SUP18MONTH_25_11_2021, $m1);
        $manager->persist($m1);

        $mgouter2 = new Menu();
        $mgouter2->setName('Menu +18Mois 25 Gouter')
            ->setDate(new \DateTimeImmutable('2021-11-25'))
            ->setRestaurant($creche)
            ->setCategory($this->getReference(CategoryFixtures::CRECHE_SUP_18_MONTH))
            ->setMeal($this->getReference(MealFixtures::GOUTER))
            ->setDescription('Menu du 25/11/2021')
            ->setActivate(true)
            ->setUrlSlug('menu_gouter_20211125')
            ->setInsertDateAt(new \DateTimeImmutable('2021-11-24 14:18:49'));
        $this->addReference(self::MENU_CRECHE_SUP18MONTH_GOUTER_25_11_2021, $mgouter2);
        $manager->persist($mgouter2);

        $m = new Menu();
        $m->setName('Menu -18Mois 24')
            ->setDate(new \DateTimeImmutable('2021-11-24'))
            ->setRestaurant($creche)
            ->setCategory($this->getReference(CategoryFixtures::CRECHE_LESS_18_MONTH))
            ->setMeal($this->getReference(MealFixtures::MIDI))
            ->setDescription('Menu du 24/11/2021')
            ->setActivate(true)
            ->setUrlSlug('menu_l18_20211124')
            ->setInsertDateAt(new \DateTimeImmutable('2021-11-24 14:18:49'));
        $this->addReference(self::MENU_CRECHE_LESS18MONTH_24_11_2021, $m);
        $manager->persist($m);

        $mgouter = new Menu();
        $mgouter->setName('Menu -18Mois 24 Gouter')
            ->setDate(new \DateTimeImmutable('2021-11-24'))
            ->setRestaurant($creche)
            ->setCategory($this->getReference(CategoryFixtures::CRECHE_LESS_18_MONTH))
            ->setMeal($this->getReference(MealFixtures::GOUTER))
            ->setDescription('Menu du 24/11/2021')
            ->setActivate(true)
            ->setUrlSlug('menu_l18_gouter_20211124')
            ->setInsertDateAt(new \DateTimeImmutable('2021-11-24 14:18:49'));
        $this->addReference(self::MENU_CRECHE_LESS18MONTH_GOUTER_24_11_2021, $mgouter);
        $manager->persist($mgouter);

        $m1 = new Menu();
        $m1->setName('Menu -18Mois 25')
            ->setDate(new \DateTimeImmutable('2021-11-25'))
            ->setRestaurant($creche)
            ->setCategory($this->getReference(CategoryFixtures::CRECHE_LESS_18_MONTH))
            ->setMeal($this->getReference(MealFixtures::MIDI))
            ->setDescription('Menu du 25/11/2021')
            ->setActivate(true)
            ->setUrlSlug('menu_l18_20211125')
            ->setInsertDateAt(new \DateTimeImmutable('2021-11-24 14:18:49'));
        $this->addReference(self::MENU_CRECHE_LESS18MONTH_25_11_2021, $m1);
        $manager->persist($m1);

        $mgouter2 = new Menu();
        $mgouter2->setName('Menu -18Mois Gouter')
            ->setDate(new \DateTimeImmutable('2021-11-25'))
            ->setRestaurant($creche)
            ->setCategory($this->getReference(CategoryFixtures::CRECHE_LESS_18_MONTH))
            ->setMeal($this->getReference(MealFixtures::GOUTER))
            ->setDescription('Menu du 25/11/2021')
            ->setActivate(true)
            ->setUrlSlug('menu_l18_gouter_20211125')
            ->setInsertDateAt(new \DateTimeImmutable('2021-11-24 14:18:49'));
        $this->addReference(self::MENU_CRECHE_LESS18MONTH_GOUTER_25_11_2021, $mgouter2);
        $manager->persist($mgouter2);

        $m2 = new Menu();
        $m2->setName('Menu Ru 24')
            ->setDate(new \DateTimeImmutable('2021-11-24'))
            ->setRestaurant($ru_dijon)
            ->setCategory($this->getReference(CategoryFixtures::ALL))
            ->setMeal($this->getReference(MealFixtures::MIDI))
            ->setDescription('Menu du 24/11/2021')
            ->setActivate(true)
            ->setUrlSlug('menu_ru_20211124')
            ->setInsertDateAt(new \DateTimeImmutable('2021-11-24 14:18:49'));
        $this->addReference(self::MENU_RU_24_11_2021, $m2);

        $m3 = new Menu();
        $m3->setName('Menu Ru 25')
            ->setDate(new \DateTimeImmutable('2021-11-25'))
            ->setRestaurant($ru_dijon)
            ->setCategory($this->getReference(CategoryFixtures::ALL))
            ->setMeal($this->getReference(MealFixtures::MIDI))
            ->setDescription('Menu du 25/11/2021')
            ->setActivate(true)
            ->setUrlSlug('menu_ru_20211125')
            ->setInsertDateAt(new \DateTimeImmutable('2021-11-24 14:18:49'));
        $this->addReference(self::MENU_RU_25_11_2021, $m3);


        $manager->persist($m2);
        $manager->persist($m3);

        $manager->flush();
    }

    public function getDependencies()
    {
        return [
            RestaurantFixtures::class,
            CategoryFixtures::class
        ];
    }
}