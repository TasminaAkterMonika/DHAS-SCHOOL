@include('layouts.default.header')
<body>
<div class="boxed_wrapper">


<!-- Inner Heading Start -->
<div class="innerHeading-wrap">
  <div class="container">
    <h1>Class</h1>
  </div>
</div>
<!-- Inner Heading End --> 

<!-- Inner Content Start -->
<div class="innerContent-wrap">
  <div class="container">
    <div class="blog_inner ">
      <ul class="row unorderList">
        @foreach($class_list as $row)
        <li class="col-lg-4 col-md-6">
           
          <div class="blog_box">
          
            <div class="blogImg"><img src="{{ asset('uploads')}}/images/class/{{ $row->image }}" alt="">
              <div class="time_box" style="padding: 13px 40px;bottom: 126px;right: 91px; "><a href="{{ route('student.list', $row->id) }}" style="color:white"><span>{{$row->class}}</a></span></div>
            </div>
            {{-- <div class="path_box">
              <h3><a href="#">Education Programs</a></h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus nibh dolor, gravida faucibus dolor consectetur.</p>
            </div> --}}
           
          </div>
          
        </li>
         @endforeach
        {{-- <li class="col-lg-4 col-md-6">
          <div class="blog_box">
            <div class="blogImg"><img src="images/blog2.jpg" alt="">
              <div class="time_box"><span>08:00 am - 10:00 am</span></div>
            </div>
            <div class="path_box">
              <h3><a href="#">Games Program</a></h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus nibh dolor, gravida faucibus dolor consectetur.</p>
            </div>
          </div>
        </li>
        <li class="col-lg-4 col-md-6">
          <div class="blog_box">
            <div class="blogImg"><img src="images/blog3.jpg" alt="">
              <div class="time_box"><span>08:00 am - 10:00 am</span></div>
            </div>
            <div class="path_box">
              <h3><a href="#">Labs Programs</a></h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus nibh dolor, gravida faucibus dolor consectetur.</p>
            </div>
          </div>
        </li>
        <li class="col-lg-4 col-md-6">
          <div class="blog_box">
            <div class="blogImg"><img src="images/blog3.jpg" alt="">
              <div class="time_box"><span>08:00 am - 10:00 am</span></div>
            </div>
            <div class="path_box">
              <h3><a href="#">Labs Programs</a></h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus nibh dolor, gravida faucibus dolor consectetur.</p>
            </div>
          </div>
        </li>
        <li class="col-lg-4 col-md-6">
          <div class="blog_box">
            <div class="blogImg"><img src="images/blog1.jpg" alt="">
              <div class="time_box"><span>08:00 am - 10:00 am</span></div>
            </div>
            <div class="path_box">
              <h3><a href="#">Education Programs</a></h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus nibh dolor, gravida faucibus dolor consectetur.</p>
            </div>
          </div>
        </li>
        <li class="col-lg-4 col-md-6">
          <div class="blog_box">
            <div class="blogImg"><img src="images/blog2.jpg" alt="">
              <div class="time_box"><span>08:00 am - 10:00 am</span></div>
            </div>
            <div class="path_box">
              <h3><a href="#">Games Program</a></h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus nibh dolor, gravida faucibus dolor consectetur.</p>
            </div>
          </div>
        </li> --}}
      </ul>
      
    </div>
  </div>
</div>
<!-- Inner Content Start --> 
 @include('layouts.default.footer')