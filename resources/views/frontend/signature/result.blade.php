@extends('layouts.frontend')

@section('content')
	<nav class="navbar navbar-expand-lg navbar-dark {{$no == 1 ? 'bg-bnb-orange' : 'bg-bnb-blue'}} fixed-top" id="sideNav">
      	<a class="navbar-brand js-scroll-trigger" href="#page-top">
        	<span class="d-block d-lg-none">Mail Signature Generator</span>
        	<span class="d-none d-lg-block">
          		<img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="{{asset ('images/bnb.png')}}" alt="">
        	</span>
      	</a>
      	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        	<span class="navbar-toggler-icon"></span>
      	</button>
      	<div class="collapse navbar-collapse" id="navbarSupportedContent">
        	<ul class="navbar-nav">
          		<li class="nav-item mb-5">
            		<h3 class="no-case {{$no == 1 ? 'text-bnb-blue' : 'text-bnb-orange'}}">
            			Mail Signature Generator
            		</h3>
          		</li>
          		<li class="nav-item">
          			<small class="text-white"><b>Built By : <br> BNBL IT Department <br>{{ date_format(date_create(),'Y') }}</b></small>
          		</li>
        	</ul>
      	</div>
    </nav>

    <div class="container-fluid p-0">
      	<section class="search-section p-3 p-lg-5 d-block d-flex d-column {{$no == 1 ? 'bg-bnb-blue' : 'bg-bnb-orange'}}">
        	<div class="my-auto">
          		<h1 class="mb-0 d-none d-xl-block {{$no == 1 ? 'text-white' : ''}}"> 
            		Bhutan National Bank Limited
          		</h1>
              <h1 class="mb-0 d-none d-lg-block d-xl-none d-sm-block d-xs-none {{$no == 1 ? 'text-white' : ''}}"> 
                Bhutan National Bank
              </h1>
          		<h2 class="no-case mb-5 {{$no == 1 ? 'text-white' : ''}}">Mail Signature Generator</h2>
          		<div class="mb-3">
          			@if($flag)
                  <div class="row">
                    <div class="col-md-12">
                      <textarea class="form-control" rows="10"><div style="font-size: 12pt; font-family: sans-serif; line-height: 1.5; margin-bottom: 12px;">
Thank you, &amp; Best regards.
</div>
<div style= "font-family: 'Century Gothic', sans-serif; color: black; line-height: 1.5;">
<span style="font-size: 11pt;">
<strong>{{$emp->name}}</strong> @if(!blank($salutation)) ({{ $salutation }}) @endif<br />
<span style="font-size: 10pt;">
{{$emp->title}}<br />
{{$emp->department->name}} Department</span>
</div>
<div style="max-width: 400px; padding: 0px; margin-top: 12px; margin-bottom: 10px; display: inline-flex;">
<div style="float: left;">
<span style="font-size: 11pt; font-family: 'Raleway ExtraBold', sans-serif; color: black; line-height: 1.5;">
<strong>BHUTAN NATIONAL BANK LTD.</strong></span><br>
<span style="font-size: 10pt; font-family: 'Century Gothic', sans-serif; color: black; line-height: 1.3;">
@if(!blank($telephone))
<strong>T :</strong>&nbsp;{{$telephone}}&nbsp; | 
@endif
<strong>IP :</strong>&nbsp;{{$emp->contact->extension}}<br />
<strong>M :</strong>+975 {{$emp->contact->mobile}}<br />
{{$office}}<br /> 
@if(!blank($po))
Post Box No: {{$po}},
@endif
@if(!blank($lam)) 
{{ $lam }}<br />
@endif
{{$loc}} Bhutan</span>
</div>
<div style="float: right; display: flex;"><a href="https://www.bnb.bt" target="_blank">
<img src="https://www.bnb.bt/wp-content/uploads/dld/Email/BNBemailsignature.png" style="max-width: 145px; height: auto;" /></a>
</div>
</div>
<div>
<p style="float: right; font-family: 'Century Gothic', sans-serif; font-size: 8pt; color: #808080; line-height: 1.6;">
The contents of this e-mail and any attachment(s) are confidential and intended for the named recipient(s) only. Any form of reproduction, dissemination, copying, disclosure, modification, distribution and/or publication of this message without the prior written consent of the author of this e-mail is strictly prohibited. If you have received this email in error please delete it and notify the sender immediately, so that we can ensure such a mistake does not occur in the future. Before opening any mail and attachments please check them for viruses and defects. Any views or opinions presented in this email are solely those of the author and may not necessarily reflect the opinions of BNBL.</p>
</div></textarea>
                      <p class="text-white small"> Copy the above code and paste it in your mail signature setting.</p>
                    </div>
                  
                  </div>
                @else

                  <h5 class="mb-5 no-case {{$no == 1 ? 'text-white' : ''}}" style="font-family: century gothic"> 
                    404 | No Record Found<br>
                    <small>Could not find any details for the entered Employee ID. Please check your Employee ID and make sure your information is registered in Employee Directory.</small>
                  </h5>
                @endif
          		</div>
          		<div>
          			<p class="search-notification {{$no == 1 ? 'text-white' : ''}}">
          				<!-- <i class="far fa-bell fa-fw fa-2x"></i>Notification : 
          				<br>
          				notification here -->
                </p>
                  <div class="row">
                    <div class="col-md-4">
                      <a href="{{ route('sign_index_path') }}" class="btn {{$no == 1 ? 'bg-bnb-orange' : 'bg-bnb-blue'}} btn-sm text-white btn-block"><b> <i class="fas fa-chevron-left"></i> Back to Mail Signature Generator </b></a>
                    </div>
                    <div class="col-md-3 offset-md-5">
                      <a href="{{ route('get_search_path') }}" class="btn {{$no == 1 ? 'bg-bnb-orange' : 'bg-bnb-blue'}} btn-sm text-white btn-block"><b> <i class="fas fa-chevron-left"></i> Back Employee Directory </b></a>
                    </div>
                  </div>
          		</div>
        	</div>
      	</section>
    </div>
@endsection