<?php
/**
 * Created by PhpStorm.
 * User: wilder
 * Date: 29/06/17
 * Time: 13:31
 */

namespace WCS\putyourzickBundle\DataFixtures\ORM;


use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use WCS\putyourzickBundle\Entity\Invite;

class LoadInviteData implements FixtureInterface, OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        // TODO: Implement load() method.
        $user = $manager->getRepository('WCSputyourzickBundle:User')->findOneBy(array('id' => 1));
        $playlist = $manager->getRepository('WCSputyourzickBundle:Playlist')->findOneBy(array('id' => 5));

        $invite = new Invite();
        $invite->setUser($user);
        $invite->setPlaylist($playlist);
        $manager->persist($invite);
        $manager->flush();

        $user = $manager->getRepository('WCSputyourzickBundle:User')->findOneBy(array('id' => 2));
        $playlist = $manager->getRepository('WCSputyourzickBundle:Playlist')->findOneBy(array('id' => 4));

        $invite = new Invite();
        $invite->setUser($user);
        $invite->setPlaylist($playlist);
        $manager->persist($invite);
        $manager->flush();

        $user = $manager->getRepository('WCSputyourzickBundle:User')->findOneBy(array('id' => 3));
        $playlist = $manager->getRepository('WCSputyourzickBundle:Playlist')->findOneBy(array('id' => 1));

        $invite = new Invite();
        $invite->setUser($user);
        $invite->setPlaylist($playlist);
        $manager->persist($invite);
        $manager->flush();

        $user = $manager->getRepository('WCSputyourzickBundle:User')->findOneBy(array('id' => 4));
        $playlist = $manager->getRepository('WCSputyourzickBundle:Playlist')->findOneBy(array('id' => 1));

        $invite = new Invite();
        $invite->setUser($user);
        $invite->setPlaylist($playlist);
        $manager->persist($invite);
        $manager->flush();

        $playlist = $manager->getRepository('WCSputyourzickBundle:Playlist')->findOneBy(array('id' => 2));

        $invite = new Invite();
        $invite->setUser($user);
        $invite->setPlaylist($playlist);
        $manager->persist($invite);
        $manager->flush();
    }

    public function getOrder()
    {
        // TODO: Implement getOrder() method.
        return 4;
    }

}