<x-frontend-layout>
    <x-sidebar />
    
    <head>
<link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">

  <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">
    <link rel="shortcut icon" href="{{ url('images/directory.png') }}"> 
</head>
    <div class="container-fluid p-0">
      	<section class="search-section p-3 p-lg-5 d-block  d-column d-flex bg-bnb-white">
        	<div class="my-auto">
          		<div class="mb-5">
          			<form class="d-block" action="{{ route('search_directory_path') }}" method="POST">
                  @csrf
          				<div class="form-row mb-3">
          					<div class="col-md-3">
          						<input type="text" name="employeename" class="form-control form-sz-lg" placeholder="Employee Name">
          					</div>

							  <div class="col-md-3">
          						<select name="location" class="form-control form-sz-lg" id="location">
          							<option selected="selected" value="0">Select Branch</option>
          						  @foreach($locations as $l)
                          <option value="{{ $l->id }}">{{ $l->name }}</option>
                        @endforeach
                      </select>
          					</div>
                    
          					<div class="col-md-3">
          						<select name="department" class="form-control form-sz-lg" id="department">
          							<option selected="selected" value="0">Select Department</option>
                        @foreach($departments as $d)
                          <option value="{{ $d->id }}"> {{ $d->name }} </option>
                        @endforeach
          						</select>
          					</div>
          				</div>
          				
          			</form>
          		</div>
				<div class="card-body">
      		<div class="table-responsive">
	
			  <table class="table table-bordered" id="dataTable" width="90%" cellspacing="0">
          			<thead>
            			<tr>
            				<th>SL. #</th>
            				<th>Name</th>
                    <th>Employee ID</th>
            				<th>Department</th>
            				<th>Job Title</th>
                    <th>Branch</th>
            				<th>Present Address</th>
							<th>Vehicle number</th>
					<th>Contact Number</th>
							<th>Email ID</th>
            			</tr>
          			</thead>
          			<tbody>
						<?php
						$employees;
						?>
        					@foreach($employees as $employee)
                    <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $employee->name }}</td>
                      <td>{{ $employee->employee_id }}</td>
                      <td>{{ $employee->department->name }}</td>
                      <td>{{ $employee->title }}</td>
                      <td>{{ $employee->contact->location->name }}</td>
                      <td>{{ $employee->contact->present_address }}</td>
					  <td>{{ $employee->contact->vehicle_no }}</td>
					  <td>{{ $employee->contact->mobile }}</td>
					  <td>{{ $employee->contact->email }}</td>
					  <td class="text-center">
                        <div class="btn-group">
                        </div>
                      </td>
                    </tr>
                  @endforeach
          			</tbody>
        		</table>
			
      		</div>
    	</div>
  	</div>
</x-frontend-layout>