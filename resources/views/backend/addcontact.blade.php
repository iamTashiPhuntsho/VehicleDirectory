<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="flex items-end justify-between">
                        <div>
                            <h3 class="title text-lg font-semibold">Add New Contact to Employee Directory</h3>
                            <p class="text-sm text-gray-500">Administrator can add information of new staffs using the form below.</p>
                        </div>
                    </div>
                    <form class="user" action="{{ route('add-contact') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="grid grid-cols-3 gap-4 mt-3">
                            <div>
                                <label for="name" class="text-xs font-semibold text-blue-800">Employee Name</label>
                                <input type="text" class="w-full" placeholder="Employee Name" name="name" id="name" required autofocus>
                            </div> 
                            <div>
                                <label for="designation" class="text-xs font-semibold text-blue-800">Designation</label>
                                <input type="text" class="w-full" placeholder="Designation" name="designation" id="designation" required>
                            </div>  
                            <div>
                                <label for="title" class="text-xs font-semibold text-blue-800">Job Title</label>
                                <input type="text" class="w-full" placeholder="Job Title" name="title" id="title" required>
                            </div>  
                            <div>
                                <label for="department" class="text-xs font-semibold text-blue-800">Department</label>
                                <select class="w-full" name="department" id="department" required>
                                    <option selected="selected" value="">Select Employee's Department</option>
                                    @foreach($departments as $d)
                                        <option value="{{ $d->id }}">{{ $d->name }} Department</option>
                                    @endforeach
                                </select>
                            </div>     
                            <div>
                                <label for="extension" class="text-xs font-semibold text-blue-800">Extension Number</label>
                                <input type="text" class="w-full" placeholder="Extension Number" name="extension" id="extension">
                            </div> 
                            <div>
                                <label for="flexcube" class="text-xs font-semibold text-blue-800">Flexcube Username</label>
                                <input type="text" class="w-full" placeholder="Flexcube User ID" name="flexcube" id="flexcube">
                            </div> 
                            <div>
                                <label for="empid" class="text-xs font-semibold text-blue-800">Employee ID</label>
                                <input type="text" class="w-full" placeholder="Employee ID" name="empid" id="empid">
                            </div> 
                            <div>
                                <label for="email" class="text-xs font-semibold text-blue-800">Email Address</label>
                                <input type="email" class="w-full" placeholder="Email Address" name="email" id="email">
                            </div> 
                            <div>
                                <label for="mobile" class="text-xs font-semibold text-blue-800">Mobile Number</label>
                                <input type="text" class="w-full" placeholder="Mobile Number" name="mobile" id="mobile" required>
                            </div> 
                            <div>
                                <label for="location" class="text-xs font-semibold text-blue-800">Office Location</label>
                                <select class="w-full " name="location" required id="location">
                                    <option selected="selected" value="">Select Office Location</option>
                                    @foreach($locations as $l)
                                      <option value="{{ $l->id }}"> {{$l->name}} </option>
                                    @endforeach
                                  </select>
                            </div>
                            <div>
                                <label for="vehicle_number" class="text-xs font-semibold text-blue-800">Vehicle Number</label>
                                <input type="text" class="w-full" placeholder="Vehicle Number" name="vehicle_number" id="vehicle_number">
                            </div>
                            <div>
                                <label for="present_address" class="text-xs font-semibold text-blue-800">Present Address</label>
                                <input type="text" class="w-full rounded-sm" placeholder="Present Address" name="present_address" id="present_address" required="required">
                            </div>
                            <div>
                                <label for="image" class="text-xs font-semibold text-blue-800">Employee Image</label>
                                <input type="file" name="image" id="image" required class="w-full">
                            </div>
                        </div>
                        <div class="my-4">
                            <button class="bg-blue-500 w-full text-white py-4 rounded-md shadow-md"><i class="fa-solid fa-user-plus text-xl"></i> Add to Directory</button>
                        </div>
                    </form>
                    <p class="text-sm font-bold">Click <a href="{{ route('bulkupload') }}" class="text-blue-800">HERE</a> to perform bulk upload.</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
