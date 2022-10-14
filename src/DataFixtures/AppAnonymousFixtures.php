<?php

namespace App\DataFixtures;

use App\Entity\User;
use App\Repository\TaskRepository;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Bundle\FixturesBundle\FixtureGroupInterface;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AppAnonymousFixtures extends Fixture implements FixtureGroupInterface
{
    private UserPasswordHasherInterface $hasher;
    private TaskRepository $taskRepo;

    public function __construct(UserPasswordHasherInterface $hasher, TaskRepository $taskRepository)
    {
        $this->hasher = $hasher;
        $this->taskRepo = $taskRepository;
    }

    public function load(ObjectManager $manager): void
    {
        $user = new User();
        $user
            ->setUsername('anonyme')
            ->setEmail('anonymous@todoandco.fr')
            ->setRoles(["ROLE_USER"])
            ->setPassword($this->hasher->hashPassword($user, "password"));

        $manager->persist($user);
        $manager->flush();

        $tasksWithNullAuthor = $this->taskRepo->findAll(['author' => null]);

        $count = 0;
        foreach ($tasksWithNullAuthor as $taskToUpdate) {
            $taskToUpdate->setAuthor($user);
            $count++;
        }

        $manager->flush();
        echo "\r\nCréation de l'utilisateur 'anonyme' réussie, mot de passe : 'password'.\r\n";
        echo "\r\n[ " . $count . " ] tâche(s) récupérée(s) par l'utilisateur 'anonyme'.";
    }

    public static function getGroups(): array
    {
        return ['anonymous', 'demo'];
    }
}
