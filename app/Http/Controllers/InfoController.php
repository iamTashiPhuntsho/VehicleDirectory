<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Contact;
use App\Models\Department;
use App\Models\Vehicle;
use App\Models\Location;
use App\Mail\SendOTP;
use App\Mail\OTPSent;
use App\Models\ContactRequest;
use App\Models\Signin;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Crypt;
class InfoController extends Controller
{
    public function getEmployee(){
    	$no = rand(10,30)%2;
    	return view('frontend.edit.employeeid',compact('no'));
    }

    public function getOtp(Request $request){
    	$no = rand(10,30)%2;
        $eid = $request->eid;
    	return view('frontend.edit.enterotp',compact('no','eid'));
    }

    public function getEditForm(Request $request){
        $id = Employee::where('employee_id',Crypt::decryptString($request->eid))->pluck('id');
        $empsign = Signin::where('employee_id',$id)->first();
        $timenow =Carbon::now();
        $start = new Carbon($empsign->OTP_time);
        if($start->diff($timenow)->format('%H:%I:%S') > '00:10:00')
        {
            $empsign->update([
                'OTP' => null,
                'try_count' => null,
                'OTP_time' => null
            ]);
            $msg = "OTP Validity Time Expired. Please get new OTP";
            return redirect()->route('get_search_path')->with(['status'=>'0','msg'=>$msg]);
        }
        if($empsign->try_count >=3)
        {
            $empsign->update([
                'OTP' => null,
                'try_count' => null,
                'OTP_time' => null
            ]);
            $msg = "OTP became Invalid. Please get new OTP";
            return redirect()->route('get_search_path')->with(['status'=>'0','msg'=>$msg]);
        }
    	$no = rand(10,30)%2;
    	$record = Employee::where('employee_id',Crypt::decryptString($request->eid))->first();
    	$location = Location::orderBy('name')->get();
    	$department = Department::orderBy('name')->get();
    	return view('frontend.edit.edit',compact('no','record','department','location'));
    }

    public function sendOTP(Request $request){
    	$id = Employee::where('employee_id',$request->employeeid)->pluck('id');
        $eid = $request->employeeid;
    	if(count($id)<1)
    	{
    		$msg = "Check you employee ID. Employee ID is invalid";
    		return back()->with(['status'=>'0','msg'=>$msg]);
    	}
    	else{
    		$otp = rand(111111,999999);
    		$stat = Signin::where('employee_id',$id)->update([
    			'OTP' => $otp,
    			'try_count' => 0,
    			'OTP_time' => Carbon::now()
    		]);
            if($stat)
            {
                $email = Contact::where('employee_id',$id)->value('email');
                Mail::to($email)->send(new SendOTP($otp,$eid));
                $msg = "OTP has been sent to your Registered Email ID. Please Check your email for OTP";
                return redirect()->route('otp_path',Crypt::encryptString($request->employeeid))->with(['status'=>'1','msg'=>$msg]);
            }
            else{
                $msg = "OTP couldnot be generated. Please contact Directory Administrator.";
                return back()->with(['status'=>'0','msg'=>$msg]);
            }
    	}
    }

    public function verifyOTP(Request $request){
        $id = Employee::where('employee_id',Crypt::decryptString($request->eid))->pluck('id');
        $empsign = Signin::where('employee_id',$id)->first();
        $timenow =Carbon::now();
        $start = new Carbon($empsign->OTP_time);
        if($start->diff($timenow)->format('%H:%I:%S') > '00:10:00')
        {
            $empsign->update([
                'OTP' => null,
                'try_count' => null,
                'OTP_time' => null
            ]);
            $msg = "OTP Validity Time Expired. Please get new OTP";
            return redirect()->route('get_search_path')->with(['status'=>'0','msg'=>$msg]);
        }
        if($empsign->try_count >=3)
        {
            $empsign->update([
                'OTP' => null,
                'try_count' => null,
                'OTP_time' => null
            ]);
            $msg = "OTP became Invalid. Please get new OTP";
            return redirect()->route('get_search_path')->with(['status'=>'0','msg'=>$msg]);
        }
        if($empsign->OTP === $request->otp)
        {
            
            return redirect()->route('edit_info_path',$request->eid);
        }
        else
        {

            $empsign->update([
                'try_count' => $empsign->try_count+1,
            ]);
            $msg = "Entered OTP is incorrect. Please try again";
            return back()->with(['status'=>'0','msg'=>$msg]);
        }
    }

    public function updateInfo(Request $request){
        // return $request->all();
        if($request->btn == '11')
        {
            $status = '1';
            $name = $request->name;
            $designation = $request->designation;
            $title = $request->title;
            if($request->new_dept == '0' || $request->new_dept == $request->odepartment)
                $department = $request->odepartment;
            else
                $department = $request->new_dept;

            $extension = $request->extension;
            $flexcube = $request->flexcube;
            $mobile = $request->mobile;
            if($request->new_location == '0' || $request->new_location == $request->olocation)
                $location = $request->olocation;
            else
                $location = $request->new_location;
            Employee::where('id',$request->id)->update([
                'name' => $request->name,
                'designation' => $designation,
                'title' => $title,
                'department_id' => $department
            ]);
            Contact::where('employee_id',$request->id)->update([
                'mobile' => $mobile,
                'extension' => $extension,
                'flexcube' => $flexcube,
                'location_id' => $location
            ]);

            Signin::where('employee_id',$request->id)->update([
                'OTP' => null,
                'try_count' => null,
                'OTP_time' => null
            ]);
            $msg = "Contact Information of $request->name has been updated.";
            return redirect()->route('get_search_path')->with(['status'=>$status,'msg'=>$msg]);
        }   
        else
        {
            Signin::where('employee_id',$request->id)->update([
                'OTP' => null,
                'try_count' => null,
                'OTP_time' => null
            ]);
            $status = '0';
            $msg = "Contact Information of $request->name has not been modified. Changes were discarded.";
            return redirect()->route('get_search_path')->with(['status'=>$status,'msg'=>$msg]);
        }
    }

    /**
    * function renders the registration page
    * @return view
    */ 
    public function getRegistration(){
        $no = rand(10,30)%2;
        $record = Employee::find(6);
        $location = Location::orderBy('name')->get();
        $department = Department::orderBy('name')->get();
        return view('frontend.edit.register',compact('no','location','department','record'));
    }

    /**
    * function to send contact addition request
    * @param $request
    * @return redirect
    */ 
    public function sendAdditionRequest(Request $request){
        // $request->validate([
        //     ''
        // ]);
        $image = time()."-".request()->file('profile')->getClientOriginalName();
        $newcontact = new ContactRequest;
        $newcontact->name = $request->name;
        $newcontact->designation = $request->designation;
        $newcontact->title = $request->title;
        $newcontact->department_id = $request->department;
        $newcontact->employee_id = $request->empid;
        $newcontact->image = $image;
        $newcontact->email = $request->email;
        $newcontact->mobile = $request->mobile;
        $newcontact->extension = $request->extension;
        $newcontact->flexcube = $request->flexcube;
        $newcontact->location_id = $request->location;
        $newcontact->vehicle_no = $request->vehicle_number;
        $newcontact->present_address = $request->present_address;
        
        if($newcontact->save())
        {
            request()->file('profile')->storeAs('public/employee_images',$image);
            $msg = "Contact Details has been submitted for Approval.";
            $status = '1';
        }
        else
        {
            $msg = "Contact Details could not be submitted for Approval. Please check your information.";
        }
        return redirect()->route('get_search_path')->with(['status'=>$status,'msg'=>$msg]);
    }
}
