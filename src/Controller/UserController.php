<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    /**
     * @Route("/register030578", name="user_register")
     */
    public function register(EntityManagerInterface $manager,Request $request, UserPasswordHasherInterface $encoder): Response
    {
        $user = new User();
        $form = $this->createForm(UserType::class, $user);

        //analyse de la requete par le formulaire
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){

            $hashedPassword = $encoder->hashPassword($user, $user->getPassword());
            $user->setPassword($hashedPassword);
            $manager->persist($user);
            $manager->flush();
            $this->addFlash('success','Vous êtes enregistré !');
            return $this->redirectToRoute("admin_list");
        }

        return $this->render('user/register.html.twig', [
            'controller_name' => 'Inscription',
            'form' => $form->createView()
        ]);
    }
}
