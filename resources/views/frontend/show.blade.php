<x-frontend-layout>
    <x-sidebar/>
   



	<div class="p-5">
   <h1 class="mb-5"> 
      {{ $record->name }}
   </h1>
 
      
         
		

 
   <div class="col-lg-12">
      <div class="card text-black" style="border-radius: 15px;">
         <div class="card-body">
            <div class="row">
               <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
                  
                  <h6>Extension : {{ blank($record->contact->extension) ? "Information Unavailable" : $record->contact->extension }}</h6>
                  
                 
                  <h6>Mobile Number : {{ blank($record->contact->mobile) ? "Information Unavailable" : $record->contact->mobile }}</h6>
                  
               
                   
                     <h6>Email ID : <span class="text-bnb-blue lowercase">{{ blank($record->contact->email) ? "Information Unavailable" : $record->contact->email }}</span></h6>
					 <h6>Designation :{{$record->designation}}</h3>
					 <h6>Department: {{$record->department->name}}</h3>
				
               </div>
               <div class="col-md-10 col-lg-6 col-xl-7 align-items-center order-1 order-lg-2">
			   <h6>Flexcube User ID : <span class="text-bnb-blue no-case"> {{ blank($record->contact->flexcube) ? "Information Unavailable" : $record->contact->flexcube }}</span></h6>
          
                
                  <h6>Vehicle Number : {{ blank($record->contact->vehicle_number) ? "Information Unavailable" : $record->contact->vehicle_number}}</h6>
         
                 
                  <h6>Location : {{ $record->contact->location->name }}</h6>
                
                
                  <h6>Present Address : {{ $record->contact->present_address }}</h6>
				  <h6>Job Title : {{$record->title}}</h6>
               </div>
            </div>
         </div>
      </div>
   </div>
   <br>
          		<small>If your information is invalid, Please click <a href="{{ route('login_info_path') }}">HERE</a> to edit your information or contact System Administrator at 1277 | 1265.</small>
</div>
</div>



</x-frontend-layout>