@include('layouts.default.header')
<body>
<div class="boxed_wrapper">
<!-- Inner Heading Start -->
<div class="innerHeading-wrap">
  <div class="container">
    <h1>Upcomming Events</h1>
  </div>
</div>
<!-- Inner Heading End --> 

<!-- Inner Content Start -->
<div class="innerContent-wrap">
  <div class="container">
    <div class="blog_inner bloggridWrp blog_listWrp">
      <div class="row">
        <div class="col-lg-12">
          <ul class="unorderList">
            <li>
              <div class="blog_box">
                <div class="row">
                 @foreach($upevents as $upevent)
                  {{-- <div class="col-lg-5"> --}}
                    {{-- <div class="blogImg"><img src="{{ asset('uploads')}}/images/event/{{ $event->image }}" alt="" style="width: 314px"> --}}
                      {{-- <div class="time_box"><span>{{$upevent->date}}</span></div>
                    </div> --}}
                  </div>
                  <div class="col-lg-12">
                    <div class="path_box">
                    <div class="time_box" style="border-radius: 6px 6px 6px 6px; padding: 8px 134px;  right: 20px;  font-size: 16px; "><span>{{$upevent->date}}</span></div>
                      <h3><a href="#">{!!$upevent->title!!}</a></h3>
                      {{-- <p>{!!$event->description!!}</p> --}}
                      {{-- <div class="readmore"><a href="#">Read More</a></div> --}}
                    </div>
                  </div>
                  @endforeach
                </div>
              </div>
            </li>
            {{-- <li>
              <div class="blog_box">
                <div class="row">
                  <div class="col-lg-5">
                    <div class="blogImg"><img src="images/blog5.jpg" alt="">
                      <div class="time_box"><span>08:00 am - 10:00 am</span></div>
                    </div>
                  </div>
                  <div class="col-lg-7">
                    <div class="path_box">
                      <h3><a href="#">Education Programs</a></h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent diam massa, commodo sed purus eu, aliquet.</p>
                      <div class="readmore"><a href="#">Read More</a></div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li>
              <div class="blog_box">
                <div class="row">
                  <div class="col-lg-5">
                    <div class="blogImg"><img src="images/blog7.jpg" alt="">
                      <div class="time_box"><span>08:00 am - 10:00 am</span></div>
                    </div>
                  </div>
                  <div class="col-lg-7">
                    <div class="path_box">
                      <h3><a href="#">Education Programs</a></h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent diam massa, commodo sed purus eu, aliquet.</p>
                      <div class="readmore"><a href="#">Read More</a></div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li>
              <div class="blog_box">
                <div class="row">
                  <div class="col-lg-5">
                    <div class="blogImg"><img src="images/blog8.jpg" alt="">
                      <div class="time_box"><span>08:00 am - 10:00 am</span></div>
                    </div>
                  </div>
                  <div class="col-lg-7">
                    <div class="path_box">
                      <h3><a href="#">Education Programs</a></h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent diam massa, commodo sed purus eu, aliquet.</p>
                      <div class="readmore"><a href="#">Read More</a></div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li>
              <div class="blog_box">
                <div class="row">
                  <div class="col-lg-5">
                    <div class="blogImg"><img src="images/blog9.jpg" alt="">
                      <div class="time_box"><span>08:00 am - 10:00 am</span></div>
                    </div>
                  </div>
                  <div class="col-lg-7">
                    <div class="path_box">
                      <h3><a href="#">Education Programs</a></h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent diam massa, commodo sed purus eu, aliquet.</p>
                      <div class="readmore"><a href="#">Read More</a></div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li>
              <div class="blog_box">
                <div class="row">
                  <div class="col-lg-5">
                    <div class="blogImg"><img src="images/blog10.jpg" alt="">
                      <div class="time_box"><span>08:00 am - 10:00 am</span></div>
                    </div>
                  </div>
                  <div class="col-lg-7">
                    <div class="path_box">
                      <h3><a href="#">Education Programs</a></h3>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent diam massa, commodo sed purus eu, aliquet.</p>
                      <div class="readmore"><a href="#">Read More</a></div>
                    </div>
                  </div>
                </div>
              </div>
            </li> --}}
          </ul>
          {{-- <div class="blog-pagination text-center"> 
          <a href="#0"><i class="fas fa-angle-left" style="padding: 16px"></i></a>
           <a href="#0" class="active">01</a>
            <a href="#0">02</a>
            <a href="#0">03</a>
             <a href="#0"><i class="fas fa-angle-right" style="padding: 16px"></i></a>
              </div> --}}
        </div>
       
      </div>
    </div>
  </div>
</div>
<!-- Inner Content Start --> 
  @include('layouts.default.footer')