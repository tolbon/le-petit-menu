<?php

namespace App\DataFixtures;

use App\Entity\Menu;
use App\Entity\MenuSection;
use App\Entity\Restaurant;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class MenuSectionFixtures extends Fixture implements DependentFixtureInterface
{

    public const MENUSECTION_ROOT_CRECHE = 'menu_section_root_creche';

    public const ROSAPARKS_MENUSECTION_ROOT = 'rosaparks_menu_section_root';
    public const ROSAPARKS_MENUSECTION_BURGER = 'rosaparks_menu_section1_rosaparks';
    public const ROSAPARKS_MENUSECTION_BURGER_SOUSSECTION = 'rosaparks_menu_section11_rosaparks';
    public const ROSAPARKS_MENUSECTION_BURGER_SOUSSECTION2 = 'rosaparks_menu_section12_rosaparks';
    public const ROSAPARKS_MENUSECTION_COMBO = 'rosaparks_menu_section2_rosaparks';
    public const ROSAPARKS_MENUSECTION_EXTRAS = 'rosaparks_menu_section_extras';
    public const ROSAPARKS_MENUSECTION_ACCOMPAGNEMENT = 'rosaparks_menu_section_accompagnements_rosaparks';
    public const ROSAPARKS_MENUSECTION_DESSERTS = 'rosaparks_menu_section_dessert_rosaparks';
    public const ROSAPARKS_MENUSECTION_BOISSONS = 'rosaparks_menu_section_boisson_rosaparks';

    public const MENUSECTION_ROOT_BOSPHORE = 'menu_section_root_bosphore';
    public const MENUSECTION_BOSPHORE = 'menu_section_bosphore';
    public const MENUSECTION_SUP18_2021_11_24 = 'MENUSECTION_SUP18_2021_11_24';
    public const MENUSECTION_SUP18_2021_11_24_GOUTER = 'MENUSECTION_SUP18_2021_11_24_GOUTER';
    public const MENUSECTION_SUP18_2021_11_25 = 'MENUSECTION_SUP18_2021_11_25';
    public const MENUSECTION_SUP18_2021_11_25_GOUTER = 'MENUSECTION_SUP18_2021_11_25_GOUTER';
    public const MENUSECTION_LESS18_2021_11_24 = 'MENUSECTION_LESS18_2021_11_24';
    public const MENUSECTION_LESS18_2021_11_24_GOUTER = 'MENUSECTION_LESS18_2021_11_24_GOUTER';
    public const MENUSECTION_LESS18_2021_11_25 = 'MENUSECTION_LESS18_2021_11_25';
    public const MENUSECTION_LESS18_2021_11_25_GOUTER = 'MENUSECTION_LESS18_2021_11_25_GOUTER';


    public function load(ObjectManager $manager)
    {
        /** @var Menu $pizzeria_restaurant */
        $pizzeria_restaurant = $this->getReference(RestaurantFixtures::CRECHE);
        /** @var Menu $rosaparks_restaurant */
        $rosaparks_restaurant = $this->getReference(RestaurantFixtures::RU_DIJON);

        $rosaparks_menusection_root = new MenuSection();
        $rosaparks_menusection_root->setName('Root')
            ->setDescription('No display it')
            ->setRestaurant($rosaparks_restaurant)
            ->setDisplayChildrenSectionAfterMenuItems(true)
            ->setDisplayCurrencyOnChildren(true)
            ->setDisplayCurrencySymbolOnTitle(true);
        $this->addReference(self::ROSAPARKS_MENUSECTION_ROOT, $rosaparks_menusection_root);

        $rosa_burger = new MenuSection();
        $rosa_burger->setName('nos burgers')
            ->setDescription('Nos viandes* sont cuites à point, n’hésitez pas à préciser votre cuisson ! Steak haché 120gr.')
        ->setRestaurant($rosaparks_restaurant)
        ->setDisplayChildrenSectionAfterMenuItems(true)
        ->setDisplayCurrencyOnChildren(true)
        ->setDisplayCurrencySymbolOnTitle(true);
        $this->addReference(self::ROSAPARKS_MENUSECTION_BURGER, $rosa_burger);

        $rosa_1_vege = new MenuSection();
        $rosa_1_vege->setName('ENVIE D\'UN VÉGÉ ?')
            ->setDescription('2 CHOIX POUR REMPLACER NOTRE STEAK')
            ->setRestaurant($rosaparks_restaurant)
            ->setDisplayChildrenSectionAfterMenuItems(true)
            ->setDisplayCurrencyOnChildren(true)
            ->setDisplayCurrencySymbolOnTitle(true);
        $this->addReference(self::ROSAPARKS_MENUSECTION_BURGER_SOUSSECTION, $rosa_1_vege);

        $rosa_1_faim = new MenuSection();
        $rosa_1_faim->setName('une grosse faim ?')
            ->setDescription('')
            ->setRestaurant($rosaparks_restaurant)
            ->setDisplayChildrenSectionAfterMenuItems(true)
            ->setDisplayCurrencyOnChildren(true)
            ->setDisplayCurrencySymbolOnTitle(true);
        $this->addReference(self::ROSAPARKS_MENUSECTION_BURGER_SOUSSECTION2, $rosa_1_faim);

        $rosa_extras = new MenuSection();
        $rosa_extras->setName('extras')
            ->setDescription('')
            ->setRestaurant($rosaparks_restaurant)
            ->setDisplayChildrenSectionAfterMenuItems(true)
            ->setDisplayCurrencyOnChildren(true)
            ->setDisplayCurrencySymbolOnTitle(true);
        $this->addReference(self::ROSAPARKS_MENUSECTION_EXTRAS, $rosa_extras);

        $rosa_combos = new MenuSection();
        $rosa_combos->setName('Combos')
            ->setDescription('Burger + Accompagnement + Boisson')
            ->setPrice1(3.5)
            ->setRestaurant($rosaparks_restaurant)
            ->setDisplayChildrenSectionAfterMenuItems(true)
            ->setDisplayCurrencyOnChildren(true)
            ->setDisplayCurrencySymbolOnTitle(true);
        $this->addReference(self::ROSAPARKS_MENUSECTION_COMBO, $rosa_combos);

        $rosa_accompagnements = new MenuSection();
        $rosa_accompagnements->setName('accompagnements')
            ->setDescription('')
            ->setRestaurant($rosaparks_restaurant)
            ->setDisplayChildrenSectionAfterMenuItems(true)
            ->setDisplayCurrencyOnChildren(true)
            ->setDisplayCurrencySymbolOnTitle(true);
        $this->addReference(self::ROSAPARKS_MENUSECTION_ACCOMPAGNEMENT, $rosa_accompagnements);

        $rosa_boissons = new MenuSection();
        $rosa_boissons->setName('Boissons')
            ->setDescription('')
            ->setRestaurant($rosaparks_restaurant)
            ->setDisplayChildrenSectionAfterMenuItems(true)
            ->setDisplayCurrencyOnChildren(true)
            ->setDisplayCurrencySymbolOnTitle(true);
        $this->addReference(self::ROSAPARKS_MENUSECTION_BOISSONS, $rosa_boissons);

        $rosa_desserts = new MenuSection();
        $rosa_desserts->setName('DESSERTS (fait-maison) ')
            ->setDescription('')
            ->setRestaurant($rosaparks_restaurant)
            ->setDisplayChildrenSectionAfterMenuItems(true)
            ->setDisplayCurrencyOnChildren(true)
            ->setDisplayCurrencySymbolOnTitle(true);
        $this->addReference(self::ROSAPARKS_MENUSECTION_DESSERTS, $rosa_desserts);


        $manager->persist($rosaparks_menusection_root);
        $manager->persist($rosa_burger);
        $manager->persist($rosa_1_vege);
        $manager->persist($rosa_1_faim);
        $manager->persist($rosa_extras);
        $manager->persist($rosa_combos);
        $manager->persist($rosa_accompagnements);
        $manager->persist($rosa_boissons);
        $manager->persist($rosa_desserts);

        $pizza_menusection_root = new MenuSection();
        $pizza_menusection_root->setName('Root')
            ->setDescription('No display it')
            ->setRestaurant($pizzeria_restaurant)
            ->setDisplayChildrenSectionAfterMenuItems(true)
            ->setDisplayCurrencyOnChildren(true)
            ->setDisplayCurrencySymbolOnTitle(true);
        $this->addReference(self::MENUSECTION_ROOT_CRECHE, $pizza_menusection_root);
        $manager->persist($pizza_menusection_root);

        $pizza_menusection_root = new MenuSection();
        $pizza_menusection_root->setName('')
            ->setDescription('')
            ->setRestaurant($pizzeria_restaurant)
            ->setDisplayChildrenSectionAfterMenuItems(true)
            ->setDisplayCurrencyOnChildren(true)
            ->setDisplayCurrencySymbolOnTitle(true);
        $this->addReference(self::MENUSECTION_SUP18_2021_11_24, $pizza_menusection_root);
        $manager->persist($pizza_menusection_root);

        $pizza_menusection_root = new MenuSection();
        $pizza_menusection_root->setName('')
            ->setDescription('')
            ->setRestaurant($pizzeria_restaurant)
            ->setDisplayChildrenSectionAfterMenuItems(true)
            ->setDisplayCurrencyOnChildren(true)
            ->setDisplayCurrencySymbolOnTitle(true);
        $this->addReference(self::MENUSECTION_SUP18_2021_11_24_GOUTER, $pizza_menusection_root);
        $manager->persist($pizza_menusection_root);


        $pizza_menusection_root = new MenuSection();
        $pizza_menusection_root->setName('')
            ->setDescription('')
            ->setRestaurant($pizzeria_restaurant)
            ->setDisplayChildrenSectionAfterMenuItems(true)
            ->setDisplayCurrencyOnChildren(true)
            ->setDisplayCurrencySymbolOnTitle(true);
        $this->addReference(self::MENUSECTION_SUP18_2021_11_25, $pizza_menusection_root);
        $manager->persist($pizza_menusection_root);

        $pizza_menusection_root = new MenuSection();
        $pizza_menusection_root->setName('')
            ->setDescription('')
            ->setRestaurant($pizzeria_restaurant)
            ->setDisplayChildrenSectionAfterMenuItems(true)
            ->setDisplayCurrencyOnChildren(true)
            ->setDisplayCurrencySymbolOnTitle(true);
        $this->addReference(self::MENUSECTION_SUP18_2021_11_25_GOUTER, $pizza_menusection_root);
        $manager->persist($pizza_menusection_root);



        $pizza_menusection_root = new MenuSection();
        $pizza_menusection_root->setName('')
            ->setDescription('')
            ->setRestaurant($pizzeria_restaurant)
            ->setDisplayChildrenSectionAfterMenuItems(true)
            ->setDisplayCurrencyOnChildren(true)
            ->setDisplayCurrencySymbolOnTitle(true);
        $this->addReference(self::MENUSECTION_LESS18_2021_11_24, $pizza_menusection_root);
        $manager->persist($pizza_menusection_root);

        $pizza_menusection_root = new MenuSection();
        $pizza_menusection_root->setName('')
            ->setDescription('')
            ->setRestaurant($pizzeria_restaurant)
            ->setDisplayChildrenSectionAfterMenuItems(true)
            ->setDisplayCurrencyOnChildren(true)
            ->setDisplayCurrencySymbolOnTitle(true);
        $this->addReference(self::MENUSECTION_LESS18_2021_11_24_GOUTER, $pizza_menusection_root);
        $manager->persist($pizza_menusection_root);


        $pizza_menusection_root = new MenuSection();
        $pizza_menusection_root->setName('')
            ->setDescription('')
            ->setRestaurant($pizzeria_restaurant)
            ->setDisplayChildrenSectionAfterMenuItems(true)
            ->setDisplayCurrencyOnChildren(true)
            ->setDisplayCurrencySymbolOnTitle(true);
        $this->addReference(self::MENUSECTION_LESS18_2021_11_25, $pizza_menusection_root);
        $manager->persist($pizza_menusection_root);

        $pizza_menusection_root = new MenuSection();
        $pizza_menusection_root->setName('')
            ->setDescription('')
            ->setRestaurant($pizzeria_restaurant)
            ->setDisplayChildrenSectionAfterMenuItems(true)
            ->setDisplayCurrencyOnChildren(true)
            ->setDisplayCurrencySymbolOnTitle(true);
        $this->addReference(self::MENUSECTION_LESS18_2021_11_25_GOUTER, $pizza_menusection_root);
        $manager->persist($pizza_menusection_root);

        
        $manager->flush();
    }


    public function getDependencies()
    {
        return [
            RestaurantFixtures::class
        ];
    }
}