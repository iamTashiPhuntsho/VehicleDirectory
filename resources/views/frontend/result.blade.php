<x-frontend-layout>
   <x-sidebar />
   <div class="p-5">
      <div class="mb-3">
				  <h2 class="title2">Found {{ $records->count() }} result(s) matching the search</h2>
				  <h5 class="title2 text-center">
                <small>Ordering of search result is based on alphabetical order of Employees' name</small>
              </h5>
      </div>
      <div class="row">
         @if($records->count() == 0)
            <div class="title2 text-center mt-5">
               <h4>No record were found matching the query.</h4>
               <small>Please try with different search key words.</small>
               <br>
               <a href="{{ route('get_search_path') }}" class="btn btn-primary px-3 py-1 mt-3">
                  Back to Search Parameters
               </a>
            </div>
         @else
         
            @foreach($records->sortby('name') as $r)
            <div class="col-lg-4 p-2">
               <div class="bg-white shadow-sm p-4 position-relative rounded overflow-hidden ">
                        
                     <img src='{{ asset("storage/employee_images/$r->image") }}' style="object-fit: cover; object-position: center;" class="h-75 w-25 rounded-start shadow position-absolute top-0 end-0" alt="...">
                     
                     <div style="width: 85%;">
                        <h5 class="title bnb-blue">{{ $r->name }}</h5>
                        <small class="bnb-blue" style="font-size: 12px; font-weight:bold;">{{ $r->title }}</small><br>
                        <small><i class="fa-solid fa-id-badge fa-fw me-2"></i>{{ $r->employee_id }}</small><small class="ms-4">
                           <i class="fa-solid fa-phone fa-fw me-2"></i>{{ $r->contact->extension }}</small><br>
                        @if(!blank($r->flexcube))
                           <small><i class="fa-solid fa-cube fa-fw me-2"></i>{{ $r->contact->flexcube }}</small><br>
                        @endif
                        @if(!blank($r->contact->mobile))
                           <small><i class="fa-solid fa-mobile fa-fw me-2"></i>{{ $r->contact->mobile }}</small><br>
                        @endif
                        <small><i class="fa-solid fa-envelope fa-fw me-2"></i>{{ $r->contact->email }}</small><br>
                        @if(!blank($r->vehicle_no))
                           <small><i class="fa-solid fa-car-rear fa-fw me-2"></i>{{ $r->vehicle_no }}</small>
                        @endif
                     </div>
                     <a href="{{ route('show_result_path',[Crypt::encryptString($r->id),Crypt::encryptString($param_name),Crypt::encryptString($param_location),Crypt::encryptString($param_department),Crypt::encryptString($param_vehicle_number)]) }}" class="link bg-bnb-blue text-white position-absolute end-0 px-2">
                        <small>view detail <i class="fas fa-arrow-right"></i></small>
                     </a>
               </div>
            </div>
            @endforeach
         @endif
      </div>
   </div>
</x-frontend-layout>