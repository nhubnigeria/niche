<?php
namespace App\Repositories\User;

use App\Repositories\User\UserContract;
use App\User;

class EloquentUserRepository implements UserContract {
    
    
    public function create($request) {
        
    }
    
    public function edit($id, $request) {
        
    }
    
    public function findAll() {
        $users = User::all();
        return $users;
    }
    
    public function findById($id) {
        $user = User::find($id);
        return $user;
    }
    
    public function remove($id) {
        $user = $this->findById($id)->delete();
        return $user;
    }
}
