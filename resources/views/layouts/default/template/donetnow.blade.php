@include('layouts.default.header')
<body>
<div class="boxed_wrapper">
<!-- Inner Heading Start -->
<div class="innerHeading-wrap">
  <div class="container">
    <h1>Make A Donation</h1>
  </div>
</div>
<!-- Inner Heading End --> 

<!-- Inner Content Start -->
<div class="innerContent-wrap">
  <div class="container"> 
    
    <!-- Logn Start -->
    <div class="login-wrap ">
      <div class="contact-info login_box">
        <h3 style="font-size: 14px;font-weight: 700;">Your Donation Ammount(BDT)</h3>
        <p>Select Currency</p>
        <input type="radio" id="bdt" name="ammount" value="HTML">
   <label for="bdt">BDT</label>
    <input type="radio" id="usd" name="ammount" value="HTML">
  <label for="usd">USD</label>
<div class="form-group">
                  <input type="text" name="ammount" class="form-control" placeholder="Enter Donation Amount">
                </div>
        {{-- <div class="form-group">
          <button type="submit" class="default-btn btn send_btn">Create Account <span></span></button>
        </div> --}}
        <div class="contact-form loginWrp">
          <h3>Details</h3>
     
          <form id="contactForm" novalidate="">
            <div class="row">
              <div class="col-lg-6 col-md-6">
                <div class="form-group">
                  <input type="text" name="name" class="form-control" placeholder="First Name">
                </div>
              </div>
              <div class="col-lg-6 col-md-6">
                <div class="form-group">
                  <input type="text" name="name" class="form-control" placeholder="Last Name">
                </div>
              </div>
              <div class="col-lg-6 col-md-6">
                <div class="form-group">
                  <input type="email" name="email" class="form-control" placeholder="Email">
                </div>
              </div>
                  <div class="col-lg-6 col-md-6">
                <div class="form-group">
                  <input type="phone" name="phone" class="form-control" placeholder="Phone Number">
                </div>
              </div>
      
              <div class="col-lg-3 col-md-3">
                <div class="form-group">
                  <button type="submit" class="default-btn btn send_btn" style="font-size: 10px;padding: 9px 10px 10px 2px;"> Donate Now <span></span></button>
                </div> 
                {{-- <div class="form-group">
                  <div class="forgot_password"><a href="#">Reset My Password</a></div>
                </div>
              </div> --}} 
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- Login End --> 
    </div>
  </div>
</div>
<!-- Inner Content Start --> 

  @include('layouts.default.footer')