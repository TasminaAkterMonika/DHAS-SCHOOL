<div class="footer-wrap">
  <div class="container">
    <div class="row">
      <div class="col-lg-1 col-md-1" style="padding: 86px 8px;">
        <div class="footer_logo" ><img alt="" class="footer-default" src="{{ asset('uploads/images/'.$setting->logo )}}" style="background: white;border-radius: 100%"></div>
        </div>
        <div class="col-lg-4 col-md-2" style="padding: 48px 18px;">
        <p>  {!!$setting->about_note!!}</p>
      </div>
      <div class="col-lg-2 col-md-3" style="padding: 31px 2px 0px 50px;">
        <h3>QUICK LINKS</h3>
        <ul class="footer-links">
          <li> <a href="/">Home</a></li>
          <li> <a href="{{ route('schooldetails') }}">About</a></li>
          <li> <a href="{{ route('class')}}">Classes</a></li>
          <li> <a href="{{ route('teachers') }}">Teachers</a></li>
         
        </ul>
      </div>
         <div class="col-lg-2 col-md-4" style="padding: 62px 2px;">
        
        <ul class="footer-links">
          <li> <a href="testimonials.html">Testimonials</a></li>
          <li> <a href="blog.html">Blog</a></li>
          <li> <a href="{{route('careers')}}">Career</a></li>
          <li> <a href="{{route('contacts')}}">Contact Us</a></li>
        </ul>
      </div>
      {{-- <div class="col-lg-3 col-md-4">
        <h3>Opening Hours</h3>
        <ul class="unorderList hourswrp">
          <li>Monday <span>08:00 - 02:00</span></li>
          <li>Tuesday <span>08:00 - 02:00</span></li>
          <li>Wednesday <span>08:00 - 02:00</span></li>
          <li>Thursday <span>08:00 - 02:00</span></li>
          <li>Friday <span>08:00 - 02:00</span></li>
          <li>Saturday <span>08:00 - 02:00</span></li>
          <li>Sunday <span>Closed</span></li>
        </ul>
      </div> --}}
      <div class="col-lg-3 col-md-4" style="padding: 28px;">
        <div class="footer_info">
          <h3 style="margin-top: 19px;">GET IN TOUCH</h3>
          <ul class="footer-adress">
            <li class="footer_address"> <i class="fas fa-location-dot" style="padding: 11px 2px;"></i> <span style="padding: 7px 5px 5px;"> {{$setting->address}}</span> </li>
            <li class="footer_email"> <i class="fas fa-envelope" aria-hidden="true"></i> <span><a href="mailto:{{$setting->email}}"> {{$setting->email}} </a></span> </li>
            <li class="footer_phone"> <i class="fas fa-phone"></i> <span><a href="tel:{{$setting->phone}}"> {{$setting->phone}}</a></span> </li>
          </ul>
          <div class="social-icons footer_icon">
            <ul>
              <li><a href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fab fa-youtube" aria-hidden="true"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Footer End --> 

<!--Copyright Start-->
<div class="footer-bottom text-center">
  <div class="container">
    <div class="copyright-text">{{$setting->copyright_text}}</div>
  </div>
</div>
<!--Copyright End--> 
<!-- Modal -->
<div id="successModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Modal header</h3>
    </div>
    <div class="modal-body">
        <p>One fine body…</p>
    </div>
    <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
        <button class="btn btn-primary">Save changes</button>
    </div>
</div>
<!-- Js --> 
<script src="{{ asset('assets') }}/js/jquery.min.js"></script> 
<script src="{{ asset('assets') }}/js/bootstrap.min.js"></script> 
<script src="{{ asset('assets') }}/js/popper.min.js"></script> 
<script src="{{ asset('assets') }}/rs-plugin/js/jquery.themepunch.tools.min.js"></script> 
<script src="{{ asset('assets') }}/rs-plugin/js/jquery.themepunch.revolution.min.js"></script> 
<!-- Jquery Fancybox --> 
<script src="{{ asset('assets') }}/js/jquery.fancybox.min.js"></script> 
<!-- Animate js --> 
<script src="{{ asset('assets') }}/js/animate.js"></script> 
<script>
  new WOW().init();


</script> 
<!-- WOW file --> 
<script src="{{ asset('assets') }}/js/wow.js"></script> 
<!-- general script file --> 
<script src="{{ asset('assets') }}/js/owl.carousel.js"></script> 
<script src="{{ asset('assets') }}/js/script.js"></script>

<script>
  jQuery.noConflict(); 
  jQuery('#successModal').modal('show'); 
</script>

</body>

<!-- Mirrored from entiretimes.com/html/school/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Apr 2022 09:56:50 GMT -->
</html>