<?php
namespace App\Repositories\Category;

use App\Repositories\Category\CategoryContract;
use App\Category;

class EloquentCategoryRepository implements CategoryContract {
    
    public function create($request) {
        $category = new Category();
        $this->catergoryProps($category, $request);
        $category->save();
        return $category;
    }

    public function edit($id, $request) {
        $category = $this->findById($id);
        $category->name = $request->name;
        $category->code = $request->code;
        $category->description = $request->description;
        $category->save();
        return $category;
    }

    public function findAll() {
        $categories = Category::all();
        return $categories;
    }

    public function findById($id) {
        $category = Category::find($id);
        return $category;
    }

    public function remove($id) {
        $category = $this->findById($id);
        $category->delete();
        return $category;
    }

    private function catergoryProps($category, $request) {
        $category->name = $request->name;
        $category->code = $request->code;
        $category->description = $request->description;
    }
}
