<?php
namespace App\Repositories\SubCategory;

interface SubCategoryContract {
    public function create($request);
    public function edit($id, $request);
    public function findAll();
    public function findById($id);
    public function findByCategoryId($id);
    public function remove($id);
}
