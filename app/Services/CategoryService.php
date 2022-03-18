<?php

namespace App\Services;

use App\Repositories\CategoryRepository;

class CategoryService
{
    /**
     * @var CategoryRepository
     */
    protected CategoryRepository $categoryRepository;

    /**
     * CategoryService constructor.
     * @param CategoryRepository $categoryRepository
     */
    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    /**
     * @return mixed
     */
    public function getAll()
    {
        return $this->categoryRepository->getAll();
    }

    /**
     * @param $request
     * @return \App\Models\Category
     */
    public function create($request)
    {
        return $this->categoryRepository->create($request);
    }

//
//    /**
//     * @param int $id
//     * @param $request
//     * @return mixed
//     */
//    public function update(int $id, $request)
//    {
//        return $this->adminRepository->update($id, $request) ;
//    }

    public function deleteById($id)
    {
        return $this->categoryRepository->deleteById($id);
    }
}
