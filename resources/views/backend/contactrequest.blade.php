<x-app-layout>
    <div class="py-12">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <h3 class="title text-lg">Contact Addition Requests</h3>
                    <p class="text-sm text-gray-500">Approve or reject contact addition requests submitted by the employees.</p>
                </div>
                <div class="grid lg:grid-cols-2">
                    @foreach($contacts as $contact)
                        <x-contact-request :employee="$contact" />
                    @endforeach
                    @if(blank($contacts))
                        <div class="p-14  grid md:flex items-center col-span-2">
                            <x-application-logo-login />
                            <div class="text-gray-500">
                                <h2 class="title text-xl">Contact Addition Request</h2>
                                <h3 class="title2">No new contact addition request....</h3>
                                <p>If there is any new request from the employees, it will be shown here for approval.</p>
                            </div>
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
</x-app-layout>