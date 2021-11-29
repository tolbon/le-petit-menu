<?php

namespace App\DataFixtures;

use App\Entity\Child;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class ChildFixtures extends Fixture implements DependentFixtureInterface
{
    public function getDependencies()
    {
        return [
            CategoryFixtures::class,
        ];
    }

    public const NOTHING = 'nothing';
    public const NO_GLUTEN_CHILD = 'no_gluten_child';
    public const NO_GLUTEN_NO_MUSTARD_CHILD = 'no_gluten_no_mustard_child';
    public const MUSLIM = 'muslim';

    public function load(ObjectManager $manager)
    {
        $less_18month = $this->getReference(CategoryFixtures::CRECHE_LESS_18_MONTH);
        $sup_18month = $this->getReference(CategoryFixtures::CRECHE_SUP_18_MONTH);
        $all = $this->getReference(CategoryFixtures::ALL);

        $dad = $this->getReference(UserFixtures::PAPA_2_ENFANT);
        $mama = $this->getReference(UserFixtures::MAMA_2_ENFANT);

        $nothing = new Child();
        $nothing->setName('Nothing')
            ->setCategory($sup_18month)
            ->setAttendance([])
        ->setUserParent($dad);
        $this->addReference(self::NOTHING, $nothing);

        $no_gluten = new Child();
        $no_gluten->setName('No GLUTEN')
            ->setCategory($less_18month)
            ->setAttendance([])
            ->addAllergy($this->getReference(AllergyFixtures::gluten))
            //->addDiet($this->getReference(DietFixtures::VeganDiet))
            ->setUserParent($dad);
        $this->addReference(self::NO_GLUTEN_CHILD, $no_gluten);

        $no_gluten_no_mustard = new Child();
        $no_gluten_no_mustard->setName('No_gluten_No_mustard')
            ->setCategory($all)
            ->setAttendance([])
            ->addAllergy($this->getReference(AllergyFixtures::gluten))
            ->addAllergy($this->getReference(AllergyFixtures::mustard))
            ->setUserParent($mama);
        $this->addReference(self::NO_GLUTEN_NO_MUSTARD_CHILD, $no_gluten_no_mustard);

        $muslim_child = new Child();
        $muslim_child->setName('勇軍 ישוע مُحمد')
            ->setCategory($all)
            ->setAttendance([])
            //->addDiet($this->getReference(DietFixtures::HalalDiet))
            ->setUserParent($mama);
        $this->addReference(self::MUSLIM, $muslim_child);
    }

}