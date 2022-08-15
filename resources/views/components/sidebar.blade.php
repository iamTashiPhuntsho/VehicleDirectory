@extends('layouts.frontend-layout')
<body id="body-pd">
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
      <span class="header_title">BNBL Employee Directory</span>
   </header>
   <div class="l-navbar" id="nav-bar">
      <nav class="nav">
         <div>
            
           
      </a>
            <div class="nav_list"> 
            <a href="#"> 
            
            <span class="d-none d-lg-block">
            <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="{{asset ('images/bnb.png')}}" alt="">
        	</span>
      </a>
               <a href="{{ route('get_search_path') }}" class="nav_link"><i class='fas fa-home'></i> <span class="nav_name">Dashboard</span> </a> 
               <a href="{{ route('get_vehicle_path') }}" class="nav_link"> <i class="fas fa-car-alt"></i> <span class="nav_name">Vehicle Details</span> </a> 
               <a href="{{ route('login_info_path') }}" class="nav_link"> <i class="fas fa-user-edit"></i> <span class="nav_name ">Edit Information</span> </a>
               <a href="{{ route('employee_registration_path') }}" class="nav_link"> <i class="fas fa-user-plus"></i> <span class="nav_name">Register Information</span> </a> 
               <a href="{{ route('sign_index_path') }}" class="nav_link"><i class="fas fa-signature"></i> <span class="nav_name">Mail Signature </span></a> 
            </div>
         </div>
      </nav>
   </div>
   <!--Container Main start-->
</body>
<!--Container Main end-->
<!--Container Main end-->