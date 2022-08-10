<x-frontend-layout>
    <x-sidebar />
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
                              <div class="card bg-hover-gradient-primary ">
                                <img src='{{ asset("storage/employee_images/$r->image") }}'  class="card-img-top rounded-circle " alt="...">
								                  <div  class="card-body -flex align-items-center flex-column flex-lg-row text-center text-md-left">
								                    <h5 class="mb-0 text-bnb-blue text-center"> 
                                    {{$r->name}}
                                    <br>
                                    <small class="text-bnb-orange">{{ $r->title }}</small>
                                  </h5>
                                  <div class="text-center">
                                  <div class="bg-gray-100 roundy px-0 py-1 mr-0 mr-lg-1 mt-1 mt-lg-0"><small>Employee ID</small> : <b class="text-bnb-blue">{{ $r->employee_id}}</b></div>
								                  <div class="bg-gray-100 roundy px-0 py-1 mr-0 mr-lg-1 mt-1 mt-lg-0"><i class="fas fa-phone"></i> <small>Extension</small> : <b class="text-bnb-blue">{{ $r->contact->extension }}</b></div>
                                  <div class="bg-gray-100 roundy px-0 py-1 mr-0 mr-lg-1 mt-1 mt-lg-0"><i class="fas fa-mobile"></i> <small>Mobile</small> : <b class="text-bnb-blue">{{ $r->contact->mobile }}</b></div>
                                  <small class="mb-0 t-3 mt-lg-0 "style="font-weight: 500; color: #FEB139;" >click to view detail <i class="fas fa-arrow-right"></i></small>
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