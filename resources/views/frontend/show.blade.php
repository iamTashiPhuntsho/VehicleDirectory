<x-frontend-layout>
   <x-sidebar/>
   <div class="p-5">
      <div class="cards-5">
         <div class="container">
            <div class="row rounded bg-white shadow-lg mb-5">
               <div class="col-lg-4 p-4">
                  <img src='{{asset ("storage/employee_images/$record->image")}}' style="object-fit: contain;" class="h-100 w-100 img-thumbnail"/>
               </div>
               <div class="col-lg-8 p-4 text-start title2">
                  <h2 class="title">  {{ $record->name }}</h2>
                  <h5 class="title2 text-center">{{$record->title}} | {{$record->designation}}</h5>
                  <h5 class="title2 text-center">{{$record->department->name}}</h5>
                  <div class="row">
                     <span class="bnb-blue fs-6">Office and Contact Information</span>
                     <div class="col-lg-6">
                           <p><i class="fa-solid fa-id-badge fa-fw me-2"></i><small class="d-none d-lg-inline">Employee ID</small>: <span>{{ $record->employee_id }}</span></p>
                           <p><i class="fa-solid fa-cube fa-fw me-2"></i><small class="d-none d-lg-inline">Flexcube ID</small>: <span> {{ blank($record->contact->flexcube) ? "Information Unavailable" : $record->contact->flexcube }}</span></p>
                           <p><i class="fa-solid fa-location-dot fa-fw me-2"></i><small class="d-none d-lg-inline">Location</small>: <span> {{ $record->contact->location->name }}</span></p>
                           <p><i class="fa-solid fa-map-pin fa-fw me-2"></i><small class="d-none d-lg-inline">Present Address</small>: <span> {{ $record->present_address }} </span></p>
                        </div>
                        <div class="col-lg-6">
                           <p><i class="fa-solid fa-envelope fa-fw me-2"></i><small class="d-none d-lg-inline"> Email ID</small>: <span class="text-bnb-blue lowercase">{{ blank($record->contact->email) ? "Information Unavailable" : $record->contact->email }}</span></p>
                           <p><i class="fa-solid fa-phone fa-fw me-2"></i><small class="d-none d-lg-inline">Extension</small>: <span>{{ blank($record->contact->extension) ? "Information Unavailable" : $record->contact->extension }}</span></p>
                           <p><i class="fa-solid fa-mobile fa-fw me-2"></i><small class="d-none d-lg-inline">Mobile Number</small>: <span>{{ blank($record->contact->mobile) ? "Information Unavailable" : $record->contact->mobile }}</span></p>
                           <p><i class="fa-solid fa-car-rear fa-fw me-2"></i><small class="d-none d-lg-inline">Vehicle Number</small>: <span> {{ blank($record->vehicle_no) ?"Information Unavailable" : $record->vehicle_no}}</span></p>
                     </div>
                  </div>   
               </div>  
            </div>
         </div>
      </div>
      <div class="clearfix mb-5">
         <form action="{{ route('search_directory_path') }}" method="POST">
            @csrf
            <input type="hidden" name="employeename" value="{{ $param_name }}">
            <input type="hidden" name="department" value="{{ $param_department }}">
            <input type="hidden" name="location" value="{{ $param_location }}">
            <input type="hidden" name="vehicle_number" value="{{ $param_vehicle_number }}">
            <button type="submit" class="btn bg-bnb-blue text-white px-3 py-2"><i class="fas fa-chevron-left fa-fw"></i> Back to search result</button>
          </form>
      </div>
      <div>
         <small  class="mb-5">If your information is invalid, Please click <a href="{{ route('login_info_path') }}">HERE</a> to edit your information or contact System Administrator at 1277 | 1265.</small>
      </div>
   </div>
</x-frontend-layout>
