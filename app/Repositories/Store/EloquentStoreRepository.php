<?php
namespace App\Repositories\Store;
use App\Repositories\Store\StoreContract;
use App\Store;
class EloquentStoreRepository implements StoreContract {
    
     public function create($request) {
        $store = new Store();
        $this->storeProps($store, $request);
        $store->save();
        return $store;
    }
    
    public function edit($id, $request) {
        $store = $this->findById($id);
        $this->storeProps($store, $request);
        $store->save();
        return $store;
    }
    
    public function findAll() {
        return Store::all();
    }
    
    public function findById($id) {
        return Store::find($id);
    }
    public function findByUser($id) {
        return Store::where('user_id', $id);
    }
    
    public function remove($id) {
        $store = $this->findById($id);
        return $store->delete();
    }
    
    private function storeProps($store, $request) {
        $store->name = $request->name;
        $store->address = $request->address;
        
    }
}
