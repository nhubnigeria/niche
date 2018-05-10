<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\SubCategory\SubCategoryContract;
use App\Repositories\Category\CategoryContract;

class SubCategoryController extends Controller
{
    protected $repo;
    protected $categoryRepo;
    
    public function __construct(SubCategoryContract $subCategoryContract, CategoryContract $categoryContract) {
        $this->repo = $subCategoryContract;
        $this->categoryRepo = $categoryContract;
    }
    
    public function index()
    {
        $categories = $this->categoryRepo->findAll();
        $subCategories = $this->repo->findAll();
        return view('subcategory.index')->with('categories', $categories)->with('subcategories', $subCategories);
    }
    
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'code' => 'required|unique:sub_categories',
            'category_id' => 'required'
        ]);
        
        try {
            $sub = $this->repo->create($request);
            if ($sub) {
                return redirect()->back()->with('success', 'Sub-category was added successfully!');
            } else {
                return back()->withInput()->with('error', "Sub-category couldn't be created. Try again");
            }
        } catch (\Exception $e) {
            return back()->withInput()->with('error', 'Errors encountered. Try again!');
        }
    }
    
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required'
        ]);
        
        try {
            $sub = $this->repo->edit($id, $request);
            if ($sub) {
                return redirect()->back()->with('success', 'Sub-category was updated successfully!');
            } else {
                return back()->withInput()->with('error', "Sub-category couldn't be updated. Try again");
            }
        } catch (\Exception $e) {
            return back()->withInput()->with('error', 'Errors encountered. Try again!');
        }
    }
    
    public function delete($id)
    {
        try {
            $sub = $this->repo->remove($id);
            if($sub) {
                return redirect()->route('couriers')->with('success', 'Successfully deleted Sub-category!');
            } else {
                return back()->withInput()->with('error', 'Sub-category could not be deleted, try again!');
            }
        } catch(\Exception $e) {
            return back()->with('error', 'Errors encountered, please try again!');
        }
    }
}
