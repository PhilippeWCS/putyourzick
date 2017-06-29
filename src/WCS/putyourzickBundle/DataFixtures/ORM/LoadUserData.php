<?php
/**
 * Created by PhpStorm.
 * User: wilder
 * Date: 29/06/17
 * Time: 11:17
 */

namespace WCS\putyourzickBundle\DataFixtures\ORM;


use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use WCS\putyourzickBundle\Entity\User;

class LoadUserData implements FixtureInterface, ContainerAwareInterface
{
    /**
     * @var ContainerInterface
     */
    private $container;

    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    public function load(ObjectManager $manager)
    {
        $user = new User();
        $user->setUsername('Franck');
        $user->setEmail('franck@test.com');
        $encoder = $this->container->get('security.password_encoder');
        $password = $encoder->encodePassword($user, 'test');
        $user->setPassword($password);
        $manager->persist($user);
        $manager->flush();

        $user = new User();
        $user->setUsername('Aurore');
        $user->setEmail('aurore@test.com');
        $encoder = $this->container->get('security.password_encoder');
        $password = $encoder->encodePassword($user, 'test');
        $user->setPassword($password);
        $manager->persist($user);
        $manager->flush();

        $user = new User();
        $user->setUsername('Math');
        $user->setEmail('math@test.com');
        $encoder = $this->container->get('security.password_encoder');
        $password = $encoder->encodePassword($user, 'test');
        $user->setPassword($password);
        $manager->persist($user);
        $manager->flush();

        $user = new User();
        $user->setUsername('Lucile');
        $user->setEmail('lucile@test.com');
        $encoder = $this->container->get('security.password_encoder');
        $password = $encoder->encodePassword($user, 'test');
        $user->setPassword($password);
        $manager->persist($user);
        $manager->flush();

        $user = new User();
        $user->setUsername('Phil');
        $user->setEmail('philippe@test.com');
        $encoder = $this->container->get('security.password_encoder');
        $password = $encoder->encodePassword($user, 'test');
        $user->setPassword($password);
        $manager->persist($user);
        $manager->flush();
    }
}