<?php

namespace App\Tests\Entity;


// use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
// use Symfony\Component\Validator\ConstraintViolationList;
// use Symfony\Component\Validator\Validator\ValidatorInterface;
// use Symfony\Component\Security\Core\User\UserInterface;
use App\Entity\Articles;
use App\Entity\User;
use PHPUnit\Framework\TestCase;



class UserEntityTest extends TestCase
{
    private User $user;

    protected function setUp(): void
    {
        parent::setUp();
        $this->user = new user;
    }
    
    public function testgetEmail():void{
        $value = 'test@test.fr';

        $response = $this->user->setEmail($value);
        $getEmail = $this->user->getEmail();
        self::assertInstanceOf(User::class, $response);
        self::assertEquals($value, $this->user->getEmail());
        // self::assertEquals($value, $this->user->getUsername());
    }

    public function testGetRoles():void
    {
        $value = ['ROLE_ADMIN'];
        $response = $this->user->setRoles[$value];

        self::assertInstanceOf(User::class, $response);
        self::assertContains('ROLE_ADMIN', $this->user->getRoles());
        
    }

    public function testGetPassword():void
    {
        $value = 'password';
        $response = $this->user->setPassword($value);

        self::assertInstanceOf(User::class, $response);
        self::assertEquals($value, $this->user->getPassword());
    }

    public function testGetCommentaire():void
    {
        $value = new Articles();
        $response = $this->articles->addCommentaires($value);

        self::assertInstanceOf(Articles::class, $response);
        self::assertCount(1, $this->articles->getCommentaires());
        
    }
    // private const EMAIL_CONSTRAINT_MESSAGE = 'Email "atchoum-du-974@gmail" non valide';
    // private const NOT_BLANK_CONSTRAINT_MESSAGE = 'Veuillez saisir une valeur';
    // private const INVALID_EMAIL_VALUE = 'atchoum-du-974@gmail';
    // private const PASSWORD_REGEX_CONSTRAINT_MESSAGE = "Il faut au moins 6 caractères dont 1 majuscule, 1 minuscule, 1 chiffre et 1 spécial peu importe l'ordre ";
    // private const VALID_EMAIL_VALUE = 'atchoum-du-974@gmail.com';
    // private const VALID_PASSWORD_VALUE = 'Atchoum-du-974';
    // public ValidatorInterface $validator;

    // protected function setUp(): void
    // {
    //     $kernel = self::bootKernel();
    //     $this->validator = $kernel->getContainer()->get('validator');

    // }

    // public function testUserEntityIsValid(): void
    // {
    //     $user = new User();
    //     $user
    //         ->setEmail(self::VALID_EMAIL_VALUE)
    //         ->setPassword(self::VALID_PASSWORD_VALUE);
       
    //     self::assertTrue($user, $this->user->get_current_user());
    // }

    // public function testUserEntityIsInvalidBecauseNoPasswordEntered():void
    // {
    //     $user = new user();
    //     $user->setEmail(self::VALID_EMAIL_VALUE);
    //     // $errors = $this->getValidationsErrors($user, 1);
    //      $this->assertEquals(self::NOT_BLANK_CONSTRAINT_MESSAGE, $this->user->getPa);
    // }

    // public function testUserEntityIsInvalidBecauseAnInvalidEmailHasBeenEntered():void
    // {
    //     $user = new User();
    //     $user
    //     ->setEmail(self::INVALID_EMAIL_VALUE)
    //     ->setPassword(self::VALID_PASSWORD_VALUE);

    //     // $errors = $this->getValidationError($user, 1);
    //     // $this->assertEquals(self::EMAIL_CONSTRAINT_MESSAGE, $errors[0]->getMessage());
    // }

    // /**
    //  * @dataProvider provideInvalidPasswords
    //  */
    // public function testUserEntityIsInvalidBecauseAnInvalidPasswordHasBeenEntered(string $invalidPassword): void
    // {
    //     $user = new User();

    //     $user
    //     ->setEmail(self::INVALID_EMAIL_VALUE)
    //     ->setPassword($invalidPassword);
    //     // $errors = $this->getValidationError($user, 1);

    //     // $this->assertEquals(self::PASSWORD_REGEX_CONSTRAINT_MESSAGE, $errors[0]->getMessage());
    // }

    // public function provideInvalidPasswords(): array
    // {
    //     return [
    //         ['Atchoumdu974'],
    //         ['Atchoum-le-clown'],
    //         ['Atcho'],
    //         ['atchoum-du-974'],
    //         ['ATCHOUM-DU-974']

    //     ];
    // }
   
}

