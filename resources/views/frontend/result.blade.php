<x-frontend-layout>
   <x-sidebar />
   <div class="p-5">
      <h2 class="no-case mb-5 ">Key Employees Search Result</h2>
      <div class="mb-5">
         <p class="u-large-text u-text u-text-variant u-text-2"> 
            BNBL Employee Directory gives you the access to search various employee all over the extensions located in Bhutan.
         </p>
      </div>
      <div class="row">
         @if($records->count() == 0)
         <h2 class="no-case mb-5">No Record were found matching the query.</h2>
         @else
         @if($stat == 'contact')
         @foreach($records as $r)
         @php
         $img = $r->employee->image
         @endphp
         <div class="col-lg-12">
            <a href="{{ route('show_result_path',[Crypt::encryptString($r->employee->id),Crypt::encryptString($param_name),Crypt::encryptString($param_location),Crypt::encryptString($param_department)]) }}" class="message card px-5 py-3 mb-4 bg-hover-gradient-primary no-anchor-style">
               <div class="row">
                  <div class="col-lg-4 d-flex align-items-center flex-column flex-lg-row text-center text-md-left">
                     <img src='{{ asset("storage/employee_images/$img") }}' style="max-width: 3rem" class="rounded-circle mx-3 my-2 my-lg-0">
                     <h5 class="mb-0 text-grey">
                        {{ $r->employee->name }} 
                        <br>
                        <small class="text-bnb-orange">{{ $r->employee->title }}</small>
                     </h5>
                  </div>
                  <div class="col-lg-8 d-flex align-items-center flex-column flex-lg-row text-center text-md-left">
                     <div class="bg-gray-100 roundy px-0 py-1 mr-0 mr-lg-1 mt-2 mt-lg-0"><i class="fas fa-phone"></i> <small>Extension</small> : <b class="text-bnb-blue">{{ $r->extension }}</b></div>
                     <div class="bg-gray-100 roundy px-0 py-1 mr-0 mr-lg-1 mt-2 mt-lg-0"><i class="fas fa-mobile"></i> <small>Mobile</small> : <b class="text-bnb-blue">{{ $r->mobile }}</b></div>
                     <div class="bg-gray-100 roundy px-0 py-1 mr-0 mr-lg-1 mt-1 mt-lg-0"><i class="fas fa-envelope-open"></i> <small>Employee ID</small> : <b class="text-bnb-blue">{{ $r-employee_id}}</b></div>
                     <div class="bg-gray-100 roundy px-0 py-1 mr-0 mr-lg-1 mt-1 mt-lg-0"><i class="fas fa-envelope-open"></i> <small>Email</small> : <b class="text-bnb-blue">{{ $r-email}}</b></div>

                     <small class="mb-0 mt-3 mt-lg-0 bg-bnb-blue">click to view detail <i class="fas fa-arrow-right"></i></small>
                  </div>
               </div>
            </a>
         </div>
         @endforeach
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
                        <div class="col-md-10 col-lg-6 col-xl-3 align-items-center order-1 order-lg-1">
                           <img src='{{ asset("storage/employee_images/$r->image") }}' style="max-width: 5rem" class="card-img-top rounded-circle " alt="...">
                        </div>
                     </div>
                  </div>
               </div>
            </a>
         </div>
         @endforeach
         @endif
         @endif
      </div>
   </div>
</x-frontend-layout>
