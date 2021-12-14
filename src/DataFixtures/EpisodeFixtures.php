<?php

namespace App\DataFixtures;

use App\Entity\Episode;
use App\DataFixtures\ProgramFixtures;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class EpisodeFixtures extends Fixture
{
    public const EPISODES = [
        'episode',
    ];

    public function load(ObjectManager $manager): void
    {
        foreach (self::EPISODES as $key => $episodeName) {
            $episode = new Episode();
            $episode->setTitle($episodeName);
            $episode->setNumber(rand(0,20));
            $episode->setSynopsis($episodeName);
            $manager->persist($episode);
            $this->addReference('episode_' . $key, $episode);
        }

        $manager->flush();
    }

    public function getDependencies()
    {
        // Tu retournes ici toutes les classes de fixtures dont ProgramFixtures dépend
        return [
          SeasonFixtures::class,
        ];
    }

}
