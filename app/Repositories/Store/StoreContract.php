<?php
namespace App\Repositories\Store;
interface StoreContract {
    
    public function create($request);
    public function edit($id, $request);
    public function findAll();
    public function findById($id);
    public function findByUser($id);
    public function remove($id);
    
}
