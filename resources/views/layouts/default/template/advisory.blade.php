@include('layouts.default.header')
<body>
<div class="boxed_wrapper">
<!-- Inner Heading Start -->
<div class="innerHeading-wrap">
  <div class="container">
    <h1>Advisory Committee</h1>
  </div>
</div>
<div class="innerContent-wrap">
  <div class="container"> 
    
    <!-- Teachers Start -->
    <div class="innerteacher-wrap">
      <div class="row">
       @foreach($advisorys as $advisory)
        <div class="col-lg-2 col-md-6 ">
          <div class="single-teachers">
          
            <div class="teacherImg">
            <a href="#">
            <img src="{{ asset('uploads')}}/images/advisory/{{ $advisory->image }}" alt="Image"  style="border: 2px solid;">
            </a>
             
            </div>
            <div class="teachers-content"  style="padding: 4px 16px 1px 0px;">
              <h3  style="font-size: 9px;">{{$advisory->name}}</h3>
              <div class="designation"  style="font-size: 7px;">{{$advisory->designation}}</div>
              
            </div>
          </div>
        </div>
        @endforeach
       
      </div>
    </div>
    <!-- Teachers End --> 
    
  </div>
</div>



  @include('layouts.default.footer')