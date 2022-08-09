@extends('layouts.frontend')

@section('content')
<nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-bnb-blue" id="sideNav">
      	<a class="navbar-brand js-scroll-trigger" href="#page-top">
        	<span class="d-block d-lg-none">Search Employee</span>
        	<span class="d-none d-lg-block">
          		<img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="{{asset ('images/bnb.png')}}" alt="">
        	</span>
      	</a>
      	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        	<span class="navbar-toggler-icon"></span>
      	</button>
      	<div class="collapse navbar-collapse" id="navbarSupportedContent">
        	<ul class="navbar-nav">
          		<li class="nav-item mb-5">
            		<h3 class="no-case">
            			Employee Directory 
            		</h3>
          		</li>
				 <li class="nav-item nav-list">
					<a href="{{ route('get_search_path') }}">
						<small class="text-white">
						<i class='fas fa-home'></i>
							Dashboard
						</small>
				
					</a>
          		</li>
				  <li class="nav-item nav-list">
					<a href="{{ route('get_vehicle_path') }}">
						<small class="text-white">
						<i class='fas fa-car-alt'></i>
							Vehicle Details
						</small>
					</a>
          		</li>
				  <li class="nav-item nav-list">
					<a href="{{ route('login_info_path') }}">
						<small class="text-white">
						<i class="fas fa-user-edit"></i>
							Edit Your Information
						</small>
					</a>
          		</li>
				  <li class="nav-item nav-list">
					<a href="{{ route('employee_registration_path') }}">
						<small class="text-white">
						<i class="fas fa-user-plus"></i>
							Register Your Information
						</small>
					</a>
          		</li>
				  <li class="nav-item nav-list">
					<a href="{{ route('get_report_path') }}">
					<small class="text-white">
					<i class='fas fa-address-book'></i>
						Generate Report
						</small>
					</a>
          		</li>
				  <li class="nav-item nav-list">
					<a href="{{ route('sign_index_path') }}">
						<small class="text-white">
						<i class="fas fa-signature"></i>
						Generate Mail Signature
						</small>
					</a>
          		</li>
        	</ul>	
      	</div>
    </nav>
	
    <div class="container-fluid p-0">
      	<section class="search-section p-3 p-lg-5 d-block d-flex d-column bg-bnb-white">
        	<div class="my-auto">
          		<h1 class="mb-0 d-none d-xl-block"> 
            		Bhutan National Bank Limited
          		</h1>
        
          		<h2 class="no-case mb-5">Mail Signature Generator</h2>
          		<div class="mb-5">
          			<form class="d-block" action="{{ route('sign_search_directory_path') }}" method="POST">
                  @csrf
          				<div class="form-row mb-3">
          					<div class="col-md-8">
          						<input type="text" name="employee_id" class="form-control form-sz-lg" placeholder="Enter your Employee ID" maxlength="10">
          					</div>
          					<div class="col-md-4 ">
          						<button type="submit" class="btn  btn-block form-sz-lg text-white bg-bnb-blue">
                        <b>
                          <i class="fas fa-signature fa-fw fa-lg"></i> Generate Mail Signature
                        </b>
                      </button>
          					</div>
          				</div>
                  @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <small class=""><i class="fas fa-exclamation-circle"></i>  {{ $error }}</small><br>
                    @endforeach
                  @endif

          			</form>
          		</div>
          		<div>
          			<p class="search-notification">
          				<i class="far fa-bell fa-fw fa-2x"></i>Notification : 
          				<br>
          				Mail Signature Generator will generate your mail signature based on the contact information that you have provided in the Employee Directory. Please make sure your information in Employee Directory is updated.
          			  <br>
                  <br>
                  <div class="row">
                    <div class="col-md-5 offset-md-4">
                      <a href="{{ asset('documents/Email Signature - How to Genarate & Apply.pdf') }}" class="btn bg-bnb-orange btn-sm text-white btn-block"><b> <i class="far fa-flag fa-lg"></i> How to Generate and Apply Email Signature</b></a>
                    </div>
                  </div>
                </p>
          		</div>
				
        	</div>
      	</section>
    </div>
@endsection