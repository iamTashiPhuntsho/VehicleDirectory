<x-frontend-layout>
   <x-sidebar />
   <div class="p-5">
      <h2 class="no-case mb-4 ">Edit Your Profile On Employee Directory</h2>
      <div class="mb-3">
         <div class="col-sm-12">
            <p class="u-large-text u-text u-text-variant u-text-2"> 
            You can only edit the Department field. For the edition of the other field, contact the Admin.
            </p>
         </div>
      </div>
      <div class="col-lg-12">
         <div class="card card-image text-black" style="border-radius: 15px;">
            <div class="card-body">
               <div class="row justify-content-center">
                  <div class="col-md-7 col-lg-7 col-xl-6 order-2 order-lg-1">
                     <p class="text-center h5 fw-bold mb-3 mx-1 mx-md-4 mt-4">Edit Here</p>
                     <form class="mx-1 mx-md-4">
                        <div class="d-flex flex-row align-items-center mb-4">
                           <i class="fas fa-user fa-lg me-3 fa-fw fa-1x"></i>
                           <div class="form-outline flex-fill mb-0">
                              <input type="text" name="employeeid" class="form-control form-sz-lg" placeholder="Employee Identity Number">
                           </div>
                        </div>
                        <div class="d-flex flex-row align-items-center mb-4">
                           <i class="fas fa-envelope fa-lg me-3 fa-fw fa-1x"></i>
                           <div class="form-outline flex-fill mb-0">
                              <select name="option_otp" class="form-control form-sz-lg">
                                 <option value="mobile" disabled="disabled">Registered Mobile Number</option>
                                 <option value="email" selected="selected">Registered Email ID</option>
                              </select>
                           </div>
                        </div>
                        <div class="button col-sm-6 d-flex mb-3">
                        <button type="submit" class="form-control form-sz-lg btn btn-block blue-button" >Send OTP</button>
                        </div>
                     </form>
                  </div>
                  <div class="col-md-5 col-lg-5 col-xl-6 d-flex align-items-center order-1 order-lg-2">
                     <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/draw1.webp"
                        class="center" alt="Sample image">
                        
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   </div>
</x-frontend-layout>
