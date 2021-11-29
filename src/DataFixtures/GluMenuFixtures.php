<?php

namespace App\DataFixtures;

use App\Entity\MenuItem;
use App\Entity\MenuMenuSection;
use App\Entity\MenuSection;
use App\Entity\MenuSectionMenuItem;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class GluMenuFixtures  extends Fixture implements DependentFixtureInterface
{

    public function getDependencies()
    {
        return [
            MenuItemFixtures::class,
            RestaurantFixtures::class,
            MenuSectionFixtures::class,
        ];
    }

    public function load(ObjectManager $manager)
    {
        $menu_sup18_creche_24 = $this->getReference(MenuFixtures::MENU_CRECHE_SUP18MONTH_24_11_2021);
        $menu_sup18_creche_24_gouter = $this->getReference(MenuFixtures::MENU_CRECHE_SUP18MONTH_GOUTER_24_11_2021);
        $menu_less18_creche_24 = $this->getReference(MenuFixtures::MENU_CRECHE_LESS18MONTH_24_11_2021);
        $menu_less18_creche_24_gouter = $this->getReference(MenuFixtures::MENU_CRECHE_LESS18MONTH_GOUTER_24_11_2021);

        $menu_sup18_creche_25 = $this->getReference(MenuFixtures::MENU_CRECHE_SUP18MONTH_25_11_2021);
        $menu_sup18_creche_25_gouter = $this->getReference(MenuFixtures::MENU_CRECHE_SUP18MONTH_GOUTER_25_11_2021);
        $menu_less18_creche_25 = $this->getReference(MenuFixtures::MENU_CRECHE_LESS18MONTH_25_11_2021);
        $menu_less18_creche_25_gouter = $this->getReference(MenuFixtures::MENU_CRECHE_LESS18MONTH_GOUTER_25_11_2021);

        $menuSection_root_creche = $this->getReference(MenuSectionFixtures::MENUSECTION_ROOT_CRECHE);
        $menuSection_SUP18_24_11_2021 = $this->getReference(MenuSectionFixtures::MENUSECTION_SUP18_2021_11_24);
        $menuSection_SUP18_24_11_2021_GOUTER = $this->getReference(MenuSectionFixtures::MENUSECTION_SUP18_2021_11_24_GOUTER);
        $menuSection_SUP18_25_11_2021 = $this->getReference(MenuSectionFixtures::MENUSECTION_SUP18_2021_11_25);
        $menuSection_SUP18_25_11_2021_GOUTER = $this->getReference(MenuSectionFixtures::MENUSECTION_SUP18_2021_11_25_GOUTER);
        $menuSection_LESS18_24_11_2021 = $this->getReference(MenuSectionFixtures::MENUSECTION_LESS18_2021_11_24);
        $menuSection_LESS18_24_11_2021_GOUTER = $this->getReference(MenuSectionFixtures::MENUSECTION_LESS18_2021_11_24_GOUTER);
        $menuSection_LESS18_25_11_2021 = $this->getReference(MenuSectionFixtures::MENUSECTION_LESS18_2021_11_25);
        $menuSection_LESS18_25_11_2021_GOUTER = $this->getReference(MenuSectionFixtures::MENUSECTION_LESS18_2021_11_25_GOUTER);

        $menu_rosaparks = $this->getReference(MenuFixtures::MENU_RU_24_11_2021);

        $rosaparks_menusection_root = $this->getReference(MenuSectionFixtures::ROSAPARKS_MENUSECTION_ROOT);
        $rosaparks_menusection_burger = $this->getReference(MenuSectionFixtures::ROSAPARKS_MENUSECTION_BURGER);
        $rosaparks_menusection_burger_soussection = $this->getReference(MenuSectionFixtures::ROSAPARKS_MENUSECTION_BURGER_SOUSSECTION);
        $rosaparks_menusection_burger_soussection2 = $this->getReference(MenuSectionFixtures::ROSAPARKS_MENUSECTION_BURGER_SOUSSECTION2);
        $rosaparks_menusection_extras = $this->getReference(MenuSectionFixtures::ROSAPARKS_MENUSECTION_EXTRAS);
        $rosaparks_menusection_combos = $this->getReference(MenuSectionFixtures::ROSAPARKS_MENUSECTION_COMBO);
        $rosaparks_menusection_accompagnement = $this->getReference(MenuSectionFixtures::ROSAPARKS_MENUSECTION_ACCOMPAGNEMENT);
        $rosaparks_menusection_boissons = $this->getReference(MenuSectionFixtures::ROSAPARKS_MENUSECTION_BOISSONS);
        $rosaparks_menusection_dessert = $this->getReference(MenuSectionFixtures::ROSAPARKS_MENUSECTION_DESSERTS);

        /** @var MenuItem $rosaparks_burger1 */
        $rosaparks_burger1 = $this->getReference(MenuItemFixtures::ROSPARKS_BURGER1);
        /** @var MenuItem $rosaparks_burger2 */
        $rosaparks_burger2 = $this->getReference(MenuItemFixtures::ROSPARKS_BURGER2);
        $rosaparks_burger3 = $this->getReference(MenuItemFixtures::ROSPARKS_BURGER3);
        $rosaparks_burger4 = $this->getReference(MenuItemFixtures::ROSPARKS_BURGER4);
        $rosaparks_burger5 = $this->getReference(MenuItemFixtures::ROSPARKS_BURGER5);
        $rosaparks_burger6 = $this->getReference(MenuItemFixtures::ROSPARKS_BURGER6);
        $rosaparks_burger7 = $this->getReference(MenuItemFixtures::ROSPARKS_BURGER7);
        $rosaparks_burger8 = $this->getReference(MenuItemFixtures::ROSPARKS_BURGER8);
        $rosaparks_burger9 = $this->getReference(MenuItemFixtures::ROSPARKS_BURGER9);
        $rosaparks_champignon = $this->getReference(MenuItemFixtures::ROSPARKS_CHAMPIGNONS);
        $rosaparks_steak_vege = $this->getReference(MenuItemFixtures::ROSPARKS_STEAK_VEGAN);
        $rosaparks_double_steak = $this->getReference(MenuItemFixtures::ROSPARKS_STEAK_DOUBLE);
        $rosaparks_add_cheese = $this->getReference(MenuItemFixtures::ROSPARKS_ADD_CHEESE);
        $rosaparks_add_ingredients = $this->getReference(MenuItemFixtures::ROSPARKS_ADD_INGREDIENTS);
        $rosaparks_crispychicken = $this->getReference(MenuItemFixtures::ROSPARKS_CRISPY_CHICKEN);
        $rosaparks_freshsalad = $this->getReference(MenuItemFixtures::ROSPARKS_FRESH_SALAD);
        $rosaparks_frites = $this->getReference(MenuItemFixtures::ROSPARKS_FRITES);
        $rosaparks_frites_cheddar = $this->getReference(MenuItemFixtures::ROSPARKS_FRITES_CHEDDAR);
        $rosaparks_frites_cheddar_bacon = $this->getReference(MenuItemFixtures::ROSPARKS_FRITES_CHEDDAR_BACON);
        $rosaparks_boisson_homemade = $this->getReference(MenuItemFixtures::ROSPARKS_BOISSON_HOMEMADE);
        $rosaparks_boisson_naturel = $this->getReference(MenuItemFixtures::ROSPARKS_BOISSON_NATUREL);
        $rosaparks_boisson_classique = $this->getReference(MenuItemFixtures::ROSPARKS_BOISSON_CLASSIQUE);
        $rosaparks_boisson_chaudes = $this->getReference(MenuItemFixtures::ROSPARKS_BOISSON_CHAUDES);
        $rosaparks_dessert_milkshake = $this->getReference(MenuItemFixtures::ROSPARKS_DESSERT_MILKSHAKE);
        $rosaparks_dessert_yaourt = $this->getReference(MenuItemFixtures::ROSPARKS_DESSERT_YAOURT);
        $rosaparks_dessert_cheesecake = $this->getReference(MenuItemFixtures::ROSPARKS_DESSERT_CHEESECAKE);
        $rosaparks_dessert_brownies = $this->getReference(MenuItemFixtures::ROSPARKS_DESSERT_BROWNIES);

        $creche_macedoine = $this->getReference(MenuItemFixtures::CRECHE_MACEDOINE);
        $creche_porc = $this->getReference(MenuItemFixtures::CRECHE_PORC);
        $creche_puree = $this->getReference(MenuItemFixtures::CRECHE_PUREE);
        $creche_brie = $this->getReference(MenuItemFixtures::CRECHE_BRIE);
        $creche_fruit = $this->getReference(MenuItemFixtures::CRECHE_FRUIT);

        $creche_compote = $this->getReference(MenuItemFixtures::CRECHE_COMPOTE);
        $creche_yaourt = $this->getReference(MenuItemFixtures::CRECHE_YAOURT_BRASSE);
        $creche_petit_beurre = $this->getReference(MenuItemFixtures::CRECHE_PETIT_BEURRE);

        $creche_chou = $this->getReference(MenuItemFixtures::CRECHE_CHOUX);
        $creche_hoki = $this->getReference(MenuItemFixtures::CRECHE_HOKI);
        $creche_epinard = $this->getReference(MenuItemFixtures::CRECHE_EPINARD);
        $creche_edam = $this->getReference(MenuItemFixtures::CRECHE_EDAM);
        $creche_fromage_frais = $this->getReference(MenuItemFixtures::CRECHE_FROMAGE_FRAIS);
        $creche_boudoir = $this->getReference(MenuItemFixtures::CRECHE_BOUDOIR);

        $rosa_mms1 = new MenuMenuSection();
        $rosa_mms1->setMenu($menu_rosaparks)
            ->setMenuSection($rosaparks_menusection_burger)
            ->setMenuSectionParent($rosaparks_menusection_root)
            ->setPosition(1);

        $rosa_mms1_1 = new MenuMenuSection();
        $rosa_mms1_1->setMenu($menu_rosaparks)
            ->setMenuSectionParent($rosaparks_menusection_burger)
            ->setMenuSection($rosaparks_menusection_burger_soussection)
            ->setPosition(1);

        $rosa_mms1_2 = new MenuMenuSection();
        $rosa_mms1_2->setMenu($menu_rosaparks)
            ->setMenuSectionParent($rosaparks_menusection_burger)
            ->setMenuSection($rosaparks_menusection_burger_soussection2)
            ->setPosition(2);

        $rosa_mms2 = new MenuMenuSection();
        $rosa_mms2->setMenu($menu_rosaparks)
            ->setMenuSection($rosaparks_menusection_extras)
            ->setMenuSectionParent($rosaparks_menusection_root)
            ->setPosition(2);

        $rosa_mms3 = new MenuMenuSection();
        $rosa_mms3->setMenu($menu_rosaparks)
            ->setMenuSection($rosaparks_menusection_combos)
            ->setMenuSectionParent($rosaparks_menusection_root)
            ->setPosition(3);

        $rosa_mms4 = new MenuMenuSection();
        $rosa_mms4->setMenu($menu_rosaparks)
            ->setMenuSection($rosaparks_menusection_accompagnement)
            ->setMenuSectionParent($rosaparks_menusection_root)
            ->setPosition(4);


        $rosa_mms5 = new MenuMenuSection();
        $rosa_mms5->setMenu($menu_rosaparks)
            ->setMenuSection($rosaparks_menusection_boissons)
            ->setMenuSectionParent($rosaparks_menusection_root)
            ->setPosition(5);

        $rosa_mms6 = new MenuMenuSection();
        $rosa_mms6->setMenu($menu_rosaparks)
            ->setMenuSection($rosaparks_menusection_dessert)
            ->setMenuSectionParent($rosaparks_menusection_root)
            ->setPosition(6);

        $manager->persist($rosa_mms1);
        $manager->persist($rosa_mms1_1);
        $manager->persist($rosa_mms1_2);
        $manager->persist($rosa_mms2);
        $manager->persist($rosa_mms3);
        $manager->persist($rosa_mms4);
        $manager->persist($rosa_mms5);
        $manager->persist($rosa_mms6);
        $manager->flush();

        //MENUITEM MENUSECTION
        //CRECHE MMS
        echo $menu_sup18_creche_24->getId() .' '. $menuSection_SUP18_24_11_2021->getId() .' '. $menuSection_root_creche->getId() . PHP_EOL;
        $creche_mms = new MenuMenuSection();
        $creche_mms->setMenu($menu_sup18_creche_24)
            ->setMenuSection($menuSection_SUP18_24_11_2021)
            ->setMenuSectionParent($menuSection_root_creche)
            ->setPosition(1);
        $manager->persist($creche_mms);

        echo $menu_sup18_creche_24_gouter->getId() .' '. $menuSection_SUP18_24_11_2021_GOUTER->getId() .' '. $menuSection_root_creche->getId() . PHP_EOL;
        $creche_mms = new MenuMenuSection();
        $creche_mms->setMenu($menu_sup18_creche_24_gouter)
            ->setMenuSection($menuSection_SUP18_24_11_2021_GOUTER)
            ->setMenuSectionParent($menuSection_root_creche)
            ->setPosition(1);
        $manager->persist($creche_mms);

        echo $menu_sup18_creche_25->getId() .' '. $menuSection_SUP18_25_11_2021->getId() .' '. $menuSection_root_creche->getId() . PHP_EOL;
        $creche_mms = new MenuMenuSection();
        $creche_mms->setMenu($menu_sup18_creche_25)
            ->setMenuSection($menuSection_SUP18_25_11_2021)
            ->setMenuSectionParent($menuSection_root_creche)
            ->setPosition(1);
        $manager->persist($creche_mms);
        $manager->flush();
        echo __LINE__ . PHP_EOL;

        echo $menu_sup18_creche_25_gouter->getId() .' '. $menuSection_SUP18_25_11_2021_GOUTER->getId() .' '. $menuSection_root_creche->getId() . PHP_EOL;
        $creche_mms = new MenuMenuSection();
        $creche_mms->setMenu($menu_sup18_creche_25_gouter)
            ->setMenuSection($menuSection_SUP18_25_11_2021_GOUTER)
            ->setMenuSectionParent($menuSection_root_creche)
            ->setPosition(1);
        $manager->persist($creche_mms);
        $manager->flush();
        echo __LINE__ . PHP_EOL;
        $creche_mms = new MenuMenuSection();
        $creche_mms->setMenu($menu_less18_creche_24)
            ->setMenuSection($menuSection_LESS18_24_11_2021)
            ->setMenuSectionParent($menuSection_root_creche)
            ->setPosition(1);
        $manager->persist($creche_mms);
        $manager->flush();
        echo __LINE__;
        $creche_mms = new MenuMenuSection();
        $creche_mms->setMenu($menu_less18_creche_24_gouter)
            ->setMenuSection($menuSection_LESS18_24_11_2021_GOUTER)
            ->setMenuSectionParent($menuSection_root_creche)
            ->setPosition(1);
        $manager->persist($creche_mms);
        $manager->flush();
        echo __LINE__;
        $creche_mms = new MenuMenuSection();
        $creche_mms->setMenu($menu_less18_creche_25)
            ->setMenuSection($menuSection_LESS18_25_11_2021)
            ->setMenuSectionParent($menuSection_root_creche)
            ->setPosition(1);
        $manager->persist($creche_mms);
        $manager->flush();
        echo __LINE__;
        $creche_mms = new MenuMenuSection();
        $creche_mms->setMenu($menu_less18_creche_25_gouter)
            ->setMenuSection($menuSection_LESS18_25_11_2021_GOUTER)
            ->setMenuSectionParent($menuSection_root_creche)
            ->setPosition(1);
        $manager->persist($creche_mms);

        $manager->flush();
        echo 'Creche 24Midi';

        //CRECHE +18mois 24/11 MIDI
        $msmi_creche_sup_18_24_1 = new MenuSectionMenuItem();
        $msmi_creche_sup_18_24_1->setMenuSection($menuSection_SUP18_24_11_2021)
            ->setMenuItem($creche_macedoine)
            ->setPosition(1);
        $manager->persist($msmi_creche_sup_18_24_1);

        $msmi_creche_sup_18_24_2 = new MenuSectionMenuItem();
        $msmi_creche_sup_18_24_2->setMenuSection($menuSection_SUP18_24_11_2021)
            ->setMenuItem($creche_porc)
            ->setPosition(2);
        $manager->persist($msmi_creche_sup_18_24_2);

        $msmi_creche_sup_18_24_3 = new MenuSectionMenuItem();
        $msmi_creche_sup_18_24_3->setMenuSection($menuSection_SUP18_24_11_2021)
            ->setMenuItem($creche_puree)
            ->setPosition(3);
        $manager->persist($msmi_creche_sup_18_24_3);

        $msmi_creche_sup_18_24_4 = new MenuSectionMenuItem();
        $msmi_creche_sup_18_24_4->setMenuSection($menuSection_SUP18_24_11_2021)
            ->setMenuItem($creche_brie)
            ->setPosition(4);
        $manager->persist($msmi_creche_sup_18_24_4);

        $msmi_creche_sup_18_24_5 = new MenuSectionMenuItem();
        $msmi_creche_sup_18_24_5->setMenuSection($menuSection_SUP18_24_11_2021)
            ->setMenuItem($creche_fruit)
            ->setPosition(5);
        $manager->persist($msmi_creche_sup_18_24_5);

        //CRECHE 24 GOUTER
        $msmi_creche_sup_18_gouter_24_3 = new MenuSectionMenuItem();
        $msmi_creche_sup_18_gouter_24_3->setMenuSection($menuSection_SUP18_24_11_2021_GOUTER)
            ->setMenuItem($creche_compote)
            ->setPosition(1);
        $manager->persist($msmi_creche_sup_18_gouter_24_3);

        $msmi_creche_sup_18_gouter_24_4 = new MenuSectionMenuItem();
        $msmi_creche_sup_18_gouter_24_4->setMenuSection($menuSection_SUP18_24_11_2021_GOUTER)
            ->setMenuItem($creche_yaourt)
            ->setPosition(2);
        $manager->persist($msmi_creche_sup_18_gouter_24_4);

        $msmi_creche_sup_18_gouter_24_5 = new MenuSectionMenuItem();
        $msmi_creche_sup_18_gouter_24_5->setMenuSection($menuSection_SUP18_24_11_2021_GOUTER)
            ->setMenuItem($creche_petit_beurre)
            ->setPosition(3);
        $manager->persist($msmi_creche_sup_18_gouter_24_5);

        $manager->flush();
        echo 'Creche 25Midi';

        //CRECHE +18mois 25/11 MIDI
        $msmi_creche_sup_18_25_1 = new MenuSectionMenuItem();
        $msmi_creche_sup_18_25_1->setMenuSection($menuSection_SUP18_25_11_2021)
            ->setMenuItem($creche_chou)
            ->setPosition(1);
        $manager->persist($msmi_creche_sup_18_25_1);

        $msmi_creche_sup_18_25_2 = new MenuSectionMenuItem();
        $msmi_creche_sup_18_25_2->setMenuSection($menuSection_SUP18_25_11_2021)
            ->setMenuItem($creche_hoki)
            ->setPosition(2);
        $manager->persist($msmi_creche_sup_18_25_2);

        $msmi_creche_sup_18_25_3 = new MenuSectionMenuItem();
        $msmi_creche_sup_18_25_3->setMenuSection($menuSection_SUP18_25_11_2021)
            ->setMenuItem($creche_epinard)
            ->setPosition(3);
        $manager->persist($msmi_creche_sup_18_25_3);

        $msmi_creche_sup_18_25_4 = new MenuSectionMenuItem();
        $msmi_creche_sup_18_25_4->setMenuSection($menuSection_SUP18_25_11_2021)
            ->setMenuItem($creche_edam)
            ->setPosition(4);
        $manager->persist($msmi_creche_sup_18_25_4);

        $msmi_creche_sup_18_25_5 = new MenuSectionMenuItem();
        $msmi_creche_sup_18_25_5->setMenuSection($menuSection_SUP18_25_11_2021)
            ->setMenuItem($creche_compote)
            ->setPosition(5);
        $manager->persist($msmi_creche_sup_18_25_5);

        //CRECHE 25 GOUTER
        $msmi_creche_sup_18_gouter_25_3 = new MenuSectionMenuItem();
        $msmi_creche_sup_18_gouter_25_3->setMenuSection($menuSection_SUP18_25_11_2021_GOUTER)
            ->setMenuItem($creche_compote)
            ->setPosition(1);
        $manager->persist($msmi_creche_sup_18_gouter_25_3);

        $msmi_creche_sup_18_gouter_25_4 = new MenuSectionMenuItem();
        $msmi_creche_sup_18_gouter_25_4->setMenuSection($menuSection_SUP18_25_11_2021_GOUTER)
            ->setMenuItem($creche_fromage_frais)
            ->setPosition(2);
        $manager->persist($msmi_creche_sup_18_gouter_25_4);

        $msmi_creche_sup_18_gouter_25_5 = new MenuSectionMenuItem();
        $msmi_creche_sup_18_gouter_25_5->setMenuSection($menuSection_SUP18_25_11_2021_GOUTER)
            ->setMenuItem($creche_boudoir)
            ->setPosition(3);
        $manager->persist($msmi_creche_sup_18_gouter_25_5);

        $rosa_msmi1_1 = new MenuSectionMenuItem();
        $rosa_msmi1_1->setMenuSection($rosaparks_menusection_burger)
            ->setMenuItem($rosaparks_burger1)
            ->setPosition(1);

        $rosa_msmi1_2 = new MenuSectionMenuItem();
        $rosa_msmi1_2->setMenuSection($rosaparks_menusection_burger)
            ->setMenuItem($rosaparks_burger2)
            ->setPosition(2);

        $rosa_msmi1_3 = new MenuSectionMenuItem();
        $rosa_msmi1_3->setMenuSection($rosaparks_menusection_burger)
            ->setMenuItem($rosaparks_burger3)
            ->setPosition(3);

        $rosa_msmi1_4 = new MenuSectionMenuItem();
        $rosa_msmi1_4->setMenuSection($rosaparks_menusection_burger)
            ->setMenuItem($rosaparks_burger4)
            ->setPosition(4);

        $rosa_msmi1_5 = new MenuSectionMenuItem();
        $rosa_msmi1_5->setMenuSection($rosaparks_menusection_burger)
            ->setMenuItem($rosaparks_burger5)
            ->setPosition(5);

        $rosa_msmi1_6 = new MenuSectionMenuItem();
        $rosa_msmi1_6->setMenuSection($rosaparks_menusection_burger)
            ->setMenuItem($rosaparks_burger6)
            ->setPosition(6);

        $rosa_msmi1_7 = new MenuSectionMenuItem();
        $rosa_msmi1_7->setMenuSection($rosaparks_menusection_burger)
            ->setMenuItem($rosaparks_burger7)
            ->setPosition(7);

        $rosa_msmi1_8 = new MenuSectionMenuItem();
        $rosa_msmi1_8->setMenuSection($rosaparks_menusection_burger)
            ->setMenuItem($rosaparks_burger8)
            ->setPosition(8);

        $rosa_msmi1_9 = new MenuSectionMenuItem();
        $rosa_msmi1_9->setMenuSection($rosaparks_menusection_burger)
            ->setMenuItem($rosaparks_burger9)
            ->setPosition(9);

        $rosa_msmi1_1_1 = new MenuSectionMenuItem();
        $rosa_msmi1_1_1->setMenuSection($rosaparks_menusection_burger_soussection)
            ->setMenuItem($rosaparks_champignon)
            ->setPosition(1);

        $rosa_msmi1_1_2 = new MenuSectionMenuItem();
        $rosa_msmi1_1_2->setMenuSection($rosaparks_menusection_burger_soussection)
            ->setMenuItem($rosaparks_steak_vege)
            ->setPosition(2);

        $rosa_msmi1_2_1 = new MenuSectionMenuItem();
        $rosa_msmi1_2_1->setMenuSection($rosaparks_menusection_burger_soussection2)
            ->setMenuItem($rosaparks_double_steak)
            ->setPosition(1);

        $rosa_msmi1_2_2 = new MenuSectionMenuItem();
        $rosa_msmi1_2_2->setMenuSection($rosaparks_menusection_burger_soussection2)
            ->setMenuItem($rosaparks_add_cheese)
            ->setPosition(2);

        $rosa_msmi1_2_3 = new MenuSectionMenuItem();
        $rosa_msmi1_2_3->setMenuSection($rosaparks_menusection_burger_soussection2)
            ->setMenuItem($rosaparks_add_ingredients)
            ->setPosition(3);

        $rosa_msmi_extra_crispychickent = new MenuSectionMenuItem();
        $rosa_msmi_extra_crispychickent->setMenuSection($rosaparks_menusection_extras)
            ->setMenuItem($rosaparks_crispychicken)
            ->setPosition(1);

        $rosa_msmi_extra_freshsalad = new MenuSectionMenuItem();
        $rosa_msmi_extra_freshsalad->setMenuSection($rosaparks_menusection_extras)
            ->setMenuItem($rosaparks_freshsalad)
            ->setPosition(2);

        $rosa_msmi_accompagnement_frites = new MenuSectionMenuItem();
        $rosa_msmi_accompagnement_frites->setMenuSection($rosaparks_menusection_accompagnement)
            ->setMenuItem($rosaparks_frites)
            ->setPosition(1);

        $rosa_msmi_accompagnement_frites_cheese = new MenuSectionMenuItem();
        $rosa_msmi_accompagnement_frites_cheese->setMenuSection($rosaparks_menusection_accompagnement)
            ->setMenuItem($rosaparks_frites_cheddar)
            ->setPosition(2);

        $rosa_msmi_accompagnement_frites_cheese_bacon = new MenuSectionMenuItem();
        $rosa_msmi_accompagnement_frites_cheese_bacon->setMenuSection($rosaparks_menusection_accompagnement)
            ->setMenuItem($rosaparks_frites_cheddar_bacon)
            ->setPosition(3);

        $rosa_msmi_boisson_homemade = new MenuSectionMenuItem();
        $rosa_msmi_boisson_homemade->setMenuSection($rosaparks_menusection_boissons)
            ->setMenuItem($rosaparks_boisson_homemade)
            ->setPosition(1);


        $rosa_msmi_boisson_naturel = new MenuSectionMenuItem();
        $rosa_msmi_boisson_naturel->setMenuSection($rosaparks_menusection_boissons)
            ->setMenuItem($rosaparks_boisson_naturel)
            ->setPosition(2);

        $rosa_msmi_boisson_classique = new MenuSectionMenuItem();
        $rosa_msmi_boisson_classique->setMenuSection($rosaparks_menusection_boissons)
            ->setMenuItem($rosaparks_boisson_classique)
            ->setPosition(3);

        $rosa_msmi_boisson_chaude = new MenuSectionMenuItem();
        $rosa_msmi_boisson_chaude->setMenuSection($rosaparks_menusection_boissons)
            ->setMenuItem($rosaparks_boisson_chaudes)
            ->setPosition(4);

        $rosa_msmi_dessert_milkshake = new MenuSectionMenuItem();
        $rosa_msmi_dessert_milkshake->setMenuSection($rosaparks_menusection_dessert)
            ->setMenuItem($rosaparks_dessert_milkshake)
            ->setPosition(1);

        $rosa_msmi_dessert_yaourt = new MenuSectionMenuItem();
        $rosa_msmi_dessert_yaourt->setMenuSection($rosaparks_menusection_dessert)
            ->setMenuItem($rosaparks_dessert_yaourt)
            ->setPosition(2);

        $rosa_msmi_dessert_cheesecake = new MenuSectionMenuItem();
        $rosa_msmi_dessert_cheesecake->setMenuSection($rosaparks_menusection_dessert)
            ->setMenuItem($rosaparks_dessert_cheesecake)
            ->setPosition(3);

        $rosa_msmi_dessert_brownies = new MenuSectionMenuItem();
        $rosa_msmi_dessert_brownies->setMenuSection($rosaparks_menusection_dessert)
            ->setMenuItem($rosaparks_dessert_brownies)
            ->setPosition(4);

        $manager->persist($rosa_msmi1_1);
        $manager->persist($rosa_msmi1_2);
        $manager->persist($rosa_msmi1_3);
        $manager->persist($rosa_msmi1_4);
        $manager->persist($rosa_msmi1_5);
        $manager->persist($rosa_msmi1_6);
        $manager->persist($rosa_msmi1_7);
        $manager->persist($rosa_msmi1_8);
        $manager->persist($rosa_msmi1_9);

        $manager->persist($rosa_msmi1_1_1);
        $manager->persist($rosa_msmi1_1_2);
        $manager->persist($rosa_msmi1_2_1);
        $manager->persist($rosa_msmi1_2_2);
        $manager->persist($rosa_msmi1_2_3);

        $manager->persist($rosa_msmi_extra_crispychickent);
        $manager->persist($rosa_msmi_extra_freshsalad);

        $manager->persist($rosa_msmi_accompagnement_frites);
        $manager->persist($rosa_msmi_accompagnement_frites_cheese);
        $manager->persist($rosa_msmi_accompagnement_frites_cheese_bacon);

        $manager->persist($rosa_msmi_boisson_homemade);
        $manager->persist($rosa_msmi_boisson_naturel);
        $manager->persist($rosa_msmi_boisson_classique);
        $manager->persist($rosa_msmi_boisson_chaude);

        $manager->persist($rosa_msmi_dessert_milkshake);
        $manager->persist($rosa_msmi_dessert_yaourt);
        $manager->persist($rosa_msmi_dessert_cheesecake);
        $manager->persist($rosa_msmi_dessert_brownies);

        $manager->flush();
    }
}