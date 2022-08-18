<x-frontend-layout>
    <x-sidebar />

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
          						<input type="text" name="employeeid" class="form-control form-sz-lg" autofocus="autofocus" placeholder="Enter your Employee ID" maxlength="10">
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
</x-frontend-layout>