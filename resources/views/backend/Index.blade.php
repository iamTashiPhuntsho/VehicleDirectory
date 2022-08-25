<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden">
                <div class="p-6">
                    <div class="grid grid-cols-2 lg:grid-cols-4 items-end gap-5 text-gray-600">
                        <div class="bg-white p-5 rounded-md lg:border-l-4 border-t-4 border-blue-500 flex justify-between items-center">
                            
                            <p class="font-bold">
                                <i class="fa-solid fa-users text-3xl text-blue-500"></i> <br>
                                <small>Total Registerd Contacts</small>
                            </p>
                            <h1 class="text-4xl">{{ $active_contacts }}</h1>
                        </div>
                        <div class="bg-white p-5 lg:py-7 rounded-md border-t-4 border-red-500 flex justify-between items-center">
                            <p class="font-bold">
                                <i class="fa-solid fa-user-large-slash text-3xl text-red-500"></i><br>
                                <small>Total Deactivated Contacts</small> 
                            </p>
                            <h1 class="text-4xl">{{ $disabled_contacts }}</h1>
                        </div>
                        <div class="bg-white p-5 lg:py-7 rounded-md border-t-4 border-orange-500 flex justify-between items-center">
                            <p class="font-bold">
                                <i class="fa-solid fa-bell @if($req>0)fa-shake @endif text-3xl text-orange-500"></i><br>
                                <small>Total Contact Requests</small> 
                            </p>
                            <h1 class="text-4xl">{{ $req }}</h1>
                        </div>
                        <div class="bg-white p-5 rounded-md lg:border-r-4 border-t-4 border-green-500 flex justify-between items-center ">
                            <p class="font-bold">
                                <i class="fa-solid fa-user-shield text-3xl text-green-500"></i> <br>
                                <small>Administrator Users </small>
                            </p>
                            <h1 class="text-4xl">{{ count($admins) }}</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                <h3 class="title text-lg">Recently Added Contacts</h3>
                <p class="text-sm text-gray-500">Following list shows the recently added contacts.</p>
            
                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-5 mt-3">
                    @foreach($conts as $cont)
                        <x-recently-added-users :employee="$cont" />
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
