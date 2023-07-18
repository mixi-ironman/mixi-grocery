<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\CategoryService;
use App\Repositories\CategoryRepository;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     private $categoryService;
     private $categoryRessponsitory;


     public function __construct(CategoryService $categoriesService,CategoryRepository $categoryRessponsitory)
     {
        $this->categoryService = $categoriesService;
        $this->categoryRessponsitory = $categoryRessponsitory;
     }
    public function index()
    {
        $categories = $this->categoryService->getAllCategory();
        $pag = $this->categoryRessponsitory->getCategories();
        // dd($pag);
        // dd($categories);
        return view('admin.category.index',['categories' => $categories,'pag' =>$pag]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
