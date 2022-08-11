<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          			<thead>
            			<tr> 
            				<th>SL. #</th>
            				<th>Name</th> 
                    <th>Employee ID</th> 
            				<th>Department</th>
            				<th>Job Title</th>
                    <th>Extension</th>
            				<th>Action</th>
            			</tr>
          			</thead>
          			<tfoot>
			        	<tr>
			        		<th>SL. #</th>
			             	<th>Name</th>
                    <th>Employee ID</th>
			             	<th>Department</th>
			             	<th>Job Title</th>
                    <th>Extension</th>
			             	<th>Action</th>
			        	</tr>
			        </tfoot>
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
                      <td>
                        <a href="{{ route('view_contact_path', $employee->id) }}" class="text-primary">
                          <b>{{ $employee->name }}</b>
                        </a>  
                      </td>
                      <td>{{ $employee->employee_id }}</td>
                      <td>{{ $employee->department->name }}</td>
                      <td>{{ $employee->title }}</td>
                      <td>{{ $employee->contact->extension }}</td>
                      <td class="text-center">
                        <div class="btn-group">
                          <a href="{{ route('edit_contact_path', $employee->id) }}" class="btn btn-primary btn-sm" data-toggle="tooltip" title="Edit {{ $employee->name }}'s Information">
                            <i class="far fa-edit"></i>
                          </a>
                          <a href="{{ route('delete_contact_path',$employee->id) }}" class="btn btn-danger btn-sm" data-toggle="tooltip" title="Delete {{ $employee->name }}'s Information" onclick="return confirm('You are about to delete Contact Inforamtion of {{$employee->name}}. Are you sure you want to delete the Contact Details?')">
                            <i class="far fa-trash-alt"></i>
                          </a>
                        </div>
                      </td>
                    </tr>
                  @endforeach
          			</tbody>
        		</table>