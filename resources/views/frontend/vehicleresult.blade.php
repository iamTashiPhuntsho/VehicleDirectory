<x-frontend-layout>
    <x-sidebar />
    
    <div class="container-fluid p-0">
      	<section class="search-section p-3 p-lg-5 d-block d-flex d-column">
        	<div class="my-auto">
          		<h1 class="mb-0"> 
            		Bhutan National Bank Limited
          		</h1>
          		<h2 class="no-case">Found {{ $records->count() }} Result(s) Matching the Search</h2>
              <h4 class="no-case">
                <small>Ordering of search result is based on alphabetical order of Employees' name</small>
              </h4>
          		<div class="mb-5">
          		  <section class="py-5">
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
                            <a href="{{ route('show_vehicle_path',[Crypt::encryptString($r->employee->name),Crypt::encryptString($param_name),Crypt::encryptString($param_vehicle_number),Crypt::encryptString($param_mobile_number)]) }}" class="message card px-5 py-3 mb-4 bg-hover-gradient-primary no-anchor-style">
                              <div class="row">
                                <div class="col-lg-4 d-flex align-items-center flex-column flex-lg-row text-center text-md-left"><img src='{{ asset("storage/employee_images/$img") }}' style="max-width: 3rem" class="rounded-circle mx-3 my-2 my-lg-0">
                                  <h5 class="mb-0 text-grey">
                                    {{ $r->employee->name }} 
                                    <br>
                                    <small class="text-bnb-orange">{{ $r->employee->title }}</small>
                                  </h5>
                                </div>
                                <div class="col-lg-8 d-flex align-items-center flex-column flex-lg-row text-center text-md-left">
                                  <div class="bg-gray-100 roundy px-4 py-1 mr-0 mr-lg-3 mt-2 mt-lg-0"><i class="fas fa-phone"></i> <small>Extension</small> : <b class="text-bnb-blue">{{ $r->vehicle_number }}</b></div>
                                  <div class="bg-gray-100 roundy px-4 py-1 mr-0 mr-lg-3 mt-2 mt-lg-0"><i class="fas fa-mobile"></i> <small>Mobile</small> : <b class="text-bnb-blue">{{ $r->mobile }}</b></div>
                                  
                              </div>
                            </a>
                          </div>
                        @endforeach
                      @else
                        @foreach($records as $r)
                          <div class="col-lg-12">
                            <a href="{{ route('show_vehicle_path',[Crypt::encryptString($r->id),Crypt::encryptString($param_name),Crypt::encryptString($param_vehicle_number),Crypt::encryptString($param_)]) }}" class="message card px-5 py-3 mb-4 bg-hover-gradient-primary no-anchor-style">
                              <div class="row">
                                <div class="col-lg-4 d-flex align-items-center flex-column flex-lg-row text-center text-md-left"><img src='{{ asset("storage/employee_images/$r->image") }}' style="max-width: 3rem" class="rounded-circle mx-3 my-2 my-lg-0">
                                  <h5 class="mb-0 text-bnb-blue"> 
                                    {{$r->name}}
                                    <br>
                                    <small class="text-bnb-orange">{{ $r->title }}</small>
                                  </h5>
                                </div>
                                <div class="col-lg-8 d-flex align-items-center flex-column flex-lg-row text-center text-md-left">
                                  <div class="bg-gray-100 roundy px-4 py-1 mr-0 mr-lg-3 mt-2 mt-lg-0"><i class="fas fa-phone"></i> <small>Extension</small> : <b class="text-bnb-blue">{{ $r->contact->vehicle_number}}</b></div>
                                  <div class="bg-gray-100 roundy px-4 py-1 mr-0 mr-lg-3 mt-2 mt-lg-0"><i class="fas fa-mobile"></i> <small>Mobile</small> : <b class="text-bnb-blue">{{ $r->contact->mobile }}</b></div>
                                </div>
                              </div>
                            </a>
                          </div>
                        @endforeach
                      @endif
                    @endif

                  </div>
                </section>
          		</div>
        	</div>
      	</section>
    </div>
</x-frontend-layout>

   