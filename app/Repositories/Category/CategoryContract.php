<?php
namespace App\Repositories\Category;

interface CategoryContract {
    public function create($request);
    public function edit($id, $request);
    public function findAll();
    public function findById($id);
    public function remove($id);
}
