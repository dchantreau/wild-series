<?php
// src/Controller/CategoryController.php
namespace App\Controller;

use App\Entity\Program;
use App\Entity\Category;
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