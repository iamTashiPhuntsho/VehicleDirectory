<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Employee;
use App\Models\Department;
use App\Models\Location;
use App\Models\ContactRequest;
use Auth;

class BackendController extends Controller
{
    public function index(){
    	$user = Auth::user();
        $admins = User::all();
        $active_contacts = Employee::where('status','active')->count();
        $disabled_contacts = Employee::where('status','disabled')->count();
        $conts = Employee::orderBy('id','DESC')->limit(5)->get();
		$req = ContactRequest::count();
    	return view('backend.index',compact('user','admins','active_contacts','disabled_contacts','conts','req'));
    }

    public function directory(){
    	$user = Auth::user();
    	$employees = Employee::with('contact')->get();
    	return view('backend.directory',compact('user','employees'));
    }

    public function viewContact(Request $request){
    	$user = Auth::user();
    	$employee = Employee::with('contact')->find($request->id);
    	return view('backend.view',compact('user','employee'));
    }

    public function addContactForm(){
    	$user = Auth::user();
    	$departments = Department::all();
    	$locations = Location::all();
    	return view('backend.addcontact',compact('user','departments','locations'));
    }

    public function bulkUploadForm(){
    	$user = Auth::user();
    	return view('backend.bulkupload',compact('user'));
    }

    public function editContact(Request $request){
    	$user = Auth::user();
    	$departments = Department::all();
    	$locations = Location::all();
    	$employee = Employee::with('contact')->find($request->id);
    	return view('backend.edit',compact('user','employee','departments','locations'));
    }

	public function contactRequests(){
        $contacts = ContactRequest::orderBy('created_at','DESC')->get();
        $user = Auth::user();
        return view('backend.contactrequest',compact('user','contacts'));
    }

	public function report(){
        $user = Auth::user();
        return view('backend.report',compact('user'));
    }
}
