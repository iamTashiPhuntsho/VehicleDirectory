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
    	$no = rand(10,30)%2;
        // $employees = Employee::count();
        $employees = Employee::with('contact')->get();
        //$department = Department::count();
        //$location = Location::count();
    	return view('frontend.search',compact('no','departments','locations','employees'));
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
        $stat = "employee";

        if($request->department=='0' && $request->location == '0' && $request->employeename == null && $request->flexcube == null)
        {
            $records = Employee::orderBy('name')->with('contact')->get();
        }
        elseif($request->department=='0' && $request->location == '0' && $request->employeename != null && $request->flexcube == null)
        {
            $records = Employee::orderBy('name')->with('contact')->where('name','like',"%$request->employeename%")->get();   
        }
        elseif($request->department=='0' && $request->location != '0' && $request->employeename == null && $request->flexcube == null)
        {
            $empids = Contact::where('location_id',$request->location)->pluck('employee_id'); 
            $records = Employee::orderBy('name')->whereIn('id',$empids)->get();
        }
        elseif($request->department!='0' && $request->location == '0' && $request->employeename == null && $request->flexcube == null)
        {
            $records = Employee::orderBy('name')->with('contact')->where('department_id',$request->department)->get(); 
        }
        elseif($request->department=='0' && $request->location == '0' && $request->employeename == null && $request->flexcube != null)
        {
            $empids = Contact::where('flexcube','like',"%$request->flexcube%")->pluck('employee_id'); 
            $records = Employee::orderBy('name')->whereIn('id',$empids)->get();
        }
        elseif($request->department!='0' && $request->location != '0' && $request->employeename == null && $request->flexcube == null)
        {
            $firstrecord = Contact::where('location_id',$request->location)->pluck('employee_id');
            $records = Employee::orderBy('name')->where('department_id',$request->department)->whereIn('id',$firstrecord)->get();
        }
        elseif($request->department=='0' && $request->location != null && $request->employeename != null && $request->flexcube == null)
        {
            $firstrecord = Contact::where('location_id',$request->location)->pluck('employee_id');
            $records = Employee::orderBy('name')->with('contact')->where('name','like',"%$request->employeename%")->whereIn('id',$firstrecord)->get();
        }
        elseif($request->department!='0' && $request->location == '0' && $request->employeename != null && $request->flexcube == null)
        {
            $records = Employee::orderBy('name')->with('contact')->where('name','like',"%$request->employeename%")->where('department_id',$request->department)->get();      
        }
        elseif($request->department=='0' && $request->location != '0' && $request->employeename == null && $request->flexcube != null)
        {
            $firstrecord = Contact::where('location_id',$request->location)->where('flexcube','like',"%$request->flexcube%")->pluck('employee_id');
            $records = Employee::orderBy('name')->with('contact')->whereIn('id',$firstrecord)->get();
        }
        elseif($request->department!='0' && $request->location == '0' && $request->employeename == null && $request->flexcube != null)
        {
            $firstrecord = Contact::where('flexcube','like',"%$request->flexcube%")->pluck('employee_id');
            $records = Employee::orderBy('name')->with('contact')->where('department_id',$request->department)->whereIn('id',$firstrecord)->get();
        }
        elseif($request->department!='0' && $request->location != '0' && $request->employeename == null && $request->flexcube != null)
        {
            $firstrecord = Contact::where('flexcube','like',"%$request->flexcube%")->where('location_id',$request->location)->pluck('employee_id');
            $records = Employee::orderBy('name')->with('contact')->where('department_id',$request->department)->whereIn('id',$firstrecord)->get();
        }
        elseif($request->department!='0' && $request->location != '0' && $request->employeename != null && $request->flexcube == null)
        {
            $firstrecord = Contact::where('location_id',$request->location)->pluck('employee_id');
            $records = Employee::orderBy('name')->with('contact')->where('department_id',$request->department)->where('name','like',"%$request->employeename%")->whereIn('id',$firstrecord)->get();
        }
        elseif($request->department=='0' && $request->location == '0' && $request->employeename != null && $request->flexcube != null)
        {
            $firstrecord = Contact::where('flexcube','like',"%$request->flexcube%")->pluck('employee_id');
            $records = Employee::orderBy('name')->with('contact')->where('name','like',"%$request->employeename%")->whereIn('id',$firstrecord)->get();
        }
        elseif($request->department=='0' && $request->location != '0' && $request->employeename != null && $request->flexcube != null)
        {
            $firstrecord = Contact::where('flexcube','like',"%$request->flexcube%")->where('location_id',$request->location)->pluck('employee_id');
            $records = Employee::orderBy('name')->with('contact')->where('name','like',"%$request->employeename%")->whereIn('id',$firstrecord)->get();
        }
        elseif($request->department!='0' && $request->location == '0' && $request->employeename != null && $request->flexcube != null)
        {
            $firstrecord = Contact::where('flexcube','like',"%$request->flexcube%")->pluck('employee_id');
            $records = Employee::orderBy('name')->with('contact')->where('name','like',"%$request->employeename%")->where('department_id',$request->department)->whereIn('id',$firstrecord)->get();
        }
        else
        {
            $firstrecord = Contact::where('location_id',$request->location)->where('flexcube','like',"%$request->flexcube%")->pluck('employee_id');
            $records = Employee::orderBy('name')->with('contact')->where('name','like',"%$request->employeename%")->where('department_id',$request->department)->whereIn('id',$firstrecord)->get();
        }
        
        $no = rand(10,30)%2;
        $param_name = $request->employeename;
        $param_location = $request->location;
        $param_department = $request->department;
        return view('frontend.result',compact('no','stat','records','param_name','param_department','param_location'));
    }
}

