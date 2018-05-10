<?php
namespace App\Repositories\Vendor;

interface VendorContract {
    public function create($request);
    public function edit ($id, $request);
    public function findAll();
    public function findByID($id);
    public function remove($id);
}
