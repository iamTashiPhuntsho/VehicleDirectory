<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class SignatureController extends Controller
{
    public function getSearch(){
    	$no = rand(10,30)%2;
    	return view('signature.search',compact('no'));
    }

    public function searchDirectory(Request $request){
    	$flag = false;
    	$no = rand(10,30)%2;
    	$loc = $office = '';
    	$request->validate([
    		'employee_id' => 'required|digits:10',
    	]);

    	$emp = Employee::where('employee_id',$request->employee_id)->first();
    	if(!blank($emp))
    	{
    		$flag = true;
    		if($emp->contact->location->category == 'headoffice'){
	    		$loc = 'Thimphu';
	    	}
	    	elseif ($emp->contact->location->category == 'branch') {
	    		$location = explode(" ",$emp->contact->location->name);
	    		$loc = $location[0];
	    	}
	    	else
	    	{
	    		$loc = 'Your Office Location Here';
	    	}
	    	$office = $emp->contact->location->name;
    	}
    	return view('signature.verify',compact('flag','emp','no','loc','office'));
    
    }

    public function generateCode(Request $request){
        $flag = false;
        $no = rand(10,30)%2;
        $emp = Employee::find($request->employee_id);
        $loc = $office = $telephone = $salutation = $po = $lam = null;
        if(!blank($emp))
        {
            $flag = true;
            $salutation = $request->salutation;
            $office = $request->office;
            $po = $request->po;
            $loc = $request->dzongkhag;
            $telephone = $request->telephone;
            $lam = $request->lam;
        }
        return view('signature.result',compact('flag','emp','no','loc','office','telephone','salutation','po','lam'));
    }
}
