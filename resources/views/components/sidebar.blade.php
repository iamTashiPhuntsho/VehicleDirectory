<script>
   document.addEventListener("DOMContentLoaded", function(event) {
      
      const showNavbar = (toggleId, navId, bodyId, headerId) =>{
      const toggle = document.getElementById(toggleId),
      nav = document.getElementById(navId),
      bodypd = document.getElementById(bodyId),
      headerpd = document.getElementById(headerId)
      
      // Validate that all variables exist
      if(toggle && nav && bodypd && headerpd){
      toggle.addEventListener('click', ()=>{
      // show navbar
      nav.classList.toggle('show')
      // change icon
      toggle.classList.toggle('bx-x')
      // add padding to body
      bodypd.classList.toggle('body-pd')
      // add padding to header
      headerpd.classList.toggle('body-pd')
      })
      }
      }
      
      showNavbar('header-toggle','nav-bar','body-pd','header')
      
      /*===== LINK ACTIVE =====*/
      const linkColor = document.querySelectorAll('.nav_link')
      
      function colorLink(){
      if(linkColor){
      linkColor.forEach(l=> l.classList.remove('active'))
      this.classList.add('active')
      }
      }
      linkColor.forEach(l=> l.addEventListener('click', colorLink))
      
       // Your code to run since DOM is loaded and ready
      });     
</script> 
<header class="header" id="header">
   <div class="header_toggle"><i class="fas fa-bars" id="header-toggle"></i> </div>
</header>
<div class="l-navbar" id="nav-bar">
   <nav class="nav">
      <div>
         <div class="nav_list"> 
         <a href="#"> 

         <span class="d-none d-lg-block">
         {{-- <x-app-logo-front-small /> --}}
         <img class="img-fluid img-profile mx-auto mb-1" src="{{asset ('images/logo.png')}}" alt="">
         </span>
        <div class="nav_item2">
         <ul class="navbar-nav">
               <li class="nav-item">
                   <small><b>BNBL<br>EMPLOYEE DIRECTORY</small>
               </li>
         </ul>
       </div>
   </a>
   
            <a href="{{ route('get_search_path') }}" class="nav_link {{request()->routeIs('get_search_path') ? 'active' : ''}}"><i class='fas fa-home'></i> <span class="nav_name">Home</span> </a> 
            <a href="{{ route('get_vehicle_path') }}" class="nav_link {{request()->routeIs('get_vehicle_path') ? 'active' : ''}}"> <i class="fas fa-car-alt"></i> <span class="nav_name">Vehicle Details</span> </a> 
            <a href="{{ route('login_info_path') }}" class="nav_link {{request()->routeIs('login_info_path') ? 'active' : ''}}"> <i class="fas fa-user-edit"></i> <span class="nav_name ">Edit Information</span> </a>
            <a href="{{ route('employee_registration_path') }}" class="nav_link {{request()->routeIs('employee_registration_path') ? 'active' : ''}}"> <i class="fas fa-user-plus"></i> <span class="nav_name">Register Information</span> </a> 
            <a href="{{ route('sign_index_path') }}" class="nav_link {{request()->routeIs('sign_index_path') ? 'active' : ''}}"><i class="fas fa-signature"></i> <span class="nav_name">Mail Signature </span></a> 
         </div>

      <div class="nav_item">
         <ul class="navbar-nav">
               <li class="nav-item">
                   <small>Build By : <br> BNBL DT DEPARTMENT <br> 2022</small>
               </li>
         </ul>
       </div>
       
         
      </div>
   </nav>
</div>