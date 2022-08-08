<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="flex items-end justify-between">
                        <div>
                            <h3 class="title text-lg">Employee Directory</h3>
                            <p class="text-sm text-gray-500">Following table displays all the employees in Bhutan National Bank.</p>
                        </div>
                        <div>
                            <a href="{{ route('add-contact') }}" class="text-white bg-blue-500 hover:bg-blue-600 px-3 py-2 rounded-md hover:shadow-md duration-700">
                                <i class="fa-solid fa-user-plus"></i>
                                Add to Directory
                            </a>
                        </div>
                
                    </div>
                    <div class="grid mt-3">
                        

                        <table class="table table-bordered rounded-md overflow-hidden" id="employeesTable" width="100%" cellspacing="0">
                            <thead class="bg-blue-500 text-white">
                                <tr>
                                    <th>SL. #</th>
                                    <th>Name</th>
                                    <th>Employee ID</th>
                                    <th>Department</th>
                                    <th>Job Title</th>
                                    <th>Extension</th>
                                  <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot class="bg-blue-500 text-white">
                                <tr>
                                    <th>SL. #</th>
                                    <th>Name</th>
                                    <th>Employee ID</th>
                                    <th>Department</th>
                                    <th>Job Title</th>
                                    <th>Extension</th>
                                    <th>Action</th>
                                </tr>
                          </tfoot>
                            <tbody class="text-gray-600">
                                @php
                                    $i= 1
                                @endphp
                                @foreach($employees as $employee)
                                    <tr class="hover:shadow-md hover:bg-blue-100 duration-700">
                                        <td>{{ $i }}</td>
                                        @php
                                        $i++
                                        @endphp
                                        <td>
                                        <a href="{{ route('view-contact', $employee->id) }}" class="text-blue-500 hover:text-blue-600 duration-700 flex gap-2 items-center py-1">
                                            <div class="w-10 h-10 overflow-hidden rounded-full">
                                                <img src='{{ asset("storage/employee_images/$employee->image") }}' alt="User Image" class="w-full h-full object-cover object-center" />
                                            </div>
                                            <b>{{ $employee->name }}</b>
                                        </a>  
                                        </td>
                                        <td>{{ $employee->employee_id }}</td>
                                        <td>{{ $employee->department->name }}</td>
                                        <td>{{ $employee->title }}</td>
                                        <td>{{ $employee->contact->extension }}</td>
                                        <td class="text-center">
                                        <div class="flex justify-evenly">
                                            <a href="{{ route('edit-contact', $employee->id) }}" class="btn btn-primary btn-sm" data-toggle="tooltip" title="Edit {{ $employee->name }}'s Information">
                                                <i class="fa-solid fa-user-pen text-lg text-blue-500"></i>
                                            </a>
                                            <a href="{{ route('delete-contact',$employee->id) }}" class="btn btn-danger btn-sm" data-toggle="tooltip" title="Delete {{ $employee->name }}'s Information" onclick="return confirm('You are about to delete Contact Inforamtion of {{$employee->name}}. Are you sure you want to delete the Contact Details?')">
                                                <i class="fa-solid fa-trash text-lg text-red-500"></i>
                                            </a>
                                        </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready( function () {
            $('#employeesTable').DataTable();
        } );
    </script>
</x-app-layout>
