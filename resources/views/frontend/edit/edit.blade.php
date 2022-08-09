@extends('layouts.frontend')

@section('content')
  <nav class="navbar navbar-expand-lg navbar-dark {{$no == 1 ? 'bg-bnb-orange' : 'bg-bnb-blue'}} fixed-top" id="sideNav">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">
          <span class="d-block d-lg-none">BNBL Employee Directory</span>
          <span class="d-none d-lg-block">
              <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src='{{asset ("storage/employee_images/$record->image")}}' alt="">
          </span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav">
              <li class="nav-item mb-5">
                <h4 class="no-case {{$no == 1 ? 'text-bnb-blue' : 'text-bnb-orange'}}">Contact Information 
                  <br>of <br> {{ $record->name }}</h4>
              </li>
              <li class="nav-item">
                <small class="text-white"><b>Built By : <br> BNBL IT Department <br>2019</b></small>
              </li>
          </ul>
        </div>
    </nav>

    <div class="container-fluid p-0">

        <section class="resume-section p-3 p-lg-5 d-flex d-column" id="about">
          <form action="{{ route('update_employee_info_path') }}" method="POST">
            @csrf
          <div class="my-auto">
            <h2>Edit {{ $record->name }}'s Information</h2>
              <h2 class="mb-0"> 
                <input type="text" name="name" value="{{ $record->name }}" class="lg-input" required="required">
                <input type="hidden" name="id" value="{{ $record->id }}">
              </h2>
              <br>
              <div class="subheading mb-4">
                <span title="Designation" data-toggle="tooltip" class="text-bnb-blue"data-placement="bottom"><input type="text" name="designation" value="{{$record->designation}}" class="lg-input" required="required"></span>
                 &nbsp; | &nbsp; 
                <span class="text-bnb-orange"data-placement="bottom" data-toggle="tooltip" title="Job Title"><input type="text" name="title" value="{{$record->title}}" class="lg-input" required="required"></span>
              </div>
              <hr>
              <div class="social-icons">
                <a href="#" class="mb-3">
                    <i class="fas fa-id-badge"></i> 
                </a>
                <h3>Employee ID : {{ $record->employee_id }}</h3>
                <br>
                <a href="#" class="mb-3">
                    <i class="fas fa-sitemap"></i> 
                </a>
                <h3>Currently Selected Department : {{$record->department->name}}</h3>
                <input type="hidden" name="odepartment" value="{{ $record->department_id }}">
                <br>
                <p class="text-bnb-blue"><i class="fas fa-info-circle"></i> Select from option below only if you intend to change the current Department</p>
                <br>
                <h3>
                  <a href="#" class="mb-3">
                    <i class="fas fa-sitemap"></i> 
                  </a>
                  New Department : <select class="lg-input" name="new_dept">
                    <option selected="selected" value="0">Select your new Department</option>
                    @foreach($department as $d)
                      <option value="{{ $d->id }}"> {{ $d->name }} </option>
                    @endforeach 
                  </select>
                </h3>
                <hr>
                <a href="#" class="mb-3">
                    <i class="fas fa-phone"></i> 
                </a>
                <h3>Extension : <input type="text" name="extension" value="{{ $record->contact->extension }}" class="lg-input" ></h3>
                <br>
                <a href="#" class="mb-3">
                    <i class="fas fa-mobile"></i>
                </a>
                <h3>Mobile Number : <input type="text" name="mobile" value="{{ $record->contact->mobile }}" class="lg-input"></h3>
                <br>
                <a href="#" class="mb-3">
                    <i class="fas fa-envelope-open"></i>
                </a>
                <h3>Email ID : <span class="text-bnb-blue lowercase">{{ $record->contact->email }}</span></h3>
                <input type="hidden" name="email" value="{{ $record->contact->email }}">
                <br>
                <p class="text-bnb-blue"><i class="fas fa-info-circle"></i> In order to change email ID, Please contact at 1277 or 1265</p>
                <br>
                <a href="#" class="mb-3">
                    <i class="fas fa-user-shield"></i>
                </a>
                <h3>Flexcube User ID : <span class="text-bnb-blue no-case"> <input type="text" name="flexcube" value="{{ $record->contact->flexcube }}" class="lg-input" ></span></h3>
          
                <hr>
                <a href="#">
                    <i class="fas fa-map-marker-alt"></i>
                </a>
                <h3>Current Office Location : {{ $record->contact->location->name }}</h3>
                <input type="hidden" name="olocation" value="{{ $record->contact->location_id }}">
                <p class="text-bnb-blue"><i class="fas fa-info-circle"></i> To change the office location, Please select your new office location from the dropdown list</p>
                <a href="#">
                    <i class="fas fa-map-marker-alt"></i>
                </a>
                <h3>New Location : <select class="lg-input" name="new_location">
                    <option selected="selected" value="0">Select your new office Location</option>
                    @foreach($location as $l)
                      <option value="{{ $l->id }}"> {{ $l->name }} </option>
                    @endforeach 
                  </select>
                </h3>
                
                <hr>
                <div class="btn-group">
                  <button type=" submit" value="11" name="btn" class="btn btn-lg bg-bnb-blue text-white"><i class="fas fa-save"></i> Save Information and Exit</button>
                  <button type=" submit" value="00" name="btn" class="btn btn-lg bg-bnb-orange text-white"><i class="fas fa-sign-out-alt"></i> Exit Without Saving</button>
                </div>
              </div>
              
          </div>
        </form>
        </section>
    </div>
@endsection