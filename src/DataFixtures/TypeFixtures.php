<?php

namespace App\DataFixtures;

use App\Entity\Aliment;
use App\Entity\Type;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class TypeFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $t1=  new Type();
        $t1->setLibelle("Fruits")
            ->setImage("fruits.jpg");
        $manager->persist($t1);

        $t2=  new Type();
        $t2->setLibelle("Legumes")
            ->setImage("legumes.jpg");
        $manager->persist($t2);

        $alimentRepository = $manager->getRepository(Aliment::class);

        $a1 = $alimentRepository->findOneBy(["nom" => "Patate"]);
        $a1->settype($t2);
        $manager->persist($a1);

        $a2 = $alimentRepository->findOneBy(["nom" => "carotte"]);
        $a2->settype($a2);
        $manager->persist($a1);

        $a3 = $alimentRepository->findOneBy(["nom" => "pomme"]);
        $a3->settype($t1);
        $manager->persist($a3);

        $manager->flush();
    }
}
