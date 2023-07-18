<?php
namespace App\Services;
use App\Repositories\CategoryRepository;

class CategoryService
{
    private $categoryRepository;

    public function __construct(CategoryRepository $categoriesRepository)
    {
        $this->categoryRepository = $categoriesRepository;
    }

    public function getAllCategory()
    {
        return $this->categoryRepository->getCategories();
    }
}
?>