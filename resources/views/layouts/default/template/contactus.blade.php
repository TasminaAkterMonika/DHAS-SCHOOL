@include('layouts.default.header')
<body>
<div class="boxed_wrapper">
<!-- Inner Heading Start -->
<div class="innerHeading-wrap">
  <div class="container">
    <h1>Contact Us</h1>
  </div>
</div>
<!-- Inner Heading End --> 


<!-- Inner Content Start -->
<div class="innerContent-wrap">
  <div class="container">
    <div class="cont_info ">
      <div class="row">
        @foreach($contacts as $contact)
        <div class="col-lg-3 col-md-6 md-mb-30">
   
          <div class="address-item style">
            <div class="address-icon"> <i class="{{$contact->icon}}"></i> </div>
            <div class="address-text">
              <h3 class="contact-title">{{$contact->title}}</h3>
              <ul class="unorderList">
                <li><a href="">{{$contact->details}}</a></li>
              
              </ul>
            </div>
          </div>
        
        </div>
        {{-- <div class="col-lg-3 col-md-6 md-mb-30">
          <div class="address-item style">
            <div class="address-icon"> <i class="far fa-envelope"></i> </div>
            <div class="address-text">
              <h3 class="contact-title">Mail Us</h3>
              <ul class="unorderList">
                <li><a href="#">info@schoolname.com</a></li>
                <li><a href="#">info@schoolname.com</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 sm-mb-30">
          <div class="address-item">
            <div class="address-icon"> <i class="far fa-clock"></i> </div>
            <div class="address-text">
              <h3 class="contact-title">Opening Hours</h3>
              <ul class="unorderList">
                <li>Mon - Fri : 10am to 2pm</li>
                <li>Sat - Sun : Closed</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="address-item">
            <div class="address-icon"> <i class="fas fa-map-marker-alt"></i> </div>
            <div class="address-text">
              <h3 class="contact-title">Address</h3>
              <p> 123 Lorem ipsum 123, dollor GA 456, Atlanta</p>
            </div>
          </div>
        </div> --}}
          @endforeach
      </div>
    </div>
    <div class="row">
      <div class="col-lg-7"> 
        
        <!-- Register Start -->
        <div class="login-wrap">
          <div class="contact-info login_box">
            <div class="contact-form loginWrp registerWrp">
              <form id="contactForm" novalidate="">
                <h3>Get In Touch</h3>
                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group">
                      <input type="text" name="name" class="form-control" placeholder="First Name">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <input type="text" name="name" class="form-control" placeholder="Last Name">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <input type="email" name="email" class="form-control" placeholder="Email Address">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <input type="phone" name="phone" class="form-control" placeholder="Phone">
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="form-group">
                      <textarea class="form-control" placeholder="Message"></textarea>
                    </div>
                  </div>
                  
                
                </div>
               
                  
              </form>
              
            </div>
                     <div class=text-right>
                    <div class="form-group">
                      <button type="submit" class="default-btn btn send_btn" style="font-size: 10px; margin-top: 7px;padding: 2px 6px 3px 6px;"> Submit <span></span></button>
                    </div>
                 </div>
          </div>
        
        </div>
     
        <!-- Register End --> 
      </div>
      
      <div class="col-lg-5">
        <div class="map">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14605.207691368267!2d90.35496461941824!3d23.77226064046293!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c0a880f7909d%3A0xe8d7d2484b62becc!2sShyamoli%2C%20Dhaka!5e0!3m2!1sen!2sbd!4v1647761748921!5m2!1sen!2sbd" width="100%" height="509" frameborder="0" style="border:0" allowfullscreen=""></iframe>
        </div>
        
      </div>
    </div>
  </div>
</div>
<!-- Inner Content Start --> 

@include('layouts.default.footer')