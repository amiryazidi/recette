<?php

namespace App\DataFixtures;

use App\Entity\Aliment;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $a1 = new Aliment();
        // $a1->setNom("Carotte")
        //     ->setCalorie(36)
        //     ->setPrix(1.80)
        //     ->setImage("aliments/carotte.png")
        //     ->setProteine(0.77)
        //     ->setGlucide(6.45)
        //     ->setLipide(0.26);

        // $manager->persist($a1);

        // $a2 = new Aliment();
        // $a2->setNom("Patate")
        //     ->setCalorie(80)
        //     ->setPrix(1.50)
        //     ->setImage("aliments/patate.png")
        //     ->setProteine(1.80)
        //     ->setGlucide(16.7)
        //     ->setLipide(0.34);
            
        // $manager->persist($a2);

        // $a3 = new Aliment();
        // $a3->setNom("Tomate")
        //     ->setCalorie(18)
        //     ->setPrix(2.30)
        //     ->setImage("aliments/tomate.png")
        //     ->setProteine(0.86)
        //     ->setGlucide(2.26)
        //     ->setLipide(0.24);
            
        // $manager->persist($a3);

        // $a4 = new Aliment();
        // $a4->setNom("Pomme")
        //     ->setCalorie(52)
        //     ->setPrix(2.35)
        //     ->setImage("aliments/pomme.png")
        //     ->setProteine(0.25)
        //     ->setGlucide(11.5)
        //     ->setLipide(0.25);
            
        // $manager->persist($a4);

        // $manager->flush();
    }
}
