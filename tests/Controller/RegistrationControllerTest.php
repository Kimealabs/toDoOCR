<?php

namespace App\Tests\Controller;

use Faker\Factory;
use App\Entity\User;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class RegistrationControllerTest extends WebTestCase
{
    public function testRegistrationPage(): void
    {
        self::ensureKernelShutdown();
        $client = static::createClient();
        $client->request('GET', '/signup');
        $this->assertResponseStatusCodeSame(200);
        //$this->assertRouteSame('user_create');
    }

    public function testRegistrationInsertRandom(): void
    {
        $faker = Factory::create('fr-FR');

        $client = static::createClient();
        $client->followRedirects();
        $crawler = $client->request('GET', '/signup');
        $fakeName = $faker->name();
        $fakeEmail = $faker->email();
        $form = $crawler->selectButton('Ajouter')->form([
            'user[username]' => $fakeName,
            'user[plainPassword][first]' => 'password',
            'user[plainPassword][second]' => 'password',
            'user[email]' => $fakeEmail,
            'user[Roles]' => 'ROLE_USER',
        ]);

        $client->submit($form);

        $this->assertSelectorTextSame(".alert.alert-success", "L'utilisateur a bien été ajouté !");

        $userRepository = static::getContainer()->get(UserRepository::class);
        // DESC TO AVOID "Anonymous User" of Fixtures DATA
        $userAddedByTest = $userRepository->findOneBy([], ['id' => 'DESC']);
        $this->assertEquals($fakeEmail, $userAddedByTest->getEmail());
        $this->assertEquals($fakeName, $userAddedByTest->getUsername());
    }
}
