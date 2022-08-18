<x-frontend-layout>
   <x-sidebar />
   <div class="content ">
      <div class="container-fluid grey-background">
         <div class="content">
            <div class="container-fluid p-0">
               <section class="search-section p-3 p-lg-5 d-block d-column bg-bnb-white">
                  <div class="my-auto">
                     <h2 class="no-case mb-4 ">Vehicle Directory</h2>
                     <div class="mb-3">
                        <p class="u-large-text u-text u-text-variant u-text-2"> 
                           Enter the vehicle number to search for BNBL employee owner details for all extensions located in Bhutan.
                        </p>
                     </div>
                     <div class="card">
                        <div class="row mb-3 form-row">
                           <form class="d-block mx-1 mx-md-4" action="{{ route('search') }}" method="GET">
                              <div class="row">
                                 <div class="col-sm-3">
                                    <input type="text" name="search" class="form-control form-sz-lg" placeholder="Ex. BP-0-A0000" required/>
                                 </div>
                                 <div class="col-sm-1">
                                    <button type="submit" class="form-control form-sz-lg btn btn-block " >
                                    <i class="fas fa-search fa-lg"></i></button>
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
                                       <th>Employee ID</th>
                                       <th>Department</th>
                                       <th>Job Title</th>
                                       <th>Extension</th>
                                       <th>Mobile Number</th>
                                       <th>Vehicle Number</th>
                                       <th>Email</th>
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
                                       <td>{{ $employee->employee_id }}</td>
                                       <td>{{ $employee->department->name }}</td>
                                       <td>{{ $employee->title }}</td>
                                       <td>{{ $employee->contact->extension }}</td>
                                       <td>{{ $employee->contact->mobile }}</td>
                                       <td>{{ $employee->vehicle_no }}</td>
                                       <td>{{ $employee->contact->email }}</td>
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
