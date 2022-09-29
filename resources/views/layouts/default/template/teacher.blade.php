@include('layouts.default.header')
<body>
<div class="boxed_wrapper">
<!-- Inner Heading Start -->
<div class="innerHeading-wrap">
  <div class="container">
    <h1>TEACHING STAFF</h1>
  </div>
</div>
<!-- Inner Heading End --> 

<!-- Inner Content Start -->
<div class="innerContent-wrap">
  <div class="container"> 
    
    <!-- Teachers Start -->
    <div class="innerteacher-wrap">
      <div class="row">
       @foreach($teachers as $teacher)
        <div class="col-lg-2 col-md-6 ">
          <div class="single-teachers">
          
            <div class="teacherImg">
            <a href="#">
            <img src="{{ asset('uploads')}}/images/teacher/{{ $teacher->image }}" alt="Image" style="border: 2px solid;" >
            </a>
              <ul class="social-icons list-inline">
                <!-- social-icons -->
                <li class="social-facebook"> <a href=" {{$teacher->facebook}}"><i class="fab fa-facebook-f" aria-hidden="true"></i></a> </li>
                {{-- <li class="social-twitter"> <a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a> </li> --}}
                <li class="social-linkedin"> <a href="{{$teacher->linkedin}}"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a> </li>
                {{-- <li class="social-googleplus"> <a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a> </li> --}}
              </ul>
            </div>
            <div class="teachers-content"  style="padding: 4px 16px 1px 0px;">
              <h3 style="font-size: 9px;">{{$teacher->name}}</h3>
              <div class="designation"  style="font-size: 7px;">{{$teacher->designation}}</div>
               <div class="see" style="font-weight: 600;font-size: 6px"><a href="{{ route('teacher.details',$teacher->id) }}">See Details</a></div>
            </div>
          </div>
        </div>
        @endforeach
       
      </div>
    </div>
    <!-- Teachers End --> 
    
  </div>
</div>
<!-- Inner Content Start --> 
 @include('layouts.default.footer')
