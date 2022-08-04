<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Employee;
use Auth;

class BackendController extends Controller
{
    public function index(){
    	$user = Auth::user();
        $admins = User::all();
        $contacts = Employee::count();
        $conts = Employee::orderBy('id','DESC')->limit(5)->get();
    	return view('backend.index',compact('user','admins','contacts','conts'));
    }
}
