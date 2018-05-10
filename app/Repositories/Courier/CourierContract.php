<?php
namespace App\Repositories\Courier;

interface CourierContract {
    public function create($request);
    public function edit($id, $request);
    public function findAll();
    public function findById($id);
    public function remove($id);
}
