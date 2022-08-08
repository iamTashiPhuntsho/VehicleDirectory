<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Employee;
use App\Models\Contact;
use App\Models\Signin;
use App\Models\ContactRequest;
use Storage;

class ContactController extends Controller
{
    public function addContact(Request $request)
    {
    	$status = '0';
    	$name = $request->name;
    	$designation = $request->designation;
    	$title = $request->title;
    	$department = $request->department;
    	$extension = $request->extension;
    	$flexcube = $request->flexcube;
    	$email = $request->email;
    	$mobile = $request->mobile;
    	$location = $request->location;
        $employee_id = $request->empid;
        $vehicle_number = $request->vehicle_number;
        $present_address = $request ->present_address;
    	$image = request()->file('image')->getClientOriginalName();
    	// Storage::delete('public/employee_pdf/'.$request->olddoc);
        request()->file('image')->storeAs('public/employee_images',$image);
    	$employee = new Employee;
    	$contact = new Contact;
        $signin = new Signin;
    	$employee->name = $request->name;
    	$employee->designation = $designation;
    	$employee->title = $title;
    	$employee->department_id = $department;
        $employee->employee_id =$employee_id;
    	$employee->image = $image;
        $employee->vehicle_no = $vehicle_number;
        $employee->present_address = $present_address;
    	if($employee->save())
    	{
    		$contact->email = $email;
    		$contact->mobile = $mobile;
    		$contact->extension = $extension;
    		$contact->flexcube = $flexcube;
    		$contact->location_id = $location;
    		$contact->employee_id = $employee->id;
    		if($contact->save())
    		{
                $signin->employee_id = $employee->id;
                $signin->save();
    			$status = '1';
    			$msg = 'Employee Information has been added to Contact.';
    		}
    		else
    			$msg = 'Contact Information couldnot be saved.';
    	}
    	else
    		$msg = 'Employee Information couldnot be saved.';

    	return back()->with(['status'=>$status,'msg'=>$msg]);
    }

	public function updateContact(Request $request){
    	$status = '1';
        $employee = Employee::find($request->id);
        $contact = $employee->contact;

        if(!blank($employee))
        {
            $name = $request->name;
            $employee_id = $request->empid;
            $designation = $request->designation;
            $title = $request->title;
            if (!blank($request->profile)){
                $profile = time()."-".request()->file('profile')->getClientOriginalName();
                request()->file('profile')->storeAs('public/employee_images',$profile);
                if(Storage::exists("public/employee_images/$employee->image"))
                {
                    Storage::delete("public/employee_images/$employee->image");
                }
            }
            else{
                $profile = $employee->image;
            }
            
            if($request->department == '0' || $request->department == $request->odepartment)
             $department = $request->odepartment;
            else
             $department = $request->department;

            $extension = $request->extension;
            $flexcube = $request->flexcube;
            $email = $request->email;
            $mobile = $request->mobile;
            if($request->location == '0' || $request->location == $request->olocation)
             $location = $request->olocation;
            else
             $location = $request->location;

            
            $employee->name = $request->name;
            $employee->employee_id= $employee_id;
            $employee->designation = $designation;
            $employee->title = $title;
            $employee->department_id = $department;
            $employee->image = $profile;
            $employee->vehicle_no = $request->vehicle_number;
            $employee->present_address = $request->present_address;
			$employee->status = $request->status;
            $employee->save();
            
            $contact->email = $email;
            $contact->mobile = $mobile;
            $contact->extension = $extension;
            $contact->flexcube = $flexcube;
            $contact->location_id = $location;
            $contact->save();

            $msg = "Contact Information of $request->name has been updated.";
            return redirect()->route('view-contact',$request->id)->with(['status'=>$status,'msg'=>$msg]);
        }
        else
        {
                $status ='0';
                $msg = "Employee not found in the Directory.";
                return redirect()->route('directory')->with(['status'=>$status,'msg'=>$msg]);
        }
    }

    public function processContact(Request $request){
        $status = '0';
        if($request->action == 'approve')
        {
            $cr = ContactRequest::find($request->id);
            $name = $cr->name;
            $designation = $cr->designation;
            $title = $cr->title;
            $department = $cr->department->id;
            $extension = $cr->extension;
            $flexcube = $cr->flexcube;
            $email = $cr->email;
            $mobile = $cr->mobile;
            $location = $cr->location->id;
            $employee_id = $cr->employee_id;
            $image = $cr->image;
            $vehicle_number = $cr->vehicle_number;
            $present_address = $cr->present_address;
            
            $employee = new Employee;
            $contact = new Contact;
            $signin = new Signin;
            $employee->name = $name;
            $employee->designation = $designation;
            $employee->title = $title;
            $employee->department_id = $department;
            $employee->employee_id =$employee_id;
            $employee->image = $image;
            $employee->vehicle_no = $vehicle_number;
            $employee->present_address = $present_address;
            if($employee->save())
            {
                $contact->email = $email;
                $contact->mobile = $mobile;
                $contact->extension = $extension;
                $contact->flexcube = $flexcube;
                $contact->location_id = $location;
                $contact->employee_id = $employee->id;
                if($contact->save())
                {
                    $signin->employee_id = $employee->id;
                    $signin->save();
                    $status = '1';
                    $msg = 'Employee Information has been added to Contact.';
                    $cr->delete();
                }
                else
                    $msg = 'Contact Information couldnot be saved.';
            }
            else
                $msg = 'Employee Information couldnot be saved.';
        }
        else
        {
            $remove = ContactRequest::find($request->id);
            $remove->delete();
            $msg = "Contact Request has been rejected.";
            
        }
        return redirect()->route('view-contact-request')->with(['status'=>$status,'msg'=>$msg]);
    }

    public function deleteContact(Request $request)
    {
        $status = '1';
        $employee = Employee::find($request->id);
        if(blank($employee))
        {
            $status = '0';
            $msg = "No Employee found matching the provided ID.";
        }
        else
        {
            if($employee->delete())
            {
                Storage::delete("public/employee_images/$employee->image");
                $msg = "Employee has been Deleted from the Contact."; 
            }
            else
            {
                $status = '0';
                $msg = "Employee Couldnot be deleted. Please Try Again.";
            }
        }
        return redirect()->route('directory')->with(['status'=>$status, 'msg'=>$msg]);
    }
}
