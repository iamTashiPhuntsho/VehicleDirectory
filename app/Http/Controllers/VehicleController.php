<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Department;
use App\Models\Location;
use App\Models\Contact;
use Illuminate\Support\Facades\Crypt;

class VehicleController extends Controller
{
    public function vehicle(){
    	$employees = Employee::whereNot('vehicle_no', NULL)->with('contact')->where('status','active')->get();
    	// return $employees;
    	return view('frontend.vehicle',compact('employees'));
    }
    public function search(Request $request){
        // Get the search value from the request
        $search = $request->search;
        // return $search;
    
        // Search in the title and body columns from the posts table
        $employees = Employee::when($search, function($query,$search) {
                $query->Where('vehicle_no', 'like', "%$search%");
            })
            ->whereNot('vehicle_no', NULL)
            ->where('status','active')  
            ->get();
        // Return the search view with the resluts compacted
        return view('frontend.vehicle',compact('employees'));
    }
}
