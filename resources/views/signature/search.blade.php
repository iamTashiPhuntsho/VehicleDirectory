<x-frontend-layout>
   <x-sidebar />
   <div class="p-5">
      <h2 class="no-case mb-5 ">Generate Digital Mail Signature</h2>
      <div class="mb-5">
         <div class="col-sm-12">
            <p class="u-large-text u-text u-text-variant u-text-2"> 
               Mail Signature Generator will generate your mail signature based on the contact information that you have provided in the Employee Directory. Please make sure your information in Employee Directory is updated.
            </p>
         </div>
      </div>
      <div class="col-lg-12">
         <div class="card text-black" style="border-radius: 15px;">
            <div class="card-body">
               <div class="row justify-content-center">
                  <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
                     <p class="text-center h4 fw-bold mb-5 mx-1 mx-md-4 mt-4">Generate Here</p>
                     <form class="mx-1 mx-md-4" action="{{ route('sign_search_directory_path') }}" method="POST">
                        @csrf
                        <div class="d-flex flex-row align-items-center mb-4">
                           <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                           <div class="form-outline flex-fill mb-0">
                              <input type="text" name="employee_id" class="form-control form-sz-lg" placeholder="Enter your Employee ID" maxlength="10">
                           </div>
                        </div>
                        <div class="button col-sm-7 d-flex justify-content-center ">
                           <button type="submit" class="form-control form-sz-lg btnbtn-block blue-button" >Generate Mail Signature</button>
                        </div>
                        @if ($errors->any())
                        @foreach ($errors->all() as $error)
                        <small class=""><i class="fas fa-exclamation-circle"></i>  {{ $error }}</small><br>
                        @endforeach
                        @endif
                     </form>
                  </div>
                  <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
                     <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/draw1.webp"
                        class="img-fluid" alt="Sample image">
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   </div>
</x-frontend-layout>
