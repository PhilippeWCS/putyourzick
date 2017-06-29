<?php
/**
 * Created by PhpStorm.
 * User: wilder
 * Date: 29/06/17
 * Time: 12:29
 */

namespace WCS\putyourzickBundle\DataFixtures\ORM;


use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use WCS\putyourzickBundle\Entity\Media;

class LoadMediaData implements FixtureInterface, OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        // TODO: Implement load() method.
        $user = $manager->getRepository('WCSputyourzickBundle:User')->findOneBy(array('id' => 1));
        $playlist = $manager->getRepository('WCSputyourzickBundle:Playlist')->findOneBy(array('id' => 1));

        $media = new Media();
        $media->setId(1);
        $media->setUser($user);
        $media->setPlaylist($playlist);
        $media->setTitre("Flo the kid - I see you smiling");
        $media->setDate(new \DateTime());
        $media->setUrl("https://www.youtube.com/watch?v=mVofbmjXNjs");
        $manager->getClassMetaData(get_class($media))->setIdGeneratorType(\Doctrine\ORM\Mapping\ClassMetadata::GENERATOR_TYPE_NONE);
        $manager->persist($media);
        $manager->flush();
        $media = new Media();
        $media->setId(2);
        $media->setUser($user);
        $media->setPlaylist($playlist);
        $media->setTitre("Michael Christmas - Y all Trippin");
        $media->setDate(new \DateTime());
        $media->setUrl("https://www.youtube.com/watch?v=ElHLgaXIZgg");
        $manager->getClassMetaData(get_class($media))->setIdGeneratorType(\Doctrine\ORM\Mapping\ClassMetadata::GENERATOR_TYPE_NONE);
        $manager->persist($media);
        $manager->flush();
        $media = new Media();
        $media->setId(3);
        $media->setUser($user);
        $media->setPlaylist($playlist);
        $media->setTitre("coin-coin R Wan");
        $media->setDate(new \DateTime());
        $media->setUrl("https://youtu.be/VbobOmQOyBI");
        $manager->getClassMetaData(get_class($media))->setIdGeneratorType(\Doctrine\ORM\Mapping\ClassMetadata::GENERATOR_TYPE_NONE);
        $manager->persist($media);
        $manager->flush();

        $user = $manager->getRepository('WCSputyourzickBundle:User')->findOneBy(array('id' => 2));
        $playlist = $manager->getRepository('WCSputyourzickBundle:Playlist')->findOneBy(array('id' => 2));

        $media = new Media();
        $media->setId(4);
        $media->setUser($user);
        $media->setPlaylist($playlist);
        $media->setTitre("54-46 Was My Number - Toots and The Maytals");
        $media->setDate(new \DateTime());
        $media->setUrl("https://www.youtube.com/watch?v=UhH1Lxv-8sA");
        $manager->getClassMetaData(get_class($media))->setIdGeneratorType(\Doctrine\ORM\Mapping\ClassMetadata::GENERATOR_TYPE_NONE);
        $manager->persist($media);
        $manager->flush();
        $media = new Media();
        $media->setId(5);
        $media->setUser($user);
        $media->setPlaylist($playlist);
        $media->setTitre("Easy Star All-Stars - Time");
        $media->setDate(new \DateTime());
        $media->setUrl("https://youtu.be/Z6mzAGRY7uo");
        $manager->getClassMetaData(get_class($media))->setIdGeneratorType(\Doctrine\ORM\Mapping\ClassMetadata::GENERATOR_TYPE_NONE);
        $manager->persist($media);
        $manager->flush();
        $media = new Media();
        $media->setId(6);
        $media->setUser($user);
        $media->setPlaylist($playlist);
        $media->setTitre("99 Posse feat. Mama Marjas - Combat Reggae");
        $media->setDate(new \DateTime());
        $media->setUrl("https://www.youtube.com/watch?v=N_mwZugEs28");
        $manager->getClassMetaData(get_class($media))->setIdGeneratorType(\Doctrine\ORM\Mapping\ClassMetadata::GENERATOR_TYPE_NONE);
        $manager->persist($media);
        $manager->flush();

        $user = $manager->getRepository('WCSputyourzickBundle:User')->findOneBy(array('id' => 3));
        $playlist = $manager->getRepository('WCSputyourzickBundle:Playlist')->findOneBy(array('id' => 3));

        $media = new Media();
        $media->setId(7);
        $media->setUser($user);
        $media->setPlaylist($playlist);
        $media->setTitre("Rodrigo Amarante - Tuyo");
        $media->setDate(new \DateTime());
        $media->setUrl("https://www.youtube.com/watch?v=Y2E8mM3o6iA");
        $manager->getClassMetaData(get_class($media))->setIdGeneratorType(\Doctrine\ORM\Mapping\ClassMetadata::GENERATOR_TYPE_NONE);
        $manager->persist($media);
        $manager->flush();
        $media = new Media();
        $media->setId(8);
        $media->setUser($user);
        $media->setPlaylist($playlist);
        $media->setTitre("Datarock - Fa Fa Fa");
        $media->setDate(new \DateTime());
        $media->setUrl("https://www.youtube.com/watch?v=N6xoFhkthls");
        $manager->getClassMetaData(get_class($media))->setIdGeneratorType(\Doctrine\ORM\Mapping\ClassMetadata::GENERATOR_TYPE_NONE);
        $manager->persist($media);
        $manager->flush();
        $media = new Media();
        $media->setId(9);
        $media->setUser($user);
        $media->setPlaylist($playlist);
        $media->setTitre("Robert Miles - Children");
        $media->setDate(new \DateTime());
        $media->setUrl("https://www.youtube.com/watch?v=CC5ca6Hsb2Q");
        $manager->getClassMetaData(get_class($media))->setIdGeneratorType(\Doctrine\ORM\Mapping\ClassMetadata::GENERATOR_TYPE_NONE);
        $manager->persist($media);
        $manager->flush();

        $user = $manager->getRepository('WCSputyourzickBundle:User')->findOneBy(array('id' => 4));
        $playlist = $manager->getRepository('WCSputyourzickBundle:Playlist')->findOneBy(array('id' => 4));

        $media= new Media();
        $media->setId(10);
        $media->setUser($user);
        $media->setPlaylist($playlist);
        $media->setTitre("New Fang");
        $media->setDate(new \DateTime());
        $media->setUrl("https://www.youtube.com/watch?v=S7_vH3H8LPI");
        $manager->getClassMetaData(get_class($media))->setIdGeneratorType(\Doctrine\ORM\Mapping\ClassMetadata::GENERATOR_TYPE_NONE);
        $manager->persist($media);
        $manager->flush();
        $media = new Media();
        $media->setId(11);
        $media->setUser($user);
        $media->setPlaylist($playlist);
        $media->setTitre("Animals As Leaders - CAFO");
        $media->setDate(new \DateTime());
        $media->setUrl("https://www.youtube.com/watch?v=NmfzWpp0hMc");
        $manager->getClassMetaData(get_class($media))->setIdGeneratorType(\Doctrine\ORM\Mapping\ClassMetadata::GENERATOR_TYPE_NONE);
        $manager->persist($media);
        $manager->flush();
        $media = new Media();
        $media->setId(12);
        $media->setUser($user);
        $media->setPlaylist($playlist);
        $media->setTitre("Megadeth - Trust");
        $media->setDate(new \DateTime());
        $media->setUrl("https://youtu.be/3Ja3CQNyhhw");
        $manager->getClassMetaData(get_class($media))->setIdGeneratorType(\Doctrine\ORM\Mapping\ClassMetadata::GENERATOR_TYPE_NONE);
        $manager->persist($media);
        $manager->flush();

        $user = $manager->getRepository('WCSputyourzickBundle:User')->findOneBy(array('id' => 5));
        $playlist = $manager->getRepository('WCSputyourzickBundle:Playlist')->findOneBy(array('id' => 5));

        $media = new Media();
        $media->setId(13);
        $media->setUser($user);
        $media->setPlaylist($playlist);
        $media->setTitre("Ra Ra Riot - Boy");
        $media->setDate(new \DateTime());
        $media->setUrl("https://www.youtube.com/watch?v=NKGfQCOyCCA");
        $manager->getClassMetaData(get_class($media))->setIdGeneratorType(\Doctrine\ORM\Mapping\ClassMetadata::GENERATOR_TYPE_NONE);
        $manager->persist($media);
        $manager->flush();
        $media = new Media();
        $media->setId(14);
        $media->setUser($user);
        $media->setPlaylist($playlist);
        $media->setTitre("Ratatat - Gettysburg");
        $media->setDate(new \DateTime());
        $media->setUrl("https://www.youtube.com/watch?v=PH_a2OcCmnI&feature=youtu.be");
        $manager->getClassMetaData(get_class($media))->setIdGeneratorType(\Doctrine\ORM\Mapping\ClassMetadata::GENERATOR_TYPE_NONE);
        $manager->persist($media);
        $manager->flush();
        $media = new Media();
        $media->setId(15);
        $media->setUser($user);
        $media->setPlaylist($playlist);
        $media->setTitre("Portugal. The Man - Feel It Still");
        $media->setDate(new \DateTime());
        $media->setUrl("https://www.youtube.com/watch?v=pBkHHoOIIn8");
        $manager->getClassMetaData(get_class($media))->setIdGeneratorType(\Doctrine\ORM\Mapping\ClassMetadata::GENERATOR_TYPE_NONE);
        $manager->persist($media);
        $manager->flush();
    }

    public function getOrder()
    {
        // TODO: Implement getOrder() method.
        return 3;
    }

}