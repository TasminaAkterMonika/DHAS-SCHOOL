@include('layouts.default.header')
<body>
<div class="boxed_wrapper">
<!-- Inner Heading Start -->

<div class="innerHeading-wrap">
  <div class="container">
    <h1>Login</h1>
  </div>
</div>
<!-- Inner Heading End --> 

<!-- Inner Content Start -->
<div class="innerContent-wrap">
  <div class="container"> 
    
    <!-- Logn Start -->
    <div class="login-wrap ">
      <div class="contact-info login_box">
        <h3>New Account</h3>
        <p>If you don't have an account, please proceed by clicking the following button to continue first-time registration.</p>
        <div class="form-group">
          <button type="submit" class="default-btn btn send_btn" style="padding: 7px 13px 7px 13px;font-size: 8px;font-weight: 600;">Create Account <span></span></button>
        </div>
        <div class="contact-form loginWrp">
          <h3>Login</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          <form id="contactForm" novalidate="">
            <div class="row">
              <div class="col-lg-12 col-md-12">
                <div class="form-group">
                  <input type="email" name="email" class="form-control" placeholder="Email">
                </div>
              </div>
              <div class="col-lg-12 col-md-12">
                <div class="form-group">
                  <input type="text" name="password" class="form-control" placeholder="Password">
                </div>
              </div>
              <div class="col-lg-12 col-md-12">
                <div class="form-group">
                  <button type="submit" class="default-btn btn send_btn"> Log in to my account <span></span></button>
                </div>
                </div>
                
                  <div class="col-lg-12 col-md-12">
                <div class="form-group">
                  <div class="forgot_password" ><a href="#" style="margin-top:0px; color: #fff">Reset My Password</a></div>
                </div>
                </div>
              
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- Login End --> 
    
  </div>
</div>
<!-- Inner Content Start --> 
@include('layouts.default.footer')
