<x-frontend-layout>
    <x-sidebar />

    <div class="container-fluid p-0">
        <section class="search-section p-3 p-lg-5 d-block d-flex d-column {{$no == 1 ? 'bg-bnb-blue' : 'bg-bnb-orange'}}">
          <div class="my-auto">
              <h1 class="mb-0"> 
                Bhutan National Bank Limited
              </h1>
              <h2 class="no-case mb-4">Enter your OTP below</h2>
              <div class="mb-5">
                <form class="d-block" action="{{ route('verify_otp_path') }}" method="POST">
                  @csrf
                  <div class="form-row mb-3">
                    <div class="col-12">
                      <input type="text" name="otp" class="form-control text-center form-sz-lg" placeholder="6 Digit OTP" autofocus="autofocus" required="required" maxlength="6" minlength="6">
                      <input type="hidden" name="eid" value="{{ $eid }}">
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="col-md-12">
                      <button type="submit" class="btn {{$no == 1 ? 'bg-bnb-orange' : 'bg-bnb-blue'}} btn-block btn-lg text-white">Verify OTP</button>
                    </div>
                  </div>
                </form>
              </div>
              <p class="search-notification">
                  <i class="far fa-bell fa-fw fa-2x"></i>Notification : 
                  <br>
                  Check your email or mobile for the OTP. If you didn't receive the OTP, call 1277 or 1265 for assistance.
                  <br>
                </p>
          </div>
        </section>
    </div>
</x-frontend-layout>