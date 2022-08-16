<x-frontend-layout>
   <x-sidebar />
   <div class="p-5">
      <h2 class="mb-4">Employees Search Result</h2>
      <div class="mb-3">
         <p class="mb-3 u-large-text u-text u-text-variant u-text-2"> 
            BNBL Employee Directory gives you the access to search various employee all over the extensions located in Bhutan.
         </p>
				  <h4 class="no-case">Found {{ $records->count() }} Result(s) Matching the Search</h4>
				  <h4 class="no-case">
                <small>Ordering of search result is based on alphabetical order of Employees' name</small>
              </h4>
      </div>
      <div class="row">
         @if($records->count() == 0)
         <h3 class="no-case mb-5">No Record were found matching the query.</h3>
         @else
         
         @foreach($records as $r)
         <div class="col-lg-4 ">
            <a href="{{ route('show_result_path',[Crypt::encryptString($r->id),Crypt::encryptString($param_name),Crypt::encryptString($param_location),Crypt::encryptString($param_department)]) }}" class="message px-5 py-3 no-anchor-style ">
               <div class="card card-employee">
                  <div class="card-body">
                     <div class="row justify-content-center">
                        <div class="col-md-10 col-lg-6 col-xl-9 order-2 order-lg-2">
                           <h5 class="card-title"> 
                              {{$r->name}}
                              <br>
                              <small>{{ $r->title }}</small>
                           </h5>
                           <div class="card-text ">
                              <div><small>Employee ID</small> : {{ $r->employee_id}}</div>
                              <div>
                              <div class=" bg-gray-100 roundy px-0 py-1 mr-0 mr-lg-1 mt-1 mt-lg-0" style="width: 30%; float:left"><i class="fa-solid fa-phone fa-md" style="margin-right: 5px;"></i>{{ $r->contact->extension }}</div>
                              <div class="bg-gray-100 roundy px-0 py-1 mr-0 mr-lg-1 mt-1 mt-lg-0" style="width: 70%; float:right;"><i class='fa fa-mobile-phone fa-lg' style="margin-right: 5px;" ></i> {{ $r->contact->mobile }}</div>
                              </div>
                              <div class="bg-gray-100 roundy px-0 py-1 mr-0 mr-lg-1 mt-1 mt-lg-0"><i class="fa fa-envelope-o " style="margin-right: 5px;"></i> {{ $r->contact->email }}</div>
                           </div>
                           <small class="mb-0 t-3 mt-lg-0" style="color:#0061ff; font-size:12px;">click to view detail <i class="fas fa-arrow-right"></i></small>

                        </div>
                        <div class="col-md-10 col-lg-6 col-xl-3 align-items-center order-1 order-lg-1 result-img">
                           <img src='{{ asset("storage/employee_images/$r->image") }}' style="max-width: 5rem" class="card-img-top rounded-circle " alt="...">
                        </div>
                     </div>
                  </div>
               </div>
            </a>
         </div>
         @endforeach
         @endif
      </div>
   </div>
</x-frontend-layout>