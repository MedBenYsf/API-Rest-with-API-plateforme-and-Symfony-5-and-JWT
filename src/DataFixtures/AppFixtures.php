<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Nelmio\Alice\Loader\NativeLoader;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class AppFixtures extends Fixture
{
    private $encoder;

    public  function __construct(UserPasswordEncoderInterface $encoder)
    {
        $this->encoder = $encoder;
    }

    public function load(ObjectManager $manager)
    {
        $loader = new NativeLoader();
        $objects = $loader->loadFile(__DIR__ . '/fixtures.yaml')->getObjects();
        foreach ($objects as $object) {
            if ($object instanceof User) {
                $object->setPassword($this->encoder->encodePassword($object, $object->getPassword()));
            }
            $manager->persist($object);
        }
        $manager->flush();
    }
}
