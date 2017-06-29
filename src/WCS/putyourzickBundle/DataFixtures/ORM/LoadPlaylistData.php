<?php
/**
 * Created by PhpStorm.
 * User: wilder
 * Date: 29/06/17
 * Time: 11:30
 */

namespace WCS\putyourzickBundle\DataFixtures\ORM;


use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use WCS\putyourzickBundle\Entity\Playlist;
use WCS\putyourzickBundle\Entity\User;

class LoadPlaylistData implements FixtureInterface, OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        // TODO: Implement load() method.
        $user = $manager->getRepository('WCSputyourzickBundle:User')->findOneBy(array('id' => 1));
        $playlist = new Playlist();
        $playlist->setId(1);
        $playlist->setUser($user);
        $playlist->setTitre("Playlist funk");
        $playlist->setTheme("Funk");
        $manager->getClassMetaData(get_class($playlist))->setIdGeneratorType(\Doctrine\ORM\Mapping\ClassMetadata::GENERATOR_TYPE_NONE);
        $manager->persist($playlist);
        $manager->flush();

        $user = $manager->getRepository('WCSputyourzickBundle:User')->findOneBy(array('id' => 2));
        $playlist = new Playlist();
        $playlist->setId(2);
        $playlist->setUser($user);
        $playlist->setTitre("Playlist raggae");
        $playlist->setTheme("Raggae");
        $manager->getClassMetaData(get_class($playlist))->setIdGeneratorType(\Doctrine\ORM\Mapping\ClassMetadata::GENERATOR_TYPE_NONE);
        $manager->persist($playlist);
        $manager->flush();

        $user = $manager->getRepository('WCSputyourzickBundle:User')->findOneBy(array('id' => 3));
        $playlist = new Playlist();
        $playlist->setId(3);
        $playlist->setUser($user);
        $playlist->setTitre("Playlist electro");
        $playlist->setTheme("Electro");
        $manager->getClassMetaData(get_class($playlist))->setIdGeneratorType(\Doctrine\ORM\Mapping\ClassMetadata::GENERATOR_TYPE_NONE);
        $manager->persist($playlist);
        $manager->flush();

        $user = $manager->getRepository('WCSputyourzickBundle:User')->findOneBy(array('id' => 4));
        $playlist = new Playlist();
        $playlist->setId(4);
        $playlist->setUser($user);
        $playlist->setTitre("Playlist hard rock");
        $playlist->setTheme("Hard Rock");
        $manager->getClassMetaData(get_class($playlist))->setIdGeneratorType(\Doctrine\ORM\Mapping\ClassMetadata::GENERATOR_TYPE_NONE);
        $manager->persist($playlist);
        $manager->flush();

        $user = $manager->getRepository('WCSputyourzickBundle:User')->findOneBy(array('id' => 5));
        $playlist = new Playlist();
        $playlist->setId(5);
        $playlist->setUser($user);
        $playlist->setTitre("Playlist pop");
        $playlist->setTheme("Pop");
        $manager->getClassMetaData(get_class($playlist))->setIdGeneratorType(\Doctrine\ORM\Mapping\ClassMetadata::GENERATOR_TYPE_NONE);
        $manager->persist($playlist);
        $manager->flush();
    }

    public function getOrder()
    {
        // TODO: Implement getOrder() method.
        return 2;
    }

}