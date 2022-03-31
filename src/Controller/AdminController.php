<?php

namespace App\Controller;

//use App\Entity\Categories;
use App\Entity\Articles;
use App\Form\ArticlesType;
use App\Repository\ArticlesRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController
{
    /**
     * @Route("/admin/list", name="admin_list")
     */
    public function listAll(ArticlesRepository $repository): Response
    {
        $articles = $repository->findArticles();

        return $this->render('admin/dashboard.html.twig', [
            'articles' => $articles,
        ]);
    }

    /**
     * @Route("/admin/new", name="admin_new")
     */
    public function addArticle(EntityManagerInterface $manager, Request $request): Response
    {
        $article = new Articles();
        $form = $this->createForm(ArticlesType::class, $article);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()){
            $manager->persist($article);
            $manager->flush();
            $this->addFlash('success', 'Votre article a bien été ajouté !');
            return $this->redirectToRoute("admin_list");
        }
        return $this->render('admin/form.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/admin/update/{id}", name="admin_update")
     */
    public function updateArticle(EntityManagerInterface $manager, Request $request, Articles $article): Response
    {
        $formUpdate = $this->createForm(ArticlesType::class, $article);
        $formUpdate->handleRequest($request);
        if ($formUpdate->isSubmitted() && $formUpdate->isValid()){
            $manager->persist($article);
            $manager->flush();
            $this->addFlash('success', 'Votre article a bien été modifiée !');
            return $this->redirectToRoute("admin_list");
        }else{
            $this->addFlash('error', "Votre article n'a pas été modifiée !");
        }
        return $this->render('admin/form.html.twig', [
            'formUpdate' => $formUpdate->createView(),
            'update' => true,
        ]);
    }

    /**
     * @Route("/admin/delete/{id}", name="admin_delete")
     */
    public function deleteArticles(EntityManagerInterface $manager, Request $request, Articles $article): Response
    {
        $manager->remove($article);
        $manager->flush();
        $this->addFlash('success', 'Votre article a bien été supprimée');
        return $this->redirectToRoute("admin_list");

    }


}
