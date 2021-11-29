<?php

namespace App\DataFixtures;

use App\Entity\Admin;
use App\Entity\Child;
use App\Entity\UserParent;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserFixtures extends Fixture
{
    private $passwordHasher;

    public const ADMIN_RESTAU = 'the_simple_user';
    public const PAPA_2_ENFANT = 'papa_2_enfant_caucasien';
    public const MAMA_2_ENFANT = 'mama_2_enfant';

    public function __construct(UserPasswordHasherInterface $passwordHasher)
    {
        $this->passwordHasher = $passwordHasher;
    }

    public function load(ObjectManager $manager)
    {
        $user = new Admin();
        $user->setUsername('admin');
        $user->setPassword($this->passwordHasher->hashPassword(
            $user,
            'admin'
                    ));
        $user->setRoles(['ROLE_USER', 'ROLE_ADMIN']);

        $this->addReference(self::ADMIN_RESTAU, $user);
        $manager->persist($user);

        $parent1 = new UserParent();
        $parent1->setUsername('papa')
            ->setPassword($this->passwordHasher->hashPassword(
                $parent1,
            'papa'
        ));
        $parent1->setRoles(['ROLE_USER', 'ROLE_PARENT']);
        $this->addReference(self::PAPA_2_ENFANT, $parent1);
        $manager->persist($parent1);

        $parent2 = new UserParent();
        $parent2->setUsername('mama')
            ->setPassword($this->passwordHasher->hashPassword(
                $parent2,
                'mama'
            ));
        $parent2->setRoles(['ROLE_USER', 'ROLE_PARENT']);
        $this->addReference(self::MAMA_2_ENFANT, $parent2);
        $manager->persist($parent2);



        $manager->flush();
    }
}
