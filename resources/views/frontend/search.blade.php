<x-frontend-layout>
   <x-sidebar />
   <div class="content ">
      <div class="container-fluid grey-background">
         <div class="content">
            <div class="container-fluid p-0">
               <section class="search-section p-3 p-lg-5 d-block d-flex d-column bg-bnb-white">
                  <div class="my-auto">
                     <h2 class="no-case mb-4">BNBL Employee Directory</h2>
                     <div class="mb-3">
                        <p class="u-large-text u-text u-text-variant u-text-2"> 
                           BNBL Employee Directory gives you the access to search various employee all over the extensions located in Bhutan.
                        </p>
                     </div>
                     <div class="box wrapper mb-4 container">
                        <div class="counter col_fourth">
                           <i class="fa-solid fa-users fa-2x"></i>
                           <p id='0101' class="fs-2 count-title count-number"></p>
                           <p class="count-text ">Total Employee</p>
                        </div>
                        <div class="counter col_fourth">
                        <i class="fa-solid fa-sitemap fa-2x"></i>
                           <p id='0102' class="fs-2 count-title count-number"></p>
                           <p class="count-text">Department</p>
                        </div>
                        <div class="counter col_fourth">
                           <i class='fas fa-external-link-alt fa-2x'></i>
                           <p id='0103' class="fs-2 count-title count-number"></p>
                           <p class="count-text">Total Branch</p>
                        </div>
                     </div>
                     <body onload="load()">
                        <script>
                           function animate(obj, initVal, lastVal, duration) {
                           let startTime = null;
                           
                           //get the current timestamp and assign it to the currentTime variable
                           let currentTime = Date.now();
                           
                           //pass the current timestamp to the step function
                           const step = (currentTime ) => {
                           
                           //if the start time is null, assign the current time to startTime
                           if (!startTime) {
                           startTime = currentTime ;
                           }
                           
                           //calculate the value to be used in calculating the number to be displayed
                           const progress = Math.min((currentTime - startTime)/ duration, 1);
                           
                           //calculate what to be displayed using the value gotten above
                           obj.innerHTML = Math.floor(progress * (lastVal - initVal) + initVal);
                           
                           //checking to make sure the counter does not exceed the last value (lastVal)
                           if (progress < 1) {
                           window.requestAnimationFrame(step);
                           } else {
                              window.cancelAnimationFrame(window.requestAnimationFrame(step));
                           }
                           };
                           //start animating
                           window.requestAnimationFrame(step);
                           }
                           let text1 = document.getElementById('0101');
                           let text2 = document.getElementById('0102');
                           let text3 = document.getElementById('0103');
                           const load = () => {
                           animate(text1, 200, {{count($employees)}}, 7000);
                           animate(text2, 0, {{count($departments)}}, 4000);
                           animate(text3, 100, {{count($locations)}}, 7000);
                           }
                        </script>
                     </body>
                     
                     <div class="mb-5">
                       
                           <div class="row mb-3 form-row">
                        <form class="d-block" method="POST" action="{{ route('search_directory_path') }}">
                        @csrf
                        <div class="row mb-3">
                        <div class="col-sm-2">
                        <input type="text" name="employeename" class="form-control form-sz-lg" placeholder="Employee Name">
                        </div>
                        <div class="col-sm-2">
                        <input type="text" name="flexcube" class="form-control form-sz-lg" placeholder="Flexcube ID">
                        </div>
                        <div class="col-sm-2">
                        <input type="text" name="vehicle_number" class="form-control form-sz-lg" placeholder="Vehicle Number">
                        </div>
                        <div class="col-sm-3">
                        <select name="department" class="form-control form-sz-lg">
                        <option selected="selected" value="0">Select Department</option>
                        @foreach($departments as $d)
                        <option value="{{ $d->id }}"> {{ $d->name }} </option>
                        @endforeach
                        </select>
                        </div>
                        <div class="col-sm-2">
                        <select name="location" class="form-control form-sz-lg">
                        <option selected="selected" value="0">Select Location</option>
                        @foreach($locations as $l)
                        <option value="{{ $l->id }}">{{ $l->name }}</option>
                        @endforeach
                        </select>
                        </div>
                        <div class="col-sm-1">
                        <button type="submit" class="form-control form-sz-lg btn btn-block " >
                           <i class="fas fa-search fa-lg" style="margin-right: 10px;"></i></button>
                        </div>
                        </div>
                        </form>
                        </div>
                        <div class="col-md-12 mb-3 ">
                           <p class=" u-large-text u-text u-text-variant u-text-2 ">
                              <i class="far fa-bell fa-fw fa-2x" ></i><b>Notification:</b>
                              <br>
                              Keeping all the above fields blank will view all the employees.
                              <br>
                              Keeping one or two above fields blank will ignore the blank fields.
                              <br>
                              <br>
                           </p>
                        </div>
                     </div>
                  </div>
               </section>
            </div>
         </div>
      </div>
   </div>
</x-frontend-layout>
