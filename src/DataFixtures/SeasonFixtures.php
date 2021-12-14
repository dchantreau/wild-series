<?php

namespace App\DataFixtures;

use App\Entity\Season;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class SeasonFixtures extends Fixture
{
    public const SEASONS = [
        'Saison 1',
        'Saison 2',
        'Saison 3',
        'Saison 4',
        'Saison 5',
        'Saison 6',
    ];

    public function load(ObjectManager $manager): void
    {
        foreach (self::SEASONS as $key => $seasonName) {
            $season = new Season();
            $season->setNumber(rand(1,20));
            $season->setYear(rand(2000,2020));
            $season->setDescription($seasonName);
            $manager->persist($season);
            $this->addReference('season' . $key, $season);
        }

        $manager->flush();
    }

    public function getDependencies()
    {
        // Tu retournes ici toutes les classes de fixtures dont ProgramFixtures dépend
        return [
          ProgramFixtures::class,
        ];
    }
}