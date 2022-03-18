<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Services\CategoryService;
use Illuminate\Http\Request;
use App\Http\Requests\CatgoryRequest;


class CategoryController extends Controller
{
    /**
     * @var CategoryService
     */
    protected CategoryService $categoryService;

    /**
     * CategoryController constructor.
     * @param CategoryService $categoryService
     */
    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }

    public function index()
    {
        $data['categories'] = $this->categoryService->getAll();
        $data['activeColorCategory'] = 'active bg-gradient-primary';

        return view('admin/category/category', $data);
    }


    public function create()
    {
        $data['activeColorCategory'] = 'active bg-gradient-primary';

        return view('admin/category/createCategory', $data);
    }

    public function store(CatgoryRequest $request)
    {
        $category = new Category();
        $category->name = $request->name;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extention = $file->getClientOriginalName();
            $file->move('uploads/categories_photo/',$extention);
            $category->image = $extention;
        }
        $category->save();

        return redirect()->action([CategoryController::class, 'index']);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
//        echo $id;exit;
//        $this->categoryService->deleteById($id);
//
//        return redirect()->action([CategoryController::class, 'index']);
    }
}
