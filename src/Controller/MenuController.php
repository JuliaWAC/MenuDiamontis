<?php

namespace App\Controller;

use App\Repository\MenuRepository;
use App\Entity\Menu;
use App\Form\MenuType;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MenuController extends AbstractController
{
    #[Route('/menu', name: 'menu.index', methods: ['GET'])]
    public function index(
        MenuRepository $repository, 
        PaginatorInterface $paginator, 
        Request $request
        ): Response
    {
        $menus = $paginator->paginate(
            $repository->findAll(),
            $request->query->getInt('page', 1),
            10 
        );

        return $this->render('pages/menu/index.html.twig', [
            'menus' => $menus,
        ]);
    }

    #[Route('/menu/creation', name: 'menu.new', methods: ['GET', 'POST'])]
    public function new(
        Request $request,
        EntityManagerInterface $manager,
        ) : Response
    {
        $menu = new Menu();
        $form = $this->createForm(MenuType::class, $menu);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $menu = $form->getData();

            $manager->persist($menu);
            $manager->flush();

            $this->addFlash(
                'success', 
                'La recette a bien été crée !'
            );

            return $this->redirectToRoute('menu.index');
        }

        return $this->render('pages/menu/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/menu/edition/{id}','menu.edit', methods: ['GET', 'POST'])]
    public function edit(
        Menu $menu, 
        Request $request, 
        EntityManagerInterface $manager
        ) :Response 
    {
        $form = $this->createForm(MenuType::class, $menu);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $menu = $form->getData();

            $manager->persist($menu);
            $manager->flush();

            $this->addFlash(
                'success',
                "La recette {$menu->getName()} a bien été modifié !"
            );

            return $this->redirectToRoute('menu.index');
        }

        return $this->render('pages/menu/edit.html.twig', [
            'form' => $form->createView()
        ]);            
    }

    #[Route('/menu/suppression/{id}', 'menu.delete', methods: ['GET'])]
    public function delete(
        EntityManagerInterface $manager, 
        Menu $menu
        ) : Response
    {
        $manager->remove($menu);
        $manager->flush();

        $this->addFlash(
            'success',
            "La recette {$menu->getName()} a bien été supprimé !"
        );

        return $this->redirectToRoute('menu.index');
    }
}
