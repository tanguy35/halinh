<?php

namespace App\Controller;

use App\Entity\Commentaires;
use App\Form\CommentaireFormType;
//use App\Form\ContactType;
use App\Repository\ArticlesRepository;
use App\Repository\CommentairesRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="main_home")
     */
    public function index(ArticlesRepository $repository): Response
    {
        $articles = $repository->findArticles();

        return $this->render('main/list.html.twig', [
            'articles' => $articles,
        ]);
    }

    /**
     * @Route("/detail/{id}", name="detail")
     */

    public function detail(ArticlesRepository $repository, CommentairesRepository $commentairesRepository, int $id,EntityManagerInterface $manager, Request $request): Response
    {
        $article = $repository->find($id);

        $commentaire = new Commentaires();

        $form = $this->createForm(CommentaireFormType::class, $commentaire);
        $form->handleRequest($request);

        $commentaires = $commentairesRepository->find($id);

        if ($form->isSubmitted() && $form->isValid()){
        $commentaire->setArticles($article);

            $manager->persist($commentaire);
            $manager->flush();
            $this->addFlash('success', 'Votre message a bien été ajouté !');
            return $this->redirectToRoute('detail',[
                'id'=> $id
            ]);
        }

        return $this->render('main/detail.html.twig', [
            'article' => $article,
            'commentaires' => $commentaires,
            'formComment' => $form->createView()
        ]);
    }

    /**
     * @Route("/mentions", name="mentions")
     */
    public function mentions(): Response
    {
        return $this->render('main/mentions.html.twig');
    }

}
