<x-frontend-layout>
    <x-sidebar />

    <div class="container">
      <section class="p-5">
        <div class="d-flex flex-column center">
          		<h3 class="title2 mb-3">Mail Signature Generator</h3>
          		<div class="">
          			@if($flag)
                <div class="mb-3">
                        <p class="u-large-text u-text u-text-variant u-text-2"> 
                        Check the Signature Preview below and modify the information if required. Keep the field(s) as it is, if no modification in required. All the empty fields will not be included in the Signature Code.</p>
                        </p>
                     </div>
                 
                  <div class="preview-container">
                    <div class="clearfix">
                      <form action="{{ route('get_signature_code_path') }}" method="GET">
                        <div class="border p-5 clearfix" style="border-radius:15px;">
                          <div class=""style="font-size: 12pt; font-family: sans-serif; line-height: 1.2; margin-bottom: 12px; font-weight: normal; padding-top:20px;">
                              Thank you, &amp; Best regards.
                            </div>
                            <div style= "font-family: 'Century Gothic', sans-serif; color: black; line-height: 1.2; font-weight: normal;">
                              <span style="font-size: 11pt;">
                                <strong>
                                  {{$emp->name}} </strong> &nbsp; (<select name="salutation">
                                    <option value="">Salutation</option>
                                    <option>Mr.</option>
                                    <option>Ms.</option>
                                    <option>Mrs.</option>
                                  </select>)
                              </span><br />
                              <span style="font-size: 10pt; ">
                                {{$emp->title}}<br />
                                {{$emp->department->name}} Department
                              </span>
                            </div>
  
  
                            <div style="max-width: 500px; padding: 0px; margin-top: 12px; margin-bottom: 10px; display: inline-flex;">
                              <div style="float: left;">
                                <span style="font-size: 11pt; font-family: 'Raleway ExtraBold', sans-serif; color: black; line-height: 1.6; font-weight: normal;">
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
                              <p style="float: right; font-family: 'Century Gothic', sans-serif; font-size: 8pt; color: #808080; line-height: 1.6; font-weight: normal;" >
                                The contents of this e-mail and any attachment(s) are confidential and intended for the named recipient(s) only. Any form of reproduction, dissemination, copying, disclosure, modification, distribution and/or publication of this message without the prior written consent of the author of this e-mail is strictly prohibited. If you have received this email in error please delete it and notify the sender immediately, so that we can ensure such a mistake does not occur in the future. Before opening any mail and attachments please check them for viruses and defects. Any views or opinions presented in this email are solely those of the author and may not necessarily reflect the opinions of BNBL.
                              </p>
                            </div>
                            <div class="clearfix mt-5">
                            <input type="hidden" name=" employee_id" value="{{$emp->id}}">
                            <button class="btn bg-bnb-blue text-white rounded-3 btn-primary px-5" type="submit"><i class="fas fa-signature fa-fw fa-lg"></i> Generate Signature Code</button>
                          </div>
                          </div>
                         
                      </form>
                    </div>
                  </div>
                @else

                  <h5 class="mt-5 mb-3 pt-5 title2"> 
                    404 | No Record Found
                  </h5>
                  <p class="text-center">Could not find any details for the entered Employee ID. Please check your Employee ID and make sure your information is registered in Employee Directory.</p>
                @endif
          		</div>
          		<div>
          		</div>
        	</div>
      	</section>
    </div>
</x-frontend-layout>