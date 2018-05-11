<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Courier\CourierContract;

class CourierController extends Controller
{
    protected $repo;
    
    public function __construct(CourierContract $courierContract) {
        $this->repo = $courierContract;
    }
    
    public function index()
    {
        $couriers = $this->repo->findAll();
        return view('courier.index')->with('couriers', $couriers);
    }
    
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required'
        ]);
        
        try {
            $courier = $this->repo->create($request);
            if ($courier) {
                return redirect()->back()->with('success', 'Courier was added successfully!');
            } else {
                return back()->withInput()->with('error', "Courier couldn't be created. Try again");
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
            $courier = $this->repo->edit($id, $request);
            if ($courier) {
                return redirect()->back()->with('success', 'Courier was updated successfully!');
            } else {
                return back()->withInput()->with('error', "Courier couldn't be updated. Try again");
            }
        } catch (\Exception $e) {
            return back()->withInput()->with('error', 'Errors encountered. Try again!');
        }
    }
    
    public function delete($id)
    {
        try {
            $courier = $this->repo->remove($id);
            if($courier) {
                return redirect()->route('couriers')->with('success', 'Successfully deleted Courier!');
            } else {
                return back()->withInput()->with('error', 'Courier could not be deleted, try again!');
            }
        } catch(\Exception $e) {
            return back()->with('error', 'Errors encountered, please try again!');
        }
    }
}
