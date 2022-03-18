<?php

namespace App\Repositories;

use App\Models\Category;

class CategoryRepository
{
    /**
     * @var Category
     */
    protected Category $category;

    /**
     * CategoryRepository constructor.
     * @param Category $category
     */
    public function __construct(Category $category)
    {
        $this->category = $category;
    }

    /**
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getAll()
    {
        return $this->category::all();
    }

    /**
     * @param $request
     * @return Category
     */
    public static function create($request): Category {
        return Category::create([
            'name' => $request->name,
            'image' => $request->image,
        ]);
    }


//
//    /**
//     * @param int $id
//     * @param $request
//     * @return mixed
//     */
//    public function update(int $id, $request)
//    {
//        $admin = $this->admin::find($id);
//        if(!empty($admin)) {
//            $admin->username = $request->username;
//            $admin->email = $request->email;
//            $admin->password = $request->password;
//            $admin->update();
//            return $admin;
//        }
//    }
//
    /**
     * @param int $id
     * @return mixed
     */
    public function deleteById(int $id)
    {
        $category = $this->category->find($id);
        if (!empty($category)) {
            $category->delete();
        }
    }
}
