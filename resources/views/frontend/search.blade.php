<x-frontend-layout>
    <x-sidebar />
<div class="content ">
  <div class="container-fluid grey-background">
  <div class="content">
    <div class="container-fluid p-0">
      	<section class="search-section p-3 p-lg-5 d-block d-flex d-column bg-bnb-white">
        	<div class="my-auto">
			
            
          		<h2 class="no-case mb-5 ">BNBL Employee Directory</h2>
	<body onload="load()">
	 <p>
	 <div class="box mb-5 container">
		<div class="box row">
		   <div class="counter col-sm-3">
			  <p id='0101' class="fs-2">0</p>
			  <p>Employee</p>
		   </div>
		   <div class="counter col-sm-3">
			  <p id='0102' class="fs-2">876</p>
			  <p >Department</p>
		</div>
		<div class="counter col-sm-3">
		   <p class="fs-2"><span id='0103'>12</span></p>
		   <p class="align-content-center">Extension</p>
		</div>
	 </div>
  </div>
  </p>
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
		animate(text1, 0, 511, 7000);
		animate(text2, 0, 232, 7000);
		animate(text3, 100, 25, 7000);
	 }
  </script>
</body>
				  <div class="mb-5">
          			<form class="d-block" method="POST" action="{{ route('search_directory_path') }}">
                @csrf
          				<div class="row mb-3">
          					<div class="col">
          						<input type="text" name="employeename" class="form-control form-sz-lg" placeholder="Employee Name">
          					</div>
                            <div class="col">
                                <input type="text" name="flexcube" class="form-control form-sz-lg" placeholder="Flexcube ID">
                            </div>
          					<div class="col">
          						<select name="department" class="form-control form-sz-lg">
          							<option selected="selected" value="0">Select Department</option>
                            @foreach($departments as $d)
                            <option value="{{ $d->id }}"> {{ $d->name }} </option>
                            @endforeach
          						</select>
          					</div>
          					<div class="col">
          					<select name="location" class="form-control form-sz-lg">
          							<option selected="selected" value="0">Select Location</option>
                            @foreach($locations as $l)
                            <option value="{{ $l->id }}">{{ $l->name }}</option>
                            @endforeach
                            </select>
          					</div>

							<div class="col ">
								<button type="submit" class="form-control form-sz-lg btnbtn-block blue-button" ><i class="fas fa-search"></i>search</button>
          					</div>
                             
          				</div>
          				
          			</form>

				
          		</div>
				  <div>
          			<p class="search-notification ">
          				<i class="far fa-bell fa-fw fa-2x"></i>Notification : 
          				<br>
          				Keeping all the above fields blank will view all the employees.
          				<br>
          				Keeping one or two above fields blank will ignore the blank fields.
          			  <br>
                  <br>
                  </p>
          		</div>
										
				
        	</div>
				
      	</section>
    </div>
	</div>
  </div>
</div>
    
</x-frontend-layout>