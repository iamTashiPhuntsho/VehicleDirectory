
<x-frontend-layout>
   <x-sidebar/>
   <div class="p-5">
   <h2 class="mb-4">Edit {{ $record->name }}'s Information</h2>
      <div class="cards-5">
         <div class="container show-container">
            <div class="row">
               <div class="col-md-12">
                  <div class="card card-profile">
                     <div class="card-avatar mb-4">
                        <a href="#"> <img class="img" src='{{asset ("storage/employee_images/$record->image")}}'> </a>
                     </div>
                     <form action="{{ route('update_employee_info_path', Crypt::encryptString($record->id)) }}" method="POST">
                     @csrf
                     <div class="table">
                      
                        <div col-sm-12>
                            <p><input type="text" name="employeename" value="{{ $record->name }}" class="form-control form-sz-sm" placeholder="Edit your employee Name">
                      </p>
                        </div>
                        <p class="category ">
                          Job Title:  &nbsp; <input type="text"  class="form_control form-sz-sm" name="title" value="{{$record->title}}"required="required"> 
                          &nbsp; |&nbsp; 
                           Designation:   &nbsp;<input type="text" class="form-sz-sm form_control" name="designation" value="{{$record->designation}}" class="lg-input" required="required">
                        </p>

                        <div class="row">
                           <div class="column mb-3 ">
                           <p>Job Title : <span> <input type="text"  class="form_control form-sz-sm" name="title" value="{{$record->title}}"required="required"></span></p>

                           </div>
                           <div class="column mb-3 ">
                           <p>Designation : <span> <input type="text" class="form-sz-sm form_control" name="designation" value="{{$record->designation}}" class="lg-input" required="required"></span></p>

                           </div>

                        </div>
                        <div class="row">
                           <div class="column mb-3 ">
                              
                              <p>Job Title: <span>
                                 <input type="text" name="title" value="{{$record->title}}" class="form-control form-sz-sm"></span></p>
                           </div>
                           <div class="column mb-3">
                              <p>Designation: <span> 
                              <input type="text" name="designation" value="{{$record->designation}}" class="form-control form-sz-sm" > </span></p>
                           </div>
                        </div>
<<<<<<< HEAD
=======

>>>>>>> 5e553001ca51338bd88f6c6fb8e645738342a7f7
                        <p style="text-align:center;"><i class="fa-solid fa-address-card fa-lg" style="margin-right: 5px;"></i>Employee ID : <span>{{ $record->employee_id }}</span></p>
                        <p style="text-align:center;"><i class="fa fa-envelope-o fa-lg" style="margin-right: 5px;"></i> Email ID : <span class="text-bnb-blue lowercase">{{ $record->contact->email }}</span></p>
                        <p class="text-bnb-blue"><i class="fas fa-info-circle"></i> In order to change email ID and Employee ID, Please contact at 1277 or 1265</p>
                        <br>
                        <p>
                           <i class="fa-solid fa-address-card fa-lg" style="margin-right: 5px;"></i>Department: 
                           <span>
                              <select class="form-control form-sz-sm" name="department">
                                 <option selected="selected" value="0" >Select your new Department</option>
                                 @foreach($department as $d)
                                 <option value="{{ $d->id }}" {{ $record->department_id == $d->id ? 'selected' : ''}}> {{ $d->name }} </option>
                                 @endforeach 
                              </select>
                           </span>
                        </p>
                        <div class="row">
                           <div class="column mb-3 ">
                              <h4>Office Information</h4>
                              <p><i class="fa-solid fa-phone fa-lg" style="margin-right: 5px;"></i>Extension : <span><input type="text" name="extension" value="{{ $record->contact->extension }}" class="form-control form-sz-sm"></span></p>
                              <p><i class="fa-solid fa-cube fa-lg" style="margin-right: 5px;"></i>Flexcube User ID : <span> <input type="text" name="flexcube" value="{{ $record->contact->flexcube }}"class="form-control form-sz-sm"></span></p>
                              <p>
                                 <i class="fa-solid fa-location-dot fa-lg" style="margin-right: 5px;"></i>Location : 
                                 <span>
                                    <select class="form-control form-sz-sm"name="location">
                                       <option value="">Select your office Location</option>
                                       @foreach($location as $l)
                                       <option value="{{ $l->id }}" {{ $record->contact->location_id == $l->id ? 'selected' : ''}}> {{ $l->name }} </option>
                                       @endforeach 
                                    </select>
                                 </span>
                              </p>
                           </div>
                           <div class="column mb-3">
                              <h4>Personal Information</h4>
                              <p><i class='fa fa-mobile-phone fa-lg' style="margin-right: 5px;" ></i>Mobile Number : <span><input type="text" name="mobile" value="{{ $record->contact->mobile }}" class="form-control form-sz-sm"></span></p>
                              <p><i class="fa-solid fa-car-side fa-lg" style="margin-right: 5px;"></i>Vehicle Number : <span> <input type="text" name="vehicle_number" value="{{ $record->vehicle_no }}"class="form-control form-sz-sm"></span></p>
                              <p><i class="fa-solid fa-map-pin fa-lg"style="margin-right: 5px;"></i>Present Address : <span> <input type="text" name="present_address" value="{{ $record->present_address }}" class="form-control form-sz-sm" > </span></p>
                           </div>
                           <div class="btn-group">
                            <button type=" submit" value="11" name="btn" class="btn btn-lg bg-bnb-blue text-white"><i class="fas fa-save"></i> Save Information and Exit</button>
                            <button type=" submit" value="00" name="btn" class="btn btn-lg bg-bnb-orange text-white"><i class="fas fa-sign-out-alt"></i> Exit Without Saving</button>
                          </div>
                        </div>
                     </div>
                     </form>
                  
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div>
         <small  class="mb-5">If your information is invalid, Please click <a href="">HERE</a> to edit your information or contact System Administrator at 1277 | 1265.</small>
      </div>
   </div>
</x-frontend-layout>
