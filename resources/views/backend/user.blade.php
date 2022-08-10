<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="grid md:flex items-end justify-between">
                        <div>
                            <h3 class="title text-lg">Directory Administrators</h3>
                            <p class="text-sm text-gray-500">Following table displays all the administrators of Employee Directory.</p>
                        </div>
                        <div class="mt-5 md:mt-auto">
                            <a href="{{ route('register') }}" class="text-white bg-gray-500 hover:bg-gray-600 px-3 py-2 rounded-md hover:shadow-md duration-700">
                                <i class="fa-solid fa-user-plus"></i>
                                Add New Administrator
                            </a>
                        </div>
                
                    </div>
                    <div class="grid mt-3 overflow-auto">
                        

                        <table class="table table-bordered rounded-md overflow-hidden" id="employeesTable" width="100%" cellspacing="0">
                            <thead class="bg-gray-500 text-white">
                                <tr>
                                    <th>SL. #</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot class="bg-gray-500 text-white">
                                <tr>
                                    <th>SL. #</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Action</th>
                                </tr>
                          </tfoot>
                            <tbody class="text-gray-600">
                                @php
                                    $i= 1
                                @endphp
                                @foreach($users as $u)
                                    <tr class="hover:shadow-md hover:bg-blue-100 duration-700 text-center">
                                        <td class="py-2">{{ $i }}</td>
                                        @php
                                        $i++
                                        @endphp
                                        <td>
                                        <a href="{{ route('view-contact', $u->id) }}" class="text-blue-500 hover:text-blue-600 duration-700 items-center">
                                            <b>{{ $u->name }}</b>
                                        </a>  
                                        </td>
                                        <td>{{ $u->email }}</td>
                                        
                                        <td class="text-center">
                                        <div class="flex justify-evenly">
                                            <a href="{{ route('delete-user',$u->id) }}" class="btn btn-danger btn-sm" data-toggle="tooltip" title="Delete {{ $u->name }}'s Information" onclick="return confirm('You are about to delete User: {{$u->name}}. Are you sure you want to delete the users?')">
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
            $('#userTable').DataTable();
        } );
    </script>
</x-app-layout>
