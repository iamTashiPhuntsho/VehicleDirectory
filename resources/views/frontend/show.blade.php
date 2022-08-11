<x-frontend-layout>
    <x-sidebar/>
    <div class="container-fluid p-0">

      	<section class="resume-section p-3 p-lg-5 d-flex d-column" id="about">
        	<div class="my-auto">
          		<h1 class="mb-0"> 
            		{{ $record->name }}
          		</h1>
          		<div class="subheading mb-4"><span title="Designation" data-toggle="tooltip" class="text-bnb-blue"data-placement="bottom">{{$record->designation}}</span> &nbsp; | &nbsp; <span class="text-bnb-orange"data-placement="bottom" data-toggle="tooltip" title="Job Title">{{$record->title}}</span> &nbsp; | &nbsp; <span class="text-bnb-blue"data-placement="bottom" data-toggle="tooltip" title="Department">{{$record->department->name}} Department</span></div>

          		<div class="social-icons">
            		<a href="#" class="mb-3">
                    <i class="fas fa-id-badge"></i> 
                </a>
                <h3>Employee ID : {{ $record->employee_id }}</h3>
                <br>
                <a href="#" class="mb-3">
              			<i class="fas fa-phone"></i> 
            		</a>
            		<h3>Extension : {{ blank($record->contact->extension) ? "Information Unavailable" : $record->contact->extension }}</h3>
            		<br>
            		<a href="#" class="mb-3">
              			<i class="fas fa-mobile"></i>
            		</a>
            		<h3>Mobile Number : {{ blank($record->contact->mobile) ? "Information Unavailable" : $record->contact->mobile }}</h3>
            		<br>
            		<a href="#" class="mb-3">
              			<i class="fas fa-envelope-open"></i>
            		</a>
            		<h3>Email ID : <span class="text-bnb-blue lowercase">{{ blank($record->contact->email) ? "Information Unavailable" : $record->contact->email }}</span></h3>
            		<br>
            		<a href="#" class="mb-3">
              			<i class="fas fa-user-shield"></i>
            		</a>
            		<h3>Flexcube User ID : <span class="text-bnb-blue no-case"> {{ blank($record->contact->flexcube) ? "Information Unavailable" : $record->contact->flexcube }}</span></h3>
            		<br>
            		<a href="#" class="mb-3">
					<i class="fa-duotone fa-car"></i>
            		</a>
					<h3>Vehicle Number : {{ blank($record->vehicle_no) ? "Information Unavailable" : $record->vehicle_no}}</h3>
            		<br>
            		<a href="#" class="mb-3">
              			<i class="fas fa-map-marker-alt"></i>
            		</a>
            		<h3>Location : {{ $record->contact->location->name }}</h3>
					<br>
					<a href="#" class="mb-3">
              			<i class="fas fa-map-marker-alt"></i>
            		</a>
					<h3>Present Address : {{ $record->present_address }}</h3>
          		</div>
          		<br>
          		<small>If your information is invalid, Please click <a href="{{ route('login_info_path') }}">HERE</a> to edit your information or contact System Administrator at 1277 | 1265.</small>
        	</div>
      	</section>
    </div>

</x-frontend-layout>