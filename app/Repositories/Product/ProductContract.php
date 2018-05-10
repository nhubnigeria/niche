<?php
namespace App\Repositories\Product;

interface ProductContract {
    
    public function create($request);
    public function edit($id, $request);
    public function findById($id);
    public function findByStoreId($id);
    public function findAll();
    public function stock($id, $request);
}
