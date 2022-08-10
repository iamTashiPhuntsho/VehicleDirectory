<x-frontend-layout>
    <x-sidebar />
    <div class="container-fluid p-0">
      	<section class="search-section p-3 p-lg-5 d-block d-column bg-bnb-white">
        	<div class="my-auto">
			<h1 class="mb-0 d-none d-xl-block"> 
            		Bhutan National Bank Limited
          		</h1>
          		<h2 class="no-case mb-5 ">Edit Information in Employee Directory</h2>
          		<div class="mb-5">
				  <form class="d-block" action="{{ route('get_employee_and_send_otp_path') }}" method="POST">
                  @csrf
                  <div class="form-row mb-3">
                    <div class="col-8">
                      <input type="text" name="employeeid" class="form-control form-sz-lg" placeholder="Employee Identity Number">
                    </div>
                    <div class="col-4">
                      <select name="option_otp" class="form-control form-sz-lg">
                        <option value="mobile" disabled="disabled">Registered Mobile Number</option>
                        <option value="email" selected="selected">Registered Email ID</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="col-md-12">
                      <button type="submit" class="btn bg-bnb-blue btn-block btn-lg text-white btn-primary">Send OTP</button>
                    </div>
                  </div>
                </form>
          		</div>
				
        	</div>
      	</section>
    </div>
</x-frontend-layout>