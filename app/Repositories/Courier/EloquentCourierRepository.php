<?php
namespace App\Repositories\Courier;

use App\Repositories\Courier\CourierContract;
use App\Courier;

class EloquentCourierRepository implements CourierContract {
    
    public function create($request) {
        $courier = new Courier();
        $this->courierProps($courier, $request);
        $courier->save();
        return $courier;
    }
    
    public function edit($id, $request) {
        $courier = $this->findById($id);
        $this->courierProps($courier, $request);
        $courier->save();
        return $courier;
    }
    
    public function findAll() {
        return Courier::all();
    }
    
    public function findById($id) {
        return Courier::find($id);
    }
    
    public function remove($id) {
        $courier = $this->findById($id);
        return $courier->delete();
    }
    
    private function courierProps($courier, $request) {
        $courier->name = $request->name;
        $courier->address = $request->address;
        
    }
}

