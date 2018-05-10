<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VendorController extends Controller
{
    {
    protected $repo;
    
    public function __construct(VendorContract $vendorContract) {
        $this->repo = $vendorContract;
    }
    
    public function index()
    {
        $vendor = $this->repo->findAll();
        return view('vendor.index')->with('vendor', $vendor);
    }
    
    public function create(){
        return view('vendor.create');
    }
    
    // public function store(Request $request)
    // {
    //     $this->validate($request, [
    //         'description' => 'required|unique:sdgs'
    //     ]);
        
    //     try {
    //         $sdg = $this->repo->create($request);
    //         if ($sdg) {
    //             return redirect()->route('sdgs')->with('success', 'SDG created successfully!');
    //         } else {
    //             return back()->withInput()->with('error', 'Could not create SDG' . $request->description); 
    //         }
    //     } catch (\Exception $e) {
    //         return back()->withInput()->with('error', 'Issues encountered, please try again!');
    //     }
    // }
    
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'description' => 'required'
        ]);
        
        try {
            $vendor = $this->repo->edit($id, $request);
            if ($vendor) {
                return redirect()->route('vendor')->with('success', 'SDG updated successfully!');
            } else {
                return back()->withInput()->with('error', 'Could not update SDG. Try again!'); 
            }
        } catch (\Exception $e) {
            return back()->withInput()->with('error', 'Issues encountered, please try again!');
        }
    }
    
    public function delete($id)
    {
        try {
            $vendor = $this->repo->remove($id);
            if($vendor) {
                return redirect()->route('vendor')->with('success', 'Successfully deleted SDG!');
            } else {
                return back()->with('error', 'SDG could not be deleted, try again!');
            }
        } catch(\Exception $e) {
            return back()->with('error', 'Issues encountered, please try again!');
        }
    }
}
}
