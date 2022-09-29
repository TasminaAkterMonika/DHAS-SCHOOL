<div class="tp-banner-container">
  <div class="tp-banner">
    <ul>
     @foreach(DB::table('banner')->where('status',1)->get() as $banner)
      <li data-slotamount="7" data-transition="3dcurtain-horizontal" data-masterspeed="1000" data-saveperformance="on"> <img alt="" src="{{ asset('uploads') }}/images/banner/{{ $banner->image }}" data-lazyload="{{ asset('uploads') }}/images/banner/{{ $banner->image }}">
        <div class="caption lft large-title tp-resizeme slidertext2" data-x="center" data-y="170" data-speed="600" data-start="1600" style="font-size:30px" ><span> Education Bright Future </span></div>
        <div class="caption lfb large-title tp-resizeme slidertext3" data-x="center" data-y="260" data-speed="600" data-start="2200" style="padding:0px 17px; font-size:14px"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus nibh dolor, gravida faucibus dolor consectetur, <br/>
          pulvinar rhoncus risus. Fusce vel rutrum mi. Suspendisse pretium tellus eu ipsum.</div>
        <div class="caption lfb large-title tp-resizeme slidertext4" data-x="330" data-y="350" data-speed="600" data-start="2800" > <a href="{{route('admissions')}}" style="padding:14px 38px"><i class="fas fa-edit"></i> Apply Now</a> </div>
        <div class="caption lfb large-title tp-resizeme slidertext4 slidertext5" data-x="610" data-y="350" data-speed="600" data-start="3400"  > <a href="#" style="padding:10px 4px"><i class="far fa-calendar-alt"></i> Schedule a Tour</a> </div>
      </li>
      {{-- <li data-slotamount="7" data-transition="slotzoom-horizontal" data-masterspeed="1000" data-saveperformance="on"> <img alt="" src="images/dummy.png" data-lazyload="images/slider.jpg">
        <div class="caption lft large-title tp-resizeme slidertext2" data-x="center" data-y="170" data-speed="600" data-start="1600"><span> International School </span></div>
        <div class="caption lfb large-title tp-resizeme slidertext3" data-x="center" data-y="260" data-speed="600" data-start="2200"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus nibh dolor, gravida faucibus dolor consectetur, <br/>
          pulvinar rhoncus risus. Fusce vel rutrum mi. Suspendisse pretium tellus eu ipsum.</div>
        <div class="caption lfb large-title tp-resizeme slidertext4" data-x="330" data-y="350" data-speed="600" data-start="2800"> <a href="#"><i class="fas fa-edit"></i> Enroll Today</a> </div>
        <div class="caption lfb large-title tp-resizeme slidertext4 slidertext5" data-x="610" data-y="350" data-speed="600" data-start="3400"> <a href="#"><i class="far fa-calendar-alt"></i> Schedule a Tour</a> </div>
      </li> --}}
     @endforeach
    </ul>
  </div>
</div>
<!-- Revolution slider end --> 
<div class="our-course-categories-two ">
  <div class="container">
    <div class="categories_wrap">
    
      <ul class="row unorderList">
         @foreach(DB::table('shortbanner')->where('status',1)->get() as $shortbanner)
        <li class="col-lg-3 col-md-6"> 
        
          <!-- single-course-categories -->
          <div class="categories-course">
        
            <div class="item-inner">
              <div class="cours-icon"> <span class="coure-icon-inner"> <img src="{{ asset('uploads')}}/images/shortbanner/{{ $shortbanner->icon }}" alt="" style="padding: 21px;"> </span> </div>
              <div class="cours-title">
                <h4>{{$shortbanner->title}}</h4>
                <p>{!!$shortbanner->description!!}</p>
              </div>
            </div>
            
          </div>
           <!--// single-course-categories --> 
        </li>
       @endforeach
        {{-- <li class="col-lg-3 col-md-6"> 
          <!-- single-course-categories -->
          <div class="categories-course">
            <div class="item-inner">
              <div class="cours-icon"> <span class="coure-icon-inner"> <img src="images/book.png" alt=""> </span> </div>
              <div class="cours-title">
                <h4>Quality Education</h4>
                <p>Lorem ipsum dolor sit amet, adipiscing elit. Vivamus nibh dolor gravida at eleifend</p>
              </div>
            </div>
          </div>
          <!--// single-course-categories --> 
        </li> --}}
        {{-- <li class="col-lg-3 col-md-6"> 
          <!-- single-course-categories -->
          <div class="categories-course" >
            <div class="item-inner">
              <div class="cours-icon"> <span class="coure-icon-inner"> <img src="images/support.png" alt=""> </span> </div>
              <div class="cours-title">
                <h4>Life Time Support</h4>
                <p>Lorem ipsum dolor sit amet, adipiscing elit. Vivamus nibh dolor gravida at eleifend</p>
              </div>
            </div>
          </div>
          <!--// single-course-categories --> 
        </li>
        <li class="col-lg-3 col-md-6"> 
          <!-- single-course-categories -->
          <div class="categories-course">
            <div class="item-inner">
              <div class="cours-icon"> <span class="coure-icon-inner"> <img src="images/scholarship.png" alt=""> </span> </div>
              <div class="cours-title">
                <h4>Scholarship News</h4>
                <p>Lorem ipsum dolor sit amet, adipiscing elit. Vivamus nibh dolor gravida at eleifend</p>
              </div>
            </div>
          </div>
          <!--// single-course-categories --> 
        </li> --}}
      </ul>
      
    </div>
    
  </div>
</div>

<!-- School End --> 

<!-- About Start -->
<div class="about-wrap  " id="about">
  <div class="container">
    <div class="row">
      <div class="col-lg-7">
       @foreach(DB::table('picture')->where('status',1)->get() as $picture)
        <div class="aboutImg"><img src="{{ asset('uploads')}}/images/picture/{{ $picture->image }}" alt="" style="padding: 13px 0px -1px"></div>
      </div>
      @endforeach
      <div class="col-lg-5">
        <div class="about_box">
          <div class="title">
            <h1>Learning Materials</h1>
          </div>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus nibh dolor, gravida faucibus dolor consectetur, pulvinar rhoncus risus. Fusce vel rutrum mi.</p>
          <ul class="edu_list">
            <li>
               @foreach(DB::table('education')->where('status',1)->get() as $education)
              <div class="learing-wrp">
            
                <div class="edu_icon">
                 
                 <img src="{{ asset('uploads')}}/images/icon/{{ $education->icon }}" alt="" style="padding: 20px;"></div>
                 <div class="learn_info">
                  <h3>{!! $education->title!!}</h3>
                  <p>Lorem ipsum dolor sit amet, adipiscing elit. Vivamus nibh dolor gravida at eleifend</p>
                
                </div>
               
              </div>
              @endforeach
            </li>
            {{-- <li>
              <div class="learing-wrp">
                <div class="edu_icon"><img src="images/class.png" alt=""></div>
                <div class="learn_info">
                  <h3>Honors classes</h3>
                  <p>Lorem ipsum dolor sit amet, adipiscing elit. Vivamus nibh dolor gravida at eleifend</p>
                </div>
              </div>
            </li>
            <li>
              <div class="learing-wrp">
                <div class="edu_icon"><img src="images/academy.png" alt=""></div>
                <div class="learn_info">
                  <h3>Traditional academies</h3>
                  <p>Lorem ipsum dolor sit amet, adipiscing elit. Vivamus nibh dolor gravida at eleifend</p>
                </div>
              </div>
            </li> --}}
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- About End --> 

<!-- Classes Start -->
<div class="class-wrap">
  <div class="container">
    <div class="title">
      <h1> Program </h1>
    </div>   
       <ul class="owl-carousel">
       @foreach(DB::table('program')->where('status',1)->get() as $program)
      <li class="item">     
        <div class="class_box">        
          <div class="class_Img"><img src="{{ asset('uploads')}}/images/program/{{ $program->image }}" alt="">
            {{-- <div class="time_box"><span>08:00 am - 10:00 am</span></div>
          </div> --}}
          <div class="path_box">
          <h3><a href="#">{{$program->title}}</a></h3>
            {{-- <p>{{$program->description}}</p> --}}
            {{-- <div class="students_box">
              <div class="students">Students: 30</div>
              <div class="stud_fee">Fee: $150</div>
            </div> --}}
          </div>                    
        </div>
    

      </li>
           @endforeach
      {{-- <li class="item">
        <div class="class_box">
          <div class="class_Img"><img src="images/kid_game.jpg" alt="">
            <div class="time_box"><span>08:00 am - 10:00 am</span></div>
          </div>
          <div class="path_box">
            <h3><a href="#">Games Program held in a Week</a></h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus nibh dolor.</p>
            <div class="students_box">
              <div class="students">Students: 30</div>
              <div class="stud_fee">Fee: $150</div>
            </div>
          </div>
        </div>
      </li>
      <li class="item">
        <div class="class_box">
          <div class="class_Img"><img src="images/lab.jpg" alt="">
            <div class="time_box"><span>08:00 am - 10:00 am</span></div>
          </div>
          <div class="path_box">
            <h3><a href="#">Labs Programs</a></h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus nibh dolor, gravida faucibus dolor adipiscing consectetur.</p>
            <div class="students_box">
              <div class="students">Students: 30</div>
              <div class="stud_fee">Fee: $150</div>
            </div>
          </div>
        </div>
      </li> --}}
    </ul>
 
  </div>
</div>

<!-- Classes End --> 

<!-- Choice Start -->
<div class="choice-wrap">
  <div class="container">
    <div class="title">
      <h1>We Are The Best <span>Choice For Special Child</span></h1>
    </div>
   
    <div class="readmore"><a href="{{route('contacts')}}">Contact Us</a></div>
  </div>
</div>
<!-- Choice End --> 

<!-- Video Start -->
<div class="video-wrap  ">
  <div class="container">
   @foreach(DB::table('video')->where('status',1)->get() as $video)
    <div class="title center_title">
      <h1>Watch Our Video</h1>
    </div>
    <div class="video">
      <div class="playbtn"><iframe width="100%" height="100%" padding="0px"src="https://www.youtube.com/embed/tb2GGVDVST8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
    </div>
    @endforeach
  </div>
</div>
<!-- Video End --> 

<!-- Gallery Start -->
<div class="gallery-wrap ">
  <div class="container">
    <div class="row">
    
      <div class="col-lg-3">
      
        <div class="gallery_box">
          <div class="gallery_left">
            <div class="title">
              <h1>Photo Gallery</h1>
            </div>
            <p>Lorem ipsum dolor sit amet, adipiscing elit. Vivamus nibh dolor, gravida faucibus dolor consectetur.</p>
            <div class="readmore"><a href="{{ route('gallerys') }}">View All Gallery</a></div>
          </div>
        </div>
      </div>
      <div class="col-lg-9">
        <div class="row">
         @foreach(DB::table('gallery')->where('status',1)->get() as $gallery)
          <div class="col-lg-4 col-md-6">
            <div class="galleryImg"><img src="{{ asset('uploads')}}/images/gallery/{{ $gallery->image }}" alt="">
              <div class="portfolio-overley">
                <div class="content"> <a href="{{ asset('uploads')}}/images/gallery/{{ $gallery->image }}" class="fancybox image-link" data-fancybox="images" title="Image Caption Here"><i class="fas fa-search-plus"></i></a> </div>
              </div>
            </div>
          </div>
          {{-- <div class="col-lg-4 col-md-6">
            <div class="galleryImg"><img src="images/gallery-2.jpg" alt="">
              <div class="portfolio-overley">
                <div class="content"> <a href="images/gallery-2.jpg" class="fancybox image-link" data-fancybox="images" title="Image Caption Here"><i class="fas fa-search-plus"></i></a> </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="galleryImg"><img src="images/gallery-3.jpg" alt="">
              <div class="portfolio-overley">
                <div class="content"> <a href="images/gallery-3.jpg" class="fancybox image-link" data-fancybox="images" title="Image Caption Here"><i class="fas fa-search-plus"></i></a> </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="galleryImg"><img src="images/gallery-4.jpg" alt="">
              <div class="portfolio-overley">
                <div class="content"> <a href="images/gallery-4.jpg" class="fancybox image-link" data-fancybox="images" title="Image Caption Here"><i class="fas fa-search-plus"></i></a> </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="galleryImg"><img src="images/gallery-5.jpg" alt="">
              <div class="portfolio-overley">
                <div class="content"> <a href="images/gallery-5.jpg" class="fancybox image-link" data-fancybox="images" title="Image Caption Here"><i class="fas fa-search-plus"></i></a> </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="galleryImg"><img src="images/gallery-6.jpg" alt="">
              <div class="portfolio-overley">
                <div class="content"> <a href="images/gallery-6.jpg" class="fancybox image-link" data-fancybox="images" title="Image Caption Here"><i class="fas fa-search-plus"></i></a> </div>
              </div>
            </div>
          </div> --}}
          @endforeach

        </div>
      </div>
    </div>
  </div>
</div>
<!-- Gallery End --> 

<!-- Testimonials Start -->
<div class="testimonials-wrap ">
  <div class="container">
    <div class="title">
      <p>Testimoinials</p>
      <h1> What Parents Say </h1>
    </div>
     
    <ul class="owl-carousel testimonials_list unorderList">
          @foreach(DB::table('testimonial')->where('status',1)->get() as $testimonial)

      <li class="item">
        <div class="testimonials_sec">
         
          <div class="client_box">
            <div class="clientImg"><img alt="" src="{{ asset('uploads')}}/images/testimonial/{{ $testimonial->image }}"></div>
            {{-- <ul class="unorderList starWrp">
              <li><i class="{{$testimonial->icon}}"></i></li>
              <li><i class="{{$testimonial->icon}}"></i></li>
              <li><i class="{{$testimonial->icon}}"></i></li>
              <li><i class="{{$testimonial->icon}}"></i></li>
              <li><i class="{{$testimonial->icon}}"></i></li>
            </ul>
          </div>
          <p>{{$testimonial->description}}</p> --}}
          <h3>{!!$testimonial->name!!}<span>{!!$testimonial->work!!}</span></h3>
          <div class="quote_icon"><a href="#"><i class="fas fa-play"></i></a></div>
        
        </div>
      
      </li>
      {{-- <li class="item">
        <div class="testimonials_sec">
          <div class="client_box">
            <div class="clientImg"><img alt="" src="images/comment-img-2.jpg"></div>
            <ul class="unorderList starWrp">
              <li><i class="fas fa-star"></i></li>
              <li><i class="fas fa-star"></i></li>
              <li><i class="fas fa-star"></i></li>
              <li><i class="fas fa-star"></i></li>
              <li><i class="fas fa-star"></i></li>
            </ul>
          </div>
          <p>Lorem ipsum dolor sit amet, consectetur elit. Phasellus porttitor leo id tortor cursus, a gravida sem feugiat. Maecenas nisl libero, lobortis id hendrerit sed, fermentum ut nunc. Duis condimentum tincidunt posuere. </p>
          <h3>David Malan <span>Aliquam sodales</span></h3>
          <div class="quote_icon"><i class="fas fa-quote-left"></i></div>
        </div>
      </li>
      <li class="item">
        <div class="testimonials_sec">
          <div class="client_box">
            <div class="clientImg"><img alt="" src="images/comment-img-3.jpg"></div>
            <ul class="unorderList starWrp">
              <li><i class="fas fa-star"></i></li>
              <li><i class="fas fa-star"></i></li>
              <li><i class="fas fa-star"></i></li>
              <li><i class="fas fa-star"></i></li>
              <li><i class="fas fa-star"></i></li>
            </ul>
          </div>
          <p>Lorem ipsum dolor sit amet, consectetur elit. Phasellus porttitor leo id tortor cursus, a gravida sem feugiat. Maecenas nisl libero, lobortis id hendrerit sed, fermentum ut nunc. Duis condimentum tincidunt posuere.</p>
          <h3>David Malan <span>Aliquam sodales</span></h3>
          <div class="quote_icon"><i class="fas fa-quote-left"></i></div>
        </div>
      </li>
      <li class="item">
        <div class="testimonials_sec">
          <div class="client_box">
            <div class="clientImg"><img alt="" src="images/comment-img-1.jpg"></div>
            <ul class="unorderList starWrp">
              <li><i class="fas fa-star"></i></li>
              <li><i class="fas fa-star"></i></li>
              <li><i class="fas fa-star"></i></li>
              <li><i class="fas fa-star"></i></li>
              <li><i class="fas fa-star"></i></li>
            </ul>
          </div>
          <p>Lorem ipsum dolor sit amet, consectetur elit. Phasellus porttitor leo id tortor cursus, a gravida sem feugiat. Maecenas nisl libero, lobortis id hendrerit sed, fermentum ut nunc. Duis condimentum tincidunt posuere.</p>
          <h3>David Malan <span>Aliquam sodales</span></h3>
          <div class="quote_icon"><i class="fas fa-quote-left"></i></div>
        </div>
      </li> --}}
       @endforeach
    </ul>
  </div>
</div>
<!-- Testimonials End --> 


<!-- Teacher Start -->
<section class="teachers-area-three teacher-wrap pt-100 pb-70  ">
  <div class="container">
    <div class="title center_title">
      <h1>Our Teachers</h1>
    </div>
     
    <div class="row">
   
     @foreach(DB::table('teacher')->where('status',1)->get() as $teacher)
      <div class="col-lg-2 col-sm-6">
        <div class="single-teachers">
            
          <div class="teacherImg"> <img src="{{ asset('uploads')}}/images/teacher/{{ $teacher->image }}" alt="Image" style=" border: 2px solid; width: auto">
            <ul class="social-icons list-inline">
              <!-- social-icons -->
              <li class="social-facebook"> <a href="{{$teacher->facebook}}"><i class="fab fa-facebook-f" aria-hidden="true"></i></a> </li>
            
              <li class="social-linkedin"> <a href="{{$teacher->linkedin}}"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a> </li>
             
            </ul>
          </div>
          <div class="teachers-content" style="padding: 4px 16px 1px 0px;">
            <h3 style="font-size: 9px;font-weight: 600;margin:0;">{{$teacher->name}}</h3>
            <div class="designation" style="font-size: 7px;">{{$teacher->designation}}</div>
             <div class="see" style="font-weight: 600;font-size: 6px"><a href="{{ route('teacher.details',$teacher->id) }}">See Details</a></div>
          </div>
      
         
         </div>
      </div>
      {{-- <div class="col-lg-3 col-sm-6">
        <div class="single-teachers">
          <div class="teacherImg"> <img src="images/teachers02.jpg" alt="Image">
            <ul class="social-icons list-inline">
              <!-- social-icons -->
              <li class="social-facebook"> <a href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a> </li>
              <li class="social-twitter"> <a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a> </li>
              <li class="social-linkedin"> <a href="#"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a> </li>
              <li class="social-googleplus"> <a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a> </li>
            </ul>
          </div>
          <div class="teachers-content">
            <h3>Chris Miller</h3>
            <div class="designation">Mathematic</div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6">
        <div class="single-teachers">
          <div class="teacherImg"> <img src="images/teachers03.jpg" alt="Image">
            <ul class="social-icons list-inline">
              <!-- social-icons -->
              <li class="social-facebook"> <a href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a> </li>
              <li class="social-twitter"> <a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a> </li>
              <li class="social-linkedin"> <a href="#"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a> </li>
              <li class="social-googleplus"> <a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a> </li>
            </ul>
          </div>
          <div class="teachers-content">
            <h3>Jesica Matt</h3>
            <div class="designation">English Teacher</div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6">
        <div class="single-teachers">
          <div class="teacherImg"> <img src="images/teachers04.jpg" alt="Image">
            <ul class="social-icons list-inline">
              <!-- social-icons -->
              <li class="social-facebook"> <a href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a> </li>
              <li class="social-twitter"> <a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a> </li>
              <li class="social-linkedin"> <a href="#"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a> </li>
              <li class="social-googleplus"> <a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a> </li>
            </ul>
          </div>
          <div class="teachers-content">
            <h3>Lena Bodie</h3>
            <div class="designation">Science Teacher</div>
          </div>
        </div>
      </div> --}}
          @endforeach
      
    </div>
  </div>
</section>

<!-- Teacher Start --> 

<!-- Blog Start -->
<div class="blog-wrap flight-wrap ">
  <div class="container">
    <div class="title">
      <h1> Our Blog </h1>
    </div>
    <ul class="row unorderList">
     @foreach(DB::table('blog')->where('status',1)->get() as $blog)
      <li class="col-lg-4">
      
        <div class="blog_box" >
        
          <div class="blogImg" ><img src="{{ asset('uploads')}}/images/blog/{{ $blog->image }}" alt=""  style= "padding: 4px 27px 4px 28px">
            {{-- <div class="time_box"><span>08:00 am - 10:00 am</span></div> --}}
          </div>
          <div class="path_box">
            <h3><a href="#">{{$blog->title}}</a></h3>
            <p>{!!$blog->short_descripton!!}</p>
          </div>
        
        </div>
         
      </li>
      {{-- <li class="col-lg-4">
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
      <li class="col-lg-4">
        <div class="blog_box">
          <div class="blogImg"><img src="images/blog3.jpg" alt="">
            <div class="time_box"><span>08:00 am - 10:00 am</span></div>
          </div>
          <div class="path_box">
            <h3><a href="#">Labs Programs</a></h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus nibh dolor, gravida faucibus dolor consectetur.</p>
          </div>
        </div>
      </li> --}}
       @endforeach
    </ul>
  </div>
</div>
<!-- Blog End --> 


