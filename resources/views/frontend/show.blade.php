<x-frontend-layout>
    <x-sidebar/>
	<div class="p-5">
    <div class="cards-5 section-gray">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-profile mb-5">
                            <div class="card-avatar">
                                <a href="#"> <img class="img" src='{{asset ("storage/employee_images/$record->image")}}'> </a>
                            </div>
                            <div class="table">
                                <h3 class="card-caption">  {{ $record->name }}</h3>
                            
                                <h4 class="h4 category text-muted mb-5">{{$record->title}} / {{$record->designation}}</h4>
        
                                <p><i class="fa-solid fa-address-card fa-lg" style="margin-right: 5px;"></i>Employee ID : <span>{{ $record->employee_id }}</span></p>
        <p><i class="fa-solid fa-diagram-project fa-lg" style="margin-right: 5px;"></i>Department : <span>{{$record->department->name}}</span></p>
        <p><i class="fa fa-envelope-o fa-lg" style="margin-right: 5px;"></i> Email ID : <span class="text-bnb-blue lowercase">{{ blank($record->contact->email) ? "Information Unavailable" : $record->contact->email }}</span></p>
        <p><i class="fa-solid fa-phone fa-lg" style="margin-right: 5px;"></i>Extension : <span>{{ blank($record->contact->extension) ? "Information Unavailable" : $record->contact->extension }}</span></p>
        <p><i class='fa fa-mobile-phone fa-lg' style="margin-right: 5px;" ></i>Mobile Number : <span>{{ blank($record->contact->mobile) ? "Information Unavailable" : $record->contact->mobile }}</span></p>
        <p><i class="fa-solid fa-cube fa-lg" style="margin-right: 5px;"></i>Flexcube User ID : <span> {{ blank($record->contact->flexcube) ? "Information Unavailable" : $record->contact->flexcube }}</span></p>

        <p><i class="fa-solid fa-car-side fa-lg" style="margin-right: 5px;"></i>Vehicle Number : <span> {{ blank($record->vehicle_no) ?"Information Unavailable" : $record->vehicle_no}}</span></p>
            		
            	<p> <i class="fa-solid fa-location-dot fa-lg" style="margin-right: 5px;"></i>Location : <span> {{ $record->contact->location->name }}</span></p>
            		<p><i class="fa-solid fa-map-pin fa-lg"style="margin-right: 5px;"></i>Present Address : <span> {{ $record->present_address }} </span></p>
					
				
            
			
        
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
<small  class="mb-5">If your information is invalid, Please click <a href="{{ route('login_info_path') }}">HERE</a> to edit your information or contact System Administrator at 1277 | 1265.</small>

</div>
    </div>





</x-frontend-layout>