<?php
namespace App\Repositories\SubCategory;

use App\Repositories\SubCategory\SubCategoryContract;
use App\SubCategory;

class EloquentSubCategoryRepository implements SubCategoryContract {
    
    public function create($request) {
        $sub = new SubCategory();
        $this->subCatergoryProps($sub, $request);
        $sub->save();
        return $sub;
    }

    public function edit($id, $request) {
        $sub = $this->findById($id);
        $sub->name = $request->name;
        $sub->code = $request->code;
        $sub->category_id = $request->category_id;
        $sub->description = $request->description;
        $sub->save();
        return $sub;
    }

    public function findAll() {
        $subs = SubCategory::all();
        return $subs;
    }

    public function findById($id) {
        $sub = SubCategory::find($id);
        return $sub;
    }
    
    public function findByCategoryId($id) {
        return SubCategory::where('category_id', $id)->get();
    }

    public function remove($id) {
        $sub = $this->findById($id);
        $sub->delete();
        return $sub;
    }

    private function subCatergoryProps($sub, $request) {
        $sub->name = $request->name;
        $sub->code = $request->code;
        $sub->category_id = $request->category_id;
        $sub->description = $request->description;
    }
}
