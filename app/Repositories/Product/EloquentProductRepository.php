<?php
namespace App\Repositories\Product;

use App\Repositories\Product\ProductContract;
use App\Product;
use Sentinel;

class EloquentProductRepository implements ProductContract {
    
    public function create($request) {
        $product = new Product();
        $this->productProps($product, $request);
        $product->save();
        return $product;
    }
    
    public function edit($id, $request) {
        
    }
    
    public function findById($id) {
        return Product::find($id);
    }
    
    public function findByStoreId($id) {
        return Product::where('store_id' , $id)->get();
    }
    
    public function findAll() {
        return Product::all();
    }
    
    public function stock($id, $request) {
       $roduct = $this->findById($id);
       $product->quantity = $product->quantity += $request->quantity;
       $product->save();
       return $product;
    }
    
    private function productProps($product, $request) {
        $user = Sentinel::getUser()->id;
        $store = $this->storeRepo->findByUser($user);
        
        $productDestination = 'uploads/products';
        $productExtension = $request->file('image')->getClientOriginalExtension();
        $imageName = rand(1111111, 9999999).'.'.$productDestination;
        $request->file('image')->move($productDestination, $imageName);
        $photo_url = '/'.$productDestination.'/'.$imageName;
        
        $product->name = $request->name;
        $product->code = $request->code;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->decsription = $request->description;
        $product->category_id = $request->category;
        $product->subcategory_id = $request->subcategory;
        $product->store_id = $store->id;
        $product->photo_path = $photo_url;
    }
}
