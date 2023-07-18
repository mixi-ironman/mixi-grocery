<?php
namespace App\Repositories;
use App\Models\Category;

class CategoryRepository extends BaseRepository
{
    private $model;
    
    public function __construct(Category $model)
    {
        $this->model = $model;
        parent::__construct($model); 
    }

    public function getCategories()
    {
        // $category =  $this->getById(1);
        // dd($category);
        // dd($this->model->paginate(10));
        return $this->model->paginate(5);
    }
}

?>