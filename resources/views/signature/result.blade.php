<x-frontend-layout>
    <x-sidebar />

    <div class="container">
      <section class="py-5">
        <div class="d-flex flex-column center">
          		<h3 class="title2">Mail Signature Generator</h3>
          		<div class="mb-3">
          			@if($flag)
                  <div class="row">
                    <div class="col-md-12">
                      <textarea class="form-contro border w-100 p-5" rows="10" id="signCode"><div style="font-size: 12pt; font-family: sans-serif; line-height: 1.5; margin-bottom: 12px;">
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
                      <p class="text-white rounded-bottom py-1 bg-bnb-blue px-5 small"> Copy the above code and paste it in your mail signature setting.</p>
                    </div>
                    <button onclick="copySign()" class="btn bg-bnb-blue text-white btn-primary rounded-4">Copy Signature Code</button>
                  </div>
                @else

                  <h5 class="mt-5 mb-3 pt-5 title2"> 
                    404 | No Record Found
                  </h5>
                  <p class="text-center">Could not find any details for the entered Employee ID. Please check your Employee ID and make sure your information is registered in Employee Directory.</p>
                @endif
          		</div>
        	</div>
      	</section>
    </div>
</x-frontend-layout>