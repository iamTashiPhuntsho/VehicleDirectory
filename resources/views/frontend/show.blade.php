<x-frontend-layout>
    <x-sidebar/>
	<div class="p-5">
   <div class="show-card">
      <div class="thumbnail">
      <img class="left" src="{{asset ('images/cy.jfif')}}" />
    
      </div>
    <div class="right">
        <h1 class="mb-5">  {{ $record->name }}</h1>
        <div class="author">
            <h2>Office Information</h2>
        </div>
        <div class="separator mb-3">
       
        </div>

        <div >
        <p>Job Title : <span>{{$record->title}}</span></p>

        <p>Designation : <span>{{$record->designation}}</span></p>
        <p>Department : <span>{{$record->department->name}}</span></p>
        <p>Vehicle Number : <span>{{ blank($record->contact->vehicle_number) ? "Information Unavailable" : $record->contact->vehicle_number}}</span></p>
                  
         
        </div>


        <div class="author">
            <h2>Contact Details</h2>
        </div>
        <div class="separator mb-3">
       
        </div>
        <div>
                  <p>Extension : <span>{{ blank($record->contact->extension) ? "Information Unavailable" : $record->contact->extension }}</span></p>
                  <p>Mobile Number : <span>{{ blank($record->contact->mobile) ? "Information Unavailable" : $record->contact->mobile }}</span></p>
                  <p>Email ID : <span class="text-bnb-blue lowercase">{{ blank($record->contact->email) ? "Information Unavailable" : $record->contact->email }}</span></p>
                  <p>Flexcube User ID : <span class="text-bnb-blue no-case"> {{ blank($record->contact->flexcube) ? "Information Unavailable" : $record->contact->flexcube }}</span></p>
                  
         
        </div>
       
   </div>
</div>

<div class="mb-5">
<small>If your information is invalid, Please click <a href="{{ route('login_info_path') }}">HERE</a> to edit your information or contact System Administrator at 1277 | 1265.</small>

</div>

</div>

</div>


</x-frontend-layout>