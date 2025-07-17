<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

use App\Entity\Bureau;
use App\Entity\User;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AppFixtures extends Fixture
{

    public function __construct(UserPasswordHasherInterface $passwordHasher)
    {
        $this->passwordHasher = $passwordHasher;
    }
    
    public function load(ObjectManager $manager): void
    {

        for ($i = 0; $i < 5; $i++) {

            $bureau = new Bureau;

            $bureau->setLibelle('Bureau ' . $i);
            $bureau->setAdresse('Rue ' . $i . ' - building '. $i);
            $bureau->setStatut(true);
            $bureau->setCreatedAt(new \DateTime(date('Y-m-d H:i:s')));
            $bureau->setNombrePieces(random_int(1, 6));
            $manager->persist($bureau);

            $user = new User;
            $user->setName("user".$i);
            $user->setLogin("login".$i);

            $hashedPassword = $this->passwordHasher->hashPassword(
                $user,
                '11111111'
            );

            $user->setPassword($hashedPassword);
            $manager->persist($user);
        }

        $manager->flush();
    }
}
