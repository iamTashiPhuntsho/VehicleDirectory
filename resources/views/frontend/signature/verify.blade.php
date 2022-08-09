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
          		<div class="mb-5">
          			@if($flag)
                  <div class="row">
                    <div class="col-md-12">
                      <p class="{{$no == 1 ? 'text-white' : 'text-black'}} small"><b>* Check the Signature Preview below and modify the information if required. Keep the field(s) as it is, if no modification in required. All the empty fields will not be included in the Signature Code.</b></p>
                      <div class="preview-container">
                        <div class="clearfix">
                          <form action="{{ route('get_signature_code_path') }}" method="GET">
                            <div style="font-size: 12pt; font-family: sans-serif; line-height: 1.2; margin-bottom: 12px;">
                                Thank you, &amp; Best regards.
                              </div>


                              <div style= "font-family: 'Century Gothic', sans-serif; color: black; line-height: 1.2;">
                                <span style="font-size: 11pt;">
                                  <strong>
                                    {{$emp->name}} </strong> &nbsp; (<select name="salutation">
                                      <option value="">Salutation</option>
                                      <option>Mr.</option>
                                      <option>Ms.</option>
                                      <option>Mrs.</option>
                                    </select>)
                                </span><br />
                                <span style="font-size: 10pt;">
                                  {{$emp->title}}<br />
                                  {{$emp->department->name}} Department
                                </span>
                              </div>


                              <div style="max-width: 500px; padding: 0px; margin-top: 12px; margin-bottom: 10px; display: inline-flex;">
                                <div style="float: left;">
                                  <span style="font-size: 11pt; font-family: 'Raleway ExtraBold', sans-serif; color: black; line-height: 1.6;">
                                    <strong>BHUTAN NATIONAL BANK LTD.</strong>
                                  </span><br>
                                  <span style="font-size: 10pt; font-family: 'Century Gothic', sans-serif; color: black; line-height: 1;">
                                    <strong>T :</strong>&nbsp;<input type="text" name="telephone" placeholder="Landline Number"> | <strong>IP :</strong>&nbsp;{{$emp->contact->extension}}<br />
                                    <strong>M :</strong>+975 {{$emp->contact->mobile}}<br />
                                    <input type="text" name="office" value="{{$office}}" placeholder="Corporate Office, Branch or Extension Name"><br /> 
                                    Post Box No: <input type="text" name="po" value="439" style="width: 50px;" placeholder="PO No.">, <input type="text" name="lam" value="Nordzin Lam II" placeholder="Office Address"><br />
                                    <input type="text" name="dzongkhag" value="{{$loc}}" placeholder="Dzongkhag"> Bhutan
                                  </span>
                                </div>
                                <div style="float: right; display: flex;"><a href="https://www.bnb.bt" target="_blank">
                                  <img src="https://www.bnb.bt/wp-content/uploads/dld/Email/BNBemailsignature.png" style="max-width: 200px; height: auto;" /></a>
                                </div>
                              </div>

                              <div class="mb-5">
                                <p style="float: right; font-family: 'Century Gothic', sans-serif; font-size: 8pt; color: #808080; line-height: 1.6;">
                                  The contents of this e-mail and any attachment(s) are confidential and intended for the named recipient(s) only. Any form of reproduction, dissemination, copying, disclosure, modification, distribution and/or publication of this message without the prior written consent of the author of this e-mail is strictly prohibited. If you have received this email in error please delete it and notify the sender immediately, so that we can ensure such a mistake does not occur in the future. Before opening any mail and attachments please check them for viruses and defects. Any views or opinions presented in this email are solely those of the author and may not necessarily reflect the opinions of BNBL.
                                </p>
                              </div>
                              <div class="clearfix">
                                <input type="hidden" name=" employee_id" value="{{$emp->id}}">
                                <button class="btn {{$no == 1 ? 'bg-bnb-orange' : 'bg-bnb-blue'}} btn-sm text-white" type="submit"><i class="fas fa-signature fa-fw fa-lg"></i> <b>Generate Signature Code</b></button>
                              </div>
                          </form>
                        </div>
                      </div>
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
                  <div class="row">
                    <div class="col-md-4">
                      <a href="{{ route('sign_index_path') }}" class="btn {{$no == 1 ? 'bg-bnb-orange' : 'bg-bnb-blue'}} btn-sm text-white btn-block"><b> <i class="fas fa-chevron-left"></i> Back to Mail Signature Generator </b></a>
                    </div>
                    <div class="col-md-3 offset-md-5">
                      <a href="{{ route('get_search_path') }}" class="btn {{$no == 1 ? 'bg-bnb-orange' : 'bg-bnb-blue'}} btn-sm text-white btn-block"><b> <i class="fas fa-chevron-left"></i> Back Employee Directory </b></a>
                    </div>
                  </div>
                </p>
          		</div>
        	</div>
      	</section>
    </div>
@endsection