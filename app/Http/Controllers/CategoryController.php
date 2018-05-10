<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Category\CategoryContract;

class CategoryController extends Controller
{
    protected $repo;
    
    public function __construct(CategoryContract $categoryContract) {
        $this->repo = $categoryContract;
    }
    
    public function index()
    {
        $categories = $this->repo->findAll();
        return view('category.index')->with('categories', $categories);
    }
    
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:categories',
            'code' => 'required|unique:categories',
            'description' => 'required'
        ]);
        
        try {
            $category = $this->repo->create($request);
            if ($category) {
                return redirect()->back()->with('success', 'Category was created successfully!');
            } else {
                return back()->withInput()->with('error', "Category couldn't be created. Try again");
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
            $category = $this->repo->edit($id, $request);
            if ($category) {
                return redirect()->back()->with('success', 'Category was updated successfully!');
            } else {
                return back()->withInput()->with('error', "Category couldn't be updated. Try again");
            }
        } catch (\Exception $e) {
            return back()->withInput()->with('error', 'Errors encountered. Try again!');
        }
    }
    
    public function delete($id)
    {
        try {
            $category = $this->repo->remove($id);
            if($category) {
                return redirect()->back()->with('success', 'Successfully deleted Category!');
            } else {
                return back()->withInput()->with('error', 'Category could not be deleted, try again!');
            }
        } catch(\Exception $e) {
            return back()->with('error', 'Errors encountered, please try again!');
        }
    }
}
