<x-app-layout>
    <div class="py-12">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <h3 class="title text-lg">Report Generator</h3>
                    <p class="text-sm text-gray-500">Administrator can generate reports as per the requirement using this feature.</p>
                </div>
                <form action="">
                    @csrf
                    <div class="px-10 pb-10 text-gray-500">
                        <h4 class="title">Required Columns</h4>
                        <small class="title2">Select the columns required for the report. All or multiple columns can be selected. Atleast one column needs to be selected inorder to generate a report.</small>
                        <div class="grid grid-cols-5">
                            <div class="border p-2">
                                <input type="checkbox" name="name" id="name">
                                <label for="name">Name</label>
                            </div>
                            <div class="border p-2">
                                <input type="checkbox" name="employee_id" id="employee_id">
                                <label for="employee_id">Employee ID</label>
                            </div>
                            <div class="border p-2">
                                <input type="checkbox" name="designation" id="designation">
                                <label for="designation">Designation</label>
                            </div>
                            <div class="border p-2">
                                <input type="checkbox" name="title" id="title">
                                <label for="title">Job Title</label>
                            </div>
                            <div class="border p-2">
                                <input type="checkbox" name="department" id="department">
                                <label for="department">Department</label>
                            </div>
                            <div class="border p-2">
                                <input type="checkbox" name="vertical" id="vertical">
                                <label for="vertical">Vertical</label>
                            </div>
                            <div class="border p-2">
                                <input type="checkbox" name="email" id="email">
                                <label for="email">Email</label>
                            </div>
                            <div class="border p-2">
                                <input type="checkbox" name="extension" id="extension">
                                <label for="extension">Extension</label>
                            </div>
                            <div class="border p-2">
                                <input type="checkbox" name="mobile" id="mobile">
                                <label for="mobile">Mobile</label>
                            </div>
                            <div class="border p-2">
                                <input type="checkbox" name="flexcube" id="flexcube">
                                <label for="flexcube">Flexcube</label>
                            </div>
                            <div class="border p-2">
                                <input type="checkbox" name="office" id="office">
                                <label for="office">Office Location</label>
                            </div>
                            <div class="border p-2">
                                <input type="checkbox" name="vehicle_no" id="vehicle_no">
                                <label for="vehicle_no">Vehicle Number</label>
                            </div>
                            <div class="border p-2">
                                <input type="checkbox" name="present_address" id="present_address">
                                <label for="present_address">Present Address</label>
                            </div>
                            <div class="border p-2">
                                <input type="checkbox" name="status" id="status">
                                <label for="status">Status</label>
                            </div>
                            <div class="border p-2">
                                <input type="checkbox" name="all" id="all">
                                <label for="all">All the Columns</label>
                            </div>

                        </div>

                        <h4 class="title mt-5">Report Filter</h4>
                        <small class="title2">Filter feature allows the admin to generate specific report as per the requirement. The report output can be narrowed down using the filter. Type in or select desired values in the form below to filter and generate a report. Leaving all the fields empty will export all the data.</small>
                        <div class="grid grid-cols-5">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>