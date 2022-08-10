<x-frontend-layout>
    <x-sidebar />
<div class="content ">
  <div class="container-fluid grey-background">
  <div class="content">
    <div class="container-fluid p-0">
      	<section class="search-section p-3 p-lg-5 d-block d-flex d-column bg-bnb-white">
        	<div class="my-auto">
			
            
          	<h2 class="no-case mb-5 ">BNBL Employee Directory</h2>
			<div class="mb-5">
				<p class="u-large-text u-text u-text-variant u-text-2"> 
		BNBL Employee Directory gives you the access to search various employee all over the extensions located in Bhutan.
				</p>
			</div>

	<div class="box wrapper mb-5 container">
    <div class="counter col_fourth">
	  <i class="fa-solid fa-users fa-2x"></i>
	  <p id='0101' class="fs-2 count-title count-number">0</p>
     
       <p class="count-text ">Total Employee</p>
    </div>

    <div class="counter col_fourth">
	<i class="fa-solid fa-icons fa-2x"></i>
	  <p id='0102' class="fs-2 count-title count-number">0</p>
      <p class="count-text">Department</p>
    </div>

    <div class="counter col_fourth">
	<i class='fas fa-external-link-alt fa-2x'></i>
	  <p id='0103' class="fs-2 count-title count-number">0</p>
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
		animate(text1, 0, 511, 7000);
		animate(text2, 0, 232, 7000);
		animate(text3, 100, 25, 7000);
	 }
  </script>
</body>
				<h4 class="no-case mb-5 ">Search Full List Of Employee</h4>
				  <div class="mb-5">
          			<form class="d-block" action="" method="POST">
              
          				<div class="row mb-3 form-row">
          					<div class="col">
          						<input type="text" name="employeename" class="form-control form-sz-lg" placeholder="Employee Name">
          					</div>
                            <div class="col">
                                <input type="text" name="flexcube" class="form-control form-sz-lg" placeholder="Flexcube ID">
                            </div>
          					<div class="col">
          						<select name="department" class="form-control form-sz-lg">
          							<option selected="selected" value="0">Select Department</option>
                       
          						</select>
          					</div>
          					<div class="col">
          					<select name="location" class="form-control form-sz-lg">
          							<option selected="selected" value="0">Select Location</option>
                            </select>
          					</div>

							<div class="col ">
								<button type="submit" class="   form-control form-sz-lg btnbtn-block blue-button" ><i class="fas fa-search"></i>search</button>
          					</div>
                             
          				</div>
          				
          			</form>

				
          		</div>
				  <div class="col-md-12 mb-3 ">
          			<p class=" u-large-text u-text u-text-variant u-text-2 ">
          				<i class="far fa-bell fa-fw fa-2x" ></i>Notification: 
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