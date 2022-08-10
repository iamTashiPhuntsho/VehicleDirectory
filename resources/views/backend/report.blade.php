<x-app-layout>
    <div class="py-12">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <h3 class="title text-lg">Report Generator</h3>
                    <p class="text-sm text-gray-500">Administrator can generate reports as per the requirement using this feature.</p>
                </div>
                <form action="{{ route('generate-report') }}" method="POST">
                    @csrf
                    <div class="px-10 pb-10 text-gray-500">
                        <h4 class="title">Required Columns</h4>
                        <small class="title2">Select the columns required for the report. All or multiple columns can be selected. Atleast one column needs to be selected inorder to generate a report.</small>
                        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5">
                            <div class="border p-2">
                                <input type="checkbox" name="column[]" id="name" checked value="name">
                                <label for="name">Name</label>
                            </div>
                            <div class="border p-2">
                                <input type="checkbox" name="column[]" id="employee_id" value="employee_id">
                                <label for="employee_id">Employee ID</label>
                            </div>
                            <div class="border p-2">
                                <input type="checkbox" name="column[]" id="designation" value="designation">
                                <label for="designation">Designation</label>
                            </div>
                            <div class="border p-2">
                                <input type="checkbox" name="column[]" id="title" value="title">
                                <label for="title">Job Title</label>
                            </div>
                            <div class="border p-2">
                                <input type="checkbox" name="column[]" id="department" value="department">
                                <label for="department">Department</label>
                            </div>
                            <div class="border p-2">
                                <input type="checkbox" name="column[]" id="vertical" value="vertical">
                                <label for="vertical">Vertical</label>
                            </div>
                            <div class="border p-2">
                                <input type="checkbox" name="column[]" id="email" value="email">
                                <label for="email">Email</label>
                            </div>
                            <div class="border p-2">
                                <input type="checkbox" name="column[]" id="extension" value="extension">
                                <label for="extension">Extension</label>
                            </div>
                            <div class="border p-2">
                                <input type="checkbox" name="column[]" id="mobile" value="mobile">
                                <label for="mobile">Mobile</label>
                            </div>
                            <div class="border p-2">
                                <input type="checkbox" name="column[]" id="flexcube" value="flexcube">
                                <label for="flexcube">Flexcube</label>
                            </div>
                            <div class="border p-2">
                                <input type="checkbox" name="column[]" id="office" value="office">
                                <label for="office">Office Location</label>
                            </div>
                            <div class="border p-2">
                                <input type="checkbox" name="column[]" id="vehicle_no" value="vehicle_no">
                                <label for="vehicle_no">Vehicle Number</label>
                            </div>
                            <div class="border p-2">
                                <input type="checkbox" name="column[]" id="present_address" value="present_address">
                                <label for="present_address">Present Address</label>
                            </div>
                            <div class="border p-2">
                                <input type="checkbox" name="column[]" id="status" value="status">
                                <label for="status">Status</label>
                            </div>
                            <div class="border p-2">
                                <input type="checkbox" name="all" id="all">
                                <label for="all">All the Columns</label>
                            </div>

                        </div>

                        <h4 class="title mt-5">Report Filter</h4>
                        <small class="title2">Filter feature allows the admin to generate specific report as per the requirement. The report output can be narrowed down using the filter. Type in or select desired values in the form below to filter and generate a report. Leaving all the fields empty will export all the data.</small>
                        <div class="grid grid-cols-2 md:grid-cols-4 gap-5">
                            <div>
                                <label for="form_name" class="text-xs font-bold text-blue-500">Name</label>
                                <input type="text" placeholder="Name" class="w-full" name="form_name" id="form_name">
                            </div>
                            <div>
                                <label for="form_employee_id" class="text-xs font-bold text-blue-500">Employee ID</label>
                                <input type="text" placeholder="Employee ID" class="w-full" name="form_employee_id" id="form_employee_id">
                            </div>
                            <div>
                                <label for="form_title" class="text-xs font-bold text-blue-500">Job Title</label>
                                <input type="text" placeholder="Job Title" class="w-full" name="form_title" id="form_title">
                            </div>
                            <div>
                                <label for="form_department" class="text-xs font-bold text-blue-500">Department</label>
                                <select name="form_department" id="form_department" class="w-full">
                                    <option value="">Selecte Department</option>
                                    @foreach($departments as $d)
                                        <option value="{{ $d->id }}">{{ $d->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div>
                                <label for="form_location" class="text-xs font-bold text-blue-500">Location</label>
                                <select name="form_location" id="form_location" class="w-full">
                                    <option value="">Select Location</option>
                                    @foreach($locations as $l)
                                        <option value="{{ $l->id }}">{{ $l->name }}</option>
                                    @endforeach
                                </select>    
                            </div>
                            <div>
                                <label for="form_status" class="text-xs font-bold text-blue-500">Status</label>
                                <select name="form_status" id="form_status" class="w-full">
                                    <option value="">Select status</option>
                                    <option value="active">active</option>
                                    <option value="disabled">disabled</option>
                                </select>
                            </div>
                            <div class="col-span-2 pt-5">
                                <button class="w-full bg-blue-500 text-white p-4 rounded-md hover:bg-blue-700 hover:shadow-md duration-700">
                                    <i class="fa-solid fa-square-poll-vertical"></i> Generate Report
                                </button>
                                <p class="text-sm text-gray-500">If there is a record matching the criteria, the report will be exported in a excel file.</p>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>