<?php

namespace App\DataFixtures;

use DateTime;
use App\Entity\User;
use App\Entity\MicroPost;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AppFixtures extends Fixture
{
    public function __construct(private UserPasswordHasherInterface $userPasswordHaser) {
    }

    public function load(ObjectManager $manager): void
    {
        $user1 = new User();
        $user1->setEmail('test@test.com');
        $user1->setPassword(
            $this->userPasswordHaser->hashPassword(
                $user1,
                '12345678'
            )
        );
        $manager->persist($user1);

        $user2 = new User();
        $user2->setEmail('tyler@test.com');
        $user2->setPassword(
            $this->userPasswordHaser->hashPassword(
                $user2,
                '12345678'
            )
        );
        $manager->persist($user2);
         

        // $product = new Product();
        // $manager->persist($product);
        $microPost1 = new MicroPost();
        $microPost1->setTitle('Welcome to Brazil!');
        $microPost1->setText("what's up nigger");
        $microPost1->setCreated(new DateTime());
        $microPost1->setAuthor($user1);
        $manager->persist($microPost1);

        $microPost2 = new MicroPost();
        $microPost2->setTitle('Welcome to china!');
        $microPost2->setText("what's up chingchong");
        $microPost2->setCreated(new DateTime());
        $microPost2->setAuthor($user2);
        $manager->persist($microPost2);


        $microPost3 = new MicroPost();
        $microPost3->setTitle('Welcome to Germany!');
        $microPost3->setText("what's up Germany");
        $microPost3->setCreated(new DateTime());
        $microPost3->setAuthor($user1);
        $manager->persist($microPost3);
        
        $manager->flush();
    }
}
