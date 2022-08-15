<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Department;
use App\Models\Location;
use App\Models\Contact;
use Illuminate\Support\Facades\Crypt;

class DirectoryController extends Controller
{
    public function getDirectorySearch(){
        $departments = Department::orderBy('name')->get();
        $locations = Location::orderBy('name')->get();
        // $employees = Employee::count();
        $employees = Employee::with('contact')->get();
        //$department = Department::count();
        //$location = Location::count();
    	return view('frontend.search',compact('departments','locations','employees'));
    }
    
    public function getResult(){
    	$no = rand(10,30)%2;
    	return view('frontend.result',compact('no'));
    }

    public function getShow(Request $request){
        $record = Employee::find(Crypt::decryptString($request->id));
    	$no = rand(10,30)%2;
        $param_name = Crypt::decryptString($request->ename);
        $param_department = Crypt::decryptString($request->department);
        $param_location =Crypt::decryptString($request->location);
        $employee = Employee::with('contact')->find($request->id);
    	return view('frontend.show',compact('no','record','param_location','param_name','param_department','employee'));
    }

    public function searchDirectory(Request $request){
        $records = "";

        $name = $request->employeename;
        $flexcube = $request->flexcube;
        $department = $request->department;
        $location = $request->location;
        $vehicle_no = $request->vehicle_no;

        $l_records = Contact::when($location, function ($query, $location) { 
            $query->where('location_id', $location);
        })
        ->pluck('employee_id');
        $records = Employee::when($name, function ($query, $name) {
            $query->where('name','like', "%$name%");
        })
        ->when($department, function ($query, $department) {
            $query->where('department_id', "$department");
        })
        ->when($vehicle_no, function ($query, $vehicle_no) {
            $query->where('vehicle_no', 'like',"%$vehicle_no%");
        })
        ->whereIn('id', $l_records)->get();
        
        $param_name = $request->employeename;
        $param_location = $request->location;
        $param_department = $request->department;
        return view('frontend.result',compact('records','param_name','param_department','param_location'));
    }
}