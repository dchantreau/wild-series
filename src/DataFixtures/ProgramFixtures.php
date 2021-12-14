<?php

namespace App\DataFixtures;

use App\Entity\Program;
use App\DataFixtures\ActorFixtures;
use App\DataFixtures\CategoryFixtures;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class ProgramFixtures extends Fixture implements DependentFixtureInterface
{
    public const PROGRAMS = [
        ["The Walking Dead","Le policier Rick Grimes se réveille après un long coma. Il découvre avec effarement que le monde, ravagé par une épidémie, est envahi par les morts-vivants.","category_0","https://m.media-amazon.com/images/M/MV5BZmFlMTA0MmUtNWVmOC00ZmE1LWFmMDYtZTJhYjJhNGVjYTU5XkEyXkFqcGdeQXVyMTAzMDM4MjM0._V1_.jpg"],
        ["The Haunting House of Hill House","Plusieurs frères et sœurs qui, enfants, ont grandi dans la demeure qui allait devenir la maison hantée la plus célèbre des États-Unis, sont contraints de se réunir pour finalement affronter les fantômes de leur passé.","category_0","https://m.media-amazon.com/images/M/MV5BMTU4NzA4MDEwNF5BMl5BanBnXkFtZTgwMTQxODYzNjM@._V1_SY1000_CR0,0,674,1000_AL_.jpg"],
        ["American Horror Story","A chaque saison, son histoire. American Horror Story nous embarque dans des récits à la fois poignants et cauchemardesques, mêlant la peur, le gore et le politiquement correct.","category_0","https://m.media-amazon.com/images/M/MV5BODZlYzc2ODYtYmQyZS00ZTM4LTk4ZDQtMTMyZDdhMDgzZTU0XkEyXkFqcGdeQXVyMzQ2MDI5NjU@._V1_SY1000_CR0,0,666,1000_AL_.jpg"],
        ["Love Death And Robots","Un yaourt susceptible, des soldats lycanthropes, des robots déchaînés, des monstres-poubelles, des chasseurs de primes cyborgs, des araignées extraterrestres et des démons assoiffés de sang : tout ce beau monde est réuni dans 18 courts métrages animés déconseillés aux âmes sensibles.","category_6","https://m.media-amazon.com/images/M/MV5BMTc1MjIyNDI3Nl5BMl5BanBnXkFtZTgwMjQ1OTI0NzM@._V1_SY1000_CR0,0,674,1000_AL_.jpg"],
        ["Penny Dreadful",'Dans le Londres ancien, Vanessa Ives, une jeune femme puissante aux pouvoirs hypnotiques, allie ses forces à celles d Ethan, un garçon rebelle et violent aux allures de cowboy, et de Sir Malcolm, un vieil homme riche aux ressources inépuisables.  Ensemble, ils combattent un ennemi inconnu, presque invisible, qui ne semble pas humain et qui massacre la population.','category_0','https://m.media-amazon.com/images/M/MV5BNmE5MDE0ZmMtY2I5Mi00Y2RjLWJlYjMtODkxODQ5OWY1ODdkXkEyXkFqcGdeQXVyNjU2NjA5NjM@._V1_SY1000_CR0,0,695,1000_AL_.jpg'],
        ["Fear The Walking Dead",'La série se déroule au tout début de l épidémie relatée dans la série-mère The Walking Dead et se passe dans la ville de Los Angeles, et non à Atlanta. Madison est conseillère dans un lycée de Los Angeles. Depuis la mort de son mari, elle élève seule ses deux enfants : Alicia, excellente élève qui découvre les premiers émois amoureux, et son grand frère Nick qui a quitté la fac et a sombré dans la drogue.','category_0','https://m.media-amazon.com/images/M/MV5BYWNmY2Y1NTgtYTExMS00NGUxLWIxYWQtMjU4MjNkZjZlZjQ3XkEyXkFqcGdeQXVyMzQ2MDI5NjU@._V1_SY1000_CR0,0,666,1000_AL_.jpg'],
        ["The Big Bang Theory","Leonard Hofstadter et Sheldon Cooper vivent en colocation à Pasadena, ville de l'agglomération de Los Angeles. Ce sont tous deux des physiciens surdoués, « geeks » de surcroît. C'est d'ailleurs autour de cela qu'est axée la majeure partie comique de la série. Ils partagent quasiment tout leur temps libre avec leurs deux amis Howard Wolowitz et Rajesh Koothrappali pour jouer à des jeux vidéo comme Halo, organiser un marathon de la saga Star Wars, jouer à des jeux de société comme le Boggle klingon ou de rôles tel que Donjons et Dragons, voire discuter de théories scientifiques très complexes.Leur univers routinier est perturbé lorsqu'une jeune femme, Penny, s'installe dans l'appartement d'en face. Leonard a immédiatement des vues sur elle et va tout faire pour la séduire ainsi que l'intégrer au groupe et à son univers, auquel elle ne connaît rien.","category_5","https://th.bing.com/th/id/OIP.px1dgCtTe-cOYZOidRHALgHaLH?w=115&h=180&c=7&r=0&o=5&pid=1.7"],
        ["Buffy contre les vampires","A chaque génération il y a une élue. Seule elle devra affronter les vampires, les démons et les forces de l’ombre. Concilier scolarité difficile et affrontements nocturnes, ce n’est pas facile. Et c’est pourtant le quotidien de Buffy, une adolescente comme les autres avec ses problèmes affectifs et scolaires, mais qui la nuit part à la chasse aux vampires !","category_1","https://fiebreseries.com/fr/wp-content/uploads/2021/11/Buffy-contre-les-vampires_1134_poster_serie0.jpg"],
        ["Stranger things","L'intrigue s'étale sur plusieurs mois voire plusieurs années, entre 1983 et 1986.  Un soir de novembre 1983 à Hawkins, dans l'Indiana, le jeune Will Byers, âgé de douze ans, disparaît brusquement sans laisser de traces, hormis son vélo. Plusieurs personnages vont alors tenter de le retrouver : sa mère Joyce, ses amis menés par Mike Wheeler et guidés par la mystérieuse Onze, une jeune fille ayant des pouvoirs psychiques, ainsi que le chef de la police Jim Hopper. Parallèlement, la ville est le théâtre de phénomènes surnaturels liés au Laboratoire national de Hawkins, géré par le Département de l'Énergie des États-Unis et indirectement la Central Intelligence Agency (CIA), dont les expériences dans le cadre du projet MK-Ultra ne semblent pas étrangères à la disparition de Will.","category_4","https://cdn.shopify.com/s/files/1/2356/1293/products/stranger-things-one-sheet-maxi-poster-1.133_1024x1024@2x.jpg?v=1571371124"],
        ["Game of Thrones","Sur le continent de Westeros, le roi Robert Baratheon gouverne le Royaume des Sept Couronnes depuis plus de dix-sept ans, à la suite de la rébellion qu'il a menée contre le « roi fou » Aerys II Targaryen. Jon Arryn, époux de la sœur de Lady Catelyn Stark, Lady Arryn, son guide et principal conseiller, vient de s'éteindre, et le roi part alors dans le nord du royaume demander à son vieil ami Eddard « Ned » Stark de remplacer leur regretté mentor au poste de Main du roi. Ned, seigneur suzerain du nord depuis Winterfell et de la maison Stark, est peu désireux de quitter ses terres. Mais il accepte à contre-cœur de partir pour la capitale Port-Réal avec ses deux filles, Sansa et Arya. Juste avant leur départ pour le sud, Bran, l'un des jeunes fils d'Eddard, est poussé de l'une des tours de Winterfell après avoir été témoin de la liaison incestueuse entre la reine Cersei Baratheon et son frère jumeau, Jaime Lannister. Leur frère, Tyrion Lannister, surnommé « le gnome », est alors accusé du crime par Lady Catelyn Stark.","category_4","https://th.bing.com/th/id/OIP.uDhAByMuYpn-v8T2AyL4GQHaLG?w=185&h=278&c=7&r=0&o=5&pid=1.7"],
        ["The Good Place","À sa mort, Eleanor Shellstrop (Kristen Bell) se retrouve au Bon Endroit (en anglais : The Good Place), là où seules les personnes exceptionnelles aux âmes pures arrivent, les autres étant envoyées au Mauvais Endroit. Chaque nouvel arrivant est logé dans une maison idéale, aménagée selon ses goûts, puis fait connaissance avec son âme sœur. Problème, Eleanor n'est pas vraiment une bonne personne et découvre qu'elle a été envoyée au Bon Endroit par erreur. Et peu après son arrivée, des choses étranges se produisent...","category_1","https://th.bing.com/th/id/R.addc8a1bb73ae364cb94718695ccc279?rik=oquaWjkAELA0mg&pid=ImgRaw&r=0"],
        ["The Simpsons","Les Simpson, famille américaine moyenne, vivent à Springfield. Homer, le père, a deux passions : regarder la télé et boire des bières. Mais son quotidien est rarement reposant, entre son fils Bart qui fait toutes les bêtises possibles, sa fille Lisa qui est une surdouée, ou encore sa femme Marge qui ne supporte pas de le voir se soûler à longueur de journée.","category_3","https://th.bing.com/th/id/OIP.II07_i_AMbshwFIl7_7a7wHaK5?w=185&h=272&c=7&r=0&o=5&pid=1.7"],
        ["Desperate Housewives","La série met en scène le quotidien mouvementé de quatre femmes : Susan Mayer, Lynette Scavo, Bree Van de Kamp et Gabrielle Solis. Elles vivent à Wisteria Lane, une banlieue chic de Fairview (située dans l'État fictif de l'Eagle State), stéréotype des quartiers résidentiels de la classe moyenne supérieure américaine. Mary Alice Young, une amie des héroïnes, se suicide au début de l'épisode pilote, et commente d'outre-tombe la multitude d'intrigues mêlant humour, drame et mystère auxquelles prennent part les quatre femmes. Au fil des saisons, d'autres femmes désespérées se joignent à elles, dont Edie Britt, une « croqueuse d'hommes » manipulatrice, Betty Applewhite, une ancienne pianiste solitaire, Katherine Mayfair, une ménagère au passé trouble, Angie Bolen, une italo-américaine au passé criminel et Renee Perry, une riche divorcée.","category_5","https://tse3.mm.bing.net/th?id=OIP.t7St09VHEqkIbYy5ujj6qgHaLH&pid=Api&P=0&w=300&h=300"],
    ];

    public function load(ObjectManager $manager): void
    {
        foreach (self::PROGRAMS as $key => $programName){
            $program = new Program();
            $program->setTitle($programName[0]);
            $program->setSummary($programName[1]);
            $program->setCategory($this->getReference($programName[2]));
            $program->setPoster($programName[3]);
            for ($i=0; $i < count(ActorFixtures::ACTORS); $i++) {
                $program->addActor($this->getReference('actor_' . $i));
            }
            $manager->persist($program);
        }
        $manager->flush();
    }

    public function getDependencies()
    {
        return [
          ActorFixtures::class,
          CategoryFixtures::class,
        ];
    }
}
