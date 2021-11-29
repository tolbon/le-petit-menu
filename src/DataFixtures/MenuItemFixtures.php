<?php

namespace App\DataFixtures;

use App\Entity\MenuItem;
use App\Entity\Restaurant;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class MenuItemFixtures extends Fixture implements DependentFixtureInterface
{

    public const ROSPARKS_BURGER1 = 'rosaparks_burger1';
    public const ROSPARKS_BURGER2 = 'rosaparks_burger2';
    public const ROSPARKS_BURGER3 = 'rosaparks_burger3';
    public const ROSPARKS_BURGER4 = 'rosaparks_burger4';
    public const ROSPARKS_BURGER5 = 'rosaparks_burger5';
    public const ROSPARKS_BURGER6 = 'rosaparks_burger6';
    public const ROSPARKS_BURGER7 = 'rosaparks_burger7';
    public const ROSPARKS_BURGER8 = 'rosaparks_burger8';
    public const ROSPARKS_BURGER9 = 'rosaparks_burger9';
    public const ROSPARKS_BURGER10 = 'rosaparks_burger10';
    public const ROSPARKS_CHAMPIGNONS = 'rosaparks_champi';
    public const ROSPARKS_STEAK_VEGAN = 'rosaparks_steak_vegan';
    public const ROSPARKS_STEAK_DOUBLE = 'rosaparks_steak_double';
    public const ROSPARKS_ADD_CHEESE = 'rosaparks_add_cheese';
    public const ROSPARKS_ADD_INGREDIENTS = 'rosaparks_add_ingredients';
    public const ROSPARKS_CRISPY_CHICKEN = 'rosaparks_crispy_chicken';
    public const ROSPARKS_FRESH_SALAD = 'rosaparks_FRESH_SALAD';
    public const ROSPARKS_FRITES = 'rosaparks_frites';
    public const ROSPARKS_FRITES_CHEDDAR = 'rosaparks_frites_cheddar';
    public const ROSPARKS_FRITES_CHEDDAR_BACON = 'rosaparks_frites_cheddar_bacon';
    public const ROSPARKS_COLESLAW = 'rosaparks_coleslaw';
    public const ROSPARKS_BOISSON_HOMEMADE = 'rosaparks_BOISSON_HOMEMADE';
    public const ROSPARKS_BOISSON_NATUREL = 'rosaparks_BOISSON_NATUREL';
    public const ROSPARKS_BOISSON_CLASSIQUE = 'rosaparks_BOISSON_CLASSIQUE';
    public const ROSPARKS_BOISSON_CHAUDES = 'rosaparks_BOISSON_CHAUDES';
    public const ROSPARKS_DESSERT_MILKSHAKE = 'rosaparks_DESSERT_MILKSHAKE';
    public const ROSPARKS_DESSERT_YAOURT = 'rosaparks_DESSERT_YAOURT';
    public const ROSPARKS_DESSERT_CHEESECAKE = 'rosaparks_DESSERT_CHEESECAKE';
    public const ROSPARKS_DESSERT_BROWNIES = 'rosaparks_DESSERT_BROWNIES';

    public const CRECHE_MACEDOINE = 'CRECHE_MACEDOINE';
    public const CRECHE_PORC = 'CRECHE_PORC';
    public const CRECHE_PUREE = 'CRECHE_PUREE';
    public const CRECHE_BRIE = 'CRECHE_BRIE';
    public const CRECHE_FRUIT = 'CRECHE_FRUIT';
    public const CRECHE_CHOUX = 'CRECHE_CHOUX';
    public const CRECHE_HOKI = 'CRECHE_HOKI';
    public const CRECHE_EPINARD = 'CRECHE_EPINARD';
    public const CRECHE_EDAM = 'CRECHE_EDAM';
    public const CRECHE_COMPOTE = 'CRECHE_COMPOTE';
    public const CRECHE_YAOURT_BRASSE = 'CRECHE_YAOURT_BRASSE';
    public const CRECHE_PETIT_BEURRE = 'CRECHE_PETIT_BEURRE';
    public const CRECHE_FROMAGE_FRAIS = 'CRECHE_FROMAGE_FRAIS';
    public const CRECHE_BOUDOIR = 'CRECHE_BOUDOIR';

    public function load(ObjectManager $manager)
    {
        $creche = $this->getReference(RestaurantFixtures::CRECHE);
        $ru_dijon = $this->getReference(RestaurantFixtures::RU_DIJON);

        $rosa_burgers_classic = new MenuItem();
        $rosa_burgers_classic->setRestaurant($ru_dijon)
            ->setName('Classic')
            ->setDescription("Boeuf, comté affiné 18 mois, laitue iceberg, cornichons, oignons caramélisés & notre sauce signature.")
        ->setPrice1(9.4);
        $this->addReference(self::ROSPARKS_BURGER1, $rosa_burgers_classic);

        $rosa_burgers_nine = new MenuItem();
        $rosa_burgers_nine->setRestaurant($ru_dijon);
        $rosa_burgers_nine->setName('Nine(9)')
            ->setDescription("Boeuf OU crispy chicken (au choix), cheddar mature affiné 9 mois,     bacon de boeuf, laitue iceberg & notre sauce barbecue maison.")
            ->setPrice1(9.4);
        $this->addReference(self::ROSPARKS_BURGER2, $rosa_burgers_nine);

        $rosa_burgers_wallace = new MenuItem();
        $rosa_burgers_wallace->setRestaurant($ru_dijon)
            ->setName('WALLACE')
            ->setDescription("Boeuf, blue stilton, bacon de boeuf,
oignons caramélisés & notre sauce crème fraîche.")
            ->setPrice1(9.40);
        $this->addReference(self::ROSPARKS_BURGER3, $rosa_burgers_wallace);

        $rosa_burgers_neruda = new MenuItem();
        $rosa_burgers_neruda->setRestaurant($ru_dijon)
            ->setName('Neruda')
            ->setDescription("Boeuf, paprika, cheddar mature affiné 9 mois, mâche, oignons rouges, ciboulette & notre sauce avocat.")
            ->setPrice1(9.40);
        $this->addReference(self::ROSPARKS_BURGER4, $rosa_burgers_neruda);

        $rosa_burgers_protest = new MenuItem();
        $rosa_burgers_protest->setRestaurant($ru_dijon)
            ->setName('protest')
            ->setDescription("Bœuf, chèvre, champignons caramélisés, roquette & notre sauce moutarde et poivre.")
            ->setPrice1(9.40);
        $this->addReference(self::ROSPARKS_BURGER5, $rosa_burgers_protest);

        $rosa_burgers_gassan = new MenuItem();
        $rosa_burgers_gassan->setRestaurant($ru_dijon)
            ->setName('gassan')
            ->setDescription("Boeuf, comté affiné 18 mois, roquette, tomates confites, épices za'atar* & notre sauce crème fraîche.")
            ->setPrice1(9.40);
        $this->addReference(self::ROSPARKS_BURGER6, $rosa_burgers_gassan);

        $rosa_burgers_luther = new MenuItem();
        $rosa_burgers_luther->setRestaurant($ru_dijon)
            ->setName('Luther')
            ->setDescription("Filet de poulet mariné, tomme de Savoie, poivron grillé, tomates confites & notre sauce signature.")
            ->setPrice1(9.40);
        $this->addReference(self::ROSPARKS_BURGER7, $rosa_burgers_luther);

        $rosa_burgers_rosa = new MenuItem();
        $rosa_burgers_rosa->setRestaurant($ru_dijon)
            ->setName('Rosa (Végetarien)')
            ->setDescription("Poivrons grillés, aubergines grillées, gros champignon de Paris, tomme de Savoie & notre sauce pesto.")
            ->setPrice1(8.40);
        $this->addReference(self::ROSPARKS_BURGER8, $rosa_burgers_rosa);

        $rosa_burgers_little = new MenuItem();
        $rosa_burgers_little->setRestaurant($ru_dijon)
            ->setName('LITTLE')
            ->setDescription("Boeuf, cheddar affiné 9 mois, laitue iceberg & notre sauce signature.")
            ->setPrice1(8.40);
        $this->addReference(self::ROSPARKS_BURGER9, $rosa_burgers_little);

        $rosa_11 = new MenuItem();
        $rosa_11->setRestaurant($ru_dijon)
            ->setName('CHAMPIGNON PORTOBELLO')
            ->setDescription("Un champignon frais, snacké à la plancha.")
            ->setPrice1(null);
        $this->addReference(self::ROSPARKS_CHAMPIGNONS, $rosa_11);

        $rosa_12 = new MenuItem();
        $rosa_12->setRestaurant($ru_dijon)
            ->setName('STEAK VEGAN BEYOND MEAT')
            ->setDescription("Un steak surprenant de légumes, protéiné, sans gluten et sans OGM, qui bousculera vos clichés sur les Vegans ! Convient aussi aux carnivores :)")
            ->setPrice1(2.50);
        $this->addReference(self::ROSPARKS_STEAK_VEGAN, $rosa_12);

        $rosa_21 = new MenuItem();
        $rosa_21->setRestaurant($ru_dijon)
            ->setName('Doublez votre viande')
            ->setDescription("(+fromage au choix)")
            ->setPrice1(3.00);
        $this->addReference(self::ROSPARKS_STEAK_DOUBLE, $rosa_21);

        $rosa_22 = new MenuItem();
        $rosa_22->setRestaurant($ru_dijon)
            ->setName('- ajoutez du fromage ou du bacon')
            ->setDescription("")
            ->setPrice1(1.50);
        $this->addReference(self::ROSPARKS_ADD_CHEESE, $rosa_22);

        $rosa_23 = new MenuItem();
        $rosa_23->setRestaurant($ru_dijon)
            ->setName('- ajoutez des ingrédients')
            ->setDescription("Tomates confites, champignons caramélisés, oignons caramélisés, oignons rouges, poivrons grillés, cornichons, aubergines.")
            ->setPrice1(1);
        $this->addReference(self::ROSPARKS_ADD_INGREDIENTS, $rosa_23);

        $rosa_31 = new MenuItem();
        $rosa_31->setRestaurant($ru_dijon)
            ->setName('Crispy Chicken')
            ->setDescription("Morceaux de poulet panés aux épices cajun, marinés au babeurre, accompagnés de notre sauce barbecue maison. existe part 6 ou 12")
            ->setPrice1(6)
            ->setPrice2(10);
        $this->addReference(self::ROSPARKS_CRISPY_CHICKEN, $rosa_31);

        $rosa_32 = new MenuItem();
        $rosa_32->setRestaurant($ru_dijon)
            ->setName('Fresh salad')
            ->setDescription("Poulet mariné, tomates confites, oignons rouges,
poivrons grillés, mâche, laitue, cornichons, copeaux de cheddar vintage, épices za’atar et filet d'huile d'olive.
Pain toasté sur demande. Version végétarienne disponible avec du chèvre")
            ->setPrice1(9.90);
        $this->addReference(self::ROSPARKS_FRESH_SALAD, $rosa_32);

        $rosa_41 = new MenuItem();
        $rosa_41->setRestaurant($ru_dijon)
            ->setName('frites')
            ->setDescription("Frites fraiches, coupées et blanchies avant chaque service.")
            ->setPrice1(3.0);
        $this->addReference(self::ROSPARKS_FRITES, $rosa_41);

        $rosa_42 = new MenuItem();
        $rosa_42->setRestaurant($ru_dijon)
            ->setName('frites au cheddar')
            ->setDescription("Sauce fondante au cheddar vintage affiné 18 mois.")
            ->setPrice1(4.0);
        $this->addReference(self::ROSPARKS_FRITES_CHEDDAR, $rosa_42);


        $rosa_43 = new MenuItem();
        $rosa_43->setRestaurant($ru_dijon)
            ->setName('frites au cheddar & bacon')
            ->setDescription("Sauce fondante au cheddar vintage & bacon au paprika fumé.")
            ->setPrice1(5.0);
        $this->addReference(self::ROSPARKS_FRITES_CHEDDAR_BACON, $rosa_43);

        $rosa_44 = new MenuItem();
        $rosa_44->setRestaurant($ru_dijon)
            ->setName('COLESLAW')
            ->setDescription("Coleslaw maison à base de choux blancs, carottes râpées, coriandre, oignons rouges et mayonnaise douce.")
            ->setPrice1(3.0);
        $this->addReference(self::ROSPARKS_COLESLAW, $rosa_44);

        $rosa_51 = new MenuItem();
        $rosa_51->setRestaurant($ru_dijon)
            ->setName('Homemade')
            ->setDescription("
    Citronnade : citron vert, citron jaune, menthe,
    sucre de canne, gingembre - 33cl
    Orangeade : orange sanguine, pamplemousse,
    citron vert, sucre de canne, curcuma - 33cl")
            ->setPrice1(3.0);
        $this->addReference(self::ROSPARKS_BOISSON_HOMEMADE, $rosa_51);

        $rosa_52 = new MenuItem();
        $rosa_52->setRestaurant($ru_dijon)
            ->setName('100% Naturel')
            ->setDescription("
    Lemonaid (pétillant) : Citron vert / Orange sanguine / Fruit de la passion - 33cl
    Charitea Maté (pétillant) - 33cl
")
            ->setPrice1(3.0);
        $this->addReference(self::ROSPARKS_BOISSON_NATUREL, $rosa_52);

        $rosa_53 = new MenuItem();
        $rosa_53->setRestaurant($ru_dijon)
            ->setName('CLASSIQUE')
            ->setDescription("
    Dr Pepper
    7up
    Orangina
    Lipton Icetea
    San Pellegrino
    San Pellegrino Citron
    Cristaline
")
            ->setPrice1(2.0);
        $this->addReference(self::ROSPARKS_BOISSON_CLASSIQUE, $rosa_53);

        $rosa_54 = new MenuItem();
        $rosa_54->setRestaurant($ru_dijon)
            ->setName('CHAUDES')
            ->setDescription("
    Café expresso
    Café allongé

")
            ->setPrice1(2.0);
        $this->addReference(self::ROSPARKS_BOISSON_CHAUDES, $rosa_54);

        $rosa_61 = new MenuItem();
        $rosa_61->setRestaurant($ru_dijon)
            ->setName('MILKSHAKES')
            ->setDescription("Vanille / Mangue / Fraise / Pomme / Caramel beurre salé")
            ->setPrice1(4.90);
        $this->addReference(self::ROSPARKS_DESSERT_MILKSHAKE, $rosa_61);

        $rosa_62 = new MenuItem();
        $rosa_62->setRestaurant($ru_dijon)
            ->setName('YAOURT')
            ->setDescription("Yaourt frais et doux, aux graines de chia, lait de coco, fromage blanc, sirop d'agave, coulis de fraise, mangue ou pomme verte (au choix).")
            ->setPrice1(4);
        $this->addReference(self::ROSPARKS_DESSERT_YAOURT, $rosa_62);

        $rosa_63 = new MenuItem();
        $rosa_63->setRestaurant($ru_dijon)
            ->setName('CHEESECAKE')
            ->setDescription("Cheese cake maison au fromage frais onctueux, citron vert ou Oreo.")
            ->setPrice1(4);
        $this->addReference(self::ROSPARKS_DESSERT_CHEESECAKE, $rosa_63);

        $rosa_64 = new MenuItem();
        $rosa_64->setRestaurant($ru_dijon)
            ->setName('CARROT CAKE / BROWNIES / COOKIES')
            ->setDescription("")
            ->setPrice1(3);
        $this->addReference(self::ROSPARKS_DESSERT_BROWNIES, $rosa_64);

        $manager->persist($rosa_burgers_classic);
        $manager->persist($rosa_burgers_nine);
        $manager->persist($rosa_burgers_wallace);
        $manager->persist($rosa_burgers_neruda);
        $manager->persist($rosa_burgers_protest);
        $manager->persist($rosa_burgers_gassan);
        $manager->persist($rosa_burgers_luther);
        $manager->persist($rosa_burgers_rosa);
        $manager->persist($rosa_burgers_little);

        $manager->persist($rosa_11);
        $manager->persist($rosa_12);
        $manager->persist($rosa_21);
        $manager->persist($rosa_22);
        $manager->persist($rosa_23);
        $manager->persist($rosa_31);
        $manager->persist($rosa_32);
        $manager->persist($rosa_41);
        $manager->persist($rosa_42);
        $manager->persist($rosa_43);
        $manager->persist($rosa_44);
        $manager->persist($rosa_51);
        $manager->persist($rosa_52);
        $manager->persist($rosa_53);
        $manager->persist($rosa_54);
        $manager->persist($rosa_61);
        $manager->persist($rosa_62);
        $manager->persist($rosa_63);
        $manager->persist($rosa_64);

        //ROSAPARKS

        $mi24_1 = new MenuItem();
        $mi24_1->setName('Macédoine vinaigrette')
            ->setRestaurant($creche)
            ->setDescription('')
            ->addAllergy($this->getReference(AllergyFixtures::mustard));
        $manager->persist($mi24_1);
        $this->addReference(self::CRECHE_MACEDOINE, $mi24_1);

        $mi24_2 = new MenuItem();
        $mi24_2->setName('Sauté de porc')
            ->setRestaurant($creche)
            ->setDescription('');
        $manager->persist($mi24_2);
        $this->addReference(self::CRECHE_PORC, $mi24_2);

        $mi24_3 = new MenuItem();
        $mi24_3->setName('Purée de potiron et semoule')
            ->setRestaurant($creche)
            ->setDescription('Semoule Bio')
            ->addAllergy($this->getReference(AllergyFixtures::lactose));
        $manager->persist($mi24_3);
        $this->addReference(self::CRECHE_PUREE, $mi24_3);

        $mi24_4 = new MenuItem();
        $mi24_4->setName('Brie')
            ->setRestaurant($creche)
            ->setDescription('')
            ->addAllergy($this->getReference(AllergyFixtures::lactose));
        $manager->persist($mi24_4);
        $this->addReference(self::CRECHE_BRIE, $mi24_4);

        $mi24_5 = new MenuItem();
        $mi24_5->setName('Fruit de Saison')
            ->setRestaurant($creche)
            ->setDescription('');
        $manager->persist($mi24_5);
        $this->addReference(self::CRECHE_FRUIT, $mi24_5);

        $mi24_gouter_2 = new MenuItem();
        $mi24_gouter_2->setName('Yaourt brassé')
            ->setRestaurant($creche)
            ->setDescription('')
            ->addAllergy($this->getReference(AllergyFixtures::lactose));
        $manager->persist($mi24_gouter_2);
        $this->addReference(self::CRECHE_YAOURT_BRASSE, $mi24_gouter_2);

        $mi24_gouter_3 = new MenuItem();
        $mi24_gouter_3->setName('Petit beurre')
            ->setRestaurant($creche)
            ->setDescription('')
            ->addAllergy($this->getReference(AllergyFixtures::gluten))
            ->addAllergy($this->getReference(AllergyFixtures::lactose))
            ->addAllergy($this->getReference(AllergyFixtures::egg));
        $manager->persist($mi24_gouter_3);
        $this->addReference(self::CRECHE_PETIT_BEURRE, $mi24_gouter_3);

        $mi25_1 = new MenuItem();
        $mi25_1->setName('Chou blanc à la vinaigrette')
            ->setRestaurant($creche)
            ->setDescription('');
        $manager->persist($mi25_1);
        $this->addReference(self::CRECHE_CHOUX, $mi25_1);

        $mi25_2 = new MenuItem();
        $mi25_2->setName('Filet de hoki')
            ->setRestaurant($creche)
            ->setDescription('')
            ->addAllergy($this->getReference(AllergyFixtures::shellfish))
            ->addAllergy($this->getReference(AllergyFixtures::gluten))
            ->addAllergy($this->getReference(AllergyFixtures::lactose))
            ->addAllergy($this->getReference(AllergyFixtures::fish));
        $manager->persist($mi25_2);
        $this->addReference(self::CRECHE_HOKI, $mi25_2);

        $mi25_3 = new MenuItem();
        $mi25_3->setName('Epinards à la béchamel et pommes de terre')
            ->setRestaurant($creche)
            ->setDescription('Pomme de terre bio')
            ->addAllergy($this->getReference(AllergyFixtures::gluten))
            ->addAllergy($this->getReference(AllergyFixtures::lactose));
        $manager->persist($mi25_3);
        $this->addReference(self::CRECHE_EPINARD, $mi25_3);

        $mi25_4 = new MenuItem();
        $mi25_4->setName('Edam')
            ->setRestaurant($creche)
            ->setDescription('')
            ->addAllergy($this->getReference(AllergyFixtures::lactose));
        $manager->persist($mi25_4);
        $this->addReference(self::CRECHE_EDAM, $mi25_4);

        $mi25_5 = new MenuItem();
        $mi25_5->setName('Compote de fruits frais de saison')
            ->setRestaurant($creche)
            ->setDescription('');
        $manager->persist($mi25_5);
        $this->addReference(self::CRECHE_COMPOTE, $mi25_5);

        $mi25_gouter_2 = new MenuItem();
        $mi25_gouter_2->setName('Fromage frais')
            ->setRestaurant($creche)
            ->setDescription('')
            ->addAllergy($this->getReference(AllergyFixtures::lactose));
        $manager->persist($mi25_gouter_2);
        $this->addReference(self::CRECHE_FROMAGE_FRAIS, $mi25_gouter_2);

        $mi25_gouter_3 = new MenuItem();
        $mi25_gouter_3->setName('Boudoir')
            ->setRestaurant($creche)
            ->setDescription('')
            ->addAllergy($this->getReference(AllergyFixtures::gluten))
            ->addAllergy($this->getReference(AllergyFixtures::lactose))
            ->addAllergy($this->getReference(AllergyFixtures::egg));
        $manager->persist($mi25_gouter_3);
        $this->addReference(self::CRECHE_BOUDOIR, $mi25_gouter_3);


        $manager->flush();
    }


    public function getDependencies()
    {
        return [
            MenuFixtures::class
        ];
    }
}