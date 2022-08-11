<x-frontend-layout>
    <x-sidebar />
    <div class="container">
      	<section class="py-5">
        	<div class="d-flex flex-column center">
          		<h1 class="title mt-5 pt-5"> 
            		Bhutan National Bank
          		</h1>
        
          		<h5 class="title2">Mail Signature Generator</h5>
				<form action="{{ route('sign_search_directory_path') }}" method="POST">
					@csrf
					<div class="mt-5 container d-grid">
						<div class="col-sm-6 offset-sm-3 col-lg-4 offset-lg-4">
							<input type="text" name="employee_id" class="form-control form-control-lg" placeholder="Enter your Employee ID" maxlength="10">
						</div>
						<div class="col-sm-6 offset-sm-3 col-lg-4 offset-lg-4 d-grid mt-3">
							<button type="submit" class="btn  btn-primary rounded-4 bg-bnb-blue btn-block">
								<i class="fas fa-signature fa-fw fa-lg"></i> Generate Mail Signature
							</button>
						</div>
					</div>
					@if ($errors->any())
						<div class="d-grid pt-3">
							<div class="col-4 offset-4 text-center text-danger">
								@foreach ($errors->all() as $error)
									<small class=""><i class="fas fa-exclamation-circle"></i>  {{ $error }}</small><br>
								@endforeach
							</div>
						</div>
					@endif

				</form>
				<div class="p-5">
					<p class="pt-5 text-center">
						<small>
							<i class="fa-regular fa-bell fa-xl"></i> Notification : 
							<br>
							Mail Signature Generator will generate your mail signature based on the contact information that you have provided in the Employee Directory. Please make sure your information in Employee Directory is updated.
						</small>
					</p>
					{{-- <a href="{{ asset('documents/Email Signature - How to Genarate & Apply.pdf') }}" class=""><b> <i class="far fa-flag fa-lg"></i> How to Generate and Apply Email Signature</b></a> --}}
				</div>
				
        	</div>
      	</section>
    </div>
</x-frontend-layout>