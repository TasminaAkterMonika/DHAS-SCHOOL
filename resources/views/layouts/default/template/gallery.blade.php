@include('layouts.default.header')
<body>
<div class="boxed_wrapper">

<!-- Inner Heading Start -->
<div class="innerHeading-wrap">
  <div class="container">
    <h1>Gallery</h1>
  </div>
</div>
<!-- Inner Heading End --> 

<!-- Inner Content Start -->
<div class="innerContent-wrap">
  <div class="container">
    <div class="blog_inner ">
      <ul class="row unorderList">
        @foreach($gallerys as $gallery)
        <li class="col-lg-4 col-md-6">
          <div class="blog_box">
            <div class="blogImg"><img src="{{ asset('uploads')}}/images/gallery/{{ $gallery->image }}" alt="" >
              
            </div>
            <div class="path_box">
              <h3><a href="#"> {{$gallery->title}}</a></h3>
              
            </div>
          </div>
        </li>
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
        @endforeach
      </ul>
      {{-- <div class="blog-pagination text-center"> 
      <a href="#0"><i class="fa fa-angle-left" style="padding: 16px"></i></a> 
      <a href="#0" class="active">01</a>
       <a href="#0" >02</a> 
      <a href="#0">03</a> 
      <a href="#0"><i class="fa fa-angle-right" style="padding: 16px"></i></a> 
      </div> --}}
    </div>
  </div>
</div>
<!-- Inner Content Start --> 
 
  @include('layouts.default.footer')

