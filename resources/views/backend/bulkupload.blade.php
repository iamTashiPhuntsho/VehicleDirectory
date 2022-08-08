<x-app-layout>
    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="flex items-end justify-between">
                        <div>
                            <h3 class="title text-lg">Bulk Upload New Contacts to Employee Directory</h3>
                            <p class="text-sm text-gray-500">Administrator can bulk upload information of new staffs using the form below.</p>
                        </div>
                    </div>
                    <form class="user" action="{{ route('add-contact') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="grid mt-3">
                            <div>
                                <p>Bulk Uploading should follow following rules:</p>
                                <ol class="list-decimal px-10">
                                    <li>
                                        Follow the CSV format provided below:
                                        <br>
                                        <a href="{{ asset('format/contact.csv') }}" class="bg-blue-500 px-3 rounded-sm text-white font-semibold text-sm">Contact.CSV</a></li>
                                    <li>Header of .CSV file should not be removed</li>
                                </ul>
                            </div>
                            <div class="my-4">
                                <label for="contact" class="text-xs font-semibold text-blue-800">Bulk Upload .CSV File</label>
                                <input type="file" class="w-full" accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel" name="contact" id="contact" required>
                            </div>
                        </div>
                        <div class="my-4">
                            <button class="bg-blue-500 w-full text-white py-4 rounded-md shadow-md"><i class="fa-solid fa-file-csv text-xl"></i> Import Contacts from CSV</button>
                        </div>
                    </form>
                    <p class="text-sm font-bold">Go <a href="{{ route('add-contact') }}" class="text-blue-800">BACK</a> to "Add to Directory".</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
