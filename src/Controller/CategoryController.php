<?php
// src/Controller/CategoryController.php
namespace App\Controller;

use App\Entity\Program;
use App\Entity\Category;
use App\Form\CategoryType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class CategoryController extends AbstractController
{
    /**
     * Show all rows from Category's entity
     *
     * @Route("/category/", name = "category_index")
     * @return Response A response instance
     */
    public function index(): Response
    {
        $category = $this->getDoctrine()
        ->getRepository(Category::class)
        ->findAll();

        return $this->render(
            'category/index.html.twig',
            ['categories' => $category]
        );
    }

    /**
     * The controller for the category add form
     *
     * @Route("/new_category/", name="new_category")
     */
    public function new(Request $request) : Response
        {
                // Create a new Category Object
                $category = new Category();
                // Create the associated Form
                $form = $this->createForm(CategoryType::class, $category);
                // Get data from HTTP request
                $form->handleRequest($request);
                // Was the form submitted ?

                if ($form->isSubmitted()) {
                // Deal with the submitted data
                // Get the Entity Manager
                $entityManager = $this->getDoctrine()->getManager();
                // Persist Category Object
                $entityManager->persist($category);
                // Flush the persisted object
                $entityManager->flush();


                // Finally redirect to categories list
                return $this->redirectToRoute('category_index');
                }
            // Render the form
            return $this->render('category/new.html.twig', [
                "form" => $form->createView(),
            ]);
        }

        /**
     * Getting a category by id
     *
     * @Route("/category/{categoryName}/", name="category_show")
     * @return Response
     */

    public function show(string $categoryName):Response
    {
        $category = $this->getDoctrine()
            ->getRepository(Category::class)
            ->findOneBy(['name' => $categoryName]);

            $programs = $this->getDoctrine()
            ->getRepository(Program::class)
            ->findBy(['category' => $category->getId()], null, 3);

        if (!$categoryName) {
                throw $this->createNotFoundException(
                    'The product does not exist'
            );
        }
        return $this->render('category/show.html.twig', [
            'category' => $category,
            'programs' => $programs,
        ]);
    }
}