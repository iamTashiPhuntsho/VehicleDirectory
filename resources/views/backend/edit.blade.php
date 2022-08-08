<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="px-16 py-10 bg-white border-b border-gray-200">
                    <div class="flex items-end gap-5">
                        <div class="h-32 w-32 overflow-hidden bg-red-300 rounded-full">
                            <img src='{{ asset("storage/employee_images/$employee->image") }}' alt="Employee Profile" id="prev" class="h-full w-full object-cover object-center" />
                        </div>
                        <div>
                            <h3 class="title text-2xl">Edit Inforamtion of {{ $employee->name }}</h3>
                            <p class="text-sm text-gray-500">Edit information of {{ $employee->name }} using the form below.</p>
                        </div>
                    </div>
                    <form class="user" action="{{ route('update-contact') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="grid grid-cols-3 gap-4 mt-3">
                            <div>
                                <label for="name" class="text-xs font-semibold text-blue-800">Employee Name</label>
                                <input type="text" class="w-full" placeholder="Employee Name" name="name" id="name" required autofocus value="{{ $employee->name }}">
                                <input type="hidden" name="id" value="{{ $employee->id }}">
                            </div> 
                            <div>
                                <label for="designation" class="text-xs font-semibold text-blue-800">Designation</label>
                                <input type="text" class="w-full" placeholder="Designation" name="designation" id="designation" required value="{{ $employee->designation }}">
                            </div>  
                            <div>
                                <label for="title" class="text-xs font-semibold text-blue-800">Job Title</label>
                                <input type="text" class="w-full" placeholder="Job Title" name="title" id="title" required value="{{ $employee->title }}">
                            </div>  
                            <div>
                                <label for="department" class="text-xs font-semibold text-blue-800">Department</label>
                                <select class="w-full" name="department" id="department" required>
                                    <option selected="selected" value="">Select Employee's Department</option>
                                    @foreach($departments as $d)
                                        <option value="{{ $d->id }}" {{ $employee->department->id == $d->id ? 'selected' : '' }}>{{ $d->name }} Department</option>
                                    @endforeach
                                </select>
                            </div>     
                            <div>
                                <label for="extension" class="text-xs font-semibold text-blue-800">Extension Number</label>
                                <input type="text" class="w-full" placeholder="Extension Number" name="extension" id="extension" value="{{ $employee->contact->extension }}">
                            </div> 
                            <div>
                                <label for="flexcube" class="text-xs font-semibold text-blue-800">Flexcube Username</label>
                                <input type="text" class="w-full" placeholder="Flexcube User ID" name="flexcube" id="flexcube" value="{{ $employee->contact->flexcube }}">
                            </div> 
                            <div>
                                <label for="empid" class="text-xs font-semibold text-blue-800">Employee ID</label>
                                <input type="text" class="w-full" placeholder="Employee ID" name="empid" id="empid" value="{{ $employee->employee_id }}">
                            </div> 
                            <div>
                                <label for="email" class="text-xs font-semibold text-blue-800">Email Address</label>
                                <input type="email" class="w-full" placeholder="Email Address" name="email" id="email" value="{{ $employee->contact->email }}">
                            </div> 
                            <div>
                                <label for="mobile" class="text-xs font-semibold text-blue-800">Mobile Number</label>
                                <input type="text" class="w-full" placeholder="Mobile Number" name="mobile" id="mobile" required value="{{ $employee->contact->mobile }}">
                            </div> 
                            <div>
                                <label for="location" class="text-xs font-semibold text-blue-800">Office Location</label>
                                <select class="w-full " name="location" required id="location">
                                    <option value="">Select Office Location</option>
                                    @foreach($locations as $l)
                                      <option {{ $employee->contact->location->id === $l->id ? 'selected' : '' }} value="{{ $l->id }}"> {{$l->name}} </option>
                                    @endforeach
                                  </select>
                            </div>
                            <div>
                                <label for="vehicle_number" class="text-xs font-semibold text-blue-800">Vehicle Number</label>
                                <input type="text" class="w-full" placeholder="Vehicle Number" name="vehicle_number" id="vehicle_number" value="{{ $employee->vehicle_no }}">
                            </div>
                            <div>
                                <label for="present_address" class="text-xs font-semibold text-blue-800">Present Address</label>
                                <input type="text" class="w-full rounded-sm" placeholder="Present Address" name="present_address" id="present_address" required="required" value="{{ $employee->present_address }}">
                            </div>
                            <div>
                                <label for="status" class="text-xs font-semibold text-blue-800">Status</label>
                                <select class="w-full " name="status" required id="status">
                                    <option {{ $employee->status == 'active' ? "selected": '' }}>active</option>
                                    <option {{ $employee->status == 'disabled' ? "selected": '' }}>disabled</option>
                                  </select>
                            </div>
                            <div>
                                <label for="profile" class="text-xs font-semibold text-blue-800">Employee Image</label>
                                <input type="file" name="profile" id="profile" class="w-full py-2" onchange="showMyImage(this)">
                            </div>
                        </div>
                        <div class="my-4 flex gap-5">
                            <button class="bg-blue-500 text-white p-4 rounded-md shadow-md"><i class="fa-solid fa-user-pen text-xl"></i> Update Information</button>
                            <a href="{{ route('directory') }}" class="bg-gray-300 p-4 rounded-md">
                                <i class="fa-solid fa-angle-left"></i>
                                Back
                            </a>    
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
