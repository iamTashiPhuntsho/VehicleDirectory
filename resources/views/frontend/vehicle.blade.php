<x-frontend-layout>
   <div class="content ">
      <div class="container-fluid grey-background">
         <div class="content">
            <div class="container-fluid p-0">
               <section class="search-section p-3 p-lg-5 d-block d-column bg-bnb-white">
                  <div class="my-5">
                     <h2 class="no-case mb-4 title">Vehicle Directory</h2>
                     <p class="small"> 
                        Enter the vehicle number you want to search
                     </p>
                     <div class="card">
                        <div class="row mb-3 form-row">
                           <form action="{{ route('search') }}" method="GET">
                              <div class="row px-3">
                                 <div class="col-sm-5 p-2">
                                    <input type="text" name="search" class="form-control form-sz-lg" autofocus placeholder="Ex. BP-1-A2345" />
                                 </div>
                                 <div class="col-sm-1 p-2">
                                    <button type="submit" class="form-control form-sz-lg btn btn-block bg-bnb-blue text-white" >
                                    <i class="fas fa-search fa-lg"></i></button>
                                 </div>
                                 <div class="col-sm-3 p-2">
                                    <a href="{{route('get_vehicle_path')}}" class="form-control form-sz-lg btn btn-block bg-bnb-blue text-white p-3 px-5" >
                                       <small class="fs-6">view all details</small> 
                                    </a>
                                 </div>
                              </div>
                           </form>
                        </div>
                        <div class="card-body">
                           <div class="table-responsive">
                              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                 <thead>
                                    <tr>
                                       <th>SL. #</th>
                                       <th>Name</th>
                                       <th>Vehicle Number</th>
                                       <th>Mobile Number</th>
                                       <th>Extension</th>
                                       <th>Job Title</th>
                                       <th>Department</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    @php
                                    $i= 1
                                    @endphp
                                    @foreach($employees as $employee)
                                    <tr>
                                       <td>{{ $i }}</td>
                                       @php
                                       $i++
                                       @endphp
                                       <td>{{ $employee->name }}</td>
                                       <td class="{{substr($employee->vehicle_no,0,2) == 'BT' || substr($employee->vehicle_no,0,2) == 'bt' || substr($employee->vehicle_no,0,2) == 'Bt' || substr($employee->vehicle_no,0,2) == 'bT' ? 'bg-warning text-black' : 'bg-danger text-white'}} text-center fs-6 text-uppercase"><b>{{ $employee->vehicle_no }}</b></td>
                                       <td>{{ $employee->contact->mobile }}</td>
                                       <td>{{ $employee->contact->extension }}</td>
                                       <td>{{ $employee->title }}</td>
                                       <td>{{ $employee->department->name }}</td>
                                    </tr>
                                    @endforeach
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                  </div>
               </section>
            </div>
         </div>
      </div>
   </div>
</x-frontend-layout>
