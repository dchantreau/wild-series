<?php
//ActorFixtures.php

namespace App\DataFixtures;

use App\Entity\Actor;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ActorFixtures extends Fixture
{
    public const ACTORS = [
        'Norman Reedus',
        'Andrew Lincoln',
        'Lauren Cohan',
        'Jeffrey Dean Morgan',
        'Chandler Riggs',
        'Homer Simpson',
        'Sarah Michelle Gellar',
        'David Boreanaz',
        'Alyson Hannigan',
        'Eliza Dushku',
        'Jeffrey Dean Morgan',
        'Chandler Riggs',
        'Norman Reedus',
        'Steven Yeun',
        'Michael Cudlitz',
        'Lennie James',
        'Alycia Debnam-Carey',
        'Kim Dickens',
        'Frank Dillane',
        'Teri Hatcher',
        'Eva Longoria',
        'Marcia Cross',
        'Felicity Huffman',
        'Nicollette Sheridan',
        'Nathan Fillion',
        'Holly Marie Combs',
        'Alyssa Milano',
        'Rose McGowan',
        'Shannen Doherty',
        'Kaley Cuoco',
        'Kit Harington',
        'Emilia Clarke',
        'Maisie Williams',
        'Sophie Turner',
        'Millie Bobby Brown',
        'Gaten Matarazzo',
        'Finn Wolfhard',
        'Noah Schnapp',
        'Caleb McLaughlin',
        'Taissa Farmiga',
        'Evan Thomas Peters',
        'Connie Britton',
        'Jessica Phyllis Lange',
        'Victoria Pedretti',
        'Kate Siegel',
        'Oliver Jackson-Cohen',
        'Penn Badgley',
    ];
    public function load(ObjectManager $manager)
    {
        foreach (self::ACTORS as $key => $actorName) {
            $actor = new Actor();
            $actor->setName($actorName);
            $manager->persist($actor);
            $this->addReference('actor_' . $key, $actor);
        }
        $manager->flush();
    }
}
