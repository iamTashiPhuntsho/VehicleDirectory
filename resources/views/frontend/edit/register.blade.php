<x-frontend-layout>
   <x-sidebar />
   <div class="p-5">
      <h2 class="no-case mb-3">Contact Information Registration</h2>
      <div class="col-lg-12">
         <div class="card text-black" style="border-radius: 15px;">
            <div class="card-body p-md-5 mb-3">
               <div class="row justify-content-center">
                  <div class="pt-0">
                     <form action="{{ route('contact_addition_request_path') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-2 register-row">
                           <div class="col-sm-6">
                              <small class="text-bnb-blue"><b>Employee Name</b></small>
                              <input type="text" class="form-control form-control-user" placeholder="Employee Name" name="name" required autofocus>
                           </div>
                           <div class="col-sm-6">
                              <small class="text-bnb-blue"><b>Designation</b></small>
                              <input type="text" class="form-control form-control-user" placeholder="Designation" name="designation" required>
                           </div>
                        </div>
                        <div class="row mb-2 register-row">
                           <div class="col-sm-6">
                              <small class="text-bnb-blue"><b>Job Title</b></small>
                              <input type="text" class="form-control form-control-user" placeholder="Job Title" name="title" required>
                           </div>
                           <div class="col-sm-6">
                              <small class="text-bnb-blue"><b>Department</b></small>
                              <select class="form-control" name="department" required>
                                 <option selected="selected">Select Employee's Department</option>
                                 @foreach($department as $d)
                                 <option value="{{ $d->id }}">{{ $d->name }} Department</option>
                                 @endforeach
                              </select>
                           </div>
                        </div>
                        <div class="row  mb-2 register-row">
                           <div class="col-sm-6">
                              <small class="text-bnb-blue"><b>Extension Number</b></small>
                              <input type="text" class="form-control form-control-user" placeholder="Extension Number" name="extension">
                           </div>
                           <div class="col-sm-6">
                              <small class="text-bnb-blue"><b>Flexcube User ID</b></small>
                              <input type="text" class="form-control form-control-user" placeholder="Flexcube User ID" name="flexcube">
                           </div>
                        </div>
                        <div class="row mb-2 register-row">
                           <div class="col-sm-6">
                              <small class="text-bnb-blue"><b>Employee ID</b></small>
                              <input type="text" class="form-control form-control-user" placeholder="Employee ID" name="empid" required="required">
                           </div>
                           <div class="col-sm-6">
                              <small class="text-bnb-blue"><b>BNBL Email ID</b></small>
                              <input type="email" class="form-control form-control-user" placeholder="Email Address" name="email" required="required">
                           </div>
                        </div>
                        <div class="row mb-2 register-row">
                           <div class="col-sm-6">
                              <small class="text-bnb-blue"><b>Mobile Number</b></small>
                              <input type="text" class="form-control form-control-user" placeholder="Mobile Number" name="mobile" required>
                           </div>
                           <div class="col-sm-6">
                              <small class="text-bnb-blue"><b>Office Location</b></small>
                              <select class="form-control " name="location" required>
                                 <option selected="selected">Select Office Location</option>
                                 @foreach($location as $l)
                                 <option value="{{ $l->id }}"> {{$l->name}} </option>
                                 @endforeach
                              </select>
                           </div>
                        </div>
                        <div class="row mb-2 register-row">
                           <div class="col-sm-6">
                              <small class="text-bnb-blue"><b>Vehicle Number</b></small>
                              <input type="text" class="form-control form-control-user" placeholder="Enter Your Vehicle Number" name="vehicle_number">
                           </div>
                           <div class="col-sm-6">
                              <small class="text-bnb-blue"><b>Current Residential Location</b></small>
                              <input type="text" class="form-control form-control-user" placeholder="Enter Your Present Address" name="present_address" required="required">
                           </div>
                        </div>
                        <hr>
                        <div class="form-group"> 
                           <small class="text-bnb-blue"><b>Employee Image</b></small>
                           <br>
                           <input type="file" name="profile" onchange="showMyImage(this)" required="required">
                        </div>
                        <hr>
                        <div class="mb-2">
                           <div class="col-sm-3">
                              <button type="submit" class="form-control form-sz-lg btn btn-block blue-button" >Submit for Approval</button>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</x-frontend-layout>
