<?php
namespace App\Repositories\User;

interface UserContract {
    public function create($request);
    public function edit ($id, $request);
    public function findAll();
    public function findById($id);
    public function remove($id);
}
