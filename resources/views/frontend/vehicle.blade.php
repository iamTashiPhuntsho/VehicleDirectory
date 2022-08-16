<x-frontend-layout>
    <x-sidebar />
	
<div class="card shadow mb-4">
    	<div class="card-header py-3">
      		<h6 class="m-0 font-weight-bold text-primary">Vehicle Directory</h6>
    	</div>
		<br>
	<form action="{{ route('search') }}" method="GET">
    <input type="text" name="search" autofocus="autofocus" placeholder="Ex. BP-0-A0000" required/>
    <button type="submit">Search</button>
    </form>
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
</x-frontend-layout>