<x-frontend-layout>
    <x-sidebar />
    
	<div class="container-fluid p-0">
      	<section class="search-section p-3 p-lg-5 d-block  d-column d-flex bg-bnb-white">
        	<div class="my-auto">
          		<h2 class="no-case mb-5 ">Generate Employee Report</h2>
          		<div class="mb-5">
      		<div class="table-responsive">
	
			@include('frontend.table', $employees)
			
      		</div>
    	</div>
  	</div>
</x-frontend-layout>