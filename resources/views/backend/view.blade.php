<x-app-layout>
    <div class="py-12">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class=" bg-white border-b border-gray-200">
                    <div class="flex justify-between">
                        
                        <div class="p-14 w-full">
                            <div class="bg-gradient-to-bl from-violet-600 to-orange-600 bg-clip-text p-3">
                                <h3 class="text-7xl lowercase title text-transparent">{{ $employee->name }}</h3>
                            </div>
                            <div class="flex relative">
                                <div class="bg-sky-100 shadow-md rounded-2xl title2 p-10 text-slate-700 w-2/3">
                                    <div class="flex items-center gap-3 title text-sky-500 mb-3">
                                        <i class="fa-solid fa-id-card-clip text-3xl"></i>
                                        <h3>Office Information</h3>
                                    </div>
                                    <p>
                                        <span class="text-xs font-bold lowercase text-sky-400">Employee ID :</span> 
                                        {{$employee->employee_id}}
                                    </p>
                                    <p>
                                        <span class="text-xs font-bold lowercase text-sky-400">Designation :</span>
                                        {{$employee->designation}}
                                    </p>
                                    <p>
                                        <span class="text-xs font-bold lowercase text-sky-400">Job Title :</span>
                                        {{ $employee->title }}
                                    </p>
                                    <p>
                                        <span class="text-xs font-bold lowercase text-sky-400">Department :</span>
                                        {{ $employee->department->name }} 
                                    </p>
                                    <p>
                                        <span class="text-xs font-bold lowercase text-sky-400">Location :</span>
                                        {{ $employee->contact->location->name }}
                                    </p>
                                </div>
    
                                <div class="bg-gradient-to-r from-rose-100 to-transparent drop-shadow-md rounded-2xl title2 p-10 text-slate-700 w-2/3 absolute -right-40 top-3 z-50">
                                    <div class="flex items-center gap-3 title text-rose-500 mb-3">
                                        <i class="fa-solid fa-address-card text-3xl"></i>
                                        <h3>Contact Information</h3>
                                    </div>
                                    <p>
                                        <span class="text-xs font-bold lowercase text-rose-400">Extension :</span> 
                                        {{$employee->contact->extension}}
                                    </p>
                                    <p>
                                        <span class="text-xs font-bold lowercase text-rose-400">Mobile :</span>
                                        {{$employee->contact->mobile}}
                                    </p>
                                    <p>
                                        <span class="text-xs font-bold lowercase text-rose-400">Flexcube :</span>
                                        {{ $employee->contact->flexcube }}
                                    </p>
                                    <p>
                                        <span class="text-xs font-bold lowercase text-rose-400">Email :</span>
                                        {{ $employee->contact->email }}
                                    </p>
                                    <p>
                                        <span class="text-xs font-bold lowercase text-rose-400">Vehicle :</span>
                                        {{ $employee->vehicle_no }}
                                    </p>
                                    <p>
                                        <span class="text-xs font-bold lowercase text-rose-400">Address :</span>
                                        {{ $employee->present_address }}
                                    </p>
                                    <p>
                                        <span class="text-xs font-bold lowercase text-rose-400">Status :</span>
                                        <span class="px-2 text-white rounded-md
                                        @if($employee->status == 'active')
                                            bg-green-600
                                        @else
                                            bg-red-600
                                        @endif
                                        ">
                                            {{ $employee->status }}
                                        </span>
                                    </p>
                                </div>
                            </div>
                            <div class="pt-10 flex gap-5">
                                <a href="{{ route('directory') }}" class="bg-gray-300 p-4 rounded-md">
                                    <i class="fa-solid fa-angle-left"></i>
                                    Back
                                </a>
                                <a href="{{ route('edit-contact', $employee->id) }}" class="bg-blue-500 p-4 text-white rounded-md">
                                    <i class="fa-solid fa-user-pen"></i>
                                    Edit Information
                                </a>
                                <a href="{{ route('delete-contact',$employee->id) }}" class="bg-red-500 p-4 text-white rounded-md" onclick="return confirm('You are about to delete Contact Inforamtion of {{$employee->name}}. Are you sure you want to delete the Contact Details?')">
                                    <i class="fa-solid fa-trash"></i>
                                    Delete
                                </a>
                            </div>
                        </div>
                        <div class="relative w-2/5 h-auto overflow-hidden">
                            <img src='{{ asset("storage/employee_images/$employee->image") }}' class="object-cover w-full h-full"/> 
                            <div class="bg-gradient-to-r from-white to-transparent w-2/3 h-full absolute top-0 left-0"></div>
                            {{-- <div class="bg-gradient-to-t from-white to-transparent w-full h-1/3 absolute bottom-0"></div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>