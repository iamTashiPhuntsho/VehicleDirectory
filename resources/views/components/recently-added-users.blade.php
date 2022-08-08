<div class="bg-gray-100 p-2 hover:shadow-md rounded-md duration-700 hover:bg-gray-200">
    <!-- You must be the change you wish to see in the world. - Mahatma Gandhi -->
    <div class="flex gap-3">
        <div class="h-12 w-12 overflow-hidden rounded-full">
            <img src='{{ asset("storage/employee_images/$employee->image") }}' alt="User Image" class="object-cover object-top h-full w-full">
        </div>
        <div>
            <p class="col-span-5 text-gray-500 text-sm font-semibold px-1"><span class="text-blue-800 font-bold">{{ $employee->name }}</span></p> 
            <small class="title2 text-xs text-slate-600">
                was added on {{ date_format($employee->created_at, 'd M Y') }}
            </small> 
        </div>
    </div>
    <div class="flex mt-3 justify-between">
        <a href="{{ route('view-contact', $employee->id) }}" class="bg-blue-500 px-4 py-1 text-white rounded-md border-2 border-blue-500 duration-700 hover:bg-blue-600">
            <i class="fa-solid fa-address-card text-md"></i> 
            <span class="text-xs uppercase tracking-wide font-bold">View</span>
        </a>
        <a href="{{ route('edit-contact', $employee->id) }}" class="hover:bg-blue-500 px-4 py-1 text-blue-500 hover:text-white rounded-md border-2 border-blue-500 duration-700">
            <i class="fa-solid fa-user-pen text-md"></i> 
            <span class="text-xs uppercase tracking-wide font-bold">Edit</span>
        </a>
    </div>
</div>