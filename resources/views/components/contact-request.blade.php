<div class=" bg-white border-b border-gray-200">
    <div class="p-10 relative">
        <div class="w-28 h-28 overflow-hidden absolute right-5 top-5 rounded-full drop-shadow-md">
            <img src='{{ asset("storage/employee_images/$employee->image") }}' class="object-cover w-full h-full"/>     
        </div>
        <div class="bg-gradient-to-bl from-violet-600 to-orange-600 bg-clip-text">
            <h3 class="text-3xl lowercase title text-transparent">{{ $employee->name }}</h3>
        </div>
        <div class="bg-sky-100 shadow-md rounded-2xl title2 p-10 text-slate-700">
            <div class="flex items-center gap-3 title text-sky-500">
                <i class="fa-solid fa-id-card-clip text-xl"></i>
                <h3>Information</h3>
            </div>
            <p>
                {{ $employee->name }} [{{ $employee->employee_id }}] is designated as {{ $employee->designation}} with the job title of {{ $employee->title }}
                under {{ $employee->department->name }} Department, {{ $employee->location->name }}.
            </p>
            <div class="flex justify-between">
                <p>
                    <span class="text-xs font-bold lowercase text-sky-400">Extension :</span> 
                    {{$employee->extension}}
                </p>
                <p>
                    <span class="text-xs font-bold lowercase text-sky-400">Mobile :</span>
                    {{$employee->mobile}}
                </p>
            </div>
            <div class="flex justify-between">
                <p>
                    <span class="text-xs font-bold lowercase text-sky-400">Flexcube :</span>
                    {{ $employee->flexcube }}
                </p>
                <p>
                    <span class="text-xs font-bold lowercase text-sky-400">Email :</span>
                    {{ $employee->email }}
                </p>
            </div>
            <p>
                <span class="text-xs font-bold lowercase text-sky-400">Vehicle :</span>
                {{ $employee->vehicle_no }}
            </p>
            <p>
                <span class="text-xs font-bold lowercase text-sky-400">Address :</span>
                {{ $employee->present_address }}
            </p>
        </div>

        <div class="flex justify-between mt-3">
            <a href="{{ route('process-contact-request', [$employee->id, 'approve']) }}" class="bg-blue-500 p-4 text-white rounded-md">
                <i class="fa-solid fa-check"></i>
                Accept
            </a>
            <a href="{{ route('process-contact-request', [$employee->id, 'reject']) }}" class="bg-red-500 p-4 text-white rounded-md">
                <i class="fa-solid fa-xmark"></i>
                Reject
            </a>
        </div>
    </div>
</div>